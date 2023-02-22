@if (array_key_exists(1, $tables))
@endif
<li class="nav-header">KRITERIA KINERJA</li>
{{-- @if (array_key_exists(2, $tables))
    <li class="nav-item {{ request()->is('lkps/*/2*') ? 'menu-open' : '' }}">
        <a href="" class="nav-link {{ request()->is('lkps/*/2*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                2. Tata Pamong, Tata Kelola, dan Kerjasama
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[2] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/21*') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>2. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif --}}
@if (array_key_exists(3, $tables))

    <li class="nav-item {{ request()->is('lkps/*/3*') ? 'menu-open' : '' }}">
        <a href="" class="nav-link {{ request()->is('lkps/*/3*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                3. Mahasiswa
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[3] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/' . $n) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>3. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach

        </ul>
    </li>
@endif
@if (array_key_exists(4, $tables))
    <li class="nav-item {{ request()->is('lkps/*/4*') ? 'menu-open' : '' }}">
        <a href="" class="nav-link {{ request()->is('lkps/*/4*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                4. Sumber Daya Manusia
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[4] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/' . $n) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>4. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
@if (array_key_exists(5, $tables))

    <li class="nav-item {{ request()->is('lkps/*/5*') ? 'menu-open' : '' }}">
        <a href="" class="nav-link {{ request()->is('lkps/*/5*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>5. Keuangan, Sarana, dan Prasarana
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[5] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/' . $n) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>5. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
@if (array_key_exists(6, $tables))

    <li class="nav-item {{ request()->is('lkps/*/6*') ? 'menu-open' : '' }}">
        <a href="" class="nav-link {{ request()->is('lkps/*/6*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>6. Pendidikan
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[6] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/' . $n) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>6. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
@if (array_key_exists(7, $tables))

    <li class="nav-item {{ request()->is('lkps/*/7*') ? 'menu-open' : '' }}">
        <a href="" class="nav-link {{ request()->is('lkps/*/7*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>7. Penelitian
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[7] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/' . $n) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>7. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
@if (array_key_exists(8, $tables))

    <li class="nav-item {{ request()->is('lkps/*/8*') ? 'menu-open' : '' }}">
        <a href="" class="nav-link {{ request()->is('lkps/*/8*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>8. Pengabdian kepada Masyarakat (PkM)
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[8] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/' . $n) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>8. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
@if (array_key_exists(9, $tables))

    <li class="nav-item {{ request()->is('lkps/*/9*') ? 'menu-open' : '' }}  mb-5">
        <a href="" class="nav-link {{ request()->is('lkps/*/9*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                9. Luaran dan Capaian Tridharma
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @foreach ($tables[9] as $n)
                <li class="nav-item">
                    <a href="/lkps/view/{{ $n }}{{ (Auth::user()->level == 1||Auth::user()->level == 5) ? '?id=' . $prodi->id : '' }}"
                        class="nav-link {{ request()->is('lkps/*/' . $n) ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>9. {{ (int) (strval($n)[1] . strval($n)[2]) }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </li>
@endif
