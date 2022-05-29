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
                    <h2 class="fw-bold" style="margin-bottom:30px">Detail Pembayaran SPP</h2>

                </div>
                <div class="container">
                    <div class="container bg-light my-2" style="padding: 1">
                        <table width="440px" class="table table-borderless text-start small table-responsive-sm"
                            style="margin: 0">
                            <tbody>
                                <tr>
                                    <td width="150px"><strong>Tahun Semester</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="290px">GENAP 2022</td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>Status Pembayaran</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="290px" style="color: red">BELUM DIVERIFIKASI</td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>Bank</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="290px">BRI</td>
                                </tr>
                                <tr>
                                    <td width="150px"><strong>Tanggal Pembayaran</strong></td>
                                    <td width="10px"><strong>:</strong></td>
                                    <td width="290px">20 April 2022</td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <form>
                            @csrf
                            <div class="input-group mb-1">
                                <div class="input-group form-floating col me-2">
                                    <input type="text" id="TagihanSPP" name="TagihanSPP" class="form-control" value="x"
                                        disabled>
                                    <label for="TagihanSPP" class="form-label">Tagihan SPP</label>
                                </div>
                                <div class="input-group form-floating col ms-2">
                                    <input type="text" id="TagihanPelayaran" name="TagihanPelayaran" class="form-control"
                                        value="x" disabled>
                                    <label for="TagihanPelayaran" class="form-label">Tagihan Pelayaran</label>
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group form-floating col me-2">
                                    <input type="text" id="TunggakanPelayaran" name="TunggakanPelayaran"
                                        class="form-control" value="x" disabled>
                                    <label for="TunggakanPelayaran" class="form-label">Tunggakan Pelayaran</label>
                                </div>
                                <div class="input-group form-floating col ms-2">
                                    <input type="text" id="TagihanSPI" name="TagihanSPI" class="form-control" value="x"
                                        disabled>
                                    <label for="TagihanSPI" class="form-label">Tagihan SPI</label>
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group form-floating col me-2">
                                    <input type="text" id="TagihanIPITS" name="TagihanIPITS" class="form-control"
                                        value="x" disabled>
                                    <label for="TagihanIPITS" class="form-label">Tagihan IPITS</label>
                                </div>

                                <div class="input-group form-floating col ms-2">
                                    <input type="text" id="TagihanKPENYEGARAN" name="TagihanKPENYEGARAN"
                                        class="form-control" value="x" disabled>
                                    <label for="TagihanKPENYEGARAN" class="form-label">Tagihan KPENYEGARAN</label>
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group form-floating col me-2">
                                    <input type="text" id="TunggakanSPP" name="TunggakanSPP" class="form-control"
                                        value="x" disabled>
                                    <label for="TunggakanSPP" class="form-label">Tunggakan SPP</label>
                                </div>
                                <div class="input-group form-floating col ms-2">
                                    <input type="text" id="TunggakanSPI" name="TunggakanSPI" class="form-control"
                                        value="x" disabled>
                                    <label for="TunggakanSPI" class="form-label">Tunggakan SPI</label>
                                </div>
                            </div>
                            <div class="input-group mb-1">
                                <div class="input-group form-floating col me-2">
                                    <input type="text" id="TunggakanIPITS" name="TunggakanIPITS" class="form-control"
                                        value="x" disabled>
                                    <label for="TunggakanIPITS" class="form-label">Tunggakan IPITS</label>
                                </div>
                                <div class="input-group form-floating col ms-2">
                                    <input type="text" id="TunggakanKPENYEGARAN" name="TunggakanKPENYEGARAN"
                                        class="form-control" value="x" disabled>
                                    <label for="TunggakanKPENYEGARAN" class="form-label">Tunggakan KPENYEGARAN</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>



@endsection
