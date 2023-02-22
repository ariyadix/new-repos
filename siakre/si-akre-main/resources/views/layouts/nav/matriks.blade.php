    <li class="nav-header">MATRIKS PENILAIAN</li>
    <li class="nav-item">
        <a href="/matriks/view/101{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/101') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                A. Kondisi Eksternal dan Profil
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/301{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/301') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.1 Visi, Misi, Tujuan dan Strategi
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/302{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/302') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.2 Tata Pamong, Tata Kelola, dan Kerjasama
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/303{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/303') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.3 Mahasiswa
            </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/304{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/304') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.4 Sumber Daya Manusia </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/305{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/305') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.5 Keuangan, Sarana dan Prasarana </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/306{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/306') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.6 Pendidikan </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/307{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/307') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.7 Penelitian </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/308{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/308') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.8 Pengabdian Kepada Masyarakat </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/309{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/309') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                C.9 Luaran dan Capaian Tridharma </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/401{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/401') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                D. Suplemen PS Sarjana TI </p>
        </a>
    </li>
    <li class="nav-item">
        <a href="/matriks/view/501{{ (Auth::user()->level == 1 || Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('matriks/view/501') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                E. Analisis dan Penetapan Program </p>
        </a>
    </li>
