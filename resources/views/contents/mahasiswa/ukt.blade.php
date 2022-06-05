@extends('dashboard')

@section('title', 'Historis Pembayaran')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Historis Pembayaran Mahasiswa</h2>
            </div>
            <div class="mt-4">
                <table class="table table-hover table-striped table-bordered align-middle text-center">
                    <thead>
                        <tr class="table-secondary">
                            <th width="170px">Tahun Semester</th>
                            <th width="160px">Total Tagihan</th>
                            <th width="110px">Status</th>
                            <th width="100px">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tagihan as $t)
                            <tr>
                                <td>{{ $t->periodeTagihan }}</td>
                                <td>
                                    @rupiah($t->SPP + $t->pelayaran + $t->tunggakPelayaran + $t->SPI + $t->IPITS + $t->penyegaran + $t->tunggakSPP + $t->tunggakSPI + $t->tunggakIPITS + $t->tunggakPenyegaran)
                                </td>
                                @switch($t->status)
                                    @case(1)
                                        <td><span class="badge text-bg-success shadow-sm">Lunas</span></td>
                                    @break

                                    @case(0)
                                        <td><span class="badge text-bg-danger shadow-sm">Belum Lunas</span></td>
                                    @break
                                @endswitch
                                <td>
                                    <form action="/ukt/detail" method="POST">
                                        @csrf
                                        <input type="hidden" name="periode" value="{{ $t->periodeTagihan }}">
                                        <button type="submit" class="btn btn-warning btn-sm"><i class="bi bi-search"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>

@endsection
