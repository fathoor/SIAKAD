@extends('dashboard')

@section('title', 'Formulir Rencana Studi')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container mb-2">
                <h2 class="fw-bold">Formulir Rencana Studi</h2>
                <span class="badge text-bg-light shadow-sm">Pengisian: {{ Carbon::parse($awal)->locale('id')->isoFormat('DD MMMM YYYY') }} s/d {{ Carbon::parse($akhir)->locale('id')->isoFormat('DD MMMM YYYY') }}</span>
            </div>
            @if (session('message'))
                <div class="alert alert-danger" role="alert">
                     {{ session('message') }}
                </div>
            @elseif (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <form class="mb-4" action="/frs" method="POST">
                @csrf
                <div class="form-floating">
                    <select class="form-select" id="periode" name="periode" onchange="this.form.submit()">
                        <option value="" disabled>Periode</option>
                        <option value="Genap 2021" {{ $periode == 'Genap 2021' ? 'selected' : '' }}>Genap 2021</option>
                        <option value="Ganjil 2021" {{ $periode == 'Ganjil 2021' ? 'selected' : '' }}>Ganjil 2021</option>
                        <option value="Genap 2020" {{ $periode == 'Genap 2020' ? 'selected' : '' }}>Genap 2020</option>
                        <option value="Ganjil 2020" {{ $periode == 'Ganjil 2020' ? 'selected' : '' }}>Ganjil 2020</option>
                    </select>
                    <label for="periode" class="form-label">Periode</label>
                </div>
            </form>
            <div class="card text-bg-light">
                <div class="card-body">
                    <table class="table table-borderless fw-bold align-middle text-start small table-responsive-sm" style="box-shadow: 0 0; margin-bottom: -0.1em">
                        <tbody>
                            <tr>
                                <td width="150px">NRP</td>
                                <td width="10px">:</td>
                                <td width="350px">{{ auth()->user()->NRP }}</td>
                                <td width="150px">Periode</td>
                                <td width="10px">:</td>
                                <td width="350px">{{ $periode }}</td>
                            </tr>
                            <tr>
                                <td width="150px">Nama Lengkap</td>
                                <td width="10px">:</td>
                                <td width="350px">{{ auth()->user()->nama }}</td>
                                <td width="150px">Dosen Wali</td>
                                <td width="10px">:</td>
                                <td width="350px">{{ $mahasiswa->nama }}</td>
                            </tr>
                            <tr>
                                <td width="150px">IPK / IPS</td>
                                <td width="10px">:</td>
                                <td width="350px">{{ number_format($ipk, 2) }} / {{ number_format($ips, 2) }}</td>
                                <td width="150px">Batas / Sisa</td>
                                <td width="10px">:</td>
                                <td width="350px">24 / {{ 24 - $sks }} SKS</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="mt-3">
                @if($check == true)
                <span class="badge text-bg-success shadow-sm">Masa FRS</span>
                @else
                <span class="badge text-bg-danger shadow-sm">Belum Masa FRS</span>
                @endif
            </div>
            <div class="mt-3 text-center">
                <form action="/frs/store" id="store" method="POST">
                    @csrf
                    <div class="form-floating">
                        <select class="form-select" id="matakuliah" name="matakuliah">
                            <option value="" disabled>Daftar Mata Kuliah</option>
                            @foreach($kelas as $k)
                            @if($k->matkulAtas == true)
                            <option value="{{ $k->kodeMK }}/{{ $k->kelas }}/{{ $k->dosenNRP }}/1/{{ $periode }}">
                                {{ $k->namaMataKuliah }} [{{ $k->kelas }}] - {{ $peserta->where('kodeMK', $k->kodeMK)->where('kelas', $k->kelas)->where('periode', $periode)->count() }}/{{ $k->kapasitas }}
                            </option>
                            @else
                            <option value="{{ $k->kodeMK }}/{{ $k->kelas }}/{{ $k->dosenNRP }}/0/{{ $periode }}">
                                {{ $k->namaMataKuliah }} [{{ $k->kelas }}] - {{ $peserta->where('kodeMK', $k->kodeMK)->where('kelas', $k->kelas)->where('periode', $periode)->count() }}/{{ $k->kapasitas }}
                            </option>
                            @endif
                            @endforeach
                        </select>
                        <label for="matakuliah" class="form-label">Daftar Mata Kuliah</label>
                    </div>
                </form>
                <div class="mt-4">
                    @if($check == true)
                    <button class="btn btn-light shadow-sm me-2" type="submit" form="store" name="action" value="ambil"><i class="bi bi-inboxes-fill me-2"></i>Ambil</button>
                    <button class="btn btn-light shadow-sm" type="submit" form="store" name="action" value="peserta"><i class="bi bi-people-fill me-2"></i>Peserta</button>
                    @elseif($check != true && $periode == 'Genap 2021')
                    <button class="btn btn-light shadow-sm me-2" type="submit" disabled><i class="bi bi-inboxes-fill me-2"></i>Ambil</button>
                    <button class="btn btn-light shadow-sm" type="submit" form="store" name="action" value="peserta"><i class="bi bi-people-fill me-2"></i>Peserta</button>
                    @else
                    <button class="btn btn-light shadow-sm me-2" type="submit" disabled><i class="bi bi-inboxes-fill me-2"></i>Ambil</button>
                    <button class="btn btn-light shadow-sm" type="submit" disabled><i class="bi bi-people-fill me-2"></i>Peserta</button>
                    @endif
                </div>
            </div>
            <div class="mt-4 text-center">
                <div class="mb-4">
                    @if($status->status == false)
                    <div class="badge text-bg-danger shadow-sm">FRS Belum Disetujui</div>
                    @else
                    <div class="badge text-bg-success shadow-sm">FRS Telah Disetujui</div>
                    @endif
                </div>
                <table class="table table-responsive table-hover table-striped table-bordered table-fixed text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th width="100px">Kode</th>
                            <th width="350px">Mata Kuliah</th>
                            <th width="50px">SKS</th>
                            <th width="50px">Kelas</th>
                            <th width="400px">Dosen</th>
                            <th width="50px">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($frs as $f )
                        @if($f->NRP == auth()->user()->NRP)
                        <tr class="{{ $f->matkulAtas == true ? 'table-warning' : '' }}">
                            <td>{{ $f->kodeMataKuliah }}</td>
                            <td>{{ $f->namaMataKuliah }}</td>
                            <td>{{ $f->sks }}</td>
                            <td>{{ $f->kelas }}</td>
                            <td>{{ $f->dosenNama }}</td>
                            <td>
                                @if($f->nilai == 0)
                                *
                                @elseif(0 < $f->nilai && $f->nilai <= 40)
                                E
                                @elseif(40 < $f->nilai && $f->nilai <= 55)
                                D
                                @elseif(55 < $f->nilai && $f->nilai <= 60)
                                C
                                @elseif(60 < $f->nilai && $f->nilai <= 65)
                                BC
                                @elseif(65 < $f->nilai && $f->nilai <= 75)
                                B
                                @elseif(75 < $f->nilai && $f->nilai <= 85)
                                AB
                                @elseif(85 < $f->nilai && $f->nilai <= 100)
                                A
                                @endif
                            </td>
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr class="table-secondary">
                            <th colspan="2">Total SKS</th>
                            <th>{{ $sks }}</th>
                            <th colspan="3"></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
