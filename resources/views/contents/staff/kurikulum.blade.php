@extends('dashboard')

@section('title', 'Kurikulum')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Data Kurikulum Program Studi</h2>
                <h5 class="fw-semibold mt-4">Tahun Kurikulum 2018</h5>
            </div>
            <div>
                <div class="mb-4 text-center">
                    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#createData">
                        <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Create</span>
                    </button>
                </div>
                <div>
                    <table class="table table-hover table-striped table-bordered align-middle text-center">
                        <thead>
                            <tr class="table-secondary">
                                <th colspan="7">Mata Kuliah</th>
                            </tr>
                            <tr class="table-secondary">
                                <th width="100px">@sortablelink('kodeMataKuliah', 'Kode')</th>
                                <th width="350px">@sortablelink('namaMataKuliah', 'Mata Kuliah')</th>
                                <th width="60px">@sortablelink('sks', 'SKS')</th>
                                <th width="100px">@sortablelink('tahunKurikulum', 'Tahun')</th>
                                <th width="100px">@sortablelink('semester', 'Semester')</th>
                                <th colspan="2">Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($mk->count())
                            @foreach ($mk as $p)
                            <tr>
                                <td>{{ $p->kodeMataKuliah }}</td>
                                <td>{{ $p->namaMataKuliah }}</td>
                                <td>{{ $p->sks }}</td>
                                <td>{{ $p->tahunKurikulum }}</td>
                                <td>{{ $p->semester }}</td>
                                <td>
                                    <a class=" badge text-bg-warning shadow-sm" id="tombolEdit" data-bs-toggle="modal" data-bs-target="#editModal{{ $p->id }}">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <div class="modal fade" id="editModal{{ $p->id }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Mata Kuliah</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                </div>
                                                <div class="modal-body text-start">
                                                    <form class="form-inline" id="input" action="/staff/kurikulum/update{{ $p->id }}" method="POST">
                                                        @csrf
                                                        <div class="form-group row mb-3">
                                                            <label for="kodeMataKuliah" class="col-2 col-form-label">Kode</label>
                                                            <label for="kodeMataKuliah" class="col-1 col-form-label">:</label>
                                                            <div class="col-9">
                                                                <input type="text" id="kodeMataKuliah" name="kodeMataKuliah" class="form-control bg-transparent border-white" value="{{ $p->kodeMataKuliah }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label for="namaMataKuliah" class="col-2 col-form-label">Nama</label>
                                                            <label for="namaMataKuliah" class="col-1 col-form-label">:</label>
                                                            <div class="col-9">
                                                                <input type="text" id="namaMataKuliah" name="namaMataKuliah" class="form-control bg-transparent border-white" value="{{ $p->namaMataKuliah }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label for="sks" class="col-2 col-form-label">SKS</label>
                                                            <label for="sks" class="col-1 col-form-label">:</label>
                                                            <div class="col-9">
                                                                <input type="text" id="sks" name="sks" class="form-control bg-transparent border-white" value="{{ $p->sks }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label for="tahunKurikulum" class="col-2 col-form-label">Tahun</label>
                                                            <label for="tahunKurikulum" class="col-1 col-form-label">:</label>
                                                            <div class="col-9">
                                                                <input type="text" id="tahunKurikulum" name="tahunKurikulum" class="form-control bg-transparent border-white" value="{{ $p->tahunKurikulum }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label for="semester" class="col-2 col-form-label">Semester</label>
                                                            <label for="semester" class="col-1 col-form-label">:</label>
                                                            <div class="col-9">
                                                                <input type="text" id="semester" name="semester" class="form-control bg-transparent border-white" value="{{ $p->semester }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mb-3">
                                                            <label for="kodeKelas" class="col-2 col-form-label">Kelas</label>
                                                            <label for="kodeKelas" class="col-1 col-form-label">:</label>
                                                            <div class="col-9">
                                                                <input type="text" id="kodeKelas" name="kodeKelas" class="form-control bg-transparent border-white" value="{{ $p->kodeKelas }}">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="bi bi-save"></i>
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="/staff/kurikulum/delete/{{ $p->id }}" class="badge text-bg-danger shadow-sm" onclick="return confirm('Yakin untuk menghapus?')">
                                        <i class="bi bi-trash-fill"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    {{ $mk->links('pagination::bootstrap-5') }}
                </div>
                <div class="modal fade" id="createData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Kuliah</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <form action="/staff/kurikulum/add" method="POST">
                                    @csrf
                                    <div class="form-group row mb-3">
                                        <label for="kodeMataKuliah" class="col-2 col-form-label">Kode</label>
                                        <label for="kodeMataKuliah" class="col-1 col-form-label">:</label>
                                        <div class="col-9">
                                            <input type="text" id="kodeMataKuliah" name="kodeMataKuliah" class="form-control bg-transparent border-white" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="namaMataKuliah" class="col-2 col-form-label">Nama</label>
                                        <label for="namaMataKuliah" class="col-1 col-form-label">:</label>
                                        <div class="col-9">
                                            <input type="text" id="namaMataKuliah" name="namaMataKuliah" class="form-control bg-transparent border-white" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="sks" class="col-2 col-form-label">SKS</label>
                                        <label for="sks" class="col-1 col-form-label">:</label>
                                        <div class="col-9">
                                            <input type="text" id="sks" name="sks" class="form-control bg-transparent border-white" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="tahunKurikulum" class="col-2 col-form-label">Tahun</label>
                                        <label for="tahunKurikulum" class="col-1 col-form-label">:</label>
                                        <div class="col-9">
                                            <input type="text" id="tahunKurikulum" name="tahunKurikulum" class="form-control bg-transparent border-white" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="semester" class="col-2 col-form-label">Semester</label>
                                        <label for="semester" class="col-1 col-form-label">:</label>
                                        <div class="col-9">
                                            <input type="text" id="semester" name="semester" class="form-control bg-transparent border-white" value="">
                                        </div>
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="kodeKelas" class="col-2 col-form-label">Kelas</label>
                                        <label for="kodeKelas" class="col-1 col-form-label">:</label>
                                        <div class="col-9">
                                            <input type="text" id="kodeKelas" name="kodeKelas" class="form-control bg-transparent border-white" value="">
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-save"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
