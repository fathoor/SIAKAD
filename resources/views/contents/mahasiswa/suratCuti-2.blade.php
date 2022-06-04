@extends('dashboard')

@section('title', 'Surat Cuti')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="row mb-4">
                <h2 class="fw-bold">Surat Cuti</h2>
            </div>
            <div>
                <form class="form-inline" id="input" action="/suratCuti/store" method="POST">
                    @csrf
                    <div class="form-group row mb-3">
                        <label for="periode" class="col-3 col-form-label">Periode</label>
                        <label for="periode" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <select class="form-select" name="periode" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="Ganjil 2022">Ganjil</option>
                                <option value="Genap 2022">Genap</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="semester" class="col-3 col-form-label">Jumlah Semester</label>
                        <label for="semester" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <select class="form-select" name="semester" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alasan" class="col-3 col-form-label">Alasan Cuti</label>
                        <label for="alasan" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <select class="form-select" name="alasan" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Bekerja">Bekerja</option>
                                <option value="Telat Bayar">Telat Bayar SPP/UKT</option>
                                <option value="Hamil">Hamil</option>
                                <option value="Melahirkan">Melahirkan</option>
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
        </div>
    </main>
</div>

@endsection