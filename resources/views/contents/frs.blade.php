@extends('dashboard')

@section('title', 'FRS')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container-fluid text-center">
                    <h2><strong>Formulir Rencana Studi (FRS)</strong></h2>
                    <div class="row g-3 my-2">
                        <div class="col-3 text-end">
                            <label for="inputTahunKurikulum" class="col-form-label"><strong>Tahun Kurikulum:</strong></label>
                        </div>
                        <div class="col-3">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">Gasal</option>
                                <option value="2">Genap</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">2018</option>
                                <option value="2">2019</option>
                                <option value="3">2020</option>
                                <option value="4">2021</option>
                                <option value="5">2022</option>
                            </select>
                        </div>
                        <div class="col-3 text-start">
                            <button type="button" class="btn btn-primary">Ganti</button>
                        </div>
                    </div>
                </div>
                <div class="container bg-dark bg-opacity-10 my-4" style="padding: 1; width: 1100px; padding:10">
                    <form class="form-inline mb-3" id="input" style="width: 1000px">
                        @csrf
                        <div class="row align-items-center form-group">
                            <div class="col-1">
                                <label for="NRP" class="col-form-label">NRP</label>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-4">
                                <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-0"
                                    value="{{ auth()->user()->NRP }}" disabled>
                            </div>
                            <div class="col-1">
                                <label for="NRP" class="col-form-label">Dosen Wali</label>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-4">
                                <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-0"
                                    value="{{ auth()->user()->NRP }}" disabled>
                            </div>
                        </div>
                        <div class="row align-items-center form-group">
                            <div class="col-1">
                                <label for="namaMahasiswa" class="col-form-label">Nama</label>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-4">
                                <input type="text" id="nama" name="nama" class="form-control bg-transparent border-0"
                                    value="{{ auth()->user()->nama }}" disabled>
                            </div>
                            <div class="col-1">
                                <label for="namaMahasiswa" class="col-form-label">IPS</label>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-4">
                                ---
                            </div>
                        </div>
                        <div class="row align-items-center form-group">
                            <div class="col-1">
                                <label for="namaMahasiswa" class="col-form-label">IPK</label>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-4">
                                ---
                            </div>
                            <div class="col-1">
                                <label for="namaMahasiswa" class="col-form-label">Batas / Sisa</label>
                            </div>
                            <div class="col-1">
                                :
                            </div>
                            <div class="col-4">
                                ---
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container my-4 text-center">
                    <table class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                        <tr class="table-secondary">
                            <th width="150px">Kode</th>
                            <th width="300px">Mata Kuliah</th>
                            <th width="50px">SKS</th>
                            <th width="50px">Kelas</th>
                            <th width="300px">Dosen</th>
                            <th width="100px">Nilai</th>
                        </tr>
                        @foreach($mk3 as $p)
                        <tr>
                            <td>{{ $p->kodeMataKuliah }}</td>
                            <td>{{ $p->namaMataKuliah }}</td>
                            <td>{{ $p->sks }}</td>
                            <td>{{ $p->kelas }}</td>
                            <td>{{ $p->dosen }}</td>
                            <td>{{ $p->nilai }}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
        </main>
    </div>

@endsection
