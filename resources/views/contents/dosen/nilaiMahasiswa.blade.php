@extends('dashboard')

@section('title', 'Nilai Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container mb-2">
                <h2 class="fw-bold">Nilai Mahasiswa</h2>
                <span class="badge text-bg-light shadow-sm">{{ $dosen->dosenNama }}</span>
            </div>
            <form class="mb-4" action="/dosen/nilai" method="POST">
                @csrf
                <div class="form-floating">
                    <select class="form-select" id="periode" name="periode" onchange="this.form.submit()">
                        <option value="" disabled>Periode</option>
                        <option value="Genap 2021" {{ $periode == 'Genap 2021' ? 'selected' : '' }}>Genap 2021</option>
                        <option value="Ganjil 2021" {{ $periode == 'Ganjil 2021' ? 'selected' : '' }}>Ganjil 2021</option>
                        <option value="Genap 2020" {{ $periode == 'Genap 2020' ? 'selected' : '' }}>Genap 2020</option>
                        <option value="Ganjil 2020" {{ $periode == 'Ganjil 2020' ? 'selected' : '' }}>Ganjil 2020</option>
                    </select>
                    <label for="periode" class="form-label">Periode</label>
                </div>
            </form>           
            @foreach($matakuliah as $mk)
            <div class="row justify-content-center mb-4">
                <div class="card shadow-sm mb-4" style="width: 20rem">
                    <div class="card-body text-center">
                        <a href="#collapse{{ $mk->kodeMK }}" class="stretched-link" data-bs-toggle="collapse" href="#collapse{{ $mk->kodeMK }}" aria-expanded="false" aria-controls="collapse{{ $mk->kodeMK }}"></a>
                        <div class="card-title">
                            <h4 class="fw-bold">{{ $mk->kodeMK }}</h4>
                        </div>
                        <div class="card-text mb-1">
                            <div class="mb-2">{{ $mk->namaMataKuliah }}</div>
                        </div>
                    </div>
                </div>
                <div class="collapse" id="collapse{{ $mk->kodeMK }}">
                    <table class="table table-responsive table-striped table-hover table-bordered table-fixed text-center align-middle">
                        <thead>
                            <tr class="table-secondary">
                                <th width="100px">NRP</th>
                                <th width="50px">Kelas</th>
                                <th width="200px">Nama Mahasiswa</th>
                                <th width="50px">SKS</th>
                                <th width="50px">Nilai</th>
                                <th width="50px">Input</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($frs as $f)
                            <tr>
                                <td>{{ $f->NRP }}</td>
                                <td>{{ $f->kelas }}</td>
                                <td>{{ $f->nama }}</td>
                                <td>{{ $f->sks }}</td>
                                <td>{{ $f->nilai }}</td>
                                <td>
                                    <div class="badge text-bg-warning shadow-sm">
                                        <a data-bs-toggle="modal" data-bs-target="#edit{{ $f ->NRP }}">
                                            <i class="bi bi-pencil-fill"></i>
                                        </a>
                                    </div>
                                    <div class="modal fade" id="edit{{ $f->NRP }}" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content text-center">
                                                <form action="/dosen/nilai/{{ $f->NRP }}" method="POST">
                                                    <input type="hidden" name="kodeMK" value="{{ $f->kodeMK }}">
                                                    <div class="modal-body">
                                                        @csrf
                                                        <div class="form-floating mb-3">
                                                            <input type="number" id="NRP" name="NRP" class="form-control" value="{{ $f->NRP }}" disabled>
                                                            <label for="NRP" class="form-label">NRP</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" id="nama" name="nama" class="form-control" value="{{ $f->nama }}" disabled>
                                                            <label for="nama" class="form-label">Nama Mahasiswa</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="text" id="matakuliah" name="matakuliah" class="form-control" value="{{ $f->namaMataKuliah }}" disabled>
                                                            <label for="matakuliah" class="form-label">Mata Kuliah</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <select class="form-select" id="kelas" name="kelas" disabled>
                                                                <option value="A" {{ $f->kelas == 'A' ? 'selected' : '' }}>A</option>
                                                                <option value="B" {{ $f->kelas == 'B' ? 'selected' : '' }}>B</option>
                                                                <option value="C" {{ $f->kelas == 'C' ? 'selected' : '' }}>C</option>
                                                                <option value="D" {{ $f->kelas == 'D' ? 'selected' : '' }}>D</option>
                                                                <option value="I" {{ $f->kelas == 'I' ? 'selected' : '' }}>IUP</option>
                                                            </select>
                                                            <label for="kelas">Kelas</label>
                                                        </div>
                                                        <div class="form-floating mb-3">
                                                            <input type="number" id="sks" name="sks" class="form-control" value="{{ $f->sks }}" disabled>
                                                            <label for="sks" class="form-label">SKS</label>
                                                        </div>
                                                        <div class="form-floating mb-1">
                                                            <input type="number" id="nilai" name="nilai" class="form-control" value="{{ $f->nilai }}" min="0" max="100" required>
                                                            <label for="nilai" class="form-label">Nilai</label>
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
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</div>

@endsection
