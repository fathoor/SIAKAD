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
                    </div>
                </form>
                <div class="bg-secondary bg-opacity-25 p-3">
                    <form class="form-inline" id="input" style="width: 700px">
                        @csrf
                        <label for="" class="mb-3">Daftar Mata Kuliah:</label>
                        <select class="form-select mb-4" aria-label="Default select example">
                            <option hidden>Silahkan Pilih</option>
                            @foreach ( $matakuliah as $mk)
                            <option value="{{ $mk -> kodeMataKuliah }}" >{{$mk -> namaMataKuliah}}</option>
                            {{-- <option value="2">Two</option>
                            <option value="3">Three</option> --}}
                            @endforeach
                        </select>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button class="btn btn-light me-md-2" type="button">Ambil</button>
                            <button class="btn btn-light" type="button">Peserta</button>
                        </div>
                    </form>
                </div>
                <div class="container my-4 text-center">
                    <table class="table table-responsive table-striped table-bordered table-fixed text-center">
                        <tr class="table-secondary">
                            <th scope="col">Kode</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">SKS</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Alih Kredit</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Nilai</th>
                        </tr>
                        @foreach ($frs as $f )
                        @if($f->NRP == auth()->user()->NRP)
                            <tr>
                                <td>{{ $f->kodeMataKuliah }}</td>
                                <td>{{ $f->namaMataKuliah }}</td>
                                <td>{{ $f->sks }}</td>
                                <td>{{ $f->kelas }}</td>
                                <td>-</td>
                                <td>{{ $f->dosenNama }}</td>
                                @foreach ($nilai as $n)
                                @if ($n -> NRP == $f -> NRP &&  $n->kodeMK == $f->kodeMK)
                                    <td>{{ $n -> nilaiAngka }}</td>
                                @endif
                                    
                                @endforeach
                            </tr>
                        @endif
                        @endforeach
                    </table>
                </div>
        </main>
    </div>

@endsection
