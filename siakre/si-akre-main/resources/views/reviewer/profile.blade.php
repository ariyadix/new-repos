@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Profil Akun</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active">Profil Akun</li>
        </ol>
    </div><!-- /.col -->
    <div class="col-sm-12 mt-2">
        @if (session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{-- <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5> --}}
                {{ session('pesan') }}
            </div>
        @endif
    </div>
@endsection
@section('content')

    <div class="card p-4">
        <div>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card " style="height: 100%">
                        <div class="card-body" style="padding-top:3rem">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="{{ url('img/rev/' . $reviewer->img_url) }}" alt="Foto" class="rounded-circle"
                                    width="150">
                                <div class="mt-3">
                                    <h4>{{ $reviewer->nama }}</h4>
                                    <p class="text-secondary mb-1">{{ $reviewer->rev_id }}</p>
                                    <p class="text-muted font-size-sm">
                                        <i class="fas fa-university">
                                        </i> {{ $reviewer->instansi }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="nav nav-pills" id="mytab">
                        <li class="nav-item">
                            <a href="#biodata" data-toggle="tab" class="nav-link m-l active" aria-expanded="true"
                                data-target="#biodata">Biodata
                                Pribadi</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="panel tab-pane wrapper-lg active " id="biodata">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nama Lengkap</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $reviewer->nama }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Alamat email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $userData->email }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Tempat Tanggal Lahir</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $reviewer->tmp_lahir }} , {{ $reviewer->tgl_lahir }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Alamat</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $reviewer->alamat }}
                                        </div>
                                    </div>
                                    <hr>
                                    {{-- <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mt-5 text-left">
                                                <a class="btn btn-secondary" href='/profile/edit'><i
                                                        class="far fa-edit"></i> Ubah Profil</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="mt-5 text-left">
                                                <a class="btn btn-warning" href='/profile/edit-password'><i
                                                        class="fas fa-key"></i> Ubah Password</a>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
