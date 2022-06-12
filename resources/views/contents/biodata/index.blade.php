@extends('dashboard')

@section('title', 'Biodata')

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
                        Updated: {{ Carbon\Carbon::now() }} WIB
                        <a class="ms-2" href="/biodata">
                            <i class="bi bi-arrow-repeat"></i>
                        </a>
                    </div>
                    <form>
                        @csrf
                        <div class="form-floating mb-3">
                            <input type="number" id="NIK" name="NIK" class="form-control" value="{{ auth()->user()->NIK }}" disabled>
                            <label for="NIK" class="form-label">NIK</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="nama" name="nama" class="form-control" value="{{ auth()->user()->nama }}" disabled>
                            <label for="nama" class="form-label">Nama Lengkap</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" id="email" name="email" class="form-control" value="{{ auth()->user()->email }}" disabled>
                            <label for="email" class="form-label">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" id="nomorTelp" name="nomorTelp" class="form-control" value="+62 {{ auth()->user()->nomorTelp }}" disabled>
                            <label for="nomorTelp" class="form-label">Nomor Telepon</label>
                        </div>
                        <div class="input-group mb-3">
                            <div class="form-floating col me-2">
                                <input type="text" id="tempatLahir" name="tempatLahir" class="form-control" value="{{ auth()->user()->tempatLahir }}" disabled>
                                <label for="tempatLahir" class="form-label">Tempat Lahir</label>
                            </div>
                            <div class="form-floating col ms-2">
                                <input type="date" id="tanggalLahir" name="tanggalLahir" class="form-control" value="{{ auth()->user()->tanggalLahir }}" disabled>
                                <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="alamat" disabled>{{ auth()->user()->alamat }}</textarea>
                            <label for="alamat" class="form-label">Alamat</label>
                        </div>
                    </form>
                    <div class="mt-4">
                        <a href="/biodata/edit">
                            <button class="btn btn-warning">
                                <i class="bi bi-pencil-square fs-6"></i><span class="fs-6 ms-2">Ubah</span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection