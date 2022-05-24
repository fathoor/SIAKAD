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
                <div class="container bg-dark bg-opacity-10 my-4" style="padding: 1">
                    <table width="440px" class="table table-borderless text-start small table-responsive-sm"
                        style="margin: 0">
                        <tbody>
                            <tr>
                                <td width="110px"><strong>NRP</strong></td>
                                <td width="10px"><strong>:</strong></td>
                                <td width="330px"><input type="text" id="NRP" name="NRP"
                                        class="form-control bg-transparent border-white" value="{{ auth()->user()->NRP }}"
                                        disabled></td>
                                <td width="110px"><strong>Dosen Wali</strong></td>
                                <td width="10px"><strong>:</strong></td>
                                <td width="330px"></td>
                            </tr>
                            <tr>
                                <td width="110px"><strong>Nama</strong></td>
                                <td width="10px"><strong>:</strong></td>
                                <td width="330px"><input type="text" id="nama" name="nama"
                                        class="form-control bg-transparent border-white"
                                        value="{{ auth()->user()->nama }}" disabled></td>
                                <td width="110px"><strong>Batas / Sisa</strong></td>
                                <td width="10px"><strong>:</strong></td>
                                <td width="330px"></td>
                            </tr>
                            <tr>
                                <td width="110px"><strong>IPS</strong></td>
                                <td width="10px"><strong>:</strong></td>
                                <td width="330px"></td>
                                <td width="110px"><strong>IPK</strong></td>
                                <td width="10px"><strong>:</strong></td>
                                <td width="330px"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="container my-4 text-center" style="padding: 0">
                    <table class="table table-bordered table-hover table-striped" style="margin: 0">
                        <thead class="bg-primary bg-opacity-75">
                            <tr>
                                <th scope="col">Kode</th>
                                <th scope="col">Mata Kuliah</th>
                                <th scope="col">SKS</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Alih Kredit</th>
                                <th scope="col">Dosen</th>
                                <th scope="col">Nilai</th>
                            </tr>
                        </thead>
                        <tbody class="table-warning">
                            <tr>
                                <td>IS184412</td>
                                <td>Rancang Bangun Perangkat Lunak</td>
                                <td>4</td>
                                <td>C</td>
                                <td>-</td>
                                <td>Radityo Prasetianto Wibowo, S.Kom., M.Kom</td>
                                <td>*</td>
                            </tr>
                            <tr>
                                <td>IS184412</td>
                                <td>Rancang Bangun Perangkat Lunak</td>
                                <td>4</td>
                                <td>C</td>
                                <td>-</td>
                                <td>Radityo Prasetianto Wibowo, S.Kom., M.Kom</td>
                                <td>*</td>
                            </tr>
                            <tr>
                                <td>IS184412</td>
                                <td>Rancang Bangun Perangkat Lunak</td>
                                <td>4</td>
                                <td>C</td>
                                <td>-</td>
                                <td>Radityo Prasetianto Wibowo, S.Kom., M.Kom</td>
                                <td>*</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </main>
    </div>

@endsection
