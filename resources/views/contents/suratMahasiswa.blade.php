@extends('dashboard')

@section('title', 'Surat Mahasiswa')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Surat Keterangan Aktif</h2>
            </div>
            <div class="formBox">
                <form class="form-inline" id="input" action="">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="periode" class="col-3 col-form-label">Periode</label>
                        <label for="periode" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <select class="form-select" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="keperluan" class="col-3 col-form-label">Keperluan</label>
                        <label for="keperluan" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <select class="form-select" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="gajiortu">mengurus tunjangan gaji orang tua/to request a statement of parental salary</option>
                                <option value="pensiunortu">mengurus tunjangan pensiun orang tua/to request a statement of parental pension fund</option>
                                <option value="bpjs">mengurus BPJS/asuransi kesehatan/to propose BPJS/health insurance</option>
                                <option value="beasiswa">mengurus beasiswa/for applying scholarship</option>
                                <option value="hilangktm">mengurus kehilangan KTM/to file a report for missing student ID card</option>
                                <option value="lamarkerja">melamar pekerjaan/for applying for a job</option>
                                <option value="laporanhilang">mengurus laporan kehilangan ke kepolisian/to file a report for missing property                                </option>
                                <option value="visa">mengurus visa/to apply for a visa</option>
                                <option value="lomba">mengikuti lomba/for following a competition</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-6 mb-1">
                            <button class="btn btn-primary" type="submit">Ajukan Surat</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
</div>

@endsection
