@inject('permission_controller', 'App\Http\Controllers\PermissionController')
@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Akses Form</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-body">
            <div class="row justify-content-center">
                <section class="col-lg-9 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card card-secondary card-outline">
                        <div class="card-body box-profile">
                            <h3 class="profile-username text-center">LKPS</h3>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <form method="POST" enctype="multipart/form-data" action="/form-access/update">
                        @csrf

                        
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    3. Mahasiswa
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel.
                                        3.1. Jumlah Calon Mahasiswa Baru
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos301" name='form301[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(301)->access))) checked="checked" @endif>
                                            <label for="dos301"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs301" name='form301[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(301)->access))) checked="checked" @endif>
                                            <label for="mhs301"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev301" name='form301[]'
                                                value=5 @if (in_array(5, json_decode($permission_controller->getPermission(301)->access))) checked="checked" @endif>
                                            <label for="rev301"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    4. Sumber Daya Manusia
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel
                                        4.2. Daftar Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata
                                        kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti program studi yang
                                        diakreditasi.

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos401" name='form401[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(401)->access))) checked="checked" @endif>
                                            <label for="dos401"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs401" name='form401[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(401)->access))) checked="checked" @endif>
                                            <label for="mhs401"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev401" name='form401[]'
                                                value=5 @if (in_array(5, json_decode($permission_controller->getPermission(401)->access))) checked="checked" @endif>
                                            <label for="rev401"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel
                                        4.2. Daftar Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata
                                        kuliah dengan bidang keahlian yang sesuai dengan kompetensi inti program studi yang
                                        diakreditasi.

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos402" name='form402[]'
                                                value=3 @if (in_array(3, json_decode($permission_controller->getPermission(402)->access))) checked="checked" @endif>
                                            <label for="dos402"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs402" name='form402[]'
                                                value=4 @if (in_array(4, json_decode($permission_controller->getPermission(402)->access))) checked="checked" @endif>
                                            <label for="mhs402"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev402" name='form402[]'
                                                value=5 @if (in_array(5, json_decode($permission_controller->getPermission(402)->access))) checked="checked" @endif>
                                            <label for="rev402"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    5. Keuangan, Sarana, dan Prasarana
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.1.
                                        Sumber Pendanaan Program Studi pada TS


                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos501"
                                                name='form501[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(501)->access))) checked="checked" @endif>
                                            <label for="dos501"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs501"
                                                name='form501[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(501)->access))) checked="checked" @endif>
                                            <label for="mhs501"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev501"
                                                name='form501[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(501)->access))) checked="checked" @endif>
                                            <label for="rev501"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.2.
                                        Aksesibilitas data dalam Sistem Informasi

                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos502"
                                                name='form502[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(502)->access))) checked="checked" @endif>
                                            <label for="dos502"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs502"
                                                name='form502[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(502)->access))) checked="checked" @endif>
                                            <label for="mhs502"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev502"
                                                name='form502[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(502)->access))) checked="checked" @endif>
                                            <label for="rev502"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 5.3.
                                        Pendayagunaan Sarana Utama Laboratorium
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos503"
                                                name='form503[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(503)->access))) checked="checked" @endif>
                                            <label for="dos503"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs503"
                                                name='form503[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(503)->access))) checked="checked" @endif>
                                            <label for="mhs503"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                         <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev503"
                                                name='form503[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(503)->access))) checked="checked" @endif>
                                            <label for="rev503"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="card collapsed-card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-align-left mr-1"></i>
                                    9. Luaran dan Capaian Tridharma
                                </h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.1. IPK Lulusan
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos901"
                                                name='form901[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(901)->access))) checked="checked" @endif>
                                            <label for="dos901"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs901"
                                                name='form901[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(901)->access))) checked="checked" @endif>
                                            <label for="mhs901"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                         <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev901"
                                                name='form901[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(901)->access))) checked="checked" @endif>
                                            <label for="rev901"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.2. Kelulusan Tepat Waktu
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos902"
                                                name='form902[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(902)->access))) checked="checked" @endif>
                                            <label for="dos902"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs902"
                                                name='form902[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(902)->access))) checked="checked" @endif>
                                            <label for="mhs902"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev902"
                                                name='form902[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(902)->access))) checked="checked" @endif>
                                            <label for="rev902"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.3.
                                        Prestasi Mahasiswa dalam Mendapatkan penghargaan Hibah Kompetitif di Bidang Infokom
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos903"
                                                name='form903[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(903)->access))) checked="checked" @endif>
                                            <label for="dos903"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs903"
                                                name='form903[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(903)->access))) checked="checked" @endif>
                                            <label for="mhs903"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev903"
                                                name='form903[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(903)->access))) checked="checked" @endif>
                                            <label for="rev903"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.4. Rata-rata Masa Tunggu Lulusan untuk Bekerja Pertama Kali
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos904"
                                                name='form904[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(904)->access))) checked="checked" @endif>
                                            <label for="dos904"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs904"
                                                name='form904[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(904)->access))) checked="checked" @endif>
                                            <label for="mhs904"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev904"
                                                name='form904[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(904)->access))) checked="checked" @endif>
                                            <label for="rev904"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.5.
                                        Prestasi Mahasiswa dalam Lomba Tingkat Nasional/ Internasional
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos905"
                                                name='form905[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(905)->access))) checked="checked" @endif>
                                            <label for="dos905"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs905"
                                                name='form905[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(905)->access))) checked="checked" @endif>
                                            <label for="mhs905"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev905"
                                                name='form905[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(905)->access))) checked="checked" @endif>
                                            <label for="rev905"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3"
                                        class="col-sm-6 col-form-label font-weight-normal border-right pr-4">Tabel 9.6.
                                        Kelulusan Tepat Waktu
                                    </label>
                                    <div class="col-sm-6 custom-checkbox d-flex align-items-center row pl-4">
                                        <div class="custom-control custom-checkbox col-3">
                                            <input class="custom-control-input" type="checkbox" id="dos906"
                                                name='form906[]' value=3
                                                @if (in_array(3, json_decode($permission_controller->getPermission(906)->access))) checked="checked" @endif>
                                            <label for="dos906"
                                                class="custom-control-label font-weight-normal">Dosen</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="mhs906"
                                                name='form906[]' value=4
                                                @if (in_array(4, json_decode($permission_controller->getPermission(906)->access))) checked="checked" @endif>
                                            <label for="mhs906"
                                                class="custom-control-label font-weight-normal">Mahasiswa</label>
                                        </div>
                                        <div class="custom-control custom-checkbox col">
                                            <input class="custom-control-input" type="checkbox" id="rev906"
                                                name='form906[]' value=5
                                                @if (in_array(5, json_decode($permission_controller->getPermission(906)->access))) checked="checked" @endif>
                                            <label for="rev906"
                                                class="custom-control-label font-weight-normal">Reviewer</label>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-success profile-button" name="save_record" type="submit"
                                value="save_record"><i class="far fa-save"></i> Simpan Perubahan</button>
                        </div>
                    </form>
                </section>
            </div>

        </div>
    </div>
    {{-- <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Menu Admin Program Studi
            </h3>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 style="font-weight: 400">Program Studi</h3>
                        <p>Pengaturan data</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <a href="/dosen/prodi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3 style="font-weight: 400">Profile</h3>

                        <p>Pengaturan akun</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
