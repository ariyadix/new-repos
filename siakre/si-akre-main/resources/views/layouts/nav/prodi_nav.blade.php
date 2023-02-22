<li class="nav-header">MENU IAPS</li>
<li class="nav-item">
    <a href="/lkps"
        class="nav-link {{ request()->is('lkps') ? 'active' : '' }} {{ request()->is('lkps/*') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
            Laporan Kinerja Prodi
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="/led" class="nav-link">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
            Laporan Evaluasi Diri
        </p>
    </a>
</li>


<li class="nav-item">
    <a href="/matriks" class="nav-link {{ request()->is('matriks') ? 'active' : '' }}">
        <i class="nav-icon fas fa-pen"></i>
        <p>
            Matriks Penilaian
        </p>
    </a>
</li>
<li class="nav-header">ADMIN</li>
<li class="nav-item {{ request()->is('profile*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('lkps/*/0*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-cog"></i>
        <p>Pengaturan
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/profile" class="nav-link {{ request()->is('profile*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Profil Prodi</p>
            </a>
        </li>
    </ul>
</li>
