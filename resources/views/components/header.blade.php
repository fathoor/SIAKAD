{{-- Navbar --}}
<header class="header shadow">
    <nav class="navbar navbar-expand-lg navbar-dark p-3">
        {{-- Logo --}}
        @switch(auth()->user()->type)
            @case('dosen')
                <a class="navbar-brand" href="/dashboard/dosen">
                    <img src="/img/siakad_logo_putih.svg" height="30">
                </a>
                @break
            @case('staff')
                <a class="navbar-brand" href="/dashboard/staff">
                    <img src="/img/siakad_logo_putih.svg" height="30">
                </a>
                @break
            @case('mahasiswa')
                <a class="navbar-brand" href="/dashboard">
                    <img src="/img/siakad_logo_putih.svg" height="30">
                </a>
                @break
        @endswitch
        {{-- Mobile Navs --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileDropdown" aria-controls="mobileDropdown" aria-expanded="false">
            <i class="bi bi-list fs-1"></i>
        </button>
        {{-- Navs --}}
        <div class=" collapse navbar-collapse" id="mobileDropdown">
            <ul class="navbar-nav ms-auto align-items-center">
                @switch(auth()->user()->type)
                    @case('dosen')
                        {{-- Akademik --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('dosen/mataKuliah*', 'dosen/kurikulum*', 'dosen/kuesioner*', 'peserta*') ? 'active' : '' }}" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-mortarboard fs-5"></i> <span class="fs-5 ms-2">Akademik</span>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="akademikDropdown">
                                <li><a class="dropdown-item" href="/dosen/mataKuliah">Mata Kuliah</a></li>
                                <li><a class="dropdown-item" href="/dosen/kurikulum">Kurikulum Semester</a></li>
                                <li><a class="dropdown-item" href="/dosen/kuesioner">Kuesioner Dosen & MK</a></li>
                            </ul>
                        </li>
                        {{-- Mahasiswa --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('dosen/daftarMahasiswa*', 'dosen/nilai*', 'dosen/FRS*') ? 'active' : '' }}" id="mahasiswaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-shield fs-5"></i> <span class="fs-5 ms-2">Mahasiswa</span>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="mahasiswaDropdown">
                                <li><a class="dropdown-item" href="/dosen/daftarMahasiswa">Daftar Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="/dosen/nilai">Nilai Mahasiswa</a></li>
                                <li><a class="dropdown-item" href="/dosen/FRS">Formulir Rencana Studi</a></li>
                            </ul>
                        </li>
                        {{-- Profil --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('dashboard*', 'biodata*') ? 'active' : '' }}" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-person-circle fs-2"></i>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="/biodata">Biodata</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @break
                    @case('staff')
                        {{-- Civitas --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('staff/civitas*') ? 'active' : '' }}" href="/staff/civitas">
                                <i class="bi bi-shield-lock fs-5"></i> <span class="fs-5 ms-2">Civitas</span>
                            </a>
                        </li>
                        {{-- Akademik --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('staff/kurikulum*', 'staff/kelas*', 'peserta*') ? 'active' : '' }}" id="staffDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-mortarboard fs-5"></i> <span class="fs-5 ms-2">Akademik</span>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="staffDropdown">
                                <li><a class="dropdown-item" href="/staff/kurikulum">Kurikulum</a></li>
                                <li><a class="dropdown-item" href="/staff/kelas">Kelas</a></li>
                            </ul>
                        </li>
                        {{-- Finansial --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('staff/ukt*') ? 'active' : '' }}" href="/staff/ukt">
                                <i class="bi bi-receipt-cutoff fs-5"></i> <span class="fs-5 ms-2">Finansial</span>
                            </a>
                        </li>
                        {{-- Layanan --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('staff/surat*') ? 'active' : '' }}" href="/staff/surat">
                                <i class="bi bi-megaphone fs-5"></i> <span class="fs-5 ms-2">Layanan</span>
                            </a>
                        </li>
                        {{-- Profil --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('dashboard*', 'biodata*') ? 'active' : '' }}" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-person-circle fs-2"></i>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="/biodata">Biodata</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @break
                    @case('mahasiswa')
                        {{-- Akademik --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('frs*', 'kurikulum*', 'transkrip*', 'kuesioner*', 'peserta*') ? 'active' : '' }}" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-mortarboard fs-5"></i> <span class="fs-5 ms-2">Akademik</span>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="akademikDropdown">
                                <li><a class="dropdown-item" href="/frs">Formulir Rencana Studi</a></li>
                                <li><a class="dropdown-item" href="/kurikulum">Kurikulum Semester</a></li>
                                <li><a class="dropdown-item" href="/transkrip">Transkrip Nilai</a></li>
                                <li><a class="dropdown-item" href="/kuesioner">Kuesioner Dosen & MK</a></li>
                            </ul>
                        </li>
                        {{-- Finansial --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('ukt*') ? 'active' : '' }}" href="/ukt">
                                <i class="bi bi-receipt-cutoff fs-5"></i> <span class="fs-5 ms-2">Finansial</span>
                            </a>
                        </li>
                        {{-- Layanan --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('surat*') ? 'active' : '' }}" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-megaphone fs-5"></i> <span class="fs-5 ms-2">Layanan</span>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="layananDropdown">
                                <li><a class="dropdown-item" href="/surat/Aktif">Surat Keterangan Aktif</a></li>
                                <li><a class="dropdown-item" href="/surat/Cuti">Surat Cuti</a></li>
                                <li><a class="dropdown-item" href="/surat/UndurDiri">Surat Mengundurkan Diri</a></li>
                            </ul>
                        </li>
                        {{-- Profil --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-3 {{ request()->is('dashboard*', 'biodata*') ? 'active' : '' }}" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi-person-circle fs-2"></i>
                            </a>
                            <ul class="dropdown-menu text-left" aria-labelledby="profileDropdown">
                                <li><a class="dropdown-item" href="/biodata">Biodata</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @break
                @endswitch
            </ul>
        </div>
    </nav>
</header>
