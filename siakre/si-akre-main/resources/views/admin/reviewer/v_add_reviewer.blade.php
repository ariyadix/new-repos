@extends('layouts.apps')
@section('title', 'Tambah Reviewer')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Tambah Reviewer</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/manage/reviewer">Reviewer</a></li>
            <li class="breadcrumb-item active">Tambah data</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')

    <div class="card p-4">
        <form method="POST" enctype="multipart/form-data" action="/manage/reviewer/insert">
            @csrf
            <div class="row">
                <div class="col-md-5 border-right form-group">
                    <div class="p-3 pb-2">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-8"><label class="labels">ID</label><input type="text"
                                    id="username-input" class="form-control @error('username') is-invalid @enderror"
                                    placeholder="ID Number" name="username" value="{{ old('username') }}">
                                <small id="passwordHelpBlock" class="form-text text-muted">
                                    *NIM/NIP <br> digunakan untuk username login user.
                                </small>
                                <div class="invalid-feedback">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Nama</label><input type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama" name="name"
                                    value="{{ old('name') }}">
                                <div class="invalid-feedback">
                                    @error('name')
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
                            <div class="col-md-12">
                                <label class="labels">Instansi</label><input type="text"
                                    class="form-control @error('instansi') is-invalid @enderror" placeholder="Nama instansi" name="instansi"
                                    value="{{ old('instansi') }}">
                                <div class="invalid-feedback">
                                    @error('instansi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            {{-- <div class="col-md-12"><label class="labels">Program Studi</label>
                                <select class="form-control @error('id_prodi') is-invalid @enderror" id="subject"
                                    name="id_prodi" value="{{ old('id_prodi') }}">
                                    <option value="" selected disabled hidden>Choose here</option>
                                    @foreach ($prodi as $m)
                                        <option value="{{ $m->id }}">{{ $m->nama }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    @error('id_prodi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div> --}}
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text"
                                    class="form-control @error('birthplace') is-invalid @enderror" placeholder=""
                                    name="birthplace" value="{{ old('birthplace') }}">
                                <div class="invalid-feedback">
                                    @error('birthplace')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input
                                    type="date" class="form-control @error('date') is-invalid @enderror" name="date"
                                    value="{{ old('date') }}">
                                <div class="invalid-feedback">
                                    @error('date')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Address</label>
                                <textarea class="form-control @error('address') is-invalid @enderror" rows="3" placeholder="Alamat"
                                    name="address">{{ old('address') }}</textarea>
                                <div class="invalid-feedback">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row mt-2">
                            <div class="col-md-12">
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
                        <img src="" alt="" srcset="" width="200px">
                        <div class="form-group">
                            <b>Edit Foto Profile</b><br />
                            <input type="file" class="form-control" name="foto_rev">
                            <div class="text-danger">
                                @error('foto_rev')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-success profile-button" name="save_record" type="submit"
                                value="save_record"><i class="fas fa-user-plus"></i>Add</button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>


@endsection
@push('scripts')
    <script>
        $('#toggle-disable-form').on('click', function(event, state) {
            var status = $('#username-input').prop('readonly');
            $('#username-input').prop('readonly', !status);
        });
    </script>
@endpush
