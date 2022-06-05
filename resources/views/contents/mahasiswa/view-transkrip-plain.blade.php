<html>

<body>
    <center>
        <h2>
            <strong> Transkrip Mata Kuliah </strong>
        </h2>
        <table border="1">
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
        `<br>
        <table border="1">
            <tr align="center">
                <td colspan="5">
                    <h3>Tahap: Persiapan</h3>
                </td>
            </tr>
            <tr>
                <th width="150px">Kode</th>
                <th width="300px">Mata Kuliah</th>
                <th width="50px">SKS</th>
                <th width="150px">Historis Nilai</th>
                <th width="100px">Nilai</th>
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
            </tr>
            <tr align="center">
                <td colspan="5">Total Sks Tahap Persiapan: {{ $mkPersiapan->sum('sks') }}</td>
            </tr>
            <tr align="center">
                <td colspan="5">IP Tahap Persiapan: {{ $ipPersiapan }}</td>
            </tr>
        </table>
        <h3>Tahap: Sarjana</h3>
        <table border="1">
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
        </table>
        <table>
            <tr>
                <td>Total Sks Tahap Sarjana</td>
                <td>:</td>
                <td>{{ $mkSarjana->sum('sks') }}</td>
            </tr>
            <tr>
                <td>IP Tahap Sarjana</td>
                <td>:</td>
                <td>{{ $ipSarjana }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <td>Total Sks</td>
                <td>:</td>
                <td>{{ $mkPersiapan->sum('sks') + $mkSarjana->sum('sks') }}</td>
            </tr>
            <tr>
                <td>IPK</td>
                <td>:</td>
                <td>{{ $ipk }}</td>
            </tr>
        </table>
    </center>
    </main>
</body>

</html>
