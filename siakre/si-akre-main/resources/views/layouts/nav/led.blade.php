    <li class="nav-header">LAPORAN EVALUASI DIRI</li>

    <li class="nav-item {{ request()->is('led/1*') ? 'menu-open' : '' }}"> <a href=""
            class="nav-link {{ request()->is('led/1*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                BAB I. Pendahuluan
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/led/111{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                    class="nav-link {{ request()->is('led/11*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>A. Dasar Penyusunan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/led/121{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                    class="nav-link {{ request()->is('led/12*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>B. Tim Penyusun dan Tanggungjawabnya
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="/led/131{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                    class="nav-link {{ request()->is('led/13*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>C. Mekanisme Kerja Penyusunan Evaluasi Diri
                    </p>
                </a>
            </li>
        </ul>
    </li>
    <li class="nav-item {{ request()->is('led/2*') ? 'menu-open' : '' }}"> <a href=""
            class="nav-link {{ request()->is('led/2*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                BAB II. Laporan Evaluasi Diri
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="/led/211{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                    class="nav-link {{ request()->is('led/21*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>A. Kondisi Eksternal</p>
                </a>
            </li>

            <li class="nav-item {{ request()->is('led/22*') ? 'menu-open' : '' }}">
                <a href="" class="nav-link {{ request()->is('led/22*') ? 'active' : '' }}"> <i
                        class="far fa-circle nav-icon"></i>
                    <p>B. Profil Unit Pengelola Program Studi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/led/221{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/221*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>1. Sejarah Unit Pengelola Program Studi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/222{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/222*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2. Visi, Misi, Tujuan, Strategi, dan Tata Nilai
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/223{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/223*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>3. Organisasi dan Tata Kerja
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/224{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/224*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>4. Mahasiswa dan Lulusan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/225{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/225*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>5. Dosen dan Tenaga Kependidikan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/226{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/226*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>6. Keuangan, Sarana, dan Prasarana
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/227{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/227*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>7. Sistem Penjaminan Mutu
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/228{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/228*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>8. Kinerja Unit Pengelola Program Studi dan Program Studi yang Diakreditasi
                            </p>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item {{ request()->is('led/23*') ? 'menu-open' : '' }}">
                <a href="" class="nav-link {{ request()->is('led/23*') ? 'active' : '' }}"> <i
                        class="far fa-circle nav-icon"></i>
                    <p>C. Kriteria
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/led/231{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/231*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.1. Visi, misi, tujuan dan strategi
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/232*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.2. Tata kelola, tata pamong, dan kerjasama
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/233{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/233*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.3. Mahasiswa
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/234{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/234*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.4. Sumber Daya Manusia
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/235{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/235*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.5. Keuangan, Sarana, dan Prasarana
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/236{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/236*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.6. Pendidikan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/237{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/237*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.7. Penelitian
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/238{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/238*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.8. Pengabdian Kepada Masyarakat
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/239{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/239*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>C.9. Luaran dan Capaian Tridarma
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ request()->is('led/24*') ? 'menu-open' : '' }}">
                <a href="" class="nav-link {{ request()->is('led/24*') ? 'active' : '' }}"> <i
                        class="far fa-circle nav-icon"></i>
                    <p>D. Suplemen Program Studi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/led/241{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/241*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>1. Kriteria Pendidikan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/242{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/242*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2. Kriteria Pengabdian kepada Masyarakat
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item {{ request()->is('led/25*') ? 'menu-open' : '' }}">
                <a href="" class="nav-link {{ request()->is('led/25*') ? 'active' : '' }}"> <i
                        class="far fa-circle nav-icon"></i>
                    <p>E. Analisis Dan Penetapan Program Pengembangan Unit Pengelola Program Studi Terkait Program Studi
                        Yang Diakreditasi
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/led/251{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/251*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>1. Analisis Capaian Kinerja
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/252{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/252*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>2. Analisis SWOT atau Analisis Lain yang Relevan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/253{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/253*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>3. Strategi Pengembangan
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/led/254{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                            class="nav-link {{ request()->is('led/254*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>4. Program Keberlanjutan
                            </p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li class="nav-item {{ request()->is('led/3*') ? 'menu-open' : '' }}"> <a href="/led/311{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
            class="nav-link {{ request()->is('led/3*') ? 'active' : '' }}">
            <i class="nav-icon fas fa-list-ul"></i>
            <p>
                BAB III. Penutup
            </p>
        </a>
    </li>
