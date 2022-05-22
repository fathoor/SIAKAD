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
                <div class="d-flex flex-row">
                    <div class="d-flex flex-col mx-3">
                        <h5 class="fw-semibold my-2">Tahun Kurikulum:</h5>
                    </div>
                    <div class="d-flex flex-col ">
                        <h5 class="fw my-2">Genap</h5>
                    </div>
                    <div class="d-flex flex-col mx-1">
                        <h5 class="fw my-2">2021</h5>
                    </div>
                </div>
                <div>
                    <h6>Sedang mengisi kuesioner...</h6>
                    <h6>Rancang Bangun Perangkat Lunak - Radityo Prasetianto Wibowo, S.Kom., M.Kom.</h6>
                </div>

                <div>
                    <form>
                        <table class="table table-hover table-bordered align-middle text-center small my-4">
                            <tr class="table-secondary">
                                <th width="40px">No</th>
                                <th width="400px">Kriteria</th>
                                <th width="150px">Penilaian</th>

                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Rencana materi dan tujuan mata kuliah diberikan di awal perkuliahan</td>
                                <td>
                                    <div class="form-group">
                                        <div class="col-lg">
                                            1
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                    id="pertanyaan1nilai1" value="nilai1" checked></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                    id="pertanyaan1nilai2" value="nilai2"></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                    id="pertanyaan1nilai3" value="nilai3"></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                    id="pertanyaan1nilai4" value="nilai4"></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan1"
                                                    id="pertanyaan1nilai5" value="nilai5"></label>
                                            5
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Kesesuaian evaluasi dengan materi yang diajarkan</td>
                                <td>
                                    <div class="form-group">
                                        <div class="col-lg">
                                            1
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                    id="pertanyaan2nilai1" value="nilai1" checked></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                    id="pertanyaan2nilai2" value="nilai2"></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                    id="pertanyaan2nilai3" value="nilai3"></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                    id="pertanyaan2nilai4" value="nilai4"></label>
                                            <label class="radio-inline"> <input type="radio" name="pertanyaan2"
                                                    id="pertanyaan2nilai5" value="nilai5"></label>
                                            5
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <div class="form-group">
                            <label for="feedback">Feedback</label>
                            <textarea class="form-control" id="feedback" rows="3"></textarea>
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
