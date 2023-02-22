@extends('layouts.apps')
@section('title', 'Program Studi ' . $prodi->nama)
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Edit Detail Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/manage/prodi">Program Studi</a></li>
            <li class="breadcrumb-item active">Edit Detail {{ $prodi->nama }}</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif<!-- /.container-fluid -->
    <div class="card p-4">

        <form method="POST" enctype="multipart/form-data" action="/manage/prodi/update/{{ $prodi->id }}">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">ID</label>
                    <div class="col-sm-3">
                        <div class="row ml-1"> <input type="text" id="username-input"
                                class="form-control @error('username') is-invalid @enderror" placeholder="ID Number"
                                value="{{ old('username', $prodi->user->username) }}" name="username" maxlength="10"
                                readonly>
                            <small id="passwordHelpBlock" class="form-text text-muted">
                                ID digunakan untuk username login admin prodi.
                            </small>
                            <div class="invalid-feedback">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>


                    </div>
                    <div class="col-sm-3 d-flex align-items-center">
                        <a id="toggle-disable-form" class="btn btn-secondary btn-sm"> Edit
                            ID</a>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Jenis Program Studi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('jenis-prodi') is-invalid @enderror"
                            value="Program Sarjana" placeholder="nama" name="jenis-prodi">
                        <div class="invalid-feedback">
                            @error('jenis-prodi')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Program Studi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                            value="{{ old('name', $prodi->nama) }}" placeholder="nama" name="name">
                        <div class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Alamat
                    </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                            value="{{ old('alamat', $prodi->alamat) }}" placeholder="Alamat" name="alamat">
                        <div class="invalid-feedback">
                            @error('alamat')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">E-Mail
                    </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                            value="{{ old('email', $prodi->email) }}" placeholder="E-Mail" name="email">
                        <div class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Website </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('website') is-invalid @enderror"
                            value="{{ old('website', $prodi->website) }}" placeholder="Website" name="website">
                        <div class="invalid-feedback">
                            @error('website')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor SK Pembukaan PS</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('no_sk_pembukaan') is-invalid @enderror"
                            value="{{ old('no_sk_pembukaan', $prodi->no_sk_pembukaan) }}"
                            placeholder="Nomor SK Pembukaan PS" name="no_sk_pembukaan">
                        <div class="invalid-feedback">
                            @error('no_sk_pembukaan')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tanggal SK Pembukaan PS</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control @error('tgl_sk_pembukaan') is-invalid @enderror"
                            value="{{ old('tgl_sk_pembukaan', $prodi->tgl_sk_pembukaan) }}"
                            placeholder="Tanggal SK Pembukaan PS" name="tgl_sk_pembukaan">
                        <div class="invalid-feedback">
                            @error('tgl_sk_pembukaan')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Pejabat Penandatangan
                        SK Pembukaan PS </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('pejabat_sk_pembukaan') is-invalid @enderror"
                            value="{{ old('pejabat_sk_pembukaan', $prodi->pejabat_sk_pembukaan) }}"
                            placeholder="Pejabat Penandatangan SK Pembukaan PS" name="pejabat_sk_pembukaan">
                        <div class="invalid-feedback">
                            @error('pejabat_sk_pembukaan')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Tahun Pertama Kali
                        Menerima Mahasiswa</label>
                    <div class="col-sm-9">
                        {{-- <input type="number" min="1900" max="2999" step="1" class="form-control"
                                @error('thn_menerima_mhs') is-invalid @enderror placeholder="Tahun Pertama Kali"
                                value="{{ $prodi->thn_menerima_mhs }}" name="thn_menerima_mhs"> --}}
                        <input type="number" min="1900" max="2999" step="1"
                            class="form-control @error('thn_menerima_mhs') is-invalid @enderror"
                            value="{{ old('thn_menerima_mhs', $prodi->thn_menerima_mhs) }}"
                            placeholder="Tahun Pertama Kali Menerima Mahasiswa" name="thn_menerima_mhs">
                        <div class="invalid-feedback">
                            @error('thn_menerima_mhs')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Peringkat Terbaru
                        Akreditasi PS </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('akreditasi') is-invalid @enderror"
                            value="{{ old('akreditasi', $prodi->akreditasi) }}"
                            placeholder="Peringkat Terbaru Akreditasi PS" name="akreditasi">
                        <div class="invalid-feedback">
                            @error('akreditasi')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Nomor SK BAN-PT </label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control @error('no_sk_ban_pt') is-invalid @enderror"
                            value="{{ old('no_sk_ban_pt', $prodi->no_sk_ban_pt) }}" placeholder="Nomor SK BAN-PT"
                            name="no_sk_ban_pt">
                        <div class="invalid-feedback">
                            @error('no_sk_ban_pt')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">

                    <div class="mt-1 text-center">
                        <button class="btn btn-success profile-button" name="save_record" type="submit"
                            value="save_record"><i class="far fa-save"></i> Simpan</button>
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
