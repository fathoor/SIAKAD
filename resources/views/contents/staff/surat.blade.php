@extends('dashboard')

@section('title', 'Surat Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content" style="max-width: 1200px;">
            {{-- Isi disini --}}
            <div class="container mb-2">
                <h2 class="fw-bold">Surat Mahasiswa</h2>
            </div>
            <form class="mb-4" action="/staff/surat" method="POST">
                @csrf
                <div class="form-floating">
                    <select class="form-select" id="type" name="type" onchange="this.form.submit()">
                        <option value="" disabled>Tipe Surat</option>
                        <option value="Surat Keterangan Aktif" {{ $type == 'Surat Keterangan Aktif' ? 'selected' : '' }}>Surat Keterangan Aktif</option>
                        <option value="Surat Cuti" {{ $type == 'Surat Cuti' ? 'selected' : '' }}>Surat Cuti</option>
                        <option value="Surat Mengundurkan Diri" {{ $type == 'Surat Mengundurkan Diri' ? 'selected' : '' }}>Surat Mengundurkan Diri</option>
                    </select>
                    <label for="type" class="form-label">Tipe Surat</label>
                </div>
            </form>
            <div class="mt-2">
                <table class="table table-hover table-striped table-bordered align-middle text-center">
                    @switch($type)
                        @case('Surat Keterangan Aktif')
                            <thead>
                                <tr class="table-secondary">
                                    <th width="150px">NRP</th>
                                    <th width="300px">Nama Mahasiswa</th>
                                    <th width="100px">Periode</th>
                                    <th width="200px">Pengajuan</th>
                                    <th width="200px">Keperluan</th>
                                    <th width="100px">Status</th>
                                    <th width="100px">Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surat as $s)
                                <tr>
                                    <td>{{ $s->suratAktifNRP }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->periodeAktif }}</td>
                                    <td>{{ Carbon::parse($s->tanggalAjuan)->locale('id')->isoFormat('DD MMMM YYYY') }}</td>
                                    <td>{{ $s->keperluanSurat }}</td>
                                    @switch($s->status)
                                        @case(1)
                                            <td><span class="badge text-bg-success shadow-sm">Disetujui</span></td>
                                            @break
                                        @case(0)
                                            <td><span class="badge text-bg-danger shadow-sm">Menunggu</span></td>
                                            @break
                                    @endswitch
                                    <td>
                                        <form action="/staff/surat/verifikasi" method="POST">
                                            @csrf
                                            <input type="hidden" name="type" value="Surat Keterangan Aktif">
                                            <input type="hidden" name="tanggalAktif" value="{{ $s->tanggalAjuan }}">
                                            <input type="hidden" name="nrpAktif" value="{{ $s->suratAktifNRP }}">
                                            <button class="btn btn-sm btn-success shadow-sm me-2" type="submit" name="accept" value="1">
                                                <i class="bi bi-check-lg"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger shadow-sm" type="submit" name="accept" value="0">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @break
                        @case('Surat Cuti')
                            <thead>
                                <tr class="table-secondary">
                                    <th width="150px">NRP</th>
                                    <th width="300px">Nama Mahasiswa</th>
                                    <th width="100px">Periode</th>
                                    <th width="100px">Semester</th>
                                    <th width="200px">Pengajuan</th>
                                    <th width="200px">Alasan</th>
                                    <th width="100px">Status</th>
                                    <th width="100px">Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surat as $s)
                                <tr>
                                    <td>{{ $s->suratCutiNRP }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->periodeCuti }}</td>
                                    <td>{{ $s->jumlahSemesterCuti }}</td>
                                    <td>{{ Carbon::parse($s->tanggalAjuan)->locale('id')->isoFormat('DD MMMM YYYY') }}</td>
                                    <td>{{ $s->alasanCuti }}</td>
                                    @switch($s->status)
                                        @case(1)
                                            <td><span class="badge text-bg-success shadow-sm">Disetujui</span></td>
                                            @break
                                        @case(0)
                                            <td><span class="badge text-bg-danger shadow-sm">Menunggu</span></td>
                                            @break
                                    @endswitch
                                    <td>
                                        <form action="/staff/surat/verifikasi" method="POST">
                                            @csrf
                                            <input type="hidden" name="type" value="Surat Cuti">
                                            <input type="hidden" name="tanggalCuti" value="{{ $s->tanggalAjuan }}">
                                            <input type="hidden" name="nrpCuti" value="{{ $s->suratCutiNRP }}">
                                            <button class="btn btn-sm btn-success shadow-sm me-2" type="submit" name="accept" value="1">
                                                <i class="bi bi-check-lg"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger shadow-sm" type="submit" name="accept" value="0">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @break
                        @case('Surat Mengundurkan Diri')
                            <thead>
                                <tr class="table-secondary">
                                    <th width="150px">NRP</th>
                                    <th width="300px">Nama Mahasiswa</th>
                                    <th width="100px">Periode</th>
                                    <th width="200px">Pengajuan</th>
                                    <th width="200px">Alasan</th>
                                    <th width="100px">Status</th>
                                    <th width="100px">Verifikasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($surat as $s)
                                <tr>
                                    <td>{{ $s->suratUndurDiriNRP }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->periodeMundur }}</td>
                                    <td>{{ Carbon::parse($s->tanggalAjuan)->locale('id')->isoFormat('DD MMMM YYYY') }}</td>
                                    <td>{{ $s->alasanMundur }}</td>
                                    @switch($s->status)
                                        @case(1)
                                            <td><span class="badge text-bg-success shadow-sm">Disetujui</span></td>
                                            @break
                                        @case(0)
                                            <td><span class="badge text-bg-danger shadow-sm">Menunggu</span></td>
                                            @break
                                    @endswitch
                                    <td>
                                        <form action="/staff/surat/verifikasi" method="POST">
                                            @csrf
                                            <input type="hidden" name="type" value="Surat Mengundurkan Diri">
                                            <input type="hidden" name="tanggalUndurDiri" value="{{ $s->tanggalAjuan }}">
                                            <input type="hidden" name="nrpUndurDiri" value="{{ $s->suratUndurDiriNRP }}">
                                            <button class="btn btn-sm btn-success shadow-sm me-2" type="submit" name="accept" value="1">
                                                <i class="bi bi-check-lg"></i>
                                            </button>
                                            <button class="btn btn-sm btn-danger shadow-sm" type="submit" name="accept" value="0">
                                                <i class="bi bi-x-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            @break
                    @endswitch
                </table>
                {{ $surat->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
</div>

@endsection
