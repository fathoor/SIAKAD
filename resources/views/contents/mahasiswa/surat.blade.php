{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Cetak Surat ' . $type)

{{-- Body --}}
@section('bg', 'bg-white text-dark')

{{-- Content --}}
@section('content')

<div class="container">
    <main>
        <div class="content">
            <div class="container">
                @switch($type)
                    @case('Aktif')
                        <h2 class="fw-bold">
                            Permohonan Keterangan Mahasiswa Aktif
                        </h2>
                        @break
                    @case('Cuti')
                        <h2 class="fw-bold">
                            Permohonan Keterangan Berhenti Studi Sementara
                        </h2>
                        @break
                    @case('UndurDiri')
                        <h2 class="fw-bold">
                            Permohonan Keterangan Berhenti Kuliah
                        </h2>
                        @break
                @endswitch
            </div>
            <div class="container align-items-start text-start">
                <table class="table table-borderless align-middle text-start mb-4" style="box-shadow: 0 0; margin-bottom: -0.1em">
                    <tbody>
                        <tr>
                            <td>Kepada</td>
                        </tr>
                        <tr>
                            <td>Yth. Rektor ITS</td>
                        </tr>
                        <tr>
                            <td>Kampus ITS Sukolilo</td>
                        </tr>
                        <tr>
                            <td>Surabaya</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless align-middle text-start mb-4" style="box-shadow: 0 0; margin-bottom: -0.1em">
                    <tbody>
                        <tr>
                            <td>Departemen</td>
                            <td>:</td>
                            <td>{{ auth()->user()->departemen }}</td>
                        </tr>
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
                            <td>Alamat</td>
                            <td>:</td>
                            <td>{{ auth()->user()->alamat }}</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-borderless align-middle text-start" style="box-shadow: 0 0; margin-bottom: -0.1em">
                    <tbody>
                        <tr>
                            @switch($type)
                                @case('Aktif')
                                    <td>Mengajukan permohonan keterangan mahasiswa aktif pada {{ Carbon::parse($surat->tanggalAjuan)->locale('id')->isoFormat('DD MMMM YYYY') }} untuk keperluan {{ $surat->keperluanSurat }}.</td>
                                    @break
                                @case('Cuti')
                                    <td>Mengajukan permohonan keterangan berhenti studi sementara pada {{ Carbon::parse($surat->tanggalAjuan)->locale('id')->isoFormat('DD MMMM YYYY') }} selama {{ $surat->jumlahSemesterCuti }} semester dengan alasan {{ $surat->alasanCuti }}.</td>
                                    @break
                                @case('UndurDiri')
                                    <td>Mengajukan permohonan keterangan berhenti kuliah pada {{ Carbon::parse($surat->tanggalAjuan)->locale('id')->isoFormat('DD MMMM YYYY') }} dengan alasan {{ $surat->alasanMundur }}.</td>
                                    @break
                            @endswitch
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</div>
