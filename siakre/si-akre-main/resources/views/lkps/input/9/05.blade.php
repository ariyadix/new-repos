@extends('layouts.apps')
@include('lkps.lkps_header')
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
                        <p><b>TS : </b>{{ $tsYear }} <a href='#' id="ts_change" class='badge badge-info'>Change</a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Capaian Pembelajaran</p>
                        <p><b>Tabel : </b> 9.5. Kesesuaian Bidang Kerja Lulusan</p>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

        </div>


        <!-- /.card -->

        <div class="card card-info card-tabs">
            <div class="card-header p-0">
                <ul class="nav nav-tabs  p-0 pt-1 pb-2" id="custom-tabs-tab" role="tablist">
                    <li class="pt-2 px-3">
                        <h3 class="card-title">Tahun Lulus : </h3>
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
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    @for ($i = 4; $i >= 0; $i--)
                        @php
                            $taCount = $i;
                            $key = 'tl';
                            $tabData = getArrayItemWithId($key, $tsYear - $taCount, $tableData);
                        @endphp
                        <div class="tab-pane fade {{ $taCount == 4 ? 'show active' : '' }}"
                            id="{{ $taCount != 0 ? 'ts-' . $taCount : 'ts' }}" role="tabpanel"
                            aria-labelledby="{{ $taCount != 0 ? 'tabs-' . $taCount . '-tab' : 'tabs-tab' }}">
                            <div class="card-body pb-0 pt-0">
                                <h3 class="col-form-label text-center m-0 p-0">TS
                                    {{ $taCount != 0 ? 'TS-' . $taCount : 'TS' }}
                                    ({{ $tsYear - $taCount }})
                                </h3>
                                <hr>
                            </div>
                            <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Lulusan</label>
                                        <div class="col-sm-9">
                                            @if ($tabData->{$key})
                                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                                    value="{{ $tabData->id }}" />
                                            @else
                                                <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                                    value="-1" />
                                            @endif
                                            <input type="hidden" name="{{ $key }}" class="form-control"
                                                id="{{ $key }}" value="{{ $tsYear - $taCount }}">

                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">

                                            <input type="number" max="2147483647" min="0" name="jml_lus"
                                                class="form-control hide_num" id="jml_lus" placeholder="" min="0"
                                                value="{{ $tabData->jml_lus ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Jumlah Lulusan yang
                                            Terlacak</label>
                                        <div class="col-sm-9">
                                            <input type="number" max="2147483647" min="0" name="lus_trlck"
                                                class="form-control hide_num" id="lus_trlck" placeholder="" min="0"
                                                value="{{ $tabData->lus_trlck ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Profesi kerja bidang
                                            Infokom</label>
                                        <div class="col-sm-9">
                                            <input type="number" max="2147483647" min="0" name="prfsi_infokom"
                                                class="form-control hide_num" id="prfsi_infokom" placeholder="" min="0"
                                                value="{{ $tabData->prfsi_infokom ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputEmail3" class="col-sm-3 col-form-label">Profesi kerja bidang NON
                                            Infokom</label>
                                        <div class="col-sm-9">
                                            <input type="number" max="2147483647" min="0" name="prfsi_non_info"
                                                class="form-control hide_num" id="prfsi_non_info" placeholder="" min="0"
                                                value="{{ $tabData->prfsi_non_info ?? '' }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label for="inputPassword3" class="col-sm-3 form-label">Lingkup tempat kerja</label>
                                            <label class="col-sm-3 form-label">
                                                :
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9">
                                                <div class="form-group row">
                                                    <label for="inputPassword3" class="col-sm-3 col-form-label">Multinasional/
                                                        Internasional
                                                    </label>
                                                    <div class="col-sm-4">
                                                        <input type="number" max="2147483647" min="0" name="ltk_multi"
                                                            class="form-control hide_num" id="ltk_multi" placeholder="" min="0"
                                                            value="{{ $tabData->ltk_multi ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3"
                                                        class="col-sm-3 col-form-label">Nasional</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" max="2147483647" min="0" name="ltk_nas"
                                                            class="form-control hide_num" id="ltk_nas" placeholder="" min="0"
                                                            value="{{ $tabData->ltk_nas ?? '' }}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword3"
                                                        class="col-sm-3 col-form-label">Wirausaha</label>
                                                    <div class="col-sm-4">
                                                        <input type="number" max="2147483647" min="0" name="ltk_wir"
                                                            class="form-control hide_num" id="ltk_wir" placeholder="" min="0"
                                                            value="{{ $tabData->ltk_wir ?? '' }}">
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
                    @endfor
                </div>
            <!-- /.card -->
        </div>

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

