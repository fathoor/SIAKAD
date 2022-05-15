{{-- Layout --}}
@extends('layouts.main')

{{-- Title --}}
@section('title', 'Dashboard')

{{-- Content --}}
@section('content')

<body class="bg-white">
    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-md-2 col-sm-auto sticky-top shadow"> {{-- Navbar Biru --}}
                <div class="sidebar d-flex flex-sm-column flex-row flex-nowrap align-items-center sticky-top">
                    <a href="/" class="d-flex py-4 px-3"> {{-- Logo SIAKAD --}}
                        <img src="/img/siakad_putih.png" alt="" class="img-fluid">
                    </a>
                    <ul class="nav nav-pills nav-flush flex-sm-column flex-row flex-nowrap align-items-center mx-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link py-3 px-2"> {{-- Nav Akademik --}}
                                <i class="bi bi-stack fs-4"></i> <span class="fs-4 ms-1 d-none d-sm-inline">Akademik</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2"> {{-- Nav Finansial --}}
                                <i class="bi bi-receipt-cutoff fs-4"></i> <span class="fs-4 ms-1 d-none d-sm-inline">Finansial</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link py-3 px-2"> {{-- Nav Layanan --}}
                                <i class="bi bi-megaphone fs-4"></i> <span class="fs-4 ms-1 d-none d-sm-inline">Layanan</span>
                            </a>
                        </li>
                    </ul>
                    <div class="dropdown">
                        <a href="#" class="d-flex align-items-center justify-content-center p-4 dropdown-toggle" id="dropdown" data-bs-toggle="dropdown">
                            <i class="bi-person-circle fs-1"></i>
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdown">
                            <li><a class="dropdown-item" href="#">Profil</a></li>
                            <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm p-3 min-vh-100">
                <!-- Content -->
                <div class="container text-dark flex-wrap">
                    <div class="content">
                        Kosong
                    </div>

                    {{-- Footer --}}
                    @include('components.footer')
                </div>
            </div>
        </div>
    </div>
</body>