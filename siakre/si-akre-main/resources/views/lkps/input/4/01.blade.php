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
                        <p><b>Sub-kriteria : </b>a. Profil Dosen
                        </p>
                        <p><b>Tabel : </b>4.1. Rata-rata beban DTPS per semester, pada TS
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
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Rata-rata beban DTPS per semester, pada TS
                </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                @csrf
                <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                    value="{{ $prodi->id }}" min="0">
                @if (request()->is('lkps/edit*') ? 'active' : '')
                    <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                        value="{{ $dataItem->id }}" />
                @else
                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                        value="-1" />
                @endif
                <div class="card-body">
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Dosen Tetap</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('nm_dosen') is-invalid @enderror" name="nm_dosen"
                                placeholder=""
                                @if (request()->is('lkps/edit*') ? 'active' : '') value="{{ $dataItem->nm_dosen }}">
                                 @else
                                 value="{{ old('nm_dosen') }}"> @endif
                                <div class="invalid-feedback">
                            @error('nm_dosen')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <label for="inputPassword3" class="col-sm-3 form-label">
                            SKS Pengajaran<sup>1)</sup> Pada
                        </label>
                        <label class="col-sm-3 form-label">
                            :
                        </label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">PS Sendiri</label>
                            <div class="input-group col-sm-3">
                                <input type="number" max="2147483647" step="any" min="0" value="{{ $dataItem->sks_pss ?? '' }}" class="form-control"
                                    placeholder="0" name="sks_pss">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">SKS</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">PS Lain, PT Sendiri</label>
                            <div class="input-group col-sm-3">
                                <input type="number" max="2147483647" step="any" min="0" value="{{ $dataItem->skd_psl_pts ?? '' }}" class="form-control"
                                    placeholder="0" name="skd_psl_pts">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">SKS</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">PT Lain</label>
                            <div class="input-group col-sm-3">
                                <input type="number" max="2147483647" step="any" min="0" value="{{ $dataItem->skd_ptl ?? '' }}" class="form-control"
                                    placeholder="0" name="skd_ptl">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">SKS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">SKS
                        Penelitian<sup>2)</sup></label>
                    <div class="input-group col-sm-3">
                        <input type="number" max="2147483647" step="any" min="0" value="{{ $dataItem->skd_penelitian ?? '' }}" class="form-control"
                            placeholder="0" name="skd_penelitian">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">SKS</span>
                        </div>
                    </div>
                </div>

                <hr>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">SKS
                        Pengabdian
                        pada Masy<sup>2)</sup></label>
                    <div class="input-group col-sm-3">
                        <input type="number" max="2147483647" step="any" min="0" value="{{ $dataItem->skd_pengmas ?? '' }}" class="form-control"
                            placeholder="0" name="skd_pengmas">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">SKS</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <div class="row">
                        <label for="inputPassword3" class="col-sm-3 form-label">
                            SKS Manajemen<sup>3)</sup>
                        </label>
                        <label class="col-sm-3 form-label">
                            :
                        </label>

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">PT Sendiri</label>
                            <div class="input-group col-sm-3">
                                <input type="number" max="2147483647" step="any" min="0" value="{{ $dataItem->sksmen_pts ?? '' }}" class="form-control"
                                    placeholder="0" name="sksmen_pts">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">SKS</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-4 col-form-label">PT Lain</label>

                            <div class="input-group col-sm-3">
                                <input type="number" max="2147483647" step="any" min="0" value="{{ $dataItem->sksmen_ptl ?? '' }}" class="form-control"
                                    placeholder="0" name="sksmen_ptl">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2">SKS</span>
                                </div>
                            </div>
                        </div>
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
    </section>
@endsection

@section('script')
    <script>
        $(function() {
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
        })
    </script>
@endsection
