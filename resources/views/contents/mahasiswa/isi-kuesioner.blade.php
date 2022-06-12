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
                <div class="container">
                    <h2 class="fw-bold">Kuesioner Evaluasi Mata Kuliah</h2>
                </div>
                <div class="d-flex flex-row mb-3">
                    <div class="d-flex flex-col">
                        <h5 class="fw-semibold">
                            {{ $periode }}
                        </h5>
                    </div>
                </div>
                <div class="text-muted">
                    <h6>Sedang mengisi kuesioner...</h6>
                    <h6>{{ $dosen->namaMataKuliah }} - {{ $dosen->dosenNama }}</h6>
                </div>
                <div>
                    <form action="/kuesioner/submit" method="POST">
                        @csrf
                        <input type="hidden" name="dosenNRP" value="{{ $dosen->dosenNRP }}">
                        <input type="hidden" name="periode" value="{{ $periode }}">
                        <input type="hidden" name="kodeMK" value="{{ $dosen->kodeMataKuliah }}">
                        <table class="table table-hover table-striped table-bordered align-middle text-center small my-4">
                            <thead>
                                <tr class="table-secondary">
                                    <th width="50px">No</th>
                                    <th width="350px">Kriteria</th>
                                    <th width="300px">Penilaian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Rencana materi dan tujuan mata kuliah diberikan di awal perkuliahan</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Capaian pembelajaran dijelaskan setiap pergantian kuliah</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kesesuaian Sumber Belajar yang digunakan untuk mendukung capaian pembelajaran</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kesesuaian waktu untuk mengerjakan tugas dengan beban SKS</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Kesesuaian jenis asesmen dengan pemenuhan capaian pembelajaran</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Dosen memberikan umpan balik untuk hasil asesmen</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Dosen melakukan remidi untuk perbaikan hasil asesmen</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Dosen membantu meningkatkan kemampuan mahasiswa untuk mencapai capaian pembelajaran
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Dosen mampu berinteraksi secara aktif dalam pembelajaran</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Dosen menggunakan alokasi waktu sesuai dengan SKS</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Dosen memberikan tugas yang terkait dengan keprofesionalan dan meningkatkan
                                        kemampuan
                                        kolaboratif
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Dosen membantu mahasiswa untuk meningkatkan rasa percaya diri</td>
                                    <td>
                                        <div class="form-group">
                                            <div class="row text-center">
                                                <div class="col-sm">Sangat Kurang</div>
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
                                                <div class="col-sm">Sangat Baik</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <label for="komen">Komentar</label>
                            <textarea class="form-control" id="komen" rows="3" name="komen" required
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
