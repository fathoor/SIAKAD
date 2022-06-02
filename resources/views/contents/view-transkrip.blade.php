@extends('dashboard')

@section('title', 'Transkrip')


{{-- Content --}}
@section('main')

    <div class="container" style="justify-content: flex-start">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container text-center">
                    <h2 class="text-center text-dark mb-4">
                        <strong> Transkrip Mata Kuliah </strong>
                    </h2>
                    <table class="table table-borderless text-start">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ auth()->user()->nama }}</td>
                        </tr>
                        <tr>
                            <td>NRP</td>
                            <td>:</td>
                            <td>{{ auth()->user()->NRP }}</td>
                        </tr>
                        <tr>
                            <td>SKS Tempuh / SKS Normal</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="card text-bg-light mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tahap: <span class="text-blue"><strong>Persiapan</strong></span></h4>
                        <table
                            class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                            <tr class="table-secondary">
                                <th width="150px">Kode</th>
                                <th width="300px">Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="50px">Kelas</th>
                                <th width="300px">Dosen</th>
                                <th width="100px">Nilai</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb-4 bg-secondary bg-opacity-25">
                    <form class="form-inline" id="input">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="" class="col-9 col-form-label">Total Sks Tahap Persiapan</label>
                            <label for="" class="col-1 col-form-label">: </label>
                            <div class="col-2"></div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="col-9 col-form-label">IP Tahap Persiapan</label>
                            <label for="" class="col-1 col-form-label">: </label>
                            <div class="col-2"></div>
                        </div>
                    </form>
                </div>
                <div class="card text-bg-light mb-3">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tahap: <span class="text-blue"><strong>Sarjana</strong></span></h4>
                        <table
                            class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                            <tr class="table-secondary">
                                <th width="150px">Kode</th>
                                <th width="300px">Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="50px">Kelas</th>
                                <th width="300px">Dosen</th>
                                <th width="100px">Nilai</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row mb-4 bg-secondary bg-opacity-25">
                    <form class="form-inline" id="input">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="" class="col-9 col-form-label">Total Sks Tahap Sarjana</label>
                            <label for="" class="col-1 col-form-label">: </label>
                            <div class="col-2"></div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="col-9 col-form-label">IP Tahap Sarjana</label>
                            <label for="" class="col-1 col-form-label">: </label>
                            <div class="col-2"></div>
                        </div>
                    </form>
                </div>
                <div class="row mb-4 bg-secondary bg-opacity-25">
                    <form class="form-inline" id="input">
                        @csrf
                        <div class="form-group row mb-2">
                            <label for="" class="col-4 col-form-label">Total Sks</label>
                            <label for="" class="col-1 col-form-label">: </label>
                            <div class="col-7"></div>
                        </div>
                        <div class="form-group row mb-2">
                            <label for="" class="col-4   col-form-label">IPK</label>
                            <label for="" class="col-1 col-form-label">: </label>
                            <div class="col-7">
                                <input type="text" id="IPK" name="IPK" class="form-control bg-transparent border-0"
                                value="{{ auth()->user()->ipk }}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>

@endsection
