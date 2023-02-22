@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Ubah Profil</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/profile">Profil</a></li>
            <li class="breadcrumb-item active">Ubah Profil</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">IDENTITAS PROGRAM STUDI</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body row justify-content-center">
            <form class="form-horizontal col-xl-10" method="POST" enctype="multipart/form-data"
                action="/prodi/profile/update">
                @csrf

                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Program Studi</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                value="{{ $prodi->nama }}" placeholder="nama" name="nama">
                            <div class="invalid-feedback">
                                @error('nama')
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
                                value="{{ $prodi->alamat }}" placeholder="Alamat" name="alamat">
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
                                value="{{old('email') ? old('email'):  $prodi->email }}" placeholder="Alamat" name="email">
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
                                value="{{ $prodi->website }}" placeholder="Alamat" name="website">
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
                                value="{{ $prodi->no_sk_pembukaan }}" placeholder="Nomor SK Pembukaan PS"
                                name="no_sk_pembukaan">
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
                                value="{{ $prodi->tgl_sk_pembukaan }}" placeholder="Tanggal SK Pembukaan PS"
                                name="tgl_sk_pembukaan">
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
                                value="{{ $prodi->pejabat_sk_pembukaan }}" placeholder="Pejabat Penandatangan
                                                    SK Pembukaan PS" name="pejabat_sk_pembukaan">
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
                                value="{{ $prodi->thn_menerima_mhs }}" placeholder="Tahun Pertama Kali
                                                        Menerima Mahasiswa" name="thn_menerima_mhs">
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
                            <!-- membuat dropdown -->
                            <select class="form-control @error('peringkat_akreditasi') is-invalid @enderror"
                                name="akreditasi">
                                <option value="" style="background-color:#808080;" class="text-light">Pilih Peringkat Akreditasi PS</option>
                                <option value="Unggul" {{ $prodi->akreditasi == 'Unggul' ? 'selected' : '' }}>Unggul</option>
                                <option value="Baik Sekali" {{ $prodi->akreditasi == 'Baik Sekali' ? 'selected' : '' }}>Baik Sekali</option>
                                <option value="Baik" {{ $prodi->akreditasi == 'Baik' ? 'selected' : '' }}>Baik</option>
                                <option value="Tidak Terkakreditasi" {{ $prodi->akreditasi == 'Tidak Terkakreditasi' ? 'selected' : '' }}>Tidak Terkakreditasi</option>
                            </select>
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
                                value="{{ $prodi->no_sk_ban_pt }}" placeholder="Nomor SK BAN-PT" name="no_sk_ban_pt">
                            <div class="invalid-feedback">
                                @error('no_sk_ban_pt')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
                <!-- /.card-footer -->
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    {{-- <div class="card p-4">
        <form method="POST" enctype="multipart/form-data" action="/dosen/profile/update">
            @csrf
            <div class="row">
                <div class="col-md-5 border-right form-group">
                    <div class="p-3 pb-2">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12"><label class="labels">ID</label><input type="text"
                                    class="form-control @error('id') is-invalid @enderror" placeholder="ID Number"
                                    value="{{ $prodi->getDosenID() }}" name="id" maxlength="10" readonly>
                                <div class="invalid-feedback">
                                    @error('id')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Nama</label><input type="text"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nama"
                                    value="{{ $prodi->nama }}" name="name">
                                <div class="invalid-feedback">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Tempat Lahir</label><input type="text"
                                    class="form-control @error('birthplace') is-invalid @enderror"
                                    value="{{ $prodi->tmp_lahir }}" placeholder="" name="birthplace">
                                <div class="invalid-feedback">
                                    @error('birthplace')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6"><label class="labels">Tanggal Lahir</label><input
                                    type="date" class="form-control @error('date') is-invalid @enderror"
                                    value="{{ $prodi->tgl_lahir }}" name="date">
                                <div class="invalid-feedback">
                                    @error('date')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Address</label><textarea
                                    class="form-control @error('address') is-invalid @enderror" rows="3"
                                    placeholder="Alamat" name="address">{{ $prodi->alamat }}</textarea>
                                <div class="invalid-feedback">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <img src="{{ url('img/dos/' . $prodi->img_url) }}" alt="" srcset="" width="200px">
                        <div class="form-group">
                            <b>Edit Foto Profile</b><br />
                            <input type="file" class="form-control" name="foto_dos">
                            <div class="text-danger">
                                @error('foto_dos')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <button class="btn btn-success profile-button" name="save_record" type="submit"
                                value="save_record"><i class="far fa-edit"></i> Ubah</button>
                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div> --}}


@endsection
