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
                    <div class="container bg-light my-4" style="padding: 1">
                        <table width="440px" class="table table-borderless text-start small table-responsive-sm" style="margin: 0">
                            <tbody>
                                <tr>
                                    <td width="110px"><strong>NRP</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="330px">5026201045</td>
                                    <td width="110px"><strong>Dosen Wali</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="330px">Retno Aulia Vinarti, S.Kom., M.Kom</td>
                                </tr>
                                <tr>
                                    <td width="110px"><strong>Nama</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="330px">THEODORUS REVONSIO PRANANTA</td>
                                    <td width="110px"><strong>Batas / Sisa</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="330px">24 / 3 SKS</td>
                                </tr>
                                <tr>
                                    <td width="110px"><strong>IPS</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="330px">3,62</td>
                                    <td width="110px"><strong>IPK</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="330px">3,73</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
        </main>
    </div>

@endsection
