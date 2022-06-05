@extends('dashboard')

@section('title', 'Surat Keterangan Aktif')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row mb-4">
                <h2 class="fw-bold">Surat Keterangan Aktif</h2>
            </div>
            <form class="form" id="input" action="/suratAktif/store" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <label for="periode" class="col-3 col-form-label">Periode</label>
                    <label for="periode" class="col-1 col-form-label">:</label>
                    <div class="col-8">
                        <select class="form-select" name="periode" required>
                            <option selected disabled value="">Pilih</option>
                            <option value="Ganjil 2022">Ganjil 2022</option>
                            <option value="Genap 2021">Genap 2021</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="keperluan" class="col-3 col-form-label">Keperluan</label>
                    <label for="keperluan" class="col-1 col-form-label">:</label>
                    <div class="col-8">
                        <select class="form-select" name="keperluan" required>
                            <option selected disabled value="">Pilih</option>
                            <option value="Tunjangan gaji orang tua">Mengurus tunjangan gaji orang tua / To request a statement of parental salary</option>
                            <option value="Tunjangan pensiun orang tua">Mengurus tunjangan pensiun orang tua / To request a statement of parental pension fund</option>
                            <option value="BPJS / Asuransi Kesehatan">Mengurus BPJS/Asuransi Kesehatan / To propose BPJS/Health Insurance</option>
                            <option value="Beasiswa">Mengurus beasiswa / For applying scholarship</option>
                            <option value="Kehilangan KTM">Mengurus kehilangan KTM / To file a report for missing student ID card</option>
                            <option value="Pekerjaan">Melamar pekerjaan / For applying for a job</option>
                            <option value="Laporan kehilangan kepolisian">Mengurus laporan kehilangan ke kepolisian / To file a report for missing property</option>
                            <option value="VISA">Mengurus VISA / To apply for a VISA</option>
                            <option value="Lomba">Mengikuti lomba / For following a competition</option>
                        </select>
                    </div>
                </div>
            </form>
            <div class="row text-center">
                <div class="mt-3">
                    <a>
                        <button class="btn btn-primary" type="submit" form="input">
                            <i class="bi bi-plus-lg fs-6"></i><span class="fs-6 ms-2">Ajukan Surat</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection