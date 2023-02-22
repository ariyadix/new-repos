@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Kriteria : </b>9. Luaran dan Capaian Tridharma</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p><b>Tabel : </b>9.3. Kepuasan Pengguna Lulusan</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')
        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Kepuasan Pengguna Lulusan
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Jenis Kemampuan</th>
                            <th colspan="4">Tingkat Kepuasan Pengguna
                                (%)</th>
                            <th rowspan="2">Rencana Tindak
                                Lanjut oleh UPPS/PS
                            </th>
                            @if (Auth::user()->level != 5)
                                <th rowspan="2">Aksi</th>
                            @endif
                        </tr>
                        <tr>
                            <th>Sangat Baik</th>
                            <th>Baik</th>
                            <th>Cukup</th>
                            <th>Kurang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $key = 'jns_kemp';
                            $arrayTotal = [0, 0, 0, 0];
                            $s = 0;
                            $b = 0;
                            $c = 0;
                            $k = 0;
                            
                            $keyVal = 'Kerjasama Tim';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>
                                1
                            </td>
                            <td class="text-left">
                                Kerjasama Tim
                            </td>
                            @php
                                $arrayTotal[0] += $rowData->{$key} ? $rowData->tkp_ps : 0;
                                $arrayTotal[1] += $rowData->{$key} ? $rowData->tkp_b : 0;
                                $arrayTotal[2] += $rowData->{$key} ? $rowData->tkp_c : 0;
                                $arrayTotal[3] += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_ps : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_b : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_c : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_k : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->rnc_tndlnjt : '-' }}</td>

                            @php
                            $s += $rowData->{$key} ? $rowData->tkp_ps : 0;
                            $b += $rowData->{$key} ? $rowData->tkp_b : 0;
                            $c += $rowData->{$key} ? $rowData->tkp_c : 0;
                            $k += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ toDashed($keyVal) }}"
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
                            $keyVal = 'Keahlian di bidang TI';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                            
                        @endphp
                        <tr>
                            <td>
                                2
                            </td>
                            <td class="text-left">Keahlian di bidang TI
                            </td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_ps : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_b : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_c : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_k : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->rnc_tndlnjt : '-' }}</td>

                            @php
                            $s += $rowData->{$key} ? $rowData->tkp_ps : 0;
                            $b += $rowData->{$key} ? $rowData->tkp_b : 0;
                            $c += $rowData->{$key} ? $rowData->tkp_c : 0;
                            $k += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp
                            
                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ toDashed($keyVal) }}"
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
                            $keyVal = 'Kemampuan berbahasa asing (Inggris)';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                            
                        @endphp
                        <tr>
                            <td>
                                3
                            </td>
                            <td class="text-left">Kemampuan berbahasa asing (Inggris)
                            </td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_ps : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_b : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_c : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_k : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->rnc_tndlnjt : '-' }}</td>

                            @php
                            $s += $rowData->{$key} ? $rowData->tkp_ps : 0;
                            $b += $rowData->{$key} ? $rowData->tkp_b : 0;
                            $c += $rowData->{$key} ? $rowData->tkp_c : 0;
                            $k += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp

                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#kemampuan-berbahasa-inggris"
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
                            $keyVal = 'Kemampuan berkomunikasi';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>
                                4
                            </td>
                            <td class="text-left">Kemampuan berkomunikasi
                            </td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_ps : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_b : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_c : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_k : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->rnc_tndlnjt : '-' }}</td>

                            @php
                            $s += $rowData->{$key} ? $rowData->tkp_ps : 0;
                            $b += $rowData->{$key} ? $rowData->tkp_b : 0;
                            $c += $rowData->{$key} ? $rowData->tkp_c : 0;
                            $k += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp

                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ toDashed($keyVal) }}"
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
                            $keyVal = 'Pengembangan diri';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>
                                5
                            </td>
                            <td class="text-left">Pengembangan diri
                            </td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_ps : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_b : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_c : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_k : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->rnc_tndlnjt : '-' }}</td>

                            @php
                            $s += $rowData->{$key} ? $rowData->tkp_ps : 0;
                            $b += $rowData->{$key} ? $rowData->tkp_b : 0;
                            $c += $rowData->{$key} ? $rowData->tkp_c : 0;
                            $k += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp

                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ toDashed($keyVal) }}"
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
                            $keyVal = 'Kepemimpinan';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>
                                6
                            </td>
                            <td class="text-left">Kepemimpinan
                            </td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_ps : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_b : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_c : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_k : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->rnc_tndlnjt : '-' }}</td>

                            @php
                            $s += $rowData->{$key} ? $rowData->tkp_ps : 0;
                            $b += $rowData->{$key} ? $rowData->tkp_b : 0;
                            $c += $rowData->{$key} ? $rowData->tkp_c : 0;
                            $k += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp

                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ toDashed($keyVal) }}"
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
                            $keyVal = 'Etos Kerja';
                            $rowData = getArrayItemWithId($key, $keyVal, $tableData);
                        @endphp
                        <tr>
                            <td>
                                7
                            </td>
                            <td class="text-left">
                                Etos Kerja
                            </td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_ps : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_b : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_c : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->tkp_k : 0 }}</td>
                            <td class="table-isi">{{ $rowData->{$key} ? $rowData->rnc_tndlnjt : '-' }}</td>

                            @php
                            $s += $rowData->{$key} ? $rowData->tkp_ps : 0;
                            $b += $rowData->{$key} ? $rowData->tkp_b : 0;
                            $c += $rowData->{$key} ? $rowData->tkp_c : 0;
                            $k += $rowData->{$key} ? $rowData->tkp_k : 0;
                            @endphp

                            @if (Auth::user()->level != 5)
                                <td>
                                    <a href="/lkps/input/{{ $idTable }}{{ Auth::user()->level == 1 ? '?id=' . $prodi->id : '' }}#{{ toDashed($keyVal) }}"
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
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Jumlah</th>
                            <th>{{$s}}</th>
                            <th>{{$b}}</th>
                            <th>{{$c}}</th>
                            <th>{{$k}}</th>
                            <th class="table-isi"></th>
                            <th></th>
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
            $('#tbl_lists').DataTable({
                responsive: true,
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
