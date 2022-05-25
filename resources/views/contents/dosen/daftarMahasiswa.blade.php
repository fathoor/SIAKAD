@extends('dashboard')

@section('title', 'Daftar Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            <div class="container text-center">
                <h2 class="fw-bold">Daftar Mahasiswa</h2>
            </div>
            <div class="d-flex justify-content-end mb-3">
                <div class="p-2">
                    <select name="tahun" class="custom-select mb-3">
                        <option selected>Tahun</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                      </select>
                </div>
                <div class="p-2"></div>
                <div class="p-2">
                    <select name="departemen" class="custom-select mb-3">
                        <option selected>Departemen</option>
                        <option value="sisfor">Sistem Informasi</option>
                      </select>
                </div>
            </div>
            <div class="container">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>NRP</th>
                      <th>Nama</th>
                      <th>Departemen</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>




        </div>
    </main>
</div>

@endsection
