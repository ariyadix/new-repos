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
                        <p><b>Kriteria : </b>5. Keuangan, Sarana, dan Prasarana</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b> 5.1 Sumber Pendanaan Program Studi pada TS
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
                        <h3 class="card-title">Sumber Dana : </h3>
                    </li>
                </ul>
            </div>
            <div class="card-header p-0 ">
                <ul class="nav nav-tabs" id="custom-tabs-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="tabs-1-tab" data-toggle="pill" href="#tabs-1" role="tab"
                            aria-controls="tabs-1" aria-selected="true">Dana dari SPP Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tabs-2-tab" data-toggle="pill" href="#tabs-2" role="tab"
                            aria-controls="tabs-2" aria-selected="false">Dana dari Yayasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="tabs-3-tab" data-toggle="pill" href="#tabs-3" role="tab"
                            aria-controls="tabs-3" aria-selected="false">Dana dari luar SPP, non Yayasan</a>
                    </li>

                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                    @php
                        $count = 3;
                    @endphp
                    @for ($i = 1; $i < $count; $i++)
                        @php
                            $keyVal = $i;
                            $key = 'sd_type';
                            $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <div class="tab-pane fade {{ $i == 1 ? 'show active' : '' }}" id="{{ 'tabs-' . $i }}"
                            role="tabpanel" aria-labelledby="{{ 'tabs-' . $i . '-tab' }}">
                            <div class="card-body pb-0 pt-0">
                                <h3 class="col-form-label text-center m-0 p-0">
                                    {{ $i == 1 ? 'Dana dari SPP Mahasiswa' : 'Dana dari Yayasan' }}
                                </h3>
                                <hr>
                            </div>
                            <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="inputPassword3" class="col-sm-6 col-form-label">Jumlah (dalam Juta
                                            rupiah)</label>
                                        @if ($tabData->{$key})
                                            <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                                value="{{ $tabData->id }}" />
                                        @else
                                            <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                                value="-1" />
                                        @endif
                                        <input type="hidden" name="ts" class="form-control" id="ts"
                                            value="{{ $tsYear }}">
                                        <input type="hidden" name="sd_type" class="form-control" id="sd_type"
                                            value="{{ $i }}">
                                        <input type="hidden" name="sumber_dana" class="form-control" id="sumber_dana"
                                            value=" {{ $i == 1 ? 'Dana dari SPP Mahasiswa' : 'Dana dari Yayasan' }}">
                                        <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                            placeholder="" value="{{ $prodi->id }}" min="0">
                                        <div class="input-group col-sm-6">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">Rp</span>
                                            </div>
                                            <input type="number" max="2147483647" min="0" name="jml"
                                                class="form-control hide_num" id="jml" placeholder="" min="0"
                                                value="{{ $tabData->jml ?? '' }}">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2">000,000.00</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row justify-content-between">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Judul Bukti</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control @error('bukti') is-invalid @enderror"
                                                placeholder="Judul Bukti" name="bukti" id="bukti"
                                                value="{{ $tabData->bukti ?? '' }}">
                                            <div class="invalid-feedback">
                                                @error('bukti')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-between">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Bukti Link</label>
                                        <div class="col-sm-9"> <input type="text"
                                                class="form-control @error('bukti_link') is-invalid @enderror"
                                                pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                                placeholder="https://" name="bukti_link" id="bukti_link"
                                                value="{{ $tabData->bukti_link ?? '' }}">
                                            <div class="invalid-feedback">
                                                @error('bukti_link')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-between">
                                        <label for="inputtext3" class="col-sm-2 col-form-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="inputtext3" name="ket"
                                                placeholder="" value="{{ $tabData->ket ?? '' }}">
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
                    @php
                        $keyVal = $editId;
                        $key = 'id';
                        $tabData = getArrayItemWithId($key, $keyVal, $tableData);
                    @endphp
                    <div class="tab-pane fade" id="tabs-3" role="tabpanel" aria-labelledby="tabs-3-tab">
                        <div class="card-body pb-0 pt-0">
                            <h3 class="col-form-label text-center m-0 p-0">Dana dari luar SPP, non Yayasan</h3>
                            <hr>
                        </div>
                        <form method="POST" class="form-horizontal" action="/lkps/insert/{{ $idTable }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group row justify-content-between">

                                    <label class="col-sm-2 col-form-label">Nama Sumber Dana</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control @error('sumber_dana') is-invalid @enderror"
                                            placeholder="Nama sumber dana" name="sumber_dana" id="sumber_dana"
                                            value="{{ $tabData->sd ?? '' }}">
                                        <div class="invalid-feedback">
                                            @error('sumber_dana')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-6 col-form-label">Jumlah (dalam Juta
                                        rupiah)</label>
                                    @if ($tabData->{$key})
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="{{ $tabData->id }}" />
                                    @else
                                        <input type="hidden" name="id" class="form-control hide_num" placeholder=""
                                            value="-1" />
                                    @endif
                                    <input type="hidden" name="ts" class="form-control" id="ts"
                                        value="{{ $tsYear }}">
                                    <input type="hidden" name="sd_type" class="form-control" id="sd_type"
                                        value="{{ $i }}">
                                    <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                        placeholder="" value="{{ $prodi->id }}" min="0">
                                    <div class="input-group col-sm-6">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">Rp</span>
                                        </div>
                                        <input type="number" max="2147483647" min="0" name="jml"
                                            class="form-control hide_num" id="jml" placeholder="" min="0"
                                            value="{{ $tabData->jml ?? '' }}">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon2">000,000.00</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Judul Bukti</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control @error('bukti') is-invalid @enderror"
                                            placeholder="Judul Bukti" name="bukti" id="bukti"
                                            value="{{ $tabData->bukti ?? '' }}">
                                        <div class="invalid-feedback">
                                            @error('bukti')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Bukti Link</label>
                                    <div class="col-sm-9"> <input type="text"
                                            class="form-control @error('bukti_link') is-invalid @enderror"
                                            pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?"
                                            placeholder="https://" name="bukti_link" id="bukti_link"
                                            value="{{ $tabData->bukti_link ?? '' }}">
                                        <div class="invalid-feedback">
                                            @error('bukti_link')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-between">
                                    <label for="inputtext3" class="col-sm-2 col-form-label">Keterangan</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="inputtext3" name="ket" placeholder=""
                                            value="{{ $tabData->ket ?? '' }}">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                @if ($tabData->{$key})
                                    <button type="submit" class="btn btn-info">Ubah</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                @endif
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
@include('lkps.lkps_scripts')
@push('scripts')
    <script>
        $(document).ready(() => {
            let url = location.href.replace(/\/$/, "");
            console.log(url);
            if (location.hash) {
                console.log("wryyy");
                const hash = url.split("#");
                console.log(hash);
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
