<li class="nav-header">MENU</li>
<li class="nav-item">
    <a href="/profile"
        class="nav-link {{ request()->is('profile') ? 'active' : '' }} {{ request()->is('profile') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>
            Biodata
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="/matriks"
        class="nav-link {{ request()->is('matriks*') ? 'active' : '' }} {{ request()->is('matriks*') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
            Isi Penilaian
        </p>
    </a>
</li>
