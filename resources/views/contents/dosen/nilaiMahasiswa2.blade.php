@extends('dashboard')

@section('title', 'Nilai Mahasiswa2')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container">
                <div class="row mb-4">
                    <h2 class="fw-bold">Nilai Mahasiswa</h2>
                </div>
                <div>
                    <form class="form-inline" id="input" action="/dosen/suratMahasiswa2" method="POST">
                        @csrf
                        <div class="form-group row mb-3">
                            <label for="nrp" class="col-3 col-form-label">NRP</label>
                            <label for="nrp" class="col-1 col-form-label">:</label>
                            <div class="col-8">
                                <input class="form-control" type="text" name="nrp" required>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="matakuliah" class="col-3 col-form-label">Mata Kuliah</label>
                            <label for="matakuliah" class="col-1 col-form-label">:</label>
                            <div class="col-8">
                                <select class="form-select" name="matakuliah" required>
                                    <option selected disabled value="">Pilih</option>
                                    <option value="rbpl">Rancang Bangun Perangkat Lunak</option>
                                    <option value="mpti">Manajemen Proyek TI</option>
                                    <option value="se">Sistem Enterprise</option>
                                    <option value="mpti">Manajemen Proyek TI</option>
                                    <option value="dmjk">Desain Manajemen Perangkat Lunak</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="sks" class="col-3 col-form-label">SKS</label>
                            <label for="sks" class="col-1 col-form-label">:</label>
                            <div class="col-8">
                                <select class="form-select" name="sks" required>
                                    <option selected disabled value="">Pilih</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-3">
                            <label for="nilaiangka" class="col-3 col-form-label">Nilai Angka</label>
                            <label for="nilaiangka" class="col-1 col-form-label">:</label>
                            <div class="col-8">
                                <input  class="form-control" type="number" name="nilaiangka" required>
                            </div>
                        </div>
                    </form>
                    <div class="row text-center">
                        <div class="mt-3">
                            <a>
                                <button class="btn btn-primary" type="submit" form="input">
                                    <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Submit</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
