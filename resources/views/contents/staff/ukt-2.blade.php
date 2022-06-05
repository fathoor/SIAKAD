@extends('dashboard')

@section('title', 'Detail Pembayaran')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Detail Pembayaran Mahasiswa</h2>
            </div>
            <?php
            $tanggal = Carbon::parse($detail->tanggal)
                ->locale('id')
                ->isoFormat('DD MMMM YYYY');
            ?>
            <div class="mt-4">
                <div class="card text-bg-light">
                    <div class="card-body">
                        <table class="table table-borderless align-middle text-start small table-responsive-sm" style="box-shadow: 0 0; margin-bottom: -0.1em">
                            <tbody>
                                <tr>
                                    <td width="150px"><strong>Nama</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="300px">{{ $detail->nama }}</td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>NRP</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="300px">{{ $detail->NRP }}</td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>Tahun Semester</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="300px">{{ $detail->periodeTagihan }}</td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>Status Pembayaran</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="300px">
                                        @switch($detail->status)
                                            @case(1)
                                                <span class="badge text-bg-success shadow-sm">Lunas</span>
                                            @break

                                            @case(0)
                                                <span class="badge text-bg-danger shadow-sm">Belum Lunas</span>
                                            @break
                                        @endswitch
                                    </td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>Bank</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="300px">{{ $detail->bank }}</td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>Tanggal Pembayaran</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="300px">
                                        @if ($detail->status == 0)
                                            -
                                        @else
                                            {{ $tanggal }}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <form>
                        @csrf
                        <div class="input-group mb-1">
                            <div class="form-floating col me-1">
                                <input type="text" id="TagihanSPP" name="TagihanSPP" class="form-control" value="@rupiah($detail->SPP)" disabled>
                                <label for="TagihanSPP" class="form-label">Tagihan SPP</label>
                            </div>
                            <div class="form-floating col">
                                <input type="text" id="TagihanPelayaran" name="TagihanPelayaran" class="form-control" value="@rupiah($detail->pelayaran)" disabled>
                                <label for="TagihanPelayaran" class="form-label">Tagihan Pelayaran</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating col me-1">
                                <input type="text" id="TunggakanPelayaran" name="TunggakanPelayaran" class="form-control" value="@rupiah($detail->tunggakPelayaran)" disabled>
                                <label for="TunggakanPelayaran" class="form-label">Tunggakan Pelayaran</label>
                            </div>
                            <div class="form-floating col">
                                <input type="text" id="TagihanSPI" name="TagihanSPI" class="form-control" value="@rupiah($detail->SPI)" disabled>
                                <label for="TagihanSPI" class="form-label">Tagihan SPI</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating col me-1">
                                <input type="text" id="TagihanIPITS" name="TagihanIPITS" class="form-control" value="@rupiah($detail->IPITS)" disabled>
                                <label for="TagihanIPITS" class="form-label">Tagihan IPITS</label>
                            </div>

                            <div class="form-floating col">
                                <input type="text" id="TagihanKPENYEGARAN" name="TagihanKPENYEGARAN" class="form-control" value="@rupiah($detail->penyegaran)" disabled>
                                <label for="TagihanKPENYEGARAN" class="form-label">Tagihan KPENYEGARAN</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating col me-1">
                                <input type="text" id="TunggakanSPP" name="TunggakanSPP" class="form-control" value="@rupiah($detail->tunggakSPP)" disabled>
                                <label for="TunggakanSPP" class="form-label">Tunggakan SPP</label>
                            </div>
                            <div class="form-floating col">
                                <input type="text" id="TunggakanSPI" name="TunggakanSPI" class="form-control" value="@rupiah($detail->tunggakSPI)" disabled>
                                <label for="TunggakanSPI" class="form-label">Tunggakan SPI</label>
                            </div>
                        </div>
                        <div class="input-group mb-1">
                            <div class="form-floating col me-1">
                                <input type="text" id="TunggakanIPITS" name="TunggakanIPITS" class="form-control" value="@rupiah($detail->tunggakIPITS)" disabled>
                                <label for="TunggakanIPITS" class="form-label">Tunggakan IPITS</label>
                            </div>
                            <div class="form-floating col">
                                <input type="text" id="TunggakanKPENYEGARAN" name="TunggakanKPENYEGARAN" class="form-control" value="@rupiah($detail->tunggakPenyegaran)" disabled>
                                <label for="TunggakanKPENYEGARAN" class="form-label">Tunggakan KPENYEGARAN</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="mt-3 text-center">
                    <div>
                        <form action="/staff/ukt/verificate/{{ $detail->NRP }}/{{ $detail->periodeTagihan }}" method="POST">
                            @csrf
                            <button class="btn btn-success shadow-sm me-2" type="submit" name="accept" value="1">
                                <i class="bi bi-check-lg"></i>
                            </button>
                            <button class="btn btn-danger shadow-sm" type="submit" name="accept" value="0">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
