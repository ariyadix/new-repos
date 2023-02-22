@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.lkps_header')
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
                        <p><b>Kriteria : </b>3. Mahasiswa</p>
                        <p><b>TS : </b>{{ $tsYear }} <a href='#' id="ts_change" class='badge badge-info'>Change</a>
                        </p>

                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Jumlah Calon Mahasiswa Baru</p>
                        <p><b>Tabel : </b>Jumlah Calon Mahasiswa Baru</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

        </div>


        <div class="card card-info card-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Seleksi Mahasiswa</h3>
                    </li>
                    @php
                        $count = 4;
                        $countYear = $tsYear - 4;
                    @endphp
                    @for ($i = $count; $i >= 0; $i--)
                        @if ($i == 0)
                            <li class="nav-item">
                                <a class="nav-link" id="ts-tab" data-toggle="pill" href="#ts" role="tab"
                                    aria-controls="ts" aria-selected="false">TS
                                    ({{ $countYear }})</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link  {{ $i == 4 ? 'active' : '' }}" id="ts-{{ $i }}-tab"
                                    data-toggle="pill" href="#ts-{{ $i }}" role="tab"
                                    aria-controls="ts-{{ $i }}"
                                    aria-selected="{{ $i == $count ? true : false }}">TS-{{ $i }}
                                    ({{ $countYear }})</a>
                            </li>
                        @endif
                        @php
                            $countYear++;
                        @endphp
                    @endfor
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="ts-tabContent">
                    @for ($i = 4; $i >= 0; $i--)
                        @php
                            $taCount = $i;
                            $key = 'ta';
                            $tabData = getArrayItemWithId($key, $tsYear - $taCount, $tableData);
                        @endphp
                        <div class="tab-pane fade {{ $taCount == 4 ? 'show active' : '' }}"
                            id="{{ $taCount != 0 ? 'ts-' . $taCount : 'ts' }}" role="tabpanel"
                            aria-labelledby="{{ $taCount != 0 ? 'tabs-' . $taCount . '-tab' : 'tabs-tab' }}">
                            <div class="card-body pb-0 pt-0">
                                <h3 class="col-form-label text-center m-0 p-0">Seleksi Mahasiswa
                                    {{ $taCount != 0 ? 'TS-' . $taCount : 'TS' }}
                                    ({{ $tsYear - $taCount }})
                                </h3>
                                <hr>
                            </div>
                            <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="dy_tmpng" class="col-sm-2 col-form-label">Daya Tampung</label>
                                        <div class="col-sm-10">
                                            @if ($tabData->{$key})
                                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                                    value="{{ $tabData->id }}" />
                                            @else
                                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                                    value="-1" />
                                            @endif
                                            <input type="hidden" name="{{ $key }}" class="form-control"
                                                id="{{ $key }}" value="{{ $tsYear - $taCount }}">

                                            <input type="number" max="2147483647" min="0" name="dy_tmpng"
                                                class="form-control hide_num" id="dy_tmpng" placeholder="" min="0"
                                                value="{{ $tabData->dy_tmpng ?? '' }}">
                                            <input type="hidden" name="ta" class="form-control" id="ta"
                                                value="{{ $tsYear - $taCount }}">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Calon
                                            Mahasiswa</label>

                                        <div class="col-sm-10">
                                            <div class="form-group row">
                                            </div>
                                            <div class="form-group row">
                                                <label for="jcm_pendftr" class="col-sm-2 col-form-label">Pendaftar</label>
                                                <div class="col-sm-4">
                                                    <input type="number" max="2147483647" min="0" name="jcm_pendftr"
                                                        class="form-control hide_num" id="jcm_pendftr" placeholder=""
                                                        min="0" value="{{ $tabData->jcm_pendftr ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="jcm_lulus" class="col-sm-2 col-form-label">Lulus
                                                    Sleksi</label>
                                                <div class="col-sm-4">
                                                    <input type="number" max="2147483647" min="0" name="jcm_lulus"
                                                        class="form-control hide_num" id="jcm_lulus" placeholder="" min="0"
                                                        value="{{ $tabData->jcm_lulus ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa
                                            Baru</label>

                                        <div class="col-sm-10">
                                            <div class="form-group row">
                                            </div>
                                            <div class="form-group row">
                                                <label for="jmb_reg" class="col-sm-2 col-form-label">Reguler</label>
                                                <div class="col-sm-4">
                                                    <input type="number" max="2147483647" min="0" name="jmb_reg"
                                                        class="form-control hide_num" id="jmb_reg" placeholder="" min="0"
                                                        value="{{ $tabData->jmb_reg ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="jmb_transfer" class="col-sm-2 col-form-label">Transfer</label>
                                                <div class="col-sm-4">
                                                    <input type="number" max="2147483647" min="0" name="jmb_transfer"
                                                        class="form-control hide_num" id="jmb_transfer" placeholder=""
                                                        min="0" value="{{ $tabData->jmb_transfer ?? '' }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Jumlah Mahasiswa
                                            Aktif</label>

                                        <div class="col-sm-10">
                                            <div class="form-group row">
                                            </div>
                                            <div class="form-group row">
                                                <label for="jma_reg" class="col-sm-2 col-form-label">Reguler</label>
                                                <div class="col-sm-4">
                                                    <input type="number" max="2147483647" min="0" name="jma_reg"
                                                        class="form-control hide_num" id="jma_reg" placeholder="" min="0"
                                                        value="{{ $tabData->jma_reg ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="jma_transfer" class="col-sm-2 col-form-label">Transfer</label>
                                                <div class="col-sm-4">
                                                    <input type="number" max="2147483647" min="0" name="jma_transfer"
                                                        class="form-control hide_num" id="jma_transfer" placeholder=""
                                                        min="0" value="{{ $tabData->jma_transfer ?? '' }}">
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
                    @endfor
                </div>

            </div>
            <!-- /.card -->
        </div>

        <!-- /.card -->
    </section>
@endsection
@include('lkps.lkps_scripts')
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
