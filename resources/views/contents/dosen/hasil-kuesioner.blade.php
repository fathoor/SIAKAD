@extends('dashboard')

@section('title', 'Kuesioner')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}

                <div class="row mb-4">
                    <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
                </div>
                <?php
                $period = $matkul->periode;
                $tahun = Str::substr($period, 0, 4);
                $semester = Str::substr($period, 4, 1);
                ?>
                <div class="d-flex flex-row">
                    <h5 class="fw-semibold my-2">
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
                        <h5 class="fw-semibold my-2">
                            {{ $matkul->namaMataKuliah }}
                        </h5>
                    </div>
                    <div class="row mb-4">
                        <table class="table table-hover table-bordered align-middle text-center small">
                            <tr class="table-secondary">
                                <th width="250px">Pertanyaan</th>
                                <th width="130px">Jawaban</th>
                            </tr>
                            <tr>
                                <td>Rencana materi dan tujuan mata kuliah diberikan di awal perkuliahan</td>
                                <td>{{ $j1 }}</td>
                            </tr>
                            <tr>
                                <td>Capaian pembelajaran dijelaskan setiap pergantian kuliah</td>
                                <td>{{ $j2 }}</td>
                            </tr>
                            <tr>
                                <td>Kesesuaian Sumber Belajar yang digunakan untuk mendukung capaian pembelajaran</td>
                                <td>{{ $j3 }}</td>
                            </tr>
                            <tr>
                                <td>Kesesuaian waktu untuk mengerjakan tugas dengan beban SKS</td>
                                <td>{{ $j4 }}</td>
                            </tr>
                            <tr>
                                <td>Kesesuaian jenis asesmen dengan pemenuhan capaian pembelajaran</td>
                                <td>{{ $j5 }}</td>
                            </tr>
                            <tr>
                                <td>Dosen memberikan umpan balik untuk hasil asesmen</td>
                                <td>{{ $j6 }}</td>
                            </tr>
                            <tr>
                                <td>Dosen melakukan remidi untuk perbaikan hasil asesmen</td>
                                <td>{{ $j7 }}</td>
                            </tr>
                            <tr>
                                <td>Dosen membantu meningkatkan kemampuan mahasiswa untuk mencapai capaian pembelajaran</td>
                                <td>{{ $j8 }}</td>
                            </tr>
                            <tr>
                                <td>Dosen mampu berinteraksi secara aktif dalam pembelajaran</td>
                                <td>{{ $j9 }}</td>
                            </tr>
                            <tr>
                                <td>Dosen menggunakan alokasi waktu sesuai dengan SKS</td>
                                <td>{{ $j10 }}</td>
                            </tr>
                            <tr>
                                <td>Dosen memberikan tugas yang terkait dengan keprofesionalan dan meningkatkan kemampuan
                                    kolaboratif</td>
                                <td>{{ $j11 }}</td>
                            </tr>
                            <tr>
                                <td>Dosen membantu mahasiswa untuk meningkatkan rasa percaya diri</td>
                                <td>{{ $j12 }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="row mb-4">
                        <h5 class="fw-semibold my-2">Komentar</h5>
                        @foreach ($hasil as $h)
                            <p>{{ $h->komentar }}</p>
                        @endforeach
                    </div>
                </div>
            </main>
        </div>


    @endsection
