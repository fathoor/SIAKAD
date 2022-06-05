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
            <div class="row mb-4">
                <h2 class="fw-bold">Surat Mengundurkan Diri</h2>
            </div>
            <form class="form-inline" id="input" action="/suratUndurDiri/store" method="POST">
                @csrf
                <div class="form-group row mb-4">
                    <label for="periode" class="col-4 col-form-label">Periode</label>
                    <label for="periode" class="col-1 col-form-label">:</label>
                    <div class="col-7">
                        <select class="form-select" required>
                            <option selected disabled value="">Pilih</option>
                            <option value="Ganjil 2022">Ganjil 2022</option>
                            <option value="Genap 2021">Genap 2021</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row mb-4">
                    <label for="alasan" class="col-4 col-form-label">Alasan Mundur</label>
                    <label for="alasan" class="col-1 col-form-label">:</label>
                    <div class="col-7">
                        <textarea class="form-control" id="alasan" rows="3">Alasan...</textarea>
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