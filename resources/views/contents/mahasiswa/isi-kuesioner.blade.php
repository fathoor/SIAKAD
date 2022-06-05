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
                <div class="container text-center">
                    <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
                </div>
                <?php
                $periode;
                $tahun = Str::substr($periode, 0, 4);
                $semester = Str::substr($periode, 4, 1);
                ?>
                <div class="d-flex flex-row">
                    <div class="d-flex flex-col mx-3">
                        <h5 class="fw-semibold my-2">Periode:</h5>
                    </div>
                    <div class="d-flex flex-col ">
                        <h5 class="fw my-2">
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
                    {{-- <div class="d-flex flex-col mx-1">
                        <h5 class="fw my-2">2021</h5>
                    </div> --}}
                </div>
                <div>
                    <h6>Sedang mengisi kuesioner...</h6>
                    <h6>{{ $dosen->namaMataKuliah }} - {{ $dosen->dosenNama }}</h6>
                </div>

                <div>
                    <form action="/submit-kuesioner" method="POST">
                        @csrf
                        <input type="hidden" name="dosenNRP" value="{{ $dosen->dosenNRP }}">
                        <input type="hidden" name="periode" value="{{ $periode }}">
                        <input type="hidden" name="kodeMK" value="{{ $dosen->kodeMataKuliah }}">
                        <table class="table table-hover table-bordered align-middle text-center small my-4">
                            <tr class="table-secondary">
                                <th width="40px">No</th>
                                <th width="300px">Kriteria</th>
                                <th width="280px">Penilaian</th>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Rencana materi dan tujuan mata kuliah diberikan di awal perkuliahan</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Capaian pembelajaran dijelaskan setiap pergantian kuliah</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Kesesuaian Sumber Belajar yang digunakan untuk mendukung capaian pembelajaran</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan3"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan3"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan3"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan3"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan3"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Kesesuaian waktu untuk mengerjakan tugas dengan beban SKS</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan4"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan4"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan4"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan4"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan4"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Kesesuaian jenis asesmen dengan pemenuhan capaian pembelajaran</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan5"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan5"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan5"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan5"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan5"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Dosen memberikan umpan balik untuk hasil asesmen</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan6"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan6"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan6"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan6"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan6"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Dosen melakukan remidi untuk perbaikan hasil asesmen</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan7"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan7"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan7"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan7"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan7"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Dosen membantu meningkatkan kemampuan mahasiswa untuk mencapai capaian pembelajaran</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan8"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan8"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan8"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan8"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan8"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dosen mampu berinteraksi secara aktif dalam pembelajaran</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan9"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan9"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan9"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan9"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan9"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Dosen menggunakan alokasi waktu sesuai dengan SKS</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan10"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan10"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan10"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan10"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan10"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Dosen memberikan tugas yang terkait dengan keprofesionalan dan meningkatkan kemampuan
                                    kolaboratif</td>
                                    <td class="align-middle">
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang
                                                </div>
                                                <div class="col-sm-5 my-3">

                                                    <label class="radio-inline"> <input type="radio" name="pertanyaan11"
                                                            id="pertanyaan1nilai1" value="1" required></label>
                                                    <label class="radio-inline"> <input type="radio" name="pertanyaan11"
                                                            id="pertanyaan1nilai2" value="2"></label>
                                                    <label class="radio-inline"> <input type="radio" name="pertanyaan11"
                                                            id="pertanyaan1nilai3" value="3"></label>
                                                    <label class="radio-inline"> <input type="radio" name="pertanyaan11"
                                                            id="pertanyaan1nilai4" value="4"></label>
                                                    <label class="radio-inline"> <input type="radio" name="pertanyaan11"
                                                            id="pertanyaan1nilai5" value="5"></label>
                                                </div>
                                                <div class="col-sm">Sangat Baik
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Dosen membantu mahasiswa untuk meningkatkan rasa percaya diri</td>
                                <td class="align-middle">
                                    <div class="form-group">
                                        <div class="row text-center">
                                            <div class="col-sm">Sangat Kurang
                                            </div>
                                            <div class="col-sm-5 my-3">

                                                <label class="radio-inline"> <input type="radio" name="pertanyaan12"
                                                        id="pertanyaan1nilai1" value="1" required></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan12"
                                                        id="pertanyaan1nilai2" value="2"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan12"
                                                        id="pertanyaan1nilai3" value="3"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan12"
                                                        id="pertanyaan1nilai4" value="4"></label>
                                                <label class="radio-inline"> <input type="radio" name="pertanyaan12"
                                                        id="pertanyaan1nilai5" value="5"></label>
                                            </div>
                                            <div class="col-sm">Sangat Baik
                                            </div>
                                        </div>

                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="form-group">
                            <label for="komen">Komentar</label>
                            <textarea class="form-control" id="komen" rows="3" name=komen required
                                placeholder="Berikan komentar untuk mata kuliah dan dosen pengampu"></textarea>
                        </div>
                        <div class="col text-center my-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

@endsection