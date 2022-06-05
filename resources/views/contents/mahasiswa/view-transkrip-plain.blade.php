<html>

<body>
    <div>
        {{-- Content --}}
        <main>
            {{-- /view/contents/ --}}
            <div>
                {{-- Isi disini --}}
                <div>
                    <h2>
                        <strong> Transkrip Mata Kuliah </strong>
                    </h2>
                    <table>
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
                <div>
                    <div>
                        <h4>Tahap: Persiapan</h4>
                        <table>
                            <tr>
                                <th width="150px">Kode</th>
                                <th width="300px">Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="50px">Kelas</th>
                                <th width="300px">Dosen</th>
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
                <div>
                    <div>
                        <label>Total Sks Tahap Persiapan</label>
                        <label>: </label>
                        <div>{{ $mkPersiapan->sum('sks') }}</div>
                    </div>
                    <div>
                        <label>IP Tahap Persiapan</label>
                        <label>: </label>
                        <div>{{ $ipPersiapan }}</div>
                    </div>
                </div>
                <div>
                    <div>
                        <h4>Tahap: Sarjana</h4>
                        <table>
                            <tr>
                                <th width="150px">Kode</th>
                                <th width="300px">Mata Kuliah</th>
                                <th width="50px">SKS</th>
                                <th width="50px">Kelas</th>
                                <th width="300px">Dosen</th>
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
                <div>
                    <div>
                        <label>Total Sks Tahap Sarjana</label>
                        <label>: </label>
                        <div>{{ $mkSarjana->sum('sks') }}</div>
                    </div>
                    <div>
                        <label>IP Tahap Sarjana</label>
                        <label>: </label>
                        <div>{{ $ipSarjana }}</div>
                    </div>

                </div>
                <div>
                    <div>
                        <label>Total Sks</label>
                        <label>: </label>
                        <div>{{ $mkPersiapan->sum('sks') + $mkSarjana->sum('sks') }}</div>
                    </div>
                    <div>
                        <label>IPK</label>
                        <label>: </label>
                        <div>{{ $ipk }}</div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>
