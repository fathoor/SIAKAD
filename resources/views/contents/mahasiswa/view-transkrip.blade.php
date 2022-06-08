@extends('dashboard')

@section('title', 'Transkrip')

{{-- Content --}}
@section('main')

    <div class="container">
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div class="content">
                {{-- Isi disini --}}
                <div class="container mb-2">
                    <h2 class="fw-bold">Transkrip Mata Kuliah</h2>
                </div>
                <div class="my-2">
                    <div class="card text-bg-light">
                        <div class="card-body">
                            <table class="table table-borderless align-middle text-start small table-responsive-sm" style="box-shadow: 0 0; margin-bottom: -0.1em">
                                <tbody>
                                    <tr>
                                        <td width="334px"><strong>NRP</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="400px">{{ auth()->user()->NRP }}</td>
                                    </tr>
                                    <tr>
                                        <td width="334px"><strong>Nama</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="400px">{{ auth()->user()->nama }}</td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="334px"><strong>SKS Tempuh / SKS Lulus</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="400px">{{ $sksTempuh }}/{{ $sksLulus }}</td>
                                    </tr>
                                    <tr>
                                        <td width="334px"><strong>Status</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="400px">Normal</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card text-bg-light my-4">
                    <div class="card-body">
                        <div class="container">
                            <h4 class="text-center">
                                Tahap:<span class="text-blue fw-bold"> Persiapan</span>
                            </h4>
                        </div>
                        <div class="mt-1">
                            <table class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                                <thead>
                                    <tr class="table-secondary">
                                        <th width="150px">Kode</th>
                                        <th width="300px">Mata Kuliah</th>
                                        <th width="50px">SKS</th>
                                        <th width="150px">Historis Nilai</th>
                                        <th width="100px">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-3">
                    <div class="card text-bg-light">
                        <div class="card-body">
                            <table class="table table-borderless align-middle text-start small table-responsive-sm" style="box-shadow: 0 0; margin-bottom: -0.1em">
                                <tbody>
                                    <tr>
                                        <td width="200px"><strong>Total SKS Tahap Persiapan</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="50px">{{ $mkPersiapan->sum('sks') }}</td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><strong>IP Tahap Persiapan</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="50px">{{ round($ipPersiapan, 2) }}</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card text-bg-light mt-3 mb-4">
                    <div class="card-body">
                        <div class="container">
                            <h4 class="text-center">
                                Tahap:<span class="text-blue fw-bold"> Sarjana</span>
                            </h4>
                        </div>
                        <div class="mt-1">
                            <table class="table table-responsive table-striped table-bordered text-center table-hover align-middle">
                                <thead>
                                    <tr class="table-secondary">
                                        <th width="150px">Kode</th>
                                        <th width="300px">Mata Kuliah</th>
                                        <th width="50px">SKS</th>
                                        <th width="150px">Historis Nilai</th>
                                        <th width="100px">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-3">
                    <div class="card text-bg-light">
                        <div class="card-body">
                            <table class="table table-borderless align-middle text-start small table-responsive-sm" style="box-shadow: 0 0; margin-bottom: -0.1em">
                                <tbody>
                                    <tr>
                                        <td width="200px"><strong>Total SKS Tahap Sarjana</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="50px">{{ $mkSarjana->sum('sks') }}</td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><strong>IP Tahap Sarjana</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="50px">{{ round($ipSarjana, 2) }}</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-4">
                    <div class="card text-bg-light">
                        <div class="card-body">
                            <table class="table table-borderless align-middle text-start small table-responsive-sm" style="box-shadow: 0 0; margin-bottom: -0.1em">
                                <tbody>
                                    <tr>
                                        <td width="200px"><strong>Total SKS</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="50px">{{ $mkPersiapan->sum('sks') + $mkSarjana->sum('sks') }}</td>
                                    </tr>
                                    <tr>
                                        <td width="200px"><strong>IPK</strong></td>
                                        <td width="10px"><strong>:</strong></td>
                                        <td width="50px">{{ round($ipk, 2) }}</td>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="mt-2 mb-4">
                    <div class="card text-bg-warning bg-opacity-10">
                        <div class="card-body">
                            <small>
                                <strong>CATATAN</strong>
                                <br>
                                Transkrip Akademik ini hanya berlaku untuk keperluan:
                                <ol class="mb-2">
                                    <li>Pengajuan Beasiswa</li>
                                    <li>Melamar Pekerjaan</li>
                                    <li>Persyaratan Yudisium</li>
                                    <li>Tunjangan Gaji</li>
                                    <li class="text-muted">........................................................... (tuliskan keperluannya)</li>
                                </ol>
                                <strong>Tanggal Cetak: </strong>{{ Carbon::now()->locale('id')->isoFormat('DD MMMM YYYY') }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
