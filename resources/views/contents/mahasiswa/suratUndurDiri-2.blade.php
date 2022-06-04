@extends('dashboard')

@section('title', 'Transkrip')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row mb-4">
                <h2 class="fw-bold">Surat Mengundurkan Diri</h2>
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
                <a href="/suratUndurDiri/add">
                    <button class="btn btn-primary">
                        <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Ajukan Surat</span>
                    </button>
                </a>
            </div>
            @if($ada)
            <table class="table table-responsive table-striped table-hover table-bordered text-center align-middle">
                <thead>
                    <tr class="table-secondary">
                        <th style="width: 50px">No</th>
                        <th style="width: 100px">Periode</th>
                        <th style="width: 300px">Alasan</th>
                        <th style="width: 100px">Status</th>
                        <th style="width: 100px">Cetak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($undur as $u)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $u->periodeMundur }}</td>
                        <td>{{ $u->alasanMundur }}</td>
                        @if($u->status == true)
                        <td><span class="badge text-bg-success shadow-sm">Disetujui</span></td>
                        <td>
                            <a href="/suratUndurDiri/cetak">
                                <span><i class="bi bi-printer-fill fs-4"></i></span>
                            </a>
                        </td>
                        @else
                        <td><span class="badge text-bg-danger shadow-sm">Menunggu</span></td>
                        <td>
                            <a>
                                <span><i class="bi bi-printer fs-4"></i></span>
                            </a>
                        </td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </main>
</div>

@endsection
