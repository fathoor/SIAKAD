@extends('dashboard')

@section('title', 'Biodata')

{{-- Content --}}
@section('main')

<div class="container justify-content-start">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row mb-4">
                <h2 class="fw-bold">Biodata</h2>
            </div>
            <div class="row mb-4">
                <div class="col-lg-4 text-center">
                    <i class="bi bi-person-circle" style="font-size: 10rem"></i>
                </div>
                <div class="col-lg-8 text-center">
                    <div class="text-start text-muted mb-3">
                        Pastikan biodata sudah terisi sesuai!
                    </div>
                    <form action="/biodata/update" method="POST">
                        @csrf
                        <div class="input-group form-floating mb-3">
                            <input type="text" id="NIK" name="NIK" class="form-control" value="{{ auth()->user()->NIK }}" required>
                            <label for="NIK" class="form-label">NIK</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ auth()->user()->nama }}" required>
                            <label for="nama" class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="text" id="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="input-group form-floating mb-3">
                            <input type="text" id="nomorTelp" name="nomorTelp" class="form-control" value="+62 {{ auth()->user()->nomorTelp }}" required>
                            <label for="nomorTelp" class="form-label">Nomor Telepon</label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group form-floating col me-2">
                                <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" value="{{ auth()->user()->tempatLahir }}" required>
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                            </div>
                            <div class="input-group form-floating col ms-2">
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" value="{{ auth()->user()->tanggalLahir }}" required>
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            </div>
                        </div>
                        <div class="input-group form-floating">
                            <textarea class="form-control" name="alamat" required>{{ auth()->user()->alamat }}</textarea>
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                        <a class="nav-link mt-4">
                            <button class="btn btn-success" type="submit">
                                <i class="bi bi-pencil-square fs-5"></i><span class="fs-5 ms-2">Update</span>
                            </button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection