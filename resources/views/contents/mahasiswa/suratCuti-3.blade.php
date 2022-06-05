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
            <div>
                <form class="form-inline" id="input" action="/suratCuti/store" method="POST">
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
                        <label for="semester" class="col-3 col-form-label">Jumlah Semester</label>
                        <label for="semester" class="col-1 col-form-label">:</label>
                        <div class="col-8">

                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alasan" class="col-3 col-form-label">Alasan Cuti</label>
                        <label for="alasan" class="col-1 col-form-label">:</label>
                        <div class="col-8">

                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </main>
</div>

@endsection
