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
                        <p><b>Kriteria : </b>9. Luaran dan Capaian Tridharma</p>
                        <p><b>TS : </b>
                            <span id="ts-year">{{ $tsYear }}</span> <a href='#' id="ts_change"
                                class='badge badge-info'>Change</a>
                        </p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Capaian Pembelajaran</p>
                        <p><b>Tabel : </b>9.2. Kelulusan Tepat Waktu
                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Kelulusan Tepat Waktu</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">Tahun Masuk</th>
                            <th rowspan="2">Jumlah Mahasiswa Diterima</th>
                            <th colspan="7">Jumlah Mahasiswa yang lulus pada</th>
                            <th rowspan="2">Jumlah Lulusan s.d. Akhir TS</th>
                            <th rowspan="2">Rata-rata Masa Studi</th>
                            <th rowspan="2">Jumlah mhs. Yang masih aktif </th>
                            @if (Auth::user()->level != 5)
                                <th rowspan="2">Aksi</th>
                            @endif

                        </tr>
                        <tr>
                            <th>Akhir TS-6</th>
                            <th>Akhir TS-5</th>
                            <th>Akhir TS-4</th>
                            <th>Akhir TS-3</th>
                            <th>Akhir TS-2</th>
                            <th>Akhir TS-1</th>
                            <th>Akhir TS</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $taCount = 6;
                            $arrayTotal = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
                            $Do = 0;
                        @endphp

                        @for ($taCount; 3 <= $taCount; $taCount--)
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
                                    {{ $rowData->{$key} ? $rowData->jmd : 0 }}
                                </td>
                                <td class="table-isi">

                                </td>
                                <td class="table-isi">

                                </td>
                                <td class="table-isi">

                                </td>
                                <td class="{{ $taCount >= 6 ? '' : 'table-isi' }}">
                                    @if ($taCount >= 6)
                                        {{ $rowData->{$key} ? $rowData->jml_3 : 0 }}
                                    @endif
                                </td>
                                <td class="{{ $taCount >= 5 ? '' : 'table-isi' }}">
                                    @if ($taCount >= 5)
                                        {{ $rowData->{$key} ? $rowData->jml_2 : 0 }}
                                    @endif
                                </td>
                                <td class="{{ $taCount >= 4 ? '' : 'table-isi' }}">
                                    @if ($taCount >= 4)
                                        {{ $rowData->{$key} ? $rowData->jml_1 : 0 }}
                                    @endif
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->akhir_ts : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jl_ats : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->rerata_masastudi : 0 }}
                                </td>
                                <td>
                                    {{ $rowData->{$key} ? $rowData->jml_mhs : 0 }}
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
                            // menjumlahkan data pada kolom jmd
                            $Do += $rowData->{$key} ? $rowData->jmd : 0;
                            $Do -= $rowData->{$key} ? $rowData->jl_ats : 0;
                            $Do -= $rowData->{$key} ? $rowData->jml_mhs : 0;
                            @endphp
                        @endfor

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="13" class="text-end"><b>DO: &nbsp; {{$Do}}</b></td>
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
