@extends('dashboard')

@section('title', 'Surat Keterangan Aktif')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row mb-4">
                <h2 class="fw-bold">Surat Keterangan Aktif</h2>
            </div>
            <div class="row mb-4">
                <form class="form-inline" id="input" action="">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="NRP" class="col-2 col-form-label">NRP</label>
                        <label for="NRP" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-white" value="{{ auth()->user()->NRP }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="nama" class="col-2 col-form-label">Nama</label>
                        <label for="nama" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="nama" name="nama" class="form-control bg-transparent border-white" value="{{ auth()->user()->nama }}" disabled>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mb-5">
                <a href="/suratAktif/add" class="btn btn-primary"> + Ajukan Surat</a>
            </div>
            <table class="table table-striped text-center">
                <tr>
                    <th>No</th>
                    <th>Periode</th>
                    <th>Diajukan</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    <th>Cetak</th> {{-- Ini tolong dikasi tombol aja --}}
                </tr>
                @foreach($aktif as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->periodeAktif }}</td>
                    <td>{{ $a->tanggalAjuan }}</td>
                    <td>{{ $a->keperluanSurat }}</td>
                    @if($a->status == true)
                    <td>Disetujui</td>
                    @else
                    <td>Ditolak</td>
                    @endif
                    <td>Cetak</td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
</div>

@endsection