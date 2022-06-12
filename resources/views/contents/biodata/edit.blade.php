@extends('dashboard')

@section('title', 'Edit Biodata')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Biodata</h2>
            </div>
            <div class="row mt-2">
                <div class="col-lg-4 text-center">
                    <i class="bi bi-person-circle" style="font-size: 10rem"></i>
                </div>
                <div class="col-lg-8 text-center">
                    <div class="text-center text-muted mb-3">
                        Pastikan data terisi dengan sesuai!
                    </div>
                    <form action="/biodata/update" id="biodata" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="number" id="NIK" name="NIK" class="form-control" value="{{ auth()->user()->NIK }}" placeholder="NIK" required>
                            <label for="NIK" class="form-label">NIK</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ auth()->user()->nama }}" placeholder="Nama Lengkap" required>
                            <label for="nama" class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{ auth()->user()->email }}" placeholder="Email" required>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" id="nomorTelp" name="nomorTelp" class="form-control" value="{{ auth()->user()->nomorTelp }}" placeholder="Nomor Telepon" required>
                            <label for="nomorTelp" class="form-label">Nomor Telepon</label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="form-floating col me-2">
                                <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" value="{{ auth()->user()->tempatLahir }}" placeholder="Tempat Lahir" required>
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                            </div>
                            <div class="form-floating col ms-2">
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" value="{{ auth()->user()->tanggalLahir }}" required>
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" name="alamat" placeholder="Alamat" required>{{ auth()->user()->alamat }}</textarea>
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                    </form>
                    <div class="mt-4">
                        <button class="btn btn-primary" type="submit" form="biodata">
                            <i class="bi bi-save fs-6"></i><span class="fs-6 ms-2">Simpan</span>
                        </button>
                        <a href="/biodata">
                            <button class="btn btn-danger">
                                <i class="bi bi-arrow-counterclockwise fs-6"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection