@extends('layouts.apps')
@section('title', 'Dashboard')
@include('lkps.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline">
            <div class="card-body">
            </div>
            <!-- /.card-body -->
            @include('lkps.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">Daftar Program Studi di Unit
                    Pengelola Program Studi (UPPS)</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body row justify-content-center">
                <table id="tbl_list" class="table table-striped table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No.</th>
                            <th rowspan="2">Jenis Program</th>
                            <th rowspan="2">Nama Program Studi</th>
                            <th colspan="3">Akreditasi Program Studi</th>
                            <th rowspan="2">Jumlah mahasiswa saat TS</th>
                        </tr>
                        <tr>
                            <th>Status/
                                Peringkat</th>
                            <th>No. dan Tgl.
                                SK</th>
                            <th>Tgl.
                                Kadaluarsa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                TS-4
                            </td>
                            <td colspan="6">
                                No data
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6">Jumlah</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/002"><i class="fas fa-plus-circle"></i> Ubah data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
