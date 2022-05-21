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
                <div class="container-fluid">
                    <h2>Formulir Rencana Studi (FRS)</h2>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputTahunKurikulum" class="col-form-label">Tahun Kurikulum</label>
                        </div>
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">Gasal</option>
                                <option value="2">Genap</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <select class="form-select" aria-label="Default select example">
                                <option value="1">2018</option>
                                <option value="2">2019</option>
                                <option value="3">2020</option>
                                <option value="4">2021</option>
                                <option value="5">2022</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-primary">Primary</button>
                        </div>
                    </div>

                </div>
        </main>
    </div>

@endsection
