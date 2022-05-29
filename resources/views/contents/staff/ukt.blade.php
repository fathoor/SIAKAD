@extends('dashboard')

@section('title', 'Finansial')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container text-center">
                    <h2 class="fw-bold">Data Pembayaran SPP</h2>


            </div>
            <div class="my-4">
                <table class="table table-hover table-bordered align-middle text-center">
                    <tr class="table-secondary">
                        <th colspan="4">Semester 1</th>
                    </tr>
                    <tr class="table-secondary">
                        <th width="150px">NRP</th>
                        <th width="150px">Nama Mahasiswa</th>
                        <th width="150px">Status</th>
                        <th width="100px">Verifikasi</th>
                    </tr>
                    <tr>
                        <td>5026201045</td>
                        <td>THEODORUS REVONSIO PRANANTA</td>
                        <td >Belum Diverifikasi</td>
                        <td><button type="button" class="btn btn-warning"><a href="/staff/ukt-2">verifikasi</a></button></td>

                    </tr>
                </table>
            </div>
    </div>
    </main>
    </div>

@endsection
