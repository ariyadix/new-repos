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
                        <p><b>Tabel : </b>9.6 Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR</p>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Penelitian dan Kegiatan Pengabdian
                    kepada Masyarakat dari DTPR</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_lists" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama DTPR</th>
                            <th>Jumlah Publikasi bertema INFOKOM</th>
                            <th>Jumlah Penelitian bertema INFOKOM</th>
                            <th>Jumlah Penelitian bertema INFOKOM yang mendapat HKI</th>
                            <th>Jumlah PkM bertema INFOKOM yang diadopsi masyarakat</th>
                            <th>Jumlah PKM bertema INFOKOM yang mendapat HKI</th>
                            @if (Auth::user()->level != 5)
                                <th>Action</th>
                            @endif

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2" class="text-right">Jumlah *</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
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
@push('scripts')
    <script type="text/javascript">
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 6000
        });
        $(document).ready(function() {
            $('#tbl_lists').DataTable({
                "footerCallback": function(row, data, start, end, display) {
                    var api = this.api()
                    // converting to interger to find total
                    var intVal = function(i) {
                        return typeof i === 'string' ?
                            i.replace(/[\$,]/g, '') * 1 :
                            typeof i === 'number' ?
                            i : 0;
                    };
                    var sum_1 = api
                        .column(2)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);
                    var sum_2 = api
                        .column(3)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sum_3 = api
                        .column(4)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sum_4 = api
                        .column(5)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    var sum_5 = api
                        .column(6)
                        .data()
                        .reduce(function(a, b) {
                            return intVal(a) + intVal(b);
                        }, 0);

                    // Update footer by showing the total with the reference of the column index 
                    $(api.column(1).footer()).html('Jumlah *');
                    $(api.column(2).footer()).html(sum_1);
                    $(api.column(3).footer()).html(sum_2);
                    $(api.column(4).footer()).html(sum_3);
                    $(api.column(5).footer()).html(sum_4);
                    $(api.column(6).footer()).html(sum_5);


                },
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, 200, -1],
                    [5, 10, 25, 50, 100, 200, "All"]
                ],
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                },
                paging: true,
                searching: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('/lkps/view/' . $idTable . '?id=' . $prodi->id) }}',
                columns: [{
                        "data": "id",
                        render: function(data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'dtpr',
                        name: 'dtpr'
                    },

                    {
                        data: 'pub_infokom',
                        name: 'pub_infokom',
                        searchable: false
                    },
                    {
                        data: 'pen_infokom',
                        name: 'pen_infokom',
                        searchable: false
                    },
                    {
                        data: 'pen_infokomHKI',
                        name: 'pen_infokomHKI',
                        searchable: false
                    },
                    {
                        data: 'pkm_infokomadop',
                        name: 'pkm_infokomadop',
                        searchable: false
                    },
                    {
                        data: 'pkm_infokomhki',
                        name: 'pkm_infokomhki',
                        searchable: false
                    },
                    @if (Auth::user()->level != 5)
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    @endif
                ],
                order: [
                    [0, 'asc']
                ],


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
            @if (session('pesan'))
                Toast.fire({
                    icon: 'success',
                    title: "{{ session('pesan') }}"
                })
            @endif
        });
    </script>
@endpush
