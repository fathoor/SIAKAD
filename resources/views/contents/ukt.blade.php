@extends('dashboard')

@section('title', 'UKT')

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
                        <th width="150px">Tahun Semester</th>
                        <th width="150px">Total Tagihan</th>
                        <th width="150px">Status</th>
                        <th width="100px">Detail</th>
                    </tr>
                    <tr>
                        <td>GENAP 2021</td>
                        <td>Rp 25.000.000</td>
                        <td style="color: red">Belum Diverifikasi</td>
                        <td><button type="button" class="dropdown-item"><a href="/ukt-2">detail</a></button></td>

                    </tr>
                </table>
            </div>
    </div>
    </main>
    </div>

@endsection
