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
