@extends('dashboard')

@section('title', 'FRS')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container-fluid text-center">
                    <h2><strong>Formulir Rencana Studi (FRS)</strong></h2>
                    <form id="input" action="" method="POST">
                        <div class="row g-3 my-2">
                            <div class="col-1 text-end"></div>
                            <div class="col-3 text-end">
                                <label for="inputTahunKurikulum" class="col-form-label"><strong>Periode:</strong></label>
                            </div>
                            <div class="col-4">
                                <select class="form-select" aria-label="Default select example">
                                    <option value="2020A">Gasal - 2020</option>
                                    <option value="2020B">Genap - 2020</option>
                                    <option value="2021A">Gasal - 2021</option>
                                    <option value="2021B">Genap - 2018</option>
                                </select>
                            </div>
                            <div class="col-3 text-start">
                                <button type="button" class="btn btn-primary">Ganti</button>
                            </div>
                            <div class="col-1 text-end"></div>
                        </div>
                    </form>
                </div>
                <form class="form-inline mb-3" id="input" style="width: 1000px">
                    @csrf
                    <div class="row align-items-center form-group">
                        <div class="col-2">
                        </div>
                        <div class="col-1">
                            <label for="NRP" class="col-form-label">NRP</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-2">
                            <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-0"
                                value="{{ auth()->user()->NRP }}" disabled>
                        </div>
                        <div class="col-1">
                            <label for="NRP" class="col-form-label">Dosen Wali</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-4">
                            <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-0"
                                value="{{ auth()->user()->NRP }}" disabled>
                        </div>
                    </div>
                    <div class="row align-items-center form-group">
                        <div class="col-2">
                        </div>
                        <div class="col-1">
                            <label for="namaMahasiswa" class="col-form-label">Nama</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-2">
                            <input type="text" id="nama" name="nama" class="form-control bg-transparent border-0"
                                value="{{ auth()->user()->nama }}" disabled>
                        </div>
                        <div class="col-1">
                            <label for="namaMahasiswa" class="col-form-label">IPS</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-4">
                            ---
                        </div>
                    </div>
                    <div class="row align-items-center form-group">
                        <div class="col-2">
                        </div>
                        <div class="col-1">
                            <label for="namaMahasiswa" class="col-form-label">IPK</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-2">
                            ---
                        </div>
                        <div class="col-1">
                            <label for="namaMahasiswa" class="col-form-label">Batas / Sisa</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-4">
                            ---
                        </div>
                    </div>
                </form>
                <div class="bg-secondary bg-opacity-25 p-3">
                    <form class="form-inline" id="input" style="width: 700px">
                        @csrf
                        <label for="" class="mb-3">Daftar Mata Kuliah:</label>
                        <select class="form-select mb-4" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-light me-md-2" type="button">Ambil</button>
                            <button class="btn btn-light" type="button">Peserta</button>
                        </div>
                    </form>
                </div>
                <div class="container my-4 text-center">
                    <table class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                        <tr class="table-secondary">
                            <th width="150px">Kode</th>
                            <th width="300px">Mata Kuliah</th>
                            <th width="50px">SKS</th>
                            <th width="50px">Kelas</th>
                            <th width="300px">Dosen</th>
                            <th width="100px">Nilai</th>
                        </tr>

                    </table>
                </div>
        </main>
    </div>

@endsection
