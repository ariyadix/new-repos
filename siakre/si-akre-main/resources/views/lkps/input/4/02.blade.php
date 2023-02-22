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
                        <p><b>Kriteria : </b>4. Sumber Daya Manusia</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>4.2. Kualifikasi Tenaga Kependidikan</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

        </div>


        <div class="card card-info card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Jenis Tenaga Kependidikan</h3>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="pustakawan-tab" data-toggle="pill" href="#pustakawan" role="tab"
                            aria-controls="pustakawan" aria-selected="true">Pustakawan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="laboran-tab" data-toggle="pill" href="#laboran" role="tab"
                            aria-controls="laboran" aria-selected="false">Laboran/ Teknisi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="administrasi-tab" data-toggle="pill" href="#administrasi" role="tab"
                            aria-controls="administrasi" aria-selected="false">Administrasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="lainnya-tab" data-toggle="pill" href="#lainnya" role="tab"
                            aria-controls="lainnya" aria-selected="false">Lainnya</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="pustakawan" role="tabpanel" aria-labelledby="pustakawan-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Pustakawan</h3>
                            <hr>
                        </div>
                        @php
                            $tabData = getArrayItemWithId('jtk', 'pustakawan', $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row justify-content-between">
                                    @if ($tabData->jtk)
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="{{ $tabData->id }}" />
                                    @else
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="-1" />
                                    @endif
                                    <input type="hidden" name="jtk" class="form-control" id="jtk" value="pustakawan">

                                    <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                        placeholder="" value="{{ $prodi->id }}" min="0">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Tenaga Kependidikan
                                        dengan Pendidikan Terakhir</label>

                                    <div class="col-sm-9">
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D4</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d4 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">SMA/SMK</label>
                                                <div class="col-sm-6 input-group">
                                                    <input  type="number" max="2147483647" min="0" max="2147483647" min="0" value="{{ $tabData->jtk_sm ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_sm">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Unit Kerja</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="uk" placeholder=""
                                            value="{{ $tabData->uk ?? '' }}">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"
                                    class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="laboran" role="tabpanel" aria-labelledby="laboran-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Laboran/ Teknisi</h3>
                            <hr>
                        </div>
                        @php
                            $tabData = getArrayItemWithId('jtk', 'laboran', $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row justify-content-between">
                                    @if ($tabData->jtk)
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="{{ $tabData->id }}" />
                                    @else
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="-1" />
                                    @endif
                                    <input type="hidden" name="jtk" class="form-control" id="jtk" value="laboran">

                                    <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                        placeholder="" value="{{ $prodi->id }}" min="0">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Tenaga Kependidikan
                                        dengan Pendidikan Terakhir</label>

                                    <div class="col-sm-9">
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input  type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input  type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D4</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d4 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">SMA/SMK</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_sm ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_sm">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Unit Kerja</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="uk" placeholder=""
                                            value="{{ $tabData->uk ?? '' }}">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="administrasi" role="tabpanel" aria-labelledby="administrasi-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Administrasi</h3>
                            <hr>
                        </div>
                        @php
                            $tabData = getArrayItemWithId('jtk', 'administrasi', $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row justify-content-between">
                                    @if ($tabData->jtk)
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="{{ $tabData->id }}" />
                                    @else
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="-1" />
                                    @endif
                                    <input type="hidden" name="jtk" class="form-control" id="jtk" value="administrasi">

                                    <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                        placeholder="" value="{{ $prodi->id }}" min="0">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Tenaga Kependidikan
                                        dengan Pendidikan Terakhir</label>

                                    <div class="col-sm-9">
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D4</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d4 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">SMA/SMK</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_sm ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_sm">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Unit Kerja</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="uk" placeholder=""
                                            value="{{ $tabData->uk ?? '' }}">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="lainnya" role="tabpanel" aria-labelledby="lainnya-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Lainnya</h3>
                            <hr>
                        </div>
                        @php
                            $tabData = getArrayItemWithId('jtk', 'lainnya', $tableData);
                        @endphp
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row justify-content-between">
                                    @if ($tabData->jtk)
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="{{ $tabData->id }}" />
                                    @else
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="-1" />
                                    @endif
                                    <input type="hidden" name="jtk" class="form-control" id="jtk" value="lainnya">

                                    <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                        placeholder="" value="{{ $prodi->id }}" min="0">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Tenaga Kependidikan
                                        dengan Pendidikan Terakhir</label>

                                    <div class="col-sm-9">
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">S1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_s1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_s1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D4</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d4 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D3</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d3 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d3">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D2</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d2 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-2">
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">D1</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_d1 ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_d1">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6 row p-2">
                                                <label for="inputEmail3" class="pl-2 col-sm-6">SMA/SMK</label>
                                                <div class="col-sm-6 input-group">
                                                    <input type="number" max="2147483647" min="0" value="{{ $tabData->jtk_sm ?? '' }}"
                                                        class="form-control" placeholder="0" name="jtk_sm">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Unit Kerja</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="uk" placeholder=""
                                            value="{{ $tabData->uk ?? '' }}">
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
                                <a href="/lkps/view/{{ $idTable }}" class="btn btn-default float-right">Batal</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

        <!-- /.card -->
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
