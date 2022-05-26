@extends('dashboard')

@section('title', 'Transkrip')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <h2 class="text-center text-dark mb-4">
                    <strong> Transkrip Mata Kuliah </strong>
                </h2>
                <form class="form-inline mb-3" id="input" style="width: 400px">
                    @csrf
                    <div class="row align-items-center form-group">
                        <div class="col-2">
                            <label for="NRP" class="col-form-label">NRP</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-9">
                            <input type="text" id="NRP" name="NRP" class="form-control bg-transparent border-white"
                                value="{{ auth()->user()->NRP }}" disabled>
                        </div>
                    </div>
                    <div class="row align-items-center form-group">
                        <div class="col-2">
                            <label for="namaMahasiswa" class="col-form-label">Nama</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-9">
                            <input type="text" id="nama" name="nama" class="form-control bg-transparent border-white"
                                value="{{ auth()->user()->nama }}" disabled>
                        </div>
                    </div>
                    <div class="row align-items-center form-group">
                        <div class="col-2">
                            <label for="format" class="col-form-label">Format</label>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-9">
                            <select class="form-select form-select-sm" aria-label="Default select example">
                                <option value="1">Webpage</option>
                                <option value="2">Plain HTML</option>
                                <option value="3">Microsoft Word Document</option>
                                <option value="4">Microsoft Excel Spreadsheet</option>
                            </select>
                        </div>
                    </div>
                </form>
                <button type="button" class="btn bg-blue text-white">
                    Lihat Transkrip
                </button>
            </div>
        </main>
    </div>

@endsection
