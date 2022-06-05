{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Cetak Surat ' . $type)

{{-- Body --}}
@section('bg', 'bg-white text-dark')

{{-- Content --}}
@section('content')

<div class="container">
    <main>
        <div class="content">
                @if($type == 'Aktif')
                <h2 class="fw-bold">
                    Permohonan Keterangan Aktif
                </h2> <br>

                <p>
                    Kepada <br>
                    Yth. Rektor ITS <br>
                    Kampus ITS Sukolilo <br>
                    Surabaya <br>
                </p>

                <form>
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="departemen" class="col-2 col-form-label">Departemen</label>
                        <label for="departemen" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="departemen" name="departemen" class="form-control bg-transparent border-white" value="{{ auth()->user()->departemen }}" disabled>
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
                        <label for="NRP" class="col-2 col-form-label">NRP</label>
                        <label for="NRP" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-white" value="{{ auth()->user()->NRP }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alamat" class="col-2 col-form-label">Alamat</label>
                        <label for="alamat" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="alamat" name="alamat" class="form-control bg-transparent border-white" value="{{ auth()->user()->alamat }}" disabled>
                        </div>
                    </div>

                </form>

                <p>
                    Mengajukan permohonan keterangan aktif pada dengan alasan:
                </p>

                @elseif($type == 'Cuti')

                <h2 class="fw-bold">
                    Permohonan Keterangan Berhenti Studi Sementara
                </h2> <br>

                <p>
                    Kepada <br>
                    Yth. Rektor ITS <br>
                    Kampus ITS Sukolilo <br>
                    Surabaya <br>
                </p>

                <form>
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="departemen" class="col-2 col-form-label">Departemen</label>
                        <label for="departemen" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="departemen" name="departemen" class="form-control bg-transparent border-white" value="{{ auth()->user()->departemen }}" disabled>
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
                        <label for="NRP" class="col-2 col-form-label">NRP</label>
                        <label for="NRP" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-white" value="{{ auth()->user()->NRP }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alamat" class="col-2 col-form-label">Alamat</label>
                        <label for="alamat" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="alamat" name="alamat" class="form-control bg-transparent border-white" value="{{ auth()->user()->alamat }}" disabled>
                        </div>
                    </div>

                </form>

                <p>
                    Mengajukan permohonan keterangan berhenti studi sementara pada dengan alasan:
                </p>

                @elseif($type == 'UndurDiri')

                <h2 class="fw-bold">
                    Permohonan Keterangan Berhenti Kuliah
                </h2> <br>

                <p>
                    Kepada <br>
                    Yth. Rektor ITS <br>
                    Kampus ITS Sukolilo <br>
                    Surabaya <br>
                </p>

                <form>
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="departemen" class="col-2 col-form-label">Departemen</label>
                        <label for="departemen" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="departemen" name="departemen" class="form-control bg-transparent border-white" value="{{ auth()->user()->departemen }}" disabled>
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
                        <label for="NRP" class="col-2 col-form-label">NRP</label>
                        <label for="NRP" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-white" value="{{ auth()->user()->NRP }}" disabled>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alamat" class="col-2 col-form-label">Alamat</label>
                        <label for="alamat" class="col-1 col-form-label">:</label>
                        <div class="col-9">
                            <input type="text" id="alamat" name="alamat" class="form-control bg-transparent border-white" value="{{ auth()->user()->alamat }}" disabled>
                        </div>
                    </div>

                </form>

                <p>
                    Mengajukan permohonan keterangan berhenti kuliah dengan alasan:
                </p>

                @endif

        </div>
        <div>

        </div>
    </main>
</div>

{{-- Footer --}}
@include('components.footer')
