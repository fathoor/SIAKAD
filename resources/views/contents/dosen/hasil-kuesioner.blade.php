@extends('dashboard')

@section('title', 'Hasil Kuesioner')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container">
                <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
            </div>
            <?php
            $period = $matkul->periode;
            $tahun = Str::substr($period, 0, 4);
            $semester = Str::substr($period, 4, 1);
            ?>
            <div class="d-flex flex-row">
                <h5 class="fw-semibold">
                    @switch($semester)
                        @case('A')
                            Ganjil - {{ $tahun }}
                        @break
                        @case('B')
                            Genap - {{ $tahun }}
                        @break
                    @endswitch
                </h5>
            </div>
            <div class="d-flex flex-row">
                <h5 class="fw-semibold mt-3">
                    {{ $matkul->namaMataKuliah }}
                </h5>
            </div>
            <div class="mt-4">
                <table class="table table-hover table-striped table-bordered align-middle text-center small">
                    <thead>
                        <tr class="table-secondary">
                            <th width="350px">Pertanyaan</th>
                            <th width="100px">Jawaban</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Rencana materi dan tujuan mata kuliah diberikan di awal perkuliahan</td>
                            <td>{{ round($j1, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Capaian pembelajaran dijelaskan setiap pergantian kuliah</td>
                            <td>{{ round($j2, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Kesesuaian Sumber Belajar yang digunakan untuk mendukung capaian pembelajaran</td>
                            <td>{{ round($j3, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Kesesuaian waktu untuk mengerjakan tugas dengan beban SKS</td>
                            <td>{{ round($j4, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Kesesuaian jenis asesmen dengan pemenuhan capaian pembelajaran</td>
                            <td>{{ round($j5, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Dosen memberikan umpan balik untuk hasil asesmen</td>
                            <td>{{ round($j6, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Dosen melakukan remidi untuk perbaikan hasil asesmen</td>
                            <td>{{ round($j7, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Dosen membantu meningkatkan kemampuan mahasiswa untuk mencapai capaian pembelajaran</td>
                            <td>{{ round($j8, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Dosen mampu berinteraksi secara aktif dalam pembelajaran</td>
                            <td>{{ round($j9, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Dosen menggunakan alokasi waktu sesuai dengan SKS</td>
                            <td>{{ round($j10, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Dosen memberikan tugas yang terkait dengan keprofesionalan dan meningkatkan kemampuan
                                kolaboratif</td>
                            <td>{{ round($j11, 2) }}</td>
                        </tr>
                        <tr>
                            <td>Dosen membantu mahasiswa untuk meningkatkan rasa percaya diri</td>
                            <td>{{ round($j12, 2) }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="mt-4">
                    <h5 class="fw-semibold">Komentar</h5>
                    @foreach ($hasil as $h)
                        <p>{{ $h->komentar }}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
