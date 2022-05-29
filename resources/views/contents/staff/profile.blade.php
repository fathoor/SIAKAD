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
                {{-- Akun --}}
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" href="/staff/civitas">
                        <i class="bi bi-shield-lock fs-1"></i>
                    </a>
                </span>
                {{-- Akademik --}}
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-mortarboard fs-1"></i>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="akademikDropdown">
                        <li><a class="dropdown-item" href="/staff/kurikulum">Kurikulum</a></li>
                        <li><a class="dropdown-item" href="/staff/kelas">Kelas</a></li>
                    </ul>
                </span>
                {{-- Finansial --}}
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" href="/staff/ukt">
                        <i class="bi bi-receipt-cutoff fs-1"></i>
                    </a>
                </span>
                {{-- Surat --}}
                <span class="d-flex flex-col my-2 mx-3">
                    <a class="nav-link" href="/staff/surat">
                        <i class="bi bi-megaphone fs-1"></i>
                    </a>
                </span>
            </div>
        </div>
    </main>
</div>

@endsection