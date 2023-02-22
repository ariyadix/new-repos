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
            <h3 class="text-center card-title" style="float: none; font-weight:500">Log Details
            </h3>
        </div>
        <div class="card-body">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Log ID</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $audit->id }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Event type</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">

                            <span
                                class=" badge rounded-pill {{ $audit->event == 'created' ? ' bg-green ' : ($audit->event == 'deleted' ? ' bg-red ' : ($audit->event == 'updated' ? ' bg-yellow ' : '')) }}">
                                {{ $audit->event }}
                            </span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">User</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <a href="{{ $user_url }}"> {{ $user->username }}
                            </a>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">User type</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $user_role }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Url</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $audit->url }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">IP Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $audit->ip_address }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">User agent</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $audit->user_agent }}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Timestamp</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            {{ $audit->updated_at }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header">
                    <h3 class="text-center card-title" style="float: none; font-weight:500">Data
                    </h3>
                </div>

                <div class="card-body">
                    <table id="tbl_list" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Atribut</th>
                                <th>Nilai lama</th>
                                <th>Nilai baru</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data_modified as $m => $node)
                                <tr>
                                    <td>
                                        {{ $m }}
                                    </td>
                                    <td class="text-start">
                                        @if ($audit->event == 'updated' || $audit->event == 'created')
                                            {!! !empty(json_decode($audit->old_values)->$m) ? json_decode($audit->old_values)->$m : '' !!}
                                        @elseif ($audit->event == 'deleted')
                                            {{ $node }}
                                        @endif
                                    </td>

                                    <td class="text-start">
                                        @if ($audit->event == 'updated' || $audit->event == 'created')
                                            {!! $node !!}
                                        @elseif ($audit->event == 'deleted')
                                            {!! !empty(json_decode($audit->old_values)->$m) ? json_decode($audit->old_values)->$m : '' !!}
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <p>No replies</p>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Atribut</th>
                                <th>Nilai lama</th>
                                <th>Nilai baru</th>
                            </tr>
                        </tfoot>
                    </table>

                </div>
            </div>

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
                    <a href="/audit/prodi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
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
                "language":  {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Indonesian.json"
                },
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "order": [
                    [1, "desc"]
                ],
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endpush
