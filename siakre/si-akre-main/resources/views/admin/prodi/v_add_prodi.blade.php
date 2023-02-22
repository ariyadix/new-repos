@extends('layouts.apps')
@section('title', 'Tambah Program Studi')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Tambah Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/manage/prodi">Program Studi</a></li>
            <li class="breadcrumb-item active">Tambah data</li>
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
        <form method="POST" enctype="multipart/form-data" action="/manage/prodi/insert">
            @csrf
            <div class="row">

                <div class="col-md-5 border-right form-group">
                    <div class="p-3 pt-5 pb-2">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Data Program Studi</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="labels">Nama Program Studi</label><input type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name"
                                    value="{{ old('name') }}">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-2">
                            <div class="col-md-12  mt-3">
                                <label class="labels">Username akun</label><input type="text"
                                    class="form-control @error('username') is-invalid @enderror" placeholder="Username"
                                    name="username" value="{{ old('username') }}">
                                <div class="invalid-feedback">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <label class="labels">Alamat email</label><input type="text"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                    value="{{old('email')}}" name="email">
                                <div class="invalid-feedback">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12  mt-3">
                                <label class="labels">Password</label><input type="password"
                                    class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                                    name="password" value="{{ old('password') }}">
                                <div class="invalid-feedback">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Konfirmasi Password</label><input type="password"
                                    class="form-control @error('re-password') is-invalid @enderror" placeholder="Password"
                                    name="re-password" value="{{ old('re-password') }}">
                                <div class="invalid-feedback">
                                    @error('re-password')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="mt-5 text-center">
                            <button class="btn btn-success profile-button" name="add_record" type="submit" type="submit"
                                value="add_record"><i class="fas fa-plus-circle"></i> Tambah</button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>


@endsection
