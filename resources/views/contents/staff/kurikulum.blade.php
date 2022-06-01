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
                        <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createData">Input Mata Kuliah
                            Baru</a>
                        <br />
                        <br />
                        <table class="table table-hover table-bordered align-middle text-center">
                            <tr class="table-secondary">
                                <th colspan="7">Mata Kuliah</th>
                            </tr>
                            <tr class="table-secondary">
                                <th width="150px">@sortablelink('kodeMataKuliah', 'Kode')</th>
                                <th width="200px">@sortablelink('namaMataKuliah', 'Matakuliah')</th>
                                <th width="50px">@sortablelink('sks', 'SKS')</th>
                                <th width="100px">@sortablelink('tahunKurikulum', 'Tahun')</th>
                                <th width="100px">@sortablelink('semester', 'Semester')</th>
                                <th colspan="2">Opsi</th>
                            </tr>
                            @if ($mk->count())
                                @foreach ($mk as $p)
                                    <tr>
                                        <td>{{ $p->kodeMataKuliah }}</td>
                                        <td>{{ $p->namaMataKuliah }}</td>
                                        <td>{{ $p->sks }}</td>
                                        <td>{{ $p->tahunKurikulum }}</td>
                                        <td>{{ $p->semester }}</td>
                                        <td>

                                            <a class=" badge text-bg-warning shadow-sm" id="tombolEdit"
                                                data-bs-toggle="modal" data-bs-target="#editModal{{ $p->id }}">
                                                <i class="bi bi-pencil-fill"></i></a>
                                            <div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1"
                                                aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel">Modal title</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="form-inline" id="input"
                                                                action="/staff/kurikulum/update{{ $p->id }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="form-group row mb-3">
                                                                    <label for="kodeMataKuliah"
                                                                        class="col-2 col-form-label">Kode</label>
                                                                    <label for="kodeMataKuliah"
                                                                        class="col-1 col-form-label">:</label>
                                                                    <div class="col-9">
                                                                        <input type="text" id="kodeMataKuliah"
                                                                            name="kodeMataKuliah"
                                                                            class="form-control bg-transparent border-white"
                                                                            value="{{ $p->kodeMataKuliah }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label for="namaMataKuliah"
                                                                        class="col-2 col-form-label">Nama</label>
                                                                    <label for="namaMataKuliah"
                                                                        class="col-1 col-form-label">:</label>
                                                                    <div class="col-9">
                                                                        <input type="text" id="namaMataKuliah"
                                                                            name="namaMataKuliah"
                                                                            class="form-control bg-transparent border-white"
                                                                            value="{{ $p->namaMataKuliah }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label for="sks"
                                                                        class="col-2 col-form-label">SKS</label>
                                                                    <label for="sks" class="col-1 col-form-label">:</label>
                                                                    <div class="col-9">
                                                                        <input type="text" id="sks" name="sks"
                                                                            class="form-control bg-transparent border-white"
                                                                            value="{{ $p->sks }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label for="tahunKurikulum"
                                                                        class="col-2 col-form-label">Tahun</label>
                                                                    <label for="tahunKurikulum"
                                                                        class="col-1 col-form-label">:</label>
                                                                    <div class="col-9">
                                                                        <input type="text" id="tahunKurikulum"
                                                                            name="tahunKurikulum"
                                                                            class="form-control bg-transparent border-white"
                                                                            value="{{ $p->tahunKurikulum }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label for="semester"
                                                                        class="col-2 col-form-label">Semester</label>
                                                                    <label for="semester"
                                                                        class="col-1 col-form-label">:</label>
                                                                    <div class="col-9">
                                                                        <input type="text" id="semester" name="semester"
                                                                            class="form-control bg-transparent border-white"
                                                                            value="{{ $p->semester }}">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row mb-3">
                                                                    <label for="kodeKelas"
                                                                        class="col-2 col-form-label">Kelas</label>
                                                                    <label for="kodeKelas"
                                                                        class="col-1 col-form-label">:</label>
                                                                    <div class="col-9">
                                                                        <input type="text" id="kodeKelas" name="kodeKelas"
                                                                            class="form-control bg-transparent border-white"
                                                                            value="{{ $p->kodeKelas }}">
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save
                                                                        changes</button>
                                                                </div>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td><a href="/staff/kurikulum/delete/{{ $p->id }}"
                                                class="badge text-bg-danger shadow-sm"
                                                onclick="return confirm('Yakin untuk menghapus?')">
                                                <i class="bi bi-trash-fill"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                        <div class="modal fade" id="createData" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Kuliah</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/staff/kurikulum/add" method="POST">
                                            @csrf
                                            <div class="form-group row mb-3">
                                                <label for="kodeMataKuliah" class="col-2 col-form-label">Kode</label>
                                                <label for="kodeMataKuliah" class="col-1 col-form-label">:</label>
                                                <div class="col-9">
                                                    <input type="text" id="kodeMataKuliah" name="kodeMataKuliah"
                                                        class="form-control bg-transparent border-white" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="namaMataKuliah" class="col-2 col-form-label">Nama</label>
                                                <label for="namaMataKuliah" class="col-1 col-form-label">:</label>
                                                <div class="col-9">
                                                    <input type="text" id="namaMataKuliah" name="namaMataKuliah"
                                                        class="form-control bg-transparent border-white" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="sks" class="col-2 col-form-label">SKS</label>
                                                <label for="sks" class="col-1 col-form-label">:</label>
                                                <div class="col-9">
                                                    <input type="text" id="sks" name="sks"
                                                        class="form-control bg-transparent border-white" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="tahunKurikulum" class="col-2 col-form-label">Tahun</label>
                                                <label for="tahunKurikulum" class="col-1 col-form-label">:</label>
                                                <div class="col-9">
                                                    <input type="text" id="tahunKurikulum" name="tahunKurikulum"
                                                        class="form-control bg-transparent border-white" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="semester" class="col-2 col-form-label">Semester</label>
                                                <label for="semester" class="col-1 col-form-label">:</label>
                                                <div class="col-9">
                                                    <input type="text" id="semester" name="semester"
                                                        class="form-control bg-transparent border-white" value="">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-3">
                                                <label for="kodeKelas" class="col-2 col-form-label">Kelas</label>
                                                <label for="kodeKelas" class="col-1 col-form-label">:</label>
                                                <div class="col-9">
                                                    <input type="text" id="kodeKelas" name="kodeKelas"
                                                        class="form-control bg-transparent border-white" value="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                <button type="reset" class="btn btn-secondary">Reset</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $mk->appends(\Request::except('page'))->render() !!}
        </main>
    </div>




@endsection
