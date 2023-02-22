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
    <a href="/lkps"
        class="nav-link {{ request()->is('lkps') ? 'active' : '' }} {{ request()->is('lkps') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
            Isi Form
        </p>
    </a>
</li>
