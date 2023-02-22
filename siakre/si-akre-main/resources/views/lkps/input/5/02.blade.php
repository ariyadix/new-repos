@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Input Data</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active">Laporan Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>5. Keuangan, Sarana, dan Prasarana</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>5.2. Aksesibilitas data dalam Sistem Informasi
                        </p>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            {{-- <div class="d-flex align-items-center justify-content-between mb-4 ml-4 mr-4">
            <a class="btn btn-info disabled" href="#"><i class="fas fa-arrow-circle-left"></i> Prev</a>
            <a class="btn btn-success" href="/lkps/view/{{ $idTable }}">Next <i class="fas fa-arrow-circle-right"></i></a>
        </div> --}}

        </div>


        <!-- /.card -->
        <div class="card card-info card-tabs">
            <div class="card-header p-0">
                <ul class="nav nav-tabs  p-0 pt-1 pb-2" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Jenis Data : </h3>
                    </li>
                </ul>
            </div>
            <div class="card-header p-0 ">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="mahasiswa-tab" data-toggle="pill" href="#mahasiswa" role="tab"
                            aria-controls="mahasiswa" aria-selected="true">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="krs-tab" data-toggle="pill" href="#krs" role="tab" aria-controls="krs"
                            aria-selected="false">Kartu Rencana Studi (KRS)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="jadwal_mk-tab" data-toggle="pill" href="#jadwal_mk" role="tab"
                            aria-controls="jadwal_mk" aria-selected="false">Jadwal Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nilai_mk-tab" data-toggle="pill" href="#nilai_mk" role="tab"
                            aria-controls="nilai_mk" aria-selected="false">Nilai Mata Kuliah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="transkrip_akademik-tab" data-toggle="pill" href="#transkrip_akademik"
                            role="tab" aria-controls="transkrip_akademik" aria-selected="false">Transkrip Akademik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="lulusan-tab" data-toggle="pill" href="#lulusan" role="tab"
                            aria-controls="lulusan" aria-selected="false">Lulusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="dosen-tab" data-toggle="pill" href="#dosen" role="tab"
                            aria-controls="dosen" aria-selected="false">Dosen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pegawai-tab" data-toggle="pill" href="#pegawai" role="tab"
                            aria-controls="pegawai" aria-selected="false">Pegawai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="keuangan-tab" data-toggle="pill" href="#keuangan" role="tab"
                            aria-controls="keuangan" aria-selected="false">Keuangan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="inventaris-tab" data-toggle="pill" href="#inventaris" role="tab"
                            aria-controls="inventaris" aria-selected="false">Inventaris</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="perpustakaan-tab" data-toggle="pill" href="#perpustakaan" role="tab"
                            aria-controls="perpustakaan" aria-selected="false">Perpustakaan</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="mahasiswa" role="tabpanel" aria-labelledby="mahasiswa-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Mahasiswa</h3>
                            <hr>
                        </div>
                        @php
                            $key = 'jns_data';
                            $keyVal = 'mahasiswa';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control" id="{{ $key }}"
                                value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="krs" role="tabpanel" aria-labelledby="krs-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Kartu Rencana Studi (KRS)</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'krs';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="jadwal_mk" role="tabpanel" aria-labelledby="jadwal_mk-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Jadwal Mata Kuliah</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'jadwal_mk';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nilai_mk" role="tabpanel" aria-labelledby="nilai_mk-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Nilai Mata Kuliah</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'nilai_mk';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="transkrip_akademik" role="tabpanel"
                        aria-labelledby="transkrip_akademik-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Transkrip Akademik </h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'transkrip_akademik';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="lulusan" role="tabpanel" aria-labelledby="lulusan-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Lulusan</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'lulusan';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>                    </div>
                    <div class="tab-pane fade" id="dosen" role="tabpanel" aria-labelledby="dosen-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Dosen</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'dosen';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pegawai" role="tabpanel" aria-labelledby="pegawai-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Pegawai</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'pegawai';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="keuangan" role="tabpanel" aria-labelledby="keuangan-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Keuangan</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'keuangan';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="inventaris" role="tabpanel" aria-labelledby="inventaris-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Inventaris</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'inventaris';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="perpustakaan" role="tabpanel" aria-labelledby="perpustakaan-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Perpustakaan</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'perpustakaan';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            @if ($tabData->{$key})
                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                    value="{{ $tabData->id }}" />
                            @else
                                <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                            @endif
                            <input type="hidden" name="{{ $key }}" class="form-control"
                                id="{{ $key }}" value="{{ $keyVal }}">

                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                                value="{{ $prodi->id }}" min="0">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">
                                            Sistem Pengolahan Data Ditangani</label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Secara
                                                        Manual</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_sm"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_sm ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        Tanpa
                                                        Jaringan</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komtj"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komtj ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer serta
                                                        dapat diakses melalui Jaringan Lokal (LAN) </label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komlan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komlan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Dengan Komputer
                                                        serta dapat
                                                        diakses melalui Jaringan Luas (WAN)</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="hidden" id="input_row_id" name="row_id" value="">
                                                        <input id="input_bukti" type="url" name="sppdd_komwan"
                                                            class="fieldInsertInput form-control bukti"
                                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                            required placeholder="https://"
                                                            @error('buktiPenilaian') is-invalid @enderror value="{{ $tabData->sppdd_komwan ?? '' }}">
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        @error('buktiPenilaian')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>

                </div>
            </div>
            <!-- /.card -->
        </div>
    </section>
@endsection


@push('scripts')
    <script>
        $(document).ready(() => {
            let url = location.href.replace(/\/$/, "");
            console.log(url);
            if (location.hash) {
                console.log("wryyy");
                const hash = url.split("#");
                $('#custom-tabs-tab a[href="#' + hash[1] + '"]').tab("show");
                url = location.href.replace(/\/#/, "#");
                history.replaceState(null, null, url);
                setTimeout(() => {
                    $(window).scrollTop(0);
                }, 400);
            }

            $('a[data-toggle="pill"]').on("click", function() {
                let newUrl;
                const hash = $(this).attr("href");
                if (hash == "#ts-4") {
                    newUrl = url.split("#")[0];
                } else {
                    newUrl = url.split("#")[0] + hash;
                }
                history.replaceState(null, null, newUrl);
            });
        });
    </script>
@endpush
