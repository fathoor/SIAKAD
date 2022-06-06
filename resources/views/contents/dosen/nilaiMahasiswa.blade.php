@extends('dashboard')

@section('title', 'Nilai Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            {{-- <div class="container">
                <div class="row mb-5">
                    <a href="/dosen/nilaiMahasiswa2">
                        <button class="btn btn-primary">
                            <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Input Nilai</span>
                        </button>
                    </a>
                </div>
            </div> --}}
            <div class="container">
                <h2 class="fw-bold">Nilai Mahasiswa</h2>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                    <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Input Nilai</span>
                </button>
            </div>
            <div class="modal fade" id="modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            <form action="/dosen/nilai/" id="nilai" method="POST"> {{-- biarin dulu aja --}}
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="number" id="NRP" name="NRP" class="form-control" disabled>
                                    <label for="NRP" class="form-label">NRP</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" id="matakuliah" name="matakuliah" class="form-control" disabled>
                                    <label for="matakuliah" class="form-label">Mata Kuliah</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="kelas" name="kelas" disabled>
                                        <option selected value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="I">IUP</option>
                                    </select>
                                    <label for="kelas">Kelas</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" id="sks" name="sks" class="form-control" disabled>
                                    <label for="sks" class="form-label">SKS</label>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="number" id="nilai" name="nilai" class="form-control" placeholder="Nilai" required>
                                    <label for="nilai" class="form-label">Nilai</label>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="submit" class="btn btn-primary" form="nilai">
                                <i class="bi bi-save fs-6"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <table class="table table-bordered table-striped table-hover table-striped align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>
                            <th>NRP</th>
                            <th>Mata Kuliah</th>    
                            <th>SKS</th>
                            <th>Nilai Angka</th>
                            <th>Nilai Huruf</th>
                            <th>Bobot</th>
                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach($nilaikuliah as $n)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $n->nrp }}</td>
                            <td>{{ $n->matakuliah }}</td>
                            <td>{{ $n->sks }}</td>
                            <td>{{ $n->nilaiangka }}</td>
                            <td>
                                <?php
                                if($n->nilaiangka <=40){
                                    echo "E";
                                } elseif ($n->nilaiangka >=41 && $n->nilaiangka <=55) {
                                    echo "D";
                                } elseif ($n->nilaiangka >=56 && $n->nilaiangka <=60) {
                                    echo "C";
                                } elseif ($n->nilaiangka >=61 && $n->nilaiangka <=65) {
                                    echo "BC";
                                } elseif ($n->nilaiangka >=66 && $n->nilaiangka <=75) {
                                    echo "B";
                                } elseif ($n->nilaiangka >=76 && $n->nilaiangka <=85) {
                                    echo "AB";
                                } else{
                                    echo "A";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $bobot = $n->nilaiangka * $n->sks;
                                echo $bobot;
                                ?>
                            </td>
                            <td>
                                <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
                                <a href="#" class="btn btn-primary btn-lg">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="#" class="btn btn-danger btn-lg">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody> --}}
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
