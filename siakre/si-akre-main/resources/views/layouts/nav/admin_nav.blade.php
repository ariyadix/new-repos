<li class="nav-header">ADMIN</li>
<li class="nav-item">
    <a href="/admin/iaps"
        class="nav-link {{ request()->is('admin/iaps*') ? 'active' : '' }} {{ request()->is('admin/iaps*') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-chart-bar"></i>
        <p>
            Data IAPS Prodi
        </p>
    </a>
</li>
<li class="nav-item">
    <a href="/audit-log"
        class="nav-link {{ request()->is('audit-log*') ? 'active' : '' }} {{ request()->is('audit-log*') ? 'nav-gray' : '' }}">
        <i class="nav-icon fas fa-history"></i>
        <p>
            Log
        </p>
    </a>
</li>
<li class="nav-header">KELOLA</li>
<li class="nav-item {{ request()->is('manage*') ? 'menu-open' : '' }}">
    <a href="" class="nav-link {{ request()->is('manage*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Pengguna
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="/manage/mhs" class="nav-link {{ request()->is('manage/mhs*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Mahasiswa</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/manage/dosen" class="nav-link {{ request()->is('manage/dosen*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Dosen</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/manage/prodi"
                class="nav-link {{ request()->is('manage/prodi*') || request()->is('manage/add-prodi') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Prodi</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="/manage/reviewer" class="nav-link {{ request()->is('manage/reviewer*') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Reviewer</p>
            </a>
        </li>
    </ul>
</li>
<li class="nav-item">
    <a href="/form-access"
        class="nav-link {{ request()->is('form-access*') ? 'active' : '' }} {{ request()->is('form-access*') ? 'nav-gray' : '' }}">

        <i class="nav-icon fas fa-user-lock"></i>
        <p>
            Akses Form
        </p>
    </a>
</li>
