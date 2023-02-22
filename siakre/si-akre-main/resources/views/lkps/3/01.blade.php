@extends('layouts.apps')
@section('title', 'Dashboard')
@php
$matriks = 303;
@endphp
@include('lkps.form_header')
@include('lkps.lkps_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>3. Mahasiswa</p>
                        <p><b>TS : </b>
                            <span id="ts-year">{{ $tsYear }}</span> <a href='#' id="ts_change"
                                class='badge badge-info'>Change</a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Jumlah Calon Mahasiswa Baru</p>
                        <p><b>Tabel : </b>Tabel. 3.1. Jumlah Calon Mahasiswa Baru</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Seleksi Mahasiswa</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">Tahun Akademik</th>
                            <th rowspan="2">Daya Tampung</th>
                            <th colspan="2">Jumlah Calon Mahasiswa</th>
                            <th colspan="2">Jumlah Mahasiswa Baru</th>
                            <th colspan="2">Jumlah Mahasiswa Aktif</th>
                            @if (Auth::user()->level != 5)
                                <th rowspan="2">Aksi</th>
                            @endif
                        </tr>
                        <tr>
                            <th>Pendaftar</th>
                            <th>Lulus Seleksi</th>
                            <th>Reguler</th>
                            <th>Transfer</th>
                            <th>Reguler</th>
                            <th>Transfer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $taCount = 4;
                            $arrayTotal = [0, 0, 0, 0, 0, 0, 0];
                        @endphp

                        @for ($taCount; 0 <= $taCount; $taCount--)
                            @php
                                
                                $keyVal = $tsYear - $taCount;
                                $key = 'ta';
                                $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                            @endphp
                            <tr>
                                <td class="ts-row">
                                    @if ($taCount == 0)
                                        TS ({{ $keyVal }})
                                    @else
                                        TS-{{ $taCount }} ({{ $keyVal }})
                                    @endif
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->dy_tmpng : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jcm_pendftr : 0 }}

                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jcm_lulus : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jmb_reg : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jmb_transfer : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jma_reg : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jma_transfer : 0 }}
                                </td>
                                @if (Auth::user()->level != 5)
                                    <td>
                                        <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#ts{{ $taCount == 0 ? '' : '-' . $taCount }}"
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
                                                <button type="submit" class="btn btn-sm btn-danger delete_confirm"
                                                    data-toggle="tooltip"><i class="fas fa-minus-circle"></i></button>
                                            </form>
                                        @endif
                                    </td>
                                @endif
                            </tr>
                            @php
                                $arrayTotal[0] += $rowData->{$key} ? $rowData->dy_tmpng : 0;
                                $arrayTotal[1] += $rowData->{$key} ? $rowData->jcm_pendftr : 0;
                                $arrayTotal[2] += $rowData->{$key} ? $rowData->jcm_lulus : 0;
                                $arrayTotal[3] += $rowData->{$key} ? $rowData->jmb_reg : 0;
                                $arrayTotal[4] += $rowData->{$key} ? $rowData->jmb_transfer : 0;
                                $arrayTotal[5] += $rowData->{$key} ? $rowData->jma_reg : 0;
                                $arrayTotal[6] += $rowData->{$key} ? $rowData->jma_transfer : 0;
                            @endphp
                        @endfor
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Jumlah</th>
                            @foreach ($arrayTotal as $n)
                                <th>{{ $n }}</th>
                            @endforeach
                            @if (Auth::user()->level != 5)
                                <th></th>
                            @endif
                        </tr>
                    </tfoot>
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
