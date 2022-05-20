@extends('dashboard')

@section('title', 'Profile')

{{-- Content --}}
@section('main')

<div class="container">
    {{-- Content --}}
    <main>
        {{-- /view/contents/ --}}
        <div class="content text-center">
            {{-- Isi disini --}}
            <div>
                <i class="bi bi-person-circle" style="font-size: 8rem"></i>
            </div>
            <div>
                <h1 class="display-3 fw-bold my-2">{{ auth()->user()->namaMahasiswa }}</h1>
            </div>
            <div>
                <h3 class="fw-semibold my-2">{{ auth()->user()->NRP }}</h3>
            </div>
            <div class="d-flex flex-row">
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" href="#" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-stack fs-1"></i>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="akademikDropdown">
                        <li><a class="dropdown-item" href="/frs">Formulir Rencana Studi</a></li>
                        <li><a class="dropdown-item" href="/kurikulum">Kurikulum Semester</a></li>
                        <li><a class="dropdown-item" href="/transkrip">Transkrip Nilai</a></li>
                        <li><a class="dropdown-item" href="#">Kuesioner Dosen & MK</a></li>
                    </ul>
                </span>
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" href="/ukt">
                        <i class="bi bi-receipt-cutoff fs-1"></i>
                    </a>
                </span>
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-megaphone fs-1"></i>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="layananDropdown">
                        <li><a class="dropdown-item" href="/suratMahasiswa2">Surat Mahasiswa Aktif</a></li>
                        <li><a class="dropdown-item" href="#">Surat Cuti</a></li>
                        <li><a class="dropdown-item" href="/suratundurdiri">Surat Mengundurkan Diri</a></li>
                    </ul>
                </span>
            </div>
        </div>
    </main>
</div>

@endsection
