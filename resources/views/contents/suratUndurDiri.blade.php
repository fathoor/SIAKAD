@extends('dashboard')

@section('title', 'Surat Undur Diri')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content">
            {{-- Isi disini --}}
            <div class="container text-center">
                <h2 class="fw-bold">Surat Mengundurkan Diri</h2>
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
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="alasan" class="col-3 col-form-label">Alasan Mundur</label>
                        <label for="alasan" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <input type="textbox" id="alasan" class="form-control" placeholder="Alasan..." required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <label for="pilihanselesai" class="col-3 col-form-label">Pilihan Selesai</label>
                        <label for="pilihanselesai" class="col-1 col-form-label">:</label>
                        <div class="col-8">
                            <select class="form-select" required>
                                <option selected disabled value="">Pilih</option>
                                <option value="">Kerja</option>
                                <option value="">Kerja</option>
                                <option value="">Kerja</option>
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
    </main>
</div>

@endsection