@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
    </div><!-- /.col -->
    <div class="col-sm-12 mt-2">
        @if (!$isComplete)
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                Profil tidak lengkap, silahkan <a href="/profile">klik disini</a>
            </div>
            <!-- Button trigger modal -->
            <button id="clicked" type="button" hidden data-backdrop="static" data-keyboard="false" class="btn btn-primary"
                data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lengkapi Profil</h5>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal col-xl-10" method="POST" enctype="multipart/form-data"
                                action="/prodi/profile/update">
                                @csrf
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
                                            value="{{ old('email') ? old('email'): $prodi->email}}" placeholder="Alamat" name="email">
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
                                        <input type="text"
                                            class="form-control @error('no_sk_pembukaan') is-invalid @enderror"
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
                                        <input type="date"
                                            class="form-control @error('tgl_sk_pembukaan') is-invalid @enderror"
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
                                        <input type="text"
                                            class="form-control @error('pejabat_sk_pembukaan') is-invalid @enderror"
                                            value="{{ $prodi->pejabat_sk_pembukaan }}" placeholder="Pejabat Penandatangan
                                                                                SK Pembukaan PS"
                                            name="pejabat_sk_pembukaan">
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
                                                                                    Menerima Mahasiswa"
                                            name="thn_menerima_mhs">
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
                                            value="{{ $prodi->akreditasi }}" placeholder="Peringkat Terbaru
                                                                                        Akreditasi PS" name="akreditasi">
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
                                            value="{{ $prodi->no_sk_ban_pt }}" placeholder="Nomor SK BAN-PT"
                                            name="no_sk_ban_pt">
                                        <div class="invalid-feedback">
                                            @error('no_sk_ban_pt')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        @endif
        <!-- /.container-fluid -->
    </div><!-- /.col -->

@endsection
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Instrumen Akreditasi Program Studi
                (IAPS)
            </h3>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3 style="font-weight: 400">LKPS</h3>

                        <p>Laporan Kinerja Program Studi</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-chart-bar"></i>
                    </div>
                    <a href="/lkps" class="small-box-footer">Info selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3 style="font-weight: 400">LED</h3>

                        <p>Laporan Evaluasi Diri</p>
                    </div>
                    <div class="icon">
                        <i class="far fa-chart-bar"></i>
                    </div>
                    <a href="/led" class="small-box-footer">Info selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-primary">
                    <div class="inner">
                        <h3 style="font-weight: 400">Matriks Penilaian</h3>

                        <p>Isi Matriks Penilaian</p>
                    </div>
                    <div class="icon">
                        <i class="nav-icon fas fa-pen"></i>
                    </div>
                    <a href="/matriks" class="small-box-footer">Info selanjutnya <i class="fas fa-arrow-circle-right"></i></a>
                </div>
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
@push('scripts')
    <script type="text/javascript">
        document.getElementById("clicked").click();
    </script>
@endpush
