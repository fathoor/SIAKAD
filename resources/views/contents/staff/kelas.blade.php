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
            <div class="container">
                <h2 class="fw-bold">Daftar Kelas</h2>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal">
                    <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2 mb-2">Tambah</span>
                </button>
            </div>
            <div class="modal fade" id="modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content text-center">
                        <div class="modal-body">
                            @csrf
                            <form action="/staff/kelas/store" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Kode Mata Kuliah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="kodeMK" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Kode Kelas</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="kodeKelas" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Mata Kuliah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="MK" required>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Kelas</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" name="kelas" aria-label="Default select example">
                                            <option value="" disabled selected>Kelas</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="I">IUP</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Dosen</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="dosen" required>
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
            <div class="my-3">
                <table class="table table-responsive table-striped table-bordered text-center table-hover align-middle mb-5">
                    <thead>
                        <tr class="table-secondary">
                            <th width="150px">Kode MK</th>
                            <th width="150px">Kode Kelas</th>
                            <th width="300px">Mata Kuliah</th>
                            <th width="50px">SKS</th>
                            <th width="50px">Kelas</th>
                            <th width="500px">Dosen</th>
                            <th colspan="2" style="width: 100px">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $k)
                        <tr>
                            <td>{{$k->kodeMK}}</td>
                            <td>{{$k->kodeKelas}}</td>
                            <td>{{$k->namaMataKuliah}}</td>
                            <td>{{$k->sks}}</td>
                            <td>{{$k->kelas}}</td>
                            <td>{{$k->dosenNama}}</td>
                            <td>
                                <div class="badge text-bg-warning shadow-sm">
                                    <a data-bs-toggle="modal" data-bs-target="#edit{{ $k ->kodeMK }}">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                </div>
                                <div class="modal fade"id="edit{{ $k->kodeMK }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content text-center">
                                            <form action="/staff/kelas/update/{{ $k->kodeMK }}" id="input" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <label for="" class="col-sm-4 col-form-label">Kode Mata Kuliah</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" value="{{ $k->kodeMK }}" class="form-control" id="" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="" class="col-sm-4 col-form-label">Mata Kuliah</label>
                                                        <div class="col-sm-8">
                                                            <input type="text" class="form-control" id="" required>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="" class="col-sm-4 col-form-label">Kelas</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option value="" disabled selected>Kelas</option>
                                                                <option value="A">A</option>
                                                                <option value="B">B</option>
                                                                <option value="C">C</option>
                                                                <option value="D">D</option>
                                                                <option value="I">IUP</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer justify-content-center">
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="bi bi-save fs-6"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="badge text-bg-danger shadow-sm"><a href="/staff/kelas/delete/{{ $k->kodeMK }}/{{ $k->kelas}}" onclick="return confirm('Yakin untuk menghapus?')"><i class="bi bi-trash-fill"></i></a></div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $kelas->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </main>
</div>

@endsection
