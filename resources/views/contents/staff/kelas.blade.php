@extends('dashboard')

@section('title', 'Kelas')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="text-center mb-3">
                    <h2 class="fw-bold">Daftar Kelas</h2>
                </div>
                <div>
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                        <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Tambah</span>
                    </button>
                </div>
                <div class="modal fade" id="modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content text-center">
                            <div class="modal-body">
                                @csrf
                                <form>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Kode Kelas</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Mata Kuliah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3 text-start">
                                        <label for="" class="col-sm-3 form-label-inline text-center">SKS</label>
                                        <div class="col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2" required>
                                                <label class="form-check-label" for="inlineRadio2">2</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio3" value="option3" required>
                                                <label class="form-check-label" for="inlineRadio3">3</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio4" value="option4" required>
                                                <label class="form-check-label" for="inlineRadio4">4</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="" class="col-sm-3 col-form-label">Kelas</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="submit" class="btn btn-primary" form="">
                                            Tambah Kelas
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container my-3 text-center">
                    <table class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                        <tr class="table-secondary">
                            <th width="150px">Kode</th>
                            <th width="300px">Mata Kuliah</th>
                            <th width="50px">SKS</th>
                            <th width="50px">Kelas</th>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
    </div>

@endsection
