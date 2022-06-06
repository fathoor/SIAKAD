@extends('dashboard')

@section('title', 'Layanan')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}

            <div class="form-group row mb-3">
                <label for="surat" class="col-3 col-form-label">Surat</label>
                <label for="surat" class="col-1 col-form-label">:</label>
                <div class="col-8">
                    <select class="form-select" name="surat" required>
                        <option selected disabled value="">Pilih</option>
                        <option value="suratAktif">Surat Mahasiswa Aktif</option>
                        <option value="suratCuti">Surat Cuti</option>
                        <option value="suratUndurDiri">Surat Undur Diri</option>
                    </select>
                </div>
            </div>

            <?php
            if($n->nilaiangka <=40){
                echo "E";
            } elseif ($n->nilaiangka >=41 && $n->nilaiangka <=55) {
                echo "D";
            } elseif ($n->nilaiangka >=56 && $n->nilaiangka <=60) {
                echo "C";
            } elseif ($n->nilaiangka >=61 && $n->nilaiangka <=65) {
                echo "BC";
            } elseif ($n->nilaiangka >=66 && $n->nilaiangka <=75) {
                echo "B";
            } elseif ($n->nilaiangka >=76 && $n->nilaiangka <=85) {
                echo "AB";
            } else{
                echo "A";
            }
            ?>
            
                @if($type == 'Aktif')
                <h2 class="fw-bold">
                    Permohonan Keterangan Aktif
                </h2>
                @elseif($type == 'Cuti')
                <h2 class="fw-bold">
                    Permohonan Keterangan Berhenti Studi Sementara
                </h2>
                @elseif($type == 'UndurDiri')
                <h2 class="fw-bold">
                    Permohonan Keterangan Berhenti Kuliah
                </h2>
                @endif

            <div class="row mb-4">
                <h2 class="fw-bold">Surat Keterangan Aktif</h2>
            </div>

            <table class="table table-striped table-bordered text-center">
                <tr>
                    <th>No</th>
                    <th>Periode</th>
                    <th>Diajukan</th>
                    <th>Keperluan</th>
                    <th>Status</th>
                    <th>Cetak</th>
                </tr>
                @foreach($aktif as $a)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $a->periodeAktif }}</td>
                    <td>{{ $a->tanggalAjuan }}</td>
                    <td>{{ $a->keperluanSurat }}</td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </main>
</div>

@endsection
