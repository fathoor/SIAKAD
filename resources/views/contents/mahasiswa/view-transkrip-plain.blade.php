@extends('dashboard')

@section('title', 'Transkrip')


{{-- Content --}}
@section('main')

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
                            <td></td>
                        </tr>
                        <tr>
                            <td>NRP</td>
                            <td>:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>SKS Tempuh / SKS Lulus</td>
                            <td>:</td>
                            <td></td>
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
                        </table>
                    </div>
                </div>
                <div>
                        <div>
                            <label>Total Sks Tahap Persiapan</label>
                            <label>: </label>
                            <div></div>
                        </div>
                        <div>
                            <label>IP Tahap Persiapan</label>
                            <label>: </label>
                            <div></div>
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
                        </table>
                    </div>
                </div>
                <div>
                        <div>
                            <label>Total Sks Tahap Sarjana</label>
                            <label>: </label>
                            <div></div>
                        </div>
                        <div>
                            <label>IP Tahap Sarjana</label>
                            <label>: </label>
                            <div></div>
                        </div>

                </div>
                <div>
                        <div>
                            <label>Total Sks</label>
                            <label>: </label>
                            <div></div>
                        </div>
                        <div>
                            <label>IPK</label>
                            <label>: </label>
                            <div>
                            </div>
                        </div>
                </div>
            </div>
        </main>
    </div>

