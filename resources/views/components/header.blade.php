{{-- Navbar --}}
<header class="header shadow">
    <nav class="navbar navbar-expand-lg navbar-dark p-3">
        @if(auth()->user()->type == 'dosen')
        {{-- Logo --}}
        <a class="navbar-brand" href="/dashboard/dosen">
            <img src="/img/siakad_logo.png" height="30">
        </a>
        @elseif(auth()->user()->type == 'staff')
        {{-- Logo --}}
        <a class="navbar-brand" href="/dashboard/staff">
            <img src="/img/siakad_logo.png" height="30">
        </a>
        @else
        {{-- Logo --}}
        <a class="navbar-brand" href="/dashboard">
            <img src="/img/siakad_logo.png" height="30">
        </a>
        @endif
        {{-- Button untuk mode mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileDropdown"
            aria-controls="mobileDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-1"></i>
        </button>
        {{-- Navs --}}
        <div class=" collapse navbar-collapse" id="mobileDropdown">
            <ul class="navbar-nav ms-auto align-items-center">
                @if(auth()->user()->type == 'dosen')
                {{-- Akademik --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 {{ request()->is('dosen/*') ? 'active' : '' }}" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-mortarboard fs-5"></i> <span class="fs-5 ms-2">Akademik</span>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="akademikDropdown">
                        <li><a class="dropdown-item" href="#">Mata Kuliah</a></li>
                        <li><a class="dropdown-item" href="/dosen/kurikulum">Kurikulum Semester</a></li>
                        <li><a class="dropdown-item" href="#">Kuesioner Dosen & MK</a></li>
                    </ul>
                </li>
                {{-- Mahasiswa --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 {{ request()->is('dosen/*') ? 'active' : '' }}" id="mahasiswaDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-shield fs-5"></i> <span class="fs-5 ms-2">Mahasiswa</span>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="mahasiswaDropdown">
                        <li><a class="dropdown-item" href="#">Daftar Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="#">Nilai Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="#">Formulir Rencana Studi</a></li>
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
                @elseif(auth()->user()->type == 'staff')
                {{-- File --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 {{ request()->is('staff/*') ? 'active' : '' }}" href="/dashboard/staff" id="staffDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-clipboard2 fs-5"></i> <span class="fs-5 ms-2">Akademik</span>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="staffDropdown">
                        <li><a class="dropdown-item" href="/staff/kurikulum">Kurikulum</a></li>
                        <li><a class="dropdown-item" href="#">Nilai Mahasiswa</a></li>
                        <li><a class="dropdown-item" href="#">Formulir Rencana Studi</a></li>
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
                @else
                {{-- Akademik --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 {{ request()->is('frs*', 'kurikulum*', 'transkrip*', 'kuesioner*') ? 'active' : '' }}" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <li><a class="dropdown-item" href="/suratAktif">Surat Keterangan Aktif</a></li>
                        <li><a class="dropdown-item" href="/suratCuti">Surat Cuti</a></li>
                        <li><a class="dropdown-item" href="/suratUndurDiri">Surat Mengundurkan Diri</a></li>
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
                @endif
            </ul>
        </div>
    </nav>
</header>
