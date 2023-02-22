@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Ubah Password</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/profile">Profil</a></li>
            <li class="breadcrumb-item active">Ubah Password</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="card p-4">
        <form name="frmUserUpdt" method="POST" enctype="multipart/form-data" action="/mhs/profile/update-credential">
            @csrf
            <div class="col-xs-5">
                <div class="row mt-2">
                    <div class="col-md-7"><label class="labels">Konfirmasi
                            Password Lama</label><input name="old_password" type="password"
                            class="form-control @error('old_password') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('old_password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-md-7"><label class="labels">Password
                            Baru</label><input name="new_password" type="password"
                            class="form-control @error('new_password') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('new_password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="row mt-2">
                    <div class="col-md-7"><label class="labels">Re-type
                            Password
                            Baru</label><input name="retype_new_password" type="password"
                            class="form-control @error('retype_new_password') is-invalid @enderror">
                        <div class="invalid-feedback">
                            @error('retype_new_password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
            <div class="mt-5 text-left">
                <button class="btn btn-success profile-button" name="save_record" type="submit" value="save_record"><i
                        class="far fa-save"></i> Simpan</button>
            </div>
        </form>
    </div>


@endsection
