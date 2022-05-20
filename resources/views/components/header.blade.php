{{-- Navbar --}}
<header class="header shadow">
    <nav class="navbar navbar-expand-lg navbar-dark p-3">
        {{-- Logo --}}
        <a class="navbar-brand" href="/">
            <img src="/img/siakad_logo.png" height="30">
        </a>
        {{-- Button untuk mode mobile --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileDropdown" aria-controls="mobileDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi bi-list fs-1"></i>
        </button>
        {{-- Navs --}}
        <div class=" collapse navbar-collapse" id="mobileDropdown">
            <ul class="navbar-nav ms-auto align-items-center">
                {{-- Akademik --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 {{ (request()->is('frs*', 'kurikulum*', 'transkrip*')) ? 'active' : '' }}" href="#" id="akademikDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-stack fs-5"></i> <span class="fs-5 ms-2">Akademik</span>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="akademikDropdown">
                        <li><a class="dropdown-item" href="/frs">Formulir Rencana Studi</a></li>
                        <li><a class="dropdown-item" href="/kurikulum">Kurikulum Semester</a></li>
                        <li><a class="dropdown-item" href="/transkrip">Transkrip Nilai</a></li>
                        <li><a class="dropdown-item" href="#">Kuesioner Dosen & MK</a></li>
                    </ul>
                </li>
                {{-- Finansial --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3" href="/ukt">
                        <i class="bi bi-receipt-cutoff fs-5"></i> <span class="fs-5 ms-2">Finansial</span>
                    </a>
                </li>
                {{-- Layanan --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 {{ (request()->is('suratmahasiswa*', 'suratundurdiri*')) ? 'active' : '' }}" href="#" id="layananDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-megaphone fs-5"></i> <span class="fs-5 ms-2">Layanan</span>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="layananDropdown">
                        <li><a class="dropdown-item" href="/suratMahasiswa2">Surat Mahasiswa Aktif</a></li>
                        <li><a class="dropdown-item" href="#">Surat Cuti</a></li>
                        <li><a class="dropdown-item" href="/suratundurdiri">Surat Mengundurkan Diri</a></li>
                    </ul>
                </li>
                {{-- Profil --}}
                <li class="nav-item dropdown">
                    <a class="nav-link mx-3 {{ (request()->is('dashboard*', 'biodata*')) ? 'active' : '' }}" href="/dashboard" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-person-circle fs-2"></i>
                    </a>
                    <ul class="dropdown-menu text-left" aria-labelledby="profileDropdown">
                        <li><a class="dropdown-item" href="/biodata">Biodata</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
