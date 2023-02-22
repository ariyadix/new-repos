@extends('layouts.apps')
@section('title', 'Admin Profil ')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Profil</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/manage/prodi">Program Studi</a></li>
            <li class="breadcrumb-item active">{{ $user->name }}</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif<!-- /.container-fluid -->

    <!-- Main content -->
    <div class="card p-4">

        <div>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card " style="height: 100%">
                        <div class="card-body" style="padding-top:3rem">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="mt-3">
                                    <h4>{{ $user->name }}</h4>
                                    <p class="text-secondary mb-1 text-uppercase">{{ $user->username }}</p>
                                    <p class="text-muted font-size-sm"><i class="fas fa-user-lock"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="nav nav-pills" id="mytab">
                        <li class="nav-item">
                            <a href="#biodata" data-toggle="tab" class="nav-link m-l active" aria-expanded="true">Data
                                Admin</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="panel tab-pane wrapper-lg  active" id="biodata">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <ul class="list-group list-group-unbordered mb-3 col-xl-10 m-2">
                                        <li class="list-group-item ">
                                            <div class="row">
                                                <div class="col-md-5 mb-1 mt-1">
                                                    <h6 class="mb-0">Nama
                                                        <span class="float-right">:</span>
                                                    </h6>

                                                </div>
                                                <div class="col-md-7 mb-1 mt-1 text-secondary">
                                                    {{ $user->name ? $user->name : '-' }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item ">
                                            <div class="row">
                                                <div class="col-md-5 mb-1 mt-1">
                                                    <h6 class="mb-0">Username
                                                        <span class="float-right">:</span>
                                                    </h6>

                                                </div>
                                                <div class="col-md-7 mb-1 mt-1 text-secondary">
                                                    {{ $user->username ? $user->username : '-' }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item ">
                                            <div class="row">
                                                <div class="col-md-5 mb-1 mt-1">
                                                    <h6 class="mb-0">E-Mail
                                                        <span class="float-right">:</span>
                                                    </h6>

                                                </div>
                                                <div class="col-md-7 mb-1 mt-1 text-secondary">
                                                    {{ $user->email ? $user->email : '-' }}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mt-5 text-left">
                                                <a class="btn btn-secondary"
                                                    href='/profile/edit'><i
                                                        class="far fa-edit"></i> Ubah Detail</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mt-5 text-left">
                                                <a class="btn btn-warning"
                                                    href='/profile/edit-password'><i
                                                        class="fas fa-key"></i> Ubah Password</a>
                                            </div>
                                        </div>
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
