@extends('dashboard')

@section('title', 'FRS')

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
                <span class="badge text-bg-light shadow-sm">{{ auth()->user()->nama }}</span>
            </div>
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
            <div class="mt-4 text-center">
                <form class="form-inline" id="input">
                    @csrf
                    <div class="form-floating">
                        <select class="form-select" id="matakuliah" name="matakuliah">
                            <option value="" disabled>Daftar Mata Kuliah</option>
                            @foreach($kelas as $k)
                            @if($k->kelas == 'I')
                            <option value="{{ $k->kodeMK }}/{{ $k->kelas }}">
                                {{ $k->namaMataKuliah }} [IUP] - {{ $peserta->where('kodeMK', $k->kodeMK)->where('kelas', $k->kelas)->count() }}/{{ $k->kapasitas }}
                            </option>
                            @else
                            <option value="{{ $k->kodeMK }}/{{ $k->kelas }}">
                                {{ $k->namaMataKuliah }} [{{ $k->kelas }}] - {{ $peserta->where('kodeMK', $k->kodeMK)->where('kelas', $k->kelas)->count() }}/{{ $k->kapasitas }}
                            </option>
                            @endif
                            @endforeach
                        </select>
                        <label for="matakuliah" class="form-label">Daftar Mata Kuliah</label>
                    </div>
                </form>
                <div class="mt-4">
                    <button class="btn btn-light shadow-sm me-2" type="button">Ambil</button>
                    <button class="btn btn-light shadow-sm" type="button">Peserta</button>
                </div>
            </div>
            <div class="mt-4">
                <table class="table table-responsive table-hover table-striped table-bordered table-fixed text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th width="100px">Kode</th>
                            <th width="350px">Mata Kuliah</th>
                            <th width="50px">SKS</th>
                            <th width="50px">Kelas</th>
                            <th width="350px">Dosen</th>
                            <th width="50px">Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($frs as $f )
                        @if($f->NRP == auth()->user()->NRP)
                        <tr>
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
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
