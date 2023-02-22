@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Laporan Evaluasi Diri Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active">Laporan Evaluasi Diri Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="card card-solid">
        <div class="card-body pb-0">
            <div class="row justify-content-center">
                <section class="col-lg-9 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">IDENTITAS</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <p><b>Program Studi : </b>{{ $prodi->nama }}</p>
                                </div>
                            </div>
                            <div class="row d-flex align-items-right">
                         <a class="btn btn-success "
                             href="/led/all{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i class="fas fa-print"></i> Print semua</a>
                        </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">Struktur Laporan Evaluasi Diri</h3>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <div class="card collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-list-ul mr-1"></i></i>
                                I. Pendahuluan
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row m-1 ">
                                <div class="card m-0 col-12">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            A. Dasar Penyusunan
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active"
                                                        href="/led/111{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1 ">
                                <div class="card m-0 col-12">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            B. Tim Penyusun dan Tanggungjawabnya
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active"
                                                        href="/led/121{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1 ">
                                <div class="card m-0 col-12">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            C. Mekanisme Kerja Penyusunan Evaluasi Diri
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active"
                                                        href="/led/131{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card collapsed-card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-list-ul mr-1"></i></i>
                                II. Laporan Evaluasi Diri
                            </h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="row m-1 ">
                                <div class="card m-0 col-12">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            A. Kondisi Eksternal
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active"
                                                        href="/led/211{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1 ">
                                <div class="card m-0 col-12 collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            B. Profil Unit Pengelola Program Studi dan Program Studi yang Diakreditasi
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        1. Sejarah Unit Pengelola Program Studi
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/221{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        2. Visi, Misi, Tujuan, Strategi, dan Tata Nilai
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/222{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        3. Organisasi dan Tata Kerja
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/223{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        4. Mahasiswa dan Lulusan
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/224{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        5. Dosen dan Tenaga Kependidikan
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/225{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        6. Keuangan, Sarana, dan Prasarana
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/226{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        7. Sistem Penjaminan Mutu
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/227{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        8. Kinerja Unit Pengelola Program Studi dan Program Studi yang
                                                        Diakreditasi
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/228{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="row m-1 ">
                                <div class="card m-0 col-12 collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            C. Kriteria
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.1. Visi, misi, tujuan dan strategi
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/231{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.2. Tata kelola, tata pamong, dan kerjasama
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.3. MAHASISWA </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.4. SUMBER DAYA MANUSIA </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.5. KEUANGAN, SARANA DAN PRASARANA </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.6. PENDIDIKAN </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.7. PENELITIAN </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.8. PENGABDIAN KEPADA MASYARAKAT </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        C.9. LUARAN DAN CAPAIAN TRIDHARMA </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/232{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-1 ">
                                <div class="card m-0 col-12 collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            D. Suplemen Program Studi
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        1. Kriteria Pendidikan
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/241{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        2. Kriteria Pengabdian kepada Masyarakat
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/242{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="row m-1 ">
                                <div class="card m-0 col-12 collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            E. Analisis Dan Penetapan Program Pengembangan Unit Pengelola Program Studi
                                            Terkait Program Studi Yang Diakreditasi
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        1. Analisis Capaian Kinerja
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/251{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        2. Analisis SWOT atau Analisis Lain yang Relevan
                                                    </h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/252{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        3. Strategi Pengembangan</h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/253{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-1 ">
                                            <div class="card m-0 col-12">
                                                <div class="card-header">
                                                    <h3 class="card-title">
                                                        4. Program Keberlanjutan</h3>
                                                    <div class="card-tools">
                                                        <ul class="nav nav-pills ml-auto">
                                                            <li class="nav-item">
                                                                <a class="nav-link active"
                                                                    href="/led/254{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row m-1 ">
                                <div class="card m-0 col-12">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            F. Penutup
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active"
                                                        href="/led/261{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}">Isi</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
@endsection
