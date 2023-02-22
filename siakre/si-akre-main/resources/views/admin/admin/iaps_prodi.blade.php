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
            @include('admin.admin.component_iaps_prodi')

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
