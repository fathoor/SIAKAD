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
            <div class="container">
                <div class="row mb-5">
                    <a href="">
                        <button class="btn btn-primary">
                            <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Input Nilai</span>
                        </button>
                    </a>
                </div>
                <table class="table table-bordered table-hover table-striped align-middle text-center">
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
                    <tbody>
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
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
