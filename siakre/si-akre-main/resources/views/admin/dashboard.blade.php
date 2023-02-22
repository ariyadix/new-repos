@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="row">
        <section class="col-lg-7">
            <div class="card card-primary  card-outline">
                <div class="card-header">
                    <h3 class="text-start card-title" style="float: none; font-weight:500">
                        <i class="nav-icon fas fa-history"></i>
                        Audit Log
                    </h3>
                </div>
                <div class="card-body">
                    <table id="tbl_list" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Waktu</th>
                                <th>Event</th>
                                <th>Pengguna</th>
                                <th>Nama tabel</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Waktu</th>
                                <th>Event</th>
                                <th>Pengguna</th>
                                <th>Nama tabel</th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
                <div class="card-footer clearfix">
                    <a href="/audit-log" class="btn btn-primary float-right"><i class="fas fa-eye"></i> Tampilkan lebih banyak</a>
                </div>
            </div>
        </section>
        <section class="col-lg-5 connectedSortable">
            @include('admin.admin.component_iaps_prodi')
        </section>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        // console.log($('#tbl_list'));
        $(document).ready(function() {
            $('#tbl_list').DataTable({
                "language":  {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                },
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, 200, -1],
                    [5, 10, 25, 50, 100, 200, "All"]
                ],
                paging: false,
                searching: false,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('/') }}',
                "order": [
                    [0, "desc"]
                ],

                columns: [{
                        data: 'created_at',
                        name: 'created_at'
                    },

                    {
                        data: 'log_event',
                        name: 'log_event'
                    },

                    {
                        data: 'user',
                        name: 'user'
                    }, {
                        data: 'model',
                        name: 'model'
                    },
                    {
                        data: 'action',
                        name: 'action'
                    },
                ]
            });
        });
    </script>
@endpush
