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
                        <p><b>Kriteria : </b>9. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>9.3. Kepuasan Pengguna Lulusan </p>
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
                        <h3 class="card-title">Jenis Kemampuan : </h3>
                    </li>
                </ul>
            </div>
            <div class="card-header p-0 ">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="kerjasama_tim-tab" data-toggle="pill" href="#kerjasama_tim"
                            role="tab" aria-controls="kerjasama_tim" aria-selected="true">Kerjasama Tim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="keahlian-di-bidang-ti-tab" data-toggle="pill"
                            href="#keahlian-di-bidang-ti" role="tab" aria-controls="keahlian-di-bidang-ti"
                            aria-selected="false"> Keahlian di bidang TI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kemampuan-berbahasa-inggris-tab" data-toggle="pill"
                            href="#kemampuan-berbahasa-inggris" role="tab" aria-controls="kemampuan-berbahasa-inggris"
                            aria-selected="false">Kemampuan berbahasa asing (Inggris)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kemampuan-berkomunikasi-tab" data-toggle="pill"
                            href="#kemampuan-berkomunikasi" role="tab" aria-controls="kemampuan-berkomunikasi"
                            aria-selected="false">Kemampuan berkomunikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pengembangan-diri-tab" data-toggle="pill" href="#pengembangan-diri"
                            role="tab" aria-controls="pengembangan-diri" aria-selected="false"> Pengembangan diri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="kepemimpinan-tab" data-toggle="pill" href="#kepemimpinan" role="tab"
                            aria-controls="kepemimpinan" aria-selected="false">Kepemimpinan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="etos-kerja-tab" data-toggle="pill" href="#etos-kerja" role="tab"
                            aria-controls="etos-kerja" aria-selected="false">Etos Kerja</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    <div class="tab-pane fade show active" id="kerjasama_tim" role="tabpanel"
                        aria-labelledby="kerjasama_tim-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Kerjasama Tim</h3>
                            <hr>
                        </div>
                        @php
                            $key = 'jns_kemp';
                            
                            $keyVal = 'Kerjasama Tim';
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
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Tingkat Kepuasan Pengguna
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Sangat Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" step="any" max="2147483647" min="0" value="{{ $tabData->tkp_ps ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_ps">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" step="any" max="2147483647" min="0" value="{{ $tabData->tkp_b ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_b">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Cukup</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" step="any" max="2147483647" min="0" value="{{ $tabData->tkp_c ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_c">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Kurang</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number"step="any"  max="2147483647" min="0" value="{{ $tabData->tkp_k ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_k">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Rencana Tindak Lanjut Oleh
                                        UPPS/PS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="rnc_tndlnjt"
                                            placeholder="" value="{{ $tabData->rnc_tndlnjt ?? '' }}">
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
                    <div class="tab-pane fade" id="keahlian-di-bidang-ti" role="tabpanel"
                        aria-labelledby="keahlian-di-bidang-ti-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Keahlian di bidang TI</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'Keahlian di bidang TI';
                            
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
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Tingkat Kepuasan Pengguna
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Sangat Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_ps ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_ps">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_b ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_b">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Cukup</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_c ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_c">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Kurang</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_k ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_k">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Rencana Tindak Lanjut Oleh
                                        UPPS/PS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="rnc_tndlnjt"
                                            placeholder="" value="{{ $tabData->rnc_tndlnjt ?? '' }}">
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
                    <div class="tab-pane fade" id="kemampuan-berbahasa-inggris" role="tabpanel"
                        aria-labelledby="kemampuan-berbahasa-inggris-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Kemampuan berbahasa asing (Inggris)</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'Kemampuan berbahasa asing (Inggris)';
                            
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
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Tingkat Kepuasan Pengguna
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Sangat Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_ps ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_ps">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_b ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_b">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Cukup</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_c ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_c">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Kurang</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_k ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_k">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Rencana Tindak Lanjut Oleh
                                        UPPS/PS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="rnc_tndlnjt"
                                            placeholder="" value="{{ $tabData->rnc_tndlnjt ?? '' }}">
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
                    <div class="tab-pane fade" id="kemampuan-berkomunikasi" role="tabpanel"
                        aria-labelledby="kemampuan-berkomunikasi-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0"> Kemampuan berkomunikasi</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'Kemampuan berkomunikasi';
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
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Tingkat Kepuasan Pengguna
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Sangat Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_ps ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_ps">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_b ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_b">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Cukup</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_c ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_c">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Kurang</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_k ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_k">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Rencana Tindak Lanjut Oleh
                                        UPPS/PS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="rnc_tndlnjt"
                                            placeholder="" value="{{ $tabData->rnc_tndlnjt ?? '' }}">
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
                    <div class="tab-pane fade" id="pengembangan-diri" role="tabpanel"
                        aria-labelledby="pengembangan-diri-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0"> Pengembangan diri</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'Pengembangan diri';
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
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Tingkat Kepuasan Pengguna
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Sangat Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_ps ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_ps">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_b ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_b">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Cukup</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_c ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_c">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Kurang</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_k ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_k">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Rencana Tindak Lanjut Oleh
                                        UPPS/PS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="rnc_tndlnjt"
                                            placeholder="" value="{{ $tabData->rnc_tndlnjt ?? '' }}">
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
                    <div class="tab-pane fade" id="kepemimpinan" role="tabpanel" aria-labelledby="kepemimpinan-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0"> Kepemimpinan</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'Kepemimpinan';
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
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Tingkat Kepuasan Pengguna
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Sangat Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_ps ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_ps">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_b ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_b">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Cukup</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_c ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_c">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Kurang</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_k ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_k">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Rencana Tindak Lanjut Oleh
                                        UPPS/PS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="rnc_tndlnjt"
                                            placeholder="" value="{{ $tabData->rnc_tndlnjt ?? '' }}">
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
                    <div class="tab-pane fade" id="etos-kerja" role="tabpanel" aria-labelledby="etos-kerja-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0"> Etos Kerja</h3>
                            <hr>
                        </div>
                        @php
                            $keyVal = 'Etos Kerja';
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
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="row">
                                        <label for="inputPassword3" class="col-sm-3 form-label">Tingkat Kepuasan Pengguna
                                        </label>
                                        <label class="col-sm-3 form-label">
                                            :
                                        </label>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9">
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Sangat Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_ps ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_ps">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Baik</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_b ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_b">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row p-2">
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Cukup</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_c ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_c">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-6 row p-2">
                                                    <label for="inputEmail3" class="pl-2 col-sm-6">Kurang</label>
                                                    <div class="col-sm-6 input-group">
                                                        <input type="number" max="2147483647" min="0" value="{{ $tabData->tkp_k ?? '' }}"
                                                            class="form-control" placeholder="0" name="tkp_k">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text" id="basic-addon2">%</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Rencana Tindak Lanjut Oleh
                                        UPPS/PS</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="rnc_tndlnjt"
                                            placeholder="" value="{{ $tabData->rnc_tndlnjt ?? '' }}">
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
