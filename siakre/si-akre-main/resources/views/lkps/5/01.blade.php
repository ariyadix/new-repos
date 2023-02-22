@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@include('lkps.lkps_header')

@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>5. Keuangan, Sarana, dan Prasarana</p>
                        <p><b>TS : </b>
                            <span id="ts-year">{{ $tsYear }}</span> <a href='#' id="ts_change"
                                class='badge badge-info'>Change</a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b> 5.1 Sumber Pendanaan Program Studi pada TS</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Sumber Pendanaan Program Studi pada
                    TS ({{ $tsYear }})</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Sumber Dana</th>
                            <th>Jumlah (dalam Juta rupiah)</th>
                            <th>Bukti</th>
                            <th>Keterangan</th>
                            @if (Auth::user()->level != 5)
                                <th>Aksi</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $keyVal = 1;
                            $key = 'sd_type';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>1</td>
                            <td class="text-left" colspan="1">Dana dari SPP Mahasiswa</td>
                            <td>
                                {{ $rowData->{$key} ? $rowData->jml : 0 }}
                            </td>
                            <td>
                                @if ($rowData->{$key})
                                    <a href="{{ $rowData->{$key} ? $rowData->bukti_link : '-' }}"
                                        target="_blank">{{ $rowData->{$key} ? $rowData->bukti : '-' }}</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                {{ $rowData->{$key} ? $rowData->ket : '-' }}
                            </td>
                            @if (Auth::user()->level != 5)

                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#tabs-1"
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
                                            <button type="submit" class="btn btn-sm btn-danger delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 2;
                            $key = 'sd_type';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>2</td>
                            <td class="text-left" colspan="1">Dana dari Yayasan</td>
                            <td>
                                {{ $rowData->{$key} ? $rowData->jml : 0 }}
                            </td>
                            <td>
                                @if ($rowData->{$key})
                                    <a href="{{ $rowData->{$key} ? $rowData->bukti_link : '-' }}"
                                        target="_blank">{{ $rowData->{$key} ? $rowData->bukti : '-' }}</a>
                                @else
                                    -
                                @endif
                            </td>
                            <td>
                                {{ $rowData->{$key} ? $rowData->ket : '-' }}
                            </td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#tabs-2"
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
                                            <button type="submit" class="btn btn-sm btn-danger delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    @endif
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-left" colspan="1">Dana dari luar SPP, non Yayasan</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#tabs-3"
                                        class="btn btn-sm btn-info">
                                        <i class="fas fa-plus"></i>
                                    </a>
                                </td>
                            @endif
                        </tr>
                        @php
                            $keyVal = 3;
                            $key = 'sd_type';
                            $rowData = getArray($key, $keyVal, $tableData);
                        @endphp
                        @foreach ($rowData as $key => $rowDataItem)
                            <tr>
                                <td></td>
                                <td class="text-left" colspan="1">{{ $rowDataItem->sd }}</td>
                                <td>
                                    {{ $rowDataItem->jml }}
                                </td>
                                <td>
                                    @if ($rowDataItem->bukti_link)
                                        <a href="{{ $rowDataItem->bukti_link }}"
                                            target="_blank">{{ $rowDataItem->bukti }}</a>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    {{ $rowDataItem->ket }}
                                </td>
                                @if (Auth::user()->level != 5)
                                    <td>
                                        <a href="/lkps/input/{{ $idTable }}?edit={{ $rowDataItem->id }}{{ Auth::user()->level == 1 ? '&id=' . $prodi->id : '' }}#tabs-3"
                                            class="btn btn-sm btn-info">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <form method="POST"
                                            action="/lkps/delete/{{ $idTable }}/{{ $rowDataItem->id }}"
                                            style="display: inline">
                                            <input name="_method" type="hidden" value="GET">
                                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id"
                                                placeholder="" value="{{ $prodi->id }}" min="0">
                                            <button type="submit" class="btn btn-sm btn-danger delete_confirm"
                                                data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
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

@include('lkps.lkps_scripts')

@push('scripts')
    <script>
        var Toast2 = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 6000
        });
        $(document).ready(() => {
            @if (session('pesan'))
                Toast2.fire({
                    icon: 'success',
                    title: "{{ session('pesan') }}"
                })
            @endif

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
                    confirmButtonText: 'Ya, hapus!!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
@endpush
