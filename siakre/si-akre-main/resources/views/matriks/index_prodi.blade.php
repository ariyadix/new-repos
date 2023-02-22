@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 font-weight-normal">Data IAPS Prodi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Beranda</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="row">
        <section class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="text-center card-title" style="float: none; font-weight:500">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        Data Instrumen Akreditasi
                        Program
                        Studi
                        (IAPS) Fakultas
                    </h3>
                </div>
                <div class="card-body pb-0">
                    <div class="row justify-content-center">
                        <section class="col-lg-9 connectedSortable">
                            <!-- Custom tabs (Charts with tabs)-->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <h3 class="profile-username text-center">Program Studi</h3>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            @foreach ($prodi as $p)
                                <div class="card collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-university mr-1"></i>
                                            {{ $p->nama }}
                                        </h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                                title="Collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row m-1">
                                            <a href="/lkps?id={{ $p->id }}" class="btn btn-info col-md-4">
                                                LKPS</a>
                                        </div>
                                        <div class="row m-1">
                                            <a href="/matriks?id={{ $p->id }}"
                                                class="btn btn-primary col-md-4">Matriks
                                                Penilaian</a>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        </section>
                    </div>
                </div>
            </div>

        </section>
    </div>
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
                        data: 'auditable_type',
                        name: 'auditable_type'
                    },
                    {
                        data: 'ip_address',
                        name: 'ip_address'
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
