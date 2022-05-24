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
            </div>
            <div class="d-flex flex-row">
                <div class="d-flex flex-col mx-3">
                    <h5 class="fw-semibold my-2">Tahun Kurikulum</h5>
                </div>
                <div class="d-flex flex-col mx-3">
                    <select class="form-select " aria-label="Default select example">
                        <option selected>Tahun</option>
                        <option value="1">2018</option>
                        <option value="2">2019</option>
                        <option value="3">2020</option>
                    </select>
                </div>
            </div>
            <div class="my-4">
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="3">Semester 1</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="150px">Kode</th>
                        <th width="200px">Mata Kuliah</th>
                        <th width="50px">SKS</th>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>MPB</td>
                        <td>21</td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection