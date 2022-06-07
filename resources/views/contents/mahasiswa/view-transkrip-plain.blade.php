<html>

<body>
    <center>
        <h2>
            <strong> Transkrip Mata Kuliah </strong>
        </h2>
        <table border="1" cellspacing="0">
            <tr>
                <td>Nama</td>
                <td>{{ auth()->user()->nama }}</td>
            </tr>
            <tr>
                <td>NRP</td>
                <td>{{ auth()->user()->NRP }}</td>
            </tr>
            <tr>
                <td>SKS Tempuh / SKS Lulus</td>
                <td>{{ $sksTempuh }}/{{ $sksLulus }}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>Normal</td>
            </tr>
        </table>
        <br>
        <br>
        <table border="1" cellspacing="0">
            <tr>
                <th colspan="5">
                    Tahap: Persiapan
                </th>
            </tr>
            <tr>
                <th width="150px">Kode</th>
                <th width="300px">Mata Kuliah</th>
                <th width="50px">SKS</th>
                <th width="150px">Historis Nilai</th>
                <th width="100px">Nilai</td>
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
            <tr align="center">
                <td colspan="5">Total Sks Tahap Persiapan: {{ $mkPersiapan->sum('sks') }}</td>
            </tr>
            <tr align="center">
                <td colspan="5">IP Tahap Persiapan: {{ round($ipPersiapan, 2) }}</td>
            </tr>
        </table>
        <br>
        <br>
        <table border="1" cellspacing="0">
            <tr>
                <th colspan="5">
                    Tahap: Sarjana
                </th>
            </tr>
            <tr>
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
            <tr align="center">
                <td colspan="5">Total Sks Tahap Sarjana: {{ $mkSarjana->sum('sks') }}</td>
            </tr>
            <tr align="center">
                <td colspan="5">IP Tahap Sarjana: {{ round($ipSarjana, 2) }}</td>
            </tr>
        </table>
        <br>
        <br>
        <table border="1" cellspacing="0">
            <tr>
                <td>Total Sks</td>
                <td>{{ $mkPersiapan->sum('sks') + $mkSarjana->sum('sks') }}</td>
            </tr>
            <tr>
                <td>IPK</td>
                <td>{{ round($ipk, 2) }}</td>
            </tr>
        </table>
        <br>
        <br>
        <table border="1" cellspacing="0">
            <tr>
                <td>
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
                </td>
                </small>
            </tr>
            <tr>
                <td>
                    <small>
                        <strong>Tanggal Cetak: </strong>{{ Carbon::now()->locale('id')->isoFormat('DD MMMM YYYY') }}
                    </small>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
