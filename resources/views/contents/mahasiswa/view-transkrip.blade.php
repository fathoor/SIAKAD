@extends('dashboard')

@section('title', 'Transkrip')


{{-- Content --}}
@section('main')

    <div class="container" style="justify-content: flex-start">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container text-center">
                    <h2 class="text-center text-dark mb-4">
                        <strong> Transkrip Mata Kuliah </strong>
                    </h2>
                    <table class="table table-borderless text-start" style="box-shadow: 0 0">
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
                            <td>SKS Tempuh / SKS Lulus</td>
                            <td>:</td>
                            <td>{{ $sksTempuh }}/{{ $sksLulus }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>Normal</td>
                        </tr>
                    </table>
                </div>
                <div class="card text-bg-light mb-4">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tahap: <span
                                class="text-blue"><strong>Persiapan</strong></span></h4>
                        <table
                            class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                            <tr class="table-secondary">
                                <th width="150px">Kode</th>
                                <th width="300px">Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="150px">Historis Nilai</th>
                                <th width="100px">Nilai</th>
                            </tr>
                            @foreach ($mkPersiapan as $mkp)
                                <?php
                                $semester = $mkp->periode;
                                $smt = explode(' ', $semester);
                                if (86 <= $mkp->nilai) {
                                    $nilaiAngka = 'A';
                                } elseif (76 <= $mkp->nilai && $mkp->nilai <= 85) {
                                    $nilaiAngka = 'AB';
                                } elseif (66 <= $mkp->nilai && $mkp->nilai <= 75) {
                                    $nilaiAngka = 'B';
                                } elseif (61 <= $mkp->nilai && $mkp->nilai <= 65) {
                                    $nilaiAngka = 'BC';
                                } elseif (56 <= $mkp->nilai && $mkp->nilai <= 60) {
                                    $nilaiAngka = 'C';
                                } elseif (41 <= $mkp->nilai && $mkp->nilai <= 55) {
                                    $nilaiAngka = 'D';
                                } else {
                                    $nilaiAngka = 'E';
                                }
                                ?>
                                <tr>
                                    <td>{{ $mkp->kodeMataKuliah }}</td>
                                    <td>{{ $mkp->namaMataKuliah }}</td>
                                    <td>{{ $mkp->sks }}</td>
                                    <td>{{ $smt[0] . '/' . $smt[1] . '/' . $nilaiAngka }}</td>
                                    <td>{{ $nilaiAngka }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="row mb-4 bg-secondary bg-opacity-25">
                    <table class="table table-borderless text-start" style="margin: 0">
                        <tr>
                            <td>Total Sks Tahap Persiapan</td>
                            <td>:</td>
                            <td>{{ $mkPersiapan->sum('sks') }}</td>
                        </tr>
                        <tr>
                            <td>IP Tahap Persiapan</td>
                            <td>:</td>
                            <td>{{ round($ipPersiapan, 2) }}</td>
                        </tr>
                    </table>
                </div>
                <div class="card text-bg-light mb-4">
                    <div class="card-body">
                        <h4 class="card-title text-center">Tahap: <span
                                class="text-blue"><strong>Sarjana</strong></span></h4>
                        <table
                            class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                            <tr class="table-secondary">
                                <th width="150px">Kode</th>
                                <th width="300px">Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="150px">Historis Nilai</th>
                                <th width="100px">Nilai</th>
                            </tr>
                            @foreach ($mkSarjana as $mkp)
                                <?php
                                $semester = $mkp->periode;
                                $smt = explode(' ', $semester);
                                if (86 <= $mkp->nilai) {
                                    $nilaiAngka = 'A';
                                } elseif (76 <= $mkp->nilai && $mkp->nilai <= 85) {
                                    $nilaiAngka = 'AB';
                                } elseif (66 <= $mkp->nilai && $mkp->nilai <= 75) {
                                    $nilaiAngka = 'B';
                                } elseif (61 <= $mkp->nilai && $mkp->nilai <= 65) {
                                    $nilaiAngka = 'BC';
                                } elseif (56 <= $mkp->nilai && $mkp->nilai <= 60) {
                                    $nilaiAngka = 'C';
                                } elseif (41 <= $mkp->nilai && $mkp->nilai <= 55) {
                                    $nilaiAngka = 'D';
                                } else {
                                    $nilaiAngka = 'E';
                                }
                                ?>
                                <tr>
                                    <td>{{ $mkp->kodeMataKuliah }}</td>
                                    <td>{{ $mkp->namaMataKuliah }}</td>
                                    <td>{{ $mkp->sks }}</td>
                                    <td>{{ $smt[0] . '/' . $smt[1] . '/' . $nilaiAngka }}</td>
                                    <td>{{ $nilaiAngka }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="row mb-4 bg-secondary bg-opacity-25">
                    <table class="table table-borderless text-start" style="margin: 0">
                        <tr>
                            <td>Total Sks Tahap Sarjana</td>
                            <td>:</td>
                            <td>{{ $mkSarjana->sum('sks') }}</td>
                        </tr>
                        <tr>
                            <td>IP Tahap Sarjana</td>
                            <td>:</td>
                            <td>{{ round($ipSarjana, 2) }}</td>
                        </tr>
                    </table>
                </div>
                <div class="row mb-4 bg-secondary bg-opacity-25">
                    <table class="table table-borderless text-start" style="margin: 0">
                        <tr>
                            <td>Total Sks</td>
                            <td>:</td>
                            <td>{{ $mkPersiapan->sum('sks') + $mkSarjana->sum('sks') }}</td>
                        </tr>
                        <tr>
                            <td>IPK</td>
                            <td>:</td>
                            <td>{{ round($ipk, 2)    }}</td>
                        </tr>
                    </table>
                </div>
                <div class="bg-warning bg-opacity-10 p-3 mb-4">
                    <small>
                        <strong>CATATAN</strong>
                        <br>
                        Transkrip Akademik ini hanya berlaku untuk keperluan:
                        <ol class="mb-2">
                            <li>Pengajuan Beasiswa</li>
                            <li>Melamar Pekerjaan</li>
                            <li>Persyaratan Yudisium</li>
                            <li>Tunjangan Gaji</li>
                            <li>........................................................... (tuliskan keperluannya)</li>
                        </ol>
                        <strong>Tanggal Cetak: </strong>{{ Carbon::now()->locale('id')->isoFormat('DD MMMM YYYY') }}
                    </small>
                </div>
            </div>
        </main>
    </div>

@endsection
