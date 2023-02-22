@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>4. Sumber Daya Manusia</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Sub-kriteria : </b>a. Profil Dosen</p>
                        <p><b>Tabel : </b>4.2. Kualifikasi Tenaga Kependidikan

                        </p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Kualifikasi Tenaga Kependidikan
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Jenis Tenaga
                                Kependidikan</th>
                            <th colspan="8">Jumlah Tenaga Kependidikan dengan
                                Pendidikan Terakhir</th>
                            <th rowspan="2">Unit Kerja</th>
                            @if (Auth::user()->level != 5)
                                <th rowspan="2">Aksi</th>
                            @endif
                        </tr>
                        <tr>
                            <th>S3</th>
                            <th>S2</th>
                            <th>S1</th>
                            <th>D4</th>
                            <th>D3</th>
                            <th>D2</th>
                            <th>D1</th>
                            <th>SMA/SMK</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $rowData = getArrayItemWithId('jtk', 'pustakawan', $tableData);
                            $arrayTotal = [0, 0, 0, 0, 0, 0, 0, 0, 0];
                        @endphp
                        <tr>
                            <td>
                                1
                            </td>
                            <td class="text-left">
                                Pustakawan *)
                            </td>
                            @php
                                $arrayTotal[0] += $rowData->jtk ? $rowData->jtk_s3 : 0;
                                $arrayTotal[1] += $rowData->jtk ? $rowData->jtk_s2 : 0;
                                $arrayTotal[2] += $rowData->jtk ? $rowData->jtk_s1 : 0;
                                $arrayTotal[3] += $rowData->jtk ? $rowData->jtk_d4 : 0;
                                $arrayTotal[4] += $rowData->jtk ? $rowData->jtk_d3 : 0;
                                $arrayTotal[5] += $rowData->jtk ? $rowData->jtk_d2 : 0;
                                $arrayTotal[6] += $rowData->jtk ? $rowData->jtk_d1 : 0;
                                $arrayTotal[7] += $rowData->jtk ? $rowData->jtk_sm : 0;
                            @endphp
                            <td>{{ $rowData->jtk ? $rowData->jtk_s3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d4 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_sm : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->uk : '' }}</td>
                            @if (Auth::user()->level != 5)

                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#pustakawan"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->jtk)
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->jtk)
                                        <form method="POST" action="/lkps/delete/402/{{ $rowData->id }}"
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
                            $rowData = getArrayItemWithId('jtk', 'laboran', $tableData);
                        @endphp
                        <tr>
                            <td>
                                2
                            </td>
                            <td class="text-left">
                                Laboran/ Teknisi
                            </td>
                            @php
                                $arrayTotal[0] += $rowData->jtk ? $rowData->jtk_s3 : 0;
                                $arrayTotal[1] += $rowData->jtk ? $rowData->jtk_s2 : 0;
                                $arrayTotal[2] += $rowData->jtk ? $rowData->jtk_s1 : 0;
                                $arrayTotal[3] += $rowData->jtk ? $rowData->jtk_d4 : 0;
                                $arrayTotal[4] += $rowData->jtk ? $rowData->jtk_d3 : 0;
                                $arrayTotal[5] += $rowData->jtk ? $rowData->jtk_d2 : 0;
                                $arrayTotal[6] += $rowData->jtk ? $rowData->jtk_d1 : 0;
                                $arrayTotal[7] += $rowData->jtk ? $rowData->jtk_sm : 0;
                            @endphp
                            <td>{{ $rowData->jtk ? $rowData->jtk_s3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d4 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_sm : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->uk : '' }}</td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#laboran"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->jtk)
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->jtk)
                                        <form method="POST" action="/lkps/delete/402/{{ $rowData->id }}"
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
                            $rowData = getArrayItemWithId('jtk', 'administrasi', $tableData);
                        @endphp
                        <tr>
                            <td>
                                3
                            </td>
                            <td class="text-left">Administrasi
                            </td>
                            @php
                                $arrayTotal[0] += $rowData->jtk ? $rowData->jtk_s3 : 0;
                                $arrayTotal[1] += $rowData->jtk ? $rowData->jtk_s2 : 0;
                                $arrayTotal[2] += $rowData->jtk ? $rowData->jtk_s1 : 0;
                                $arrayTotal[3] += $rowData->jtk ? $rowData->jtk_d4 : 0;
                                $arrayTotal[4] += $rowData->jtk ? $rowData->jtk_d3 : 0;
                                $arrayTotal[5] += $rowData->jtk ? $rowData->jtk_d2 : 0;
                                $arrayTotal[6] += $rowData->jtk ? $rowData->jtk_d1 : 0;
                                $arrayTotal[7] += $rowData->jtk ? $rowData->jtk_sm : 0;
                            @endphp
                            <td>{{ $rowData->jtk ? $rowData->jtk_s3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d4 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_sm : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->uk : '' }}</td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#administrasi"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->jtk)
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->jtk)
                                        <form method="POST" action="/lkps/delete/402/{{ $rowData->id }}"
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
                            $rowData = getArrayItemWithId('jtk', 'lainnya', $tableData);
                        @endphp
                        <tr>
                            <td>
                                4
                            </td>
                            <td class="text-left">Lainnya
                            </td>
                            @php
                                $arrayTotal[0] += $rowData->jtk ? $rowData->jtk_s3 : 0;
                                $arrayTotal[1] += $rowData->jtk ? $rowData->jtk_s2 : 0;
                                $arrayTotal[2] += $rowData->jtk ? $rowData->jtk_s1 : 0;
                                $arrayTotal[3] += $rowData->jtk ? $rowData->jtk_d4 : 0;
                                $arrayTotal[4] += $rowData->jtk ? $rowData->jtk_d3 : 0;
                                $arrayTotal[5] += $rowData->jtk ? $rowData->jtk_d2 : 0;
                                $arrayTotal[6] += $rowData->jtk ? $rowData->jtk_d1 : 0;
                                $arrayTotal[7] += $rowData->jtk ? $rowData->jtk_sm : 0;
                            @endphp
                            <td>{{ $rowData->jtk ? $rowData->jtk_s3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_s1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d4 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d3 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d2 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_d1 : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->jtk_sm : 0 }}</td>
                            <td>{{ $rowData->jtk ? $rowData->uk : '' }}</td>
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#lainnya"
                                        class="btn btn-sm btn-info">
                                        @if ($rowData->jtk)
                                            <i class="fas fa-pen"></i>
                                        @else
                                            <i class="fas fa-plus"></i>
                                        @endif
                                    </a>
                                    @if ($rowData->jtk)
                                        <form method="POST" action="/lkps/delete/402/{{ $rowData->id }}"
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
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total</th>
                            <th>{{ $arrayTotal[0] }}</th>
                            <th>{{ $arrayTotal[1] }}</th>
                            <th>{{ $arrayTotal[2] }}</th>
                            <th>{{ $arrayTotal[3] }}</th>
                            <th>{{ $arrayTotal[4] }}</th>
                            <th>{{ $arrayTotal[5] }}</th>
                            <th>{{ $arrayTotal[6] }}</th>
                            <th>{{ $arrayTotal[7] }}</th>
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
    </section>
@endsection
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
