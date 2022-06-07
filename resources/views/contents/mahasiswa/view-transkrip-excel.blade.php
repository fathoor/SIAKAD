<table>
    <tr>
        <td>Transkrip Mata Kuliah</td>
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
        <td>SKS Tempuh / SKS Lulus</td>
        <td>:</td>
        <td>{{ $sksTempuh }}/{{ $sksLulus }}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>:</td>
        <td>Normal</td>
    </tr>
    <tr>
        <td>
            <h3>Tahap: Persiapan</h3>
        </td>
    </tr>
    <tr>
        <th>Kode</th>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Historis Nilai</th>
        <th>Nilai</th>
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
    <tr>
        <td>Total Sks Tahap Persiapan: {{ $mkPersiapan->sum('sks') }}</td>
    </tr>
    <tr>
        <td>IP Tahap Persiapan: {{ round($ipPersiapan, 2) }}</td>
    </tr>
    <tr>
        <td>Tahap: Sarjana</td>
    </tr>
    <tr>
        <th>Kode</th>
        <th>Mata Kuliah</th>
        <th>SKS</th>
        <th>Historis Nilai</th>
        <th>Nilai</th>
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
    <tr>
        <td>Total Sks</td>
        <td>:</td>
        <td>{{ $mkPersiapan->sum('sks') + $mkSarjana->sum('sks') }}</td>
    </tr>
    <tr>
        <td>IPK</td>
        <td>:</td>
        <td>{{ round($ipk, 2) }}</td>
    </tr>
    <tr>
        <td>
            CATATAN
            <br>
            Transkrip Akademik ini hanya berlaku untuk keperluan:
            <ol>
                <li>Pengajuan Beasiswa</li>
                <li>Melamar Pekerjaan</li>
                <li>Persyaratan Yudisium</li>
                <li>Tunjangan Gaji</li>
                <li>........................................................... (tuliskan keperluannya)</li>
            </ol>
        </td>
    </tr>
    <tr>
        <td>
            Tanggal Cetak: {{ Carbon::now()->locale('id')->isoFormat('DD MMMM YYYY') }}
        </td>
    </tr>
</table>
