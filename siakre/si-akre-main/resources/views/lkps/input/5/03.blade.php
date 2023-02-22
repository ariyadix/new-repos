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
                        <p><b>Tabel : </b>5.3. Pendayagunaan Sarana Utama Laboratorium
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
                <h3 class="card-title">Tabel 5.3. Pendayagunaan Sarana Utama Laboratorium
                </h3>
            </div>
            <div class="card-body">

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
                        <input type="hidden" name="id" class="form-control hide_num" placeholder="" value="-1" />
                    @endif
                    <div class="row p-2">
                        <label for="inputEmail3" class="pl-2 col-sm-3 col-form-label">Sarana/ Prasarana</label>
                        <div class="pl-0 col-sm-9">
                            <input type="text" class=" form-control @error('sar_pra') is-invalid @enderror" name="sar_pra"
                                placeholder=""
                                @if (request()->is('lkps/edit*') ? 'active' : '') value="{{ $dataItem->sar_pra }}">
                                 @else
                                 value="{{ old('sar_pra') }}"> @endif
                                <div class="invalid-feedback">
                            @error('sar_pra')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="row p-2">
                <div class="col-12 col-lg-6 row p-2">
                    <label for="inputEmail3" class="pl-2 col-sm-6">Daya Tampung</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" value="{{ $dataItem->dy_tamp ?? '' }}" class="form-control" placeholder="0"
                            name="dy_tamp">
                    </div>
                </div>
                <div class="col-12 col-lg-6 row p-2">
                    <label for="inputEmail3" class="pl-2 col-sm-6">Luas Ruang</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" step="any" value="{{ $dataItem->luasr ?? '' }}" class="form-control" placeholder="0"
                            name="luasr">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon2">m<sup>2</sup></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-12 col-lg-6 row p-2">
                    <label for="inputEmail3" class="pl-2 col-sm-6">Jumlah Mahasiswa yang Dilayani Lab</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" value="{{ $dataItem->jmd ?? '' }}" class="form-control" placeholder="0"
                            name="jmd">
                    </div>
                </div>
                <div class="col-12 col-lg-6 row p-2">
                    <label for="inputEmail3" class="pl-2 col-sm-6">Jam Layanan</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" value="{{ $dataItem->jam_lay ?? '' }}" class="form-control" placeholder="0"
                            name="jam_lay">
                    </div>
                </div>
            </div>
            <div class="row p-2">
                <div class="col-12 col-lg-6 row p-2">
                    <label for="inputEmail3" class="pl-2 col-sm-6">Perangkat yang Dimiliki</label>
                    <div class="col-sm-6 input-group">
                        <input type="number" value="{{ $dataItem->prngkt ?? '' }}" class="form-control" placeholder="0"
                            name="prngkt">
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
