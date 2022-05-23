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
            <div class="container text-center">
                <h2 class="fw-bold">Surat Cuti</h2>
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
                                <option value="2021-Genap">2021-Genap</option>
                                <option value="2022-Ganjil">2022-Ganjil</option>
                                <option value="2022-Genap">2022-Genap</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="jmlsmt" class="col-3 col-form-label">Jumlah Semester</label>
                        <label for="jmlsmt" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <select class="form-select" required>
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
                            <select class="form-select" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="sakit">Sakit</option>
                                <option value="bekerja">Bekerja</option>
                                <option value="telatbayar">Telat Bayar SPP/UKT</option>
                                <option value="hamil">Hamil</option>
                                <option value="melahirkan">Melahirkan</option>
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
