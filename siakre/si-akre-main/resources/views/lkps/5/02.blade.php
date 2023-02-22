@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
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
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Aksesibilitas data dalam Sistem
                    Informasi
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Jenis Data</th>
                            <th colspan="4">Sistem Pengolahan Data Ditangani
                            </th>
                            @if (Auth::user()->level != 5)
                                <th rowspan="2">Action</th>
                            @endif
                        </tr>
                        <tr>
                            <th>Secara
                                Manual</th>
                            <th>Dengan
                                Komputer
                                Tanpa
                                Jaringan</th>
                            <th>Dengan
                                Komputer
                                serta dapat
                                diakses
                                melalui
                                Jaringan
                                Lokal (LAN)</th>
                            <th>Dengan
                                Komputer
                                serta dapat
                                diakses
                                melalui
                                Jaringan
                                Luas (WAN)</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $keyVal = 'mahasiswa';
                            $key = 'jns_data';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>1</td>
                            <td class="text-left">Mahasiswa</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST" action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'krs';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>2</td>
                            <td class="text-left">Kartu Rencana Studi (KRS)</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST" action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'jadwal_mk';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp

                        <tr>
                            <td>3</td>
                            <td class="text-left"> Jadwal Mata Kuliah
                            </td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST" action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'nilai_mk';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp

                        <tr>
                            <td>4</td>
                            <td class="text-left">Nilai Mata Kuliah</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST" action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'transkrip_akademik';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>5</td>
                            <td class="text-left">Transkrip Akademik</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST" action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'lulusan';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>6</td>
                            <td class="text-left">Lulusan
                            </td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST" action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'dosen';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>7</td>
                            <td class="text-left">Dosen</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST" action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'pegawai';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>8</td>
                            <td class="text-left">Pegawai</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST"
                                            action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'keuangan';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>9</td>
                            <td class="text-left">Keuangan</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST"
                                            action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num"
                                                id="prodi_id" placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'inventaris';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>10</td>
                            <td class="text-left">Inventaris</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST"
                                            action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num"
                                                id="prodi_id" placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 'perpustakaan';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>11</td>
                            <td class="text-left">Perpustakaan</td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_sm ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_sm ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komtj ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komtj ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komlan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komlan ?? '' }}</a></td>
                            <td class="table-isi"><a href="{{ $rowData->sppdd_komwan ?? '' }}"
                                    target="blank">{{ $rowData->sppdd_komwan ?? '' }}</a></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ $keyVal }}"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->{$key})
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->{$key})
                                        <form method="POST"
                                            action="/lkps/delete/{{ $idTable }}/{{ $rowData->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num"
                                                id="prodi_id" placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger m-2 delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
            @if (Auth::user()->level != 5)
                <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                    <a class="btn btn-primary"
                        href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}"><i
                            class="fas fa-plus-circle"></i> Input
                        data</a>
                </div>
            @endif

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
@push('scripts')
    <script>
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 6000
        });
        $(document).ready(() => {
            @if (session('pesan'))
                Toast.fire({
                    icon: 'success',
                    title: "{{ session('pesan') }}"
                })
            @endif
            $('#tbl_lists').DataTable({
                responsive: true,
                "aLengthMenu": [
                    [11, 25, 50, 100, 200, -1],
                    [11, 25, 50, 100, 200, "All"]
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                },
            });
            $('#tbl_lists tbody').on('click', ' tr .delete_confirm', function() {
                event.preventDefault();
                var form = $(this).closest("form");
                var name = $(this).data("name");
                Swal.fire({
                    title: 'Apa kamu yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Batal',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
