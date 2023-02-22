@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Profil Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active">Profil Program Studi</li>
        </ol>
    </div><!-- /.col -->
    <div class="col-sm-12 mt-2">
        @if (session('pesan'))
            <div class="alert alert-success" role="alert">
                {{ session('pesan') }}
            </div>
        @endif
        <!-- /.container-fluid -->
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">IDENTITAS PROGRAM STUDI</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body row justify-content-center">
            <ul class="list-group list-group-unbordered mb-3 col-xl-10 m-2">

                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Nama Program Studi
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->nama ? $prodi->nama : '-' }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Alamat
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->alamat ? $prodi->alamat : '-' }}
                        </div>
                    </div>
                </li>

                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>E-Mail
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->email ? $prodi->email : '-' }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Website
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->website ? $prodi->website : '-' }}
                        </div>
                    </div>
                </li>

                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Nomor SK Pembukaan PS
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->no_sk_pembukaan ? $prodi->no_sk_pembukaan : '-' }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Tanggal SK Pembukaan PS
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->tgl_sk_pembukaan ? $prodi->tgl_sk_pembukaan : '-' }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Pejabat Penandatangan
                                SK Pembukaan PS
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->pejabat_sk_pembukaan ? $prodi->pejabat_sk_pembukaan : '-' }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Tahun Pertama Kali
                                Menerima Mahasiswa
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->thn_menerima_mhs ? $prodi->thn_menerima_mhs : '-' }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Akreditasi PS
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->akreditasi ? $prodi->akreditasi : '-' }}
                        </div>
                    </div>
                </li>
                <li class="list-group-item ">
                    <div class="row">
                        <div class="col-md-5 mb-1 mt-1">
                            <b>Nomor SK BAN-PT
                                <span class="float-right">:</span></b>

                        </div>
                        <div class="col-md-7 mb-1 mt-1">
                            {{ $prodi->no_sk_ban_pt ? $prodi->no_sk_ban_pt : '-' }}
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <div class="col-sm-3">
                    <div class="mt-5 text-left">
                        <a class="btn btn-secondary" href='/profile/edit'><i class="far fa-edit"></i> Ubah Profil</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="mt-5 text-left">
                        <a class="btn btn-warning" href='/profile/edit-password'><i class="fas fa-key"></i> Ubah
                            Password</a>
                    </div>
                </div>
                    </div>

        <!-- /.card-body -->
    </div>
@endsection
