@extends('dashboard')

@section('title', 'Kelas')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content" style="max-width: 1200px;">
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
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah Kelas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <form action="/staff/kelas/store" method="POST">
                            <div class="modal-body">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="text" id="kodeMK" name="kodeMK" class="form-control" placeholder="Kode Mata Kuliah" required>
                                    <label for="kodeMK" class="form-label">Kode Mata Kuliah</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" id="kodeKelas" name="kodeKelas" class="form-control" placeholder="Kode Kelas" required>
                                    <label for="kodeKelas" class="form-label">Kode Kelas</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="kelas">
                                        <option value="" disabled selected>Kelas</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                        <option value="I">IUP</option>
                                    </select>
                                    <label for="kelas">Kelas</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="number" id="dosenNRP" name="dosenNRP" class="form-control" placeholder="Dosen" min="0" required>
                                    <label for="dosenNRP" class="form-label">Dosen</label>
                                </div>
                                <div class="form-floating">
                                    <input type="number" id="kapasitas" name="kapasitas" class="form-control" placeholder="Kapasitas" min="0" max="50" required>
                                    <label for="kapasitas" class="form-label">Kapasitas</label>
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
            <div class="my-3">
                <table class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                    <thead>
                        <tr class="table-secondary" style="vertical-align: middle">
                            <th width="120px">Kode Mata Kuliah</th>
                            <th width="100px">Kode Kelas</th>
                            <th width="450px">Mata Kuliah</th>
                            <th width="70px">Kelas</th>
                            <th width="500px">Dosen</th>
                            <th width="100px">Kapasitas</th>
                            <th colspan="2" style="width: 100px">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kelas as $k)
                        <tr>
                            <td>{{$k->kodeMK}}</td>
                            <td>{{$k->kodeKelas}}</td>
                            <td>{{$k->namaMataKuliah}}</td>
                            <td>{{$k->kelas}}</td>
                            <td>{{$k->dosenNama}}</td>
                            <td>{{$k->kapasitas}}</td>
                            <td>
                                <div class="badge text-bg-warning shadow-sm">
                                    <a data-bs-toggle="modal" data-bs-target="#edit{{ $k ->kodeMK }}">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                </div>
                                <div class="modal fade"id="edit{{ $k->kodeMK }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content text-center">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Ubah Data Kelas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>
                                            <form action="/staff/kelas/update/{{ $k->kodeMK }}/{{ $k->kelas }}" id="input" method="POST">
                                                <div class="modal-body">
                                                    @csrf
                                                    <div class="form-floating mb-3">
                                                        <input type="text" id="kodeMK" name="kodeMK" class="form-control" value="{{ $k->kodeMK }}" disabled required>
                                                        <label for="kodeMK" class="form-label">Kode Mata Kuliah</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="text" id="kodeKelas" name="kodeKelas" class="form-control" value="{{ $k->kodeKelas }}" required>
                                                        <label for="kodeKelas" class="form-label">Kode Kelas</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" name="kelas" disabled>
                                                            <option value="" disabled>Kelas</option>
                                                            <option value="A" {{ $k->kelas == 'A' ? 'selected' : '' }}>A</option>
                                                            <option value="B" {{ $k->kelas == 'B' ? 'selected' : '' }}>B</option>
                                                            <option value="C" {{ $k->kelas == 'C' ? 'selected' : '' }}>C</option>
                                                            <option value="D" {{ $k->kelas == 'D' ? 'selected' : '' }}>D</option>
                                                            <option value="I" {{ $k->kelas == 'I' ? 'selected' : '' }}>IUP</option>
                                                        </select>
                                                        <label for="kelas">Kelas</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input type="number" id="dosenNRP" name="dosenNRP" class="form-control" value="{{ $k->dosenNRP }}" min="0" required>
                                                        <label for="dosenNRP" class="form-label">Dosen</label>
                                                    </div>
                                                    <div class="form-floating">
                                                        <input type="number" id="kapasitas" name="kapasitas" class="form-control" value="{{ $k->kapasitas }}" min="0" max="50" required>
                                                        <label for="kapasitas" class="form-label">Kapasitas</label>
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
