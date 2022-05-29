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
                <table class="table table-bordered table-hover table-striped align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th>No</th>
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
                            <td>{{ $n->matakuliah }}</td>
                            <td>{{ $m->sks }}</td>
                            <td>{{ $m->nilaiangka }}</td>
                            <td>
                                <?php
                                if($n->NilaiAngka <=40){
                                    echo "D";
                                } elseif ($n->nilaiangka >=41 && $n->nilaiangka <=60) {
                                    echo "C";
                                } elseif ($n->nilaiangka >=61 && $n->nilaiangka <=75) {
                                    echo "B";
                                } else{
                                    echo "A";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                $bobot = $n->NilaiAngka * $n->SKS;
                                echo $bobot;
                                ?>
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
