@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Audit Log</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Log
            </h3>
        </div>
        <div class="card-body">
            <table id="tbl_list" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Timestamp</th>
                        <th>Event</th>
                        <th>User</th>
                        <th>Auditable type</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($prodi as $m)
                        <tr>
                            <td>
                                {{ $m->getProdiID() }}
                            </td>
                            <td>
                                {{ $m->nama }}
                            </td>

                            <td>
                                <a class="btn btn-info" href='/prodi/detail/{{ $m->id }}'><i
                                        class="far fa-edit"></i> Detail</a>
                                <a class="btn btn-secondary" href='/prodi/edit/{{ $m->id }}'><i
                                        class="far fa-edit"></i> Edit</a>
                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#delete{{ $m->id }}">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
                <tfoot>
                    <tr>
                        <th>Timestamp</th>
                        <th>Event</th>
                        <th>User</th>
                        <th>Auditable type</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    {{-- <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="text-center card-title" style="float: none; font-weight:500">Menu Admin Program Studi
            </h3>
        </div>
        <div class="card-body row justify-content-center">
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3 style="font-weight: 400">Program Studi</h3>
                        <p>Pengaturan data</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <a href="/dosen/prodi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <!-- small box -->
                <div class="small-box bg-secondary">
                    <div class="inner">
                        <h3 style="font-weight: 400">Profile</h3>

                        <p>Pengaturan akun</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@push('scripts')
    <script type="text/javascript">
        // console.log($('#tbl_list'));
        $(document).ready(function() {
            $('#tbl_list').DataTable({
                "aLengthMenu": [
                    [5, 10, 25, 50, 100, 200, -1],
                    [5, 10, 25, 50, 100, 200, "All"]
                ],
                "language":  {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                },
                paging: true,
                searching: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                responsive: true,
                ajax: '{{ url('audit-log') }}',
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
