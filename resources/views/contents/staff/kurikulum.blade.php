@extends('dashboard')

@section('title', 'Kurikulum')

{{-- Content --}}
@section('main')

    <div class="container " style="justify-content: start">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container text-center">
                    <h2 class="fw-bold">Data Kurikulum Program Studi</h2>
                </div>
                <div class="d-flex flex-row">
                    <div class="d-flex flex-col mx-3">
                        <h5 class="fw-semibold my-2">Tahun Kurikulum</h5>
                    </div>
                    <div class="d-flex flex-col mx-3">
                        <select class="form-select " aria-label="Default select example">
                            <option selected>Tahun</option>
                            <option value="1">2018</option>
                            <option value="2">2019</option>
                            <option value="3">2020</option>
                        </select>
                    </div>
                </div>
                <div class="my-4">
                    <div class="card-body">
                        <a href="/kurikulum/tambah" class="btn btn-primary">Input Mata Kuliah Baru</a>
                        <br />
                        <br />
                        <table class="table table-hover table-bordered align-middle text-center">
                            <tr class="table-secondary">
                                <th colspan="7">Mata Kuliah</th>
                            </tr>
                            <tr class="table-secondary">
                                <th width="150px">Kode</th>
                                <th width="200px">Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="100px">Tahun</th>
                                <th width="100px">Semester</th>
                                <th colspan="2">Opsi</th>
                            </tr>

                            @foreach ($mk as $p)
                                <tr>
                                    <td>{{ $p->kodeMataKuliah }}</td>
                                    <td>{{ $p->namaMataKuliah }}</td>
                                    <td>{{ $p->sks }}</td>
                                    <td>{{ $p->tahunKurikulum }}</td>
                                    <td>{{ $p->semester }}</td>
                                    <td>
                                        <a class="bi bi-pencil-square" id="tombolEdit" data-bs-toggle="modal"
                                            data-bs-target="#editModal"></a>
                                        <div class="modal fade" id="editModal" tabindex="-1"
                                            aria-labelledby="editModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form class="form-inline" id="input" action="">
                                                            @csrf
                                                            <div class="form-group row mb-3">
                                                                <label for="Kode" class="col-2 col-form-label">Kode</label>
                                                                <label for="Kode" class="col-1 col-form-label">:</label>
                                                                <div class="col-9">
                                                                    <input type="text" id="Kode" name="Kode"
                                                                        class="form-control bg-transparent border-white"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row mb-3">
                                                                <label for="nama" class="col-2 col-form-label">Nama</label>
                                                                <label for="nama" class="col-1 col-form-label">:</label>
                                                                <div class="col-9">
                                                                    <input type="text" id="nama" name="nama"
                                                                        class="form-control bg-transparent border-white"
                                                                        value="">
                                                                </div>
                                                            </div>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-primary">Save
                                                            changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                    <td><a href="/kurikulum/hapus/{{ $p->id }}" class="bi bi-archive-fill"></a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
        </main>
    </div>




@endsection
