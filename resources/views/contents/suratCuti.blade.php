@extends('dashboard')

@section('title', 'Surat Cuti')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row mb-4">
                <h2 class="fw-bold">Surat Cuti</h2>
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
                        <label for="namaMahasiswa" class="col-2 col-form-label">Nama</label>
                        <label for="namaMahasiswa" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="nama" name="nama" class="form-control bg-transparent border-white" value="{{ auth()->user()->nama }}" disabled>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row mb-5">
                <a href="/suratCuti/add" class="btn btn-primary"> + Ajukan Surat</a>
            </div>
            <table class="table table-striped text-center">
                <tr>
                    <th>No</th>
                    <th>Periode</th>
                    <th>Jumlah Semester</th>
                    <th>Diajukan</th>
                    <th>Alasan</th>
                    <th>Status</th>
                    <th>Cetak</th> {{-- Ini tolong dikasi tombol aja --}}
                </tr>
                @foreach($cuti as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->periodeCuti }}</td>
                    <td>{{ $c->jumlahSemesterCuti }}</td>
                    <td>{{ $c->tanggalAjuan }}</td>
                    <td>{{ $c->alasanCuti }}</td>
                    @if($c->status == true)
                    <td>Disetujui</td>
                    @else
                    <td>Menunggu</td>
                    @endif
                    <td>Cetak</td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
</div>

@endsection