@extends('dashboard')

@section('title', 'Profile')

{{-- Content --}}
@section('main')

<div class="container justify-content-center">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content text-center">
            {{-- Isi disini --}}
            <div>
                <i class="bi bi-person-circle" style="font-size: 8rem"></i>
            </div>
            <div>
                <h1 class="display-3 fw-bold my-2">{{ auth()->user()->nama }}</h1>
            </div>
            <div>
                <h3 class="fw-semibold my-2">{{ auth()->user()->departemen }}</h3>
            </div>
            <div class="d-flex flex-row">
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-mortarboard fs-1"></i>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="akademikDropdown">
                        <li><a class="dropdown-item" href="/dosen/mataKuliah">Mata Kuliah</a></li>
                        <li><a class="dropdown-item" href="/dosen/kurikulum">Kurikulum Semester</a></li>
                        <li><a class="dropdown-item" href="/dosen/kuesioner">Kuesioner Dosen & MK</a></li>
                    </ul>
                </span>
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" id="mahasiswaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-shield fs-1"></i>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="mahasiswaDropdown">
                        <li><a class="dropdown-item" href="/dosen/daftarMahasiswa">Daftar Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="/dosen/nilai">Nilai Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="/dosen/FRS">Formulir Rencana Studi</a></li>
                    </ul>
                </span>
            </div>
        </div>
    </main>
</div>

@endsection
