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
            <form class="form" id="input" action="/suratAktif/store" method="POST">
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
                <div class="form-group row mb-3">
                    <label for="periode" class="col-3 col-form-label">Periode</label>
                    <label for="periode" class="col-1 col-form-label">:</label>
                    <div class="col-8">

                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="keperluan" class="col-3 col-form-label">Keperluan</label>
                    <label for="keperluan" class="col-1 col-form-label">:</label>
                    <div class="col-8">

                    </div>
                </div>
            </form>

        </div>
    </main>
</div>

@endsection
