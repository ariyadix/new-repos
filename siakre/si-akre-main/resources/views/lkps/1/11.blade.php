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
                <h3 class="text-center card-title" style="float: none; font-weight:500">IDENTITAS TIM PENYUSUN LKPS</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body row justify-content-center">
                <ul class="list-group list-group-unbordered mb-3 col-xl-10 m-2">
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5  mb-1 mt-1">
                                <b>Perguruan Tinggi

                                    <span class="float-right">:</span></b>
                            </div>
                            <div class="col-md-7  mb-1 mt-1">
                                Universitas Sriwijaya
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5  mb-1 mt-1">
                                <b>Unit Pengelola Program Studi
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                Program Pascasarjana
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Jenis Program
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                Doktor
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Nama Program Studi
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                Ilmu Lingkungan
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Alamat
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                Jalan Padang Selasa 524 Bukit Besar Palembang 30139 Jalan Padang Selasa 524 Bukit Besar
                                Palembang 30139
                                Jalan Padang Selasa 524 Bukit Besar Palembang 30139 Jalan Padang Selasa 524 Bukit Besar
                                Palembang 30139
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Nomor Telepon
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">0711-352132, 354222</div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>E-Mail dan Website
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                ppsunsri@mail.pps.unsri.ac.id dan www.pps.unsri.ac.id
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Nomor SK Pendirian PT
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                PP No. 4 Tahun 1960
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Tanggal SK Pendirian PT
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                29 Oktober 1960
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Pejabat Penandatangan SK Pendirian PT
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                Presiden RI, Ir. Sukarno
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Nomor SK Pembukaan PS
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                SK Rektor Universitas Sriwijaya No. 0053/H9/L1/2007
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Tanggal SK Pembukaan PS
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                Tanggal SK Pembukaan PS
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Pejabat Penandatangan
                                    SK Pembukaan PS
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                Zainal Ridho Djafar
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Tahun Pertama Kali
                                    Menerima Mahasiswa
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                2007
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Akreditasi PS
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                B
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item ">
                        <div class="row">
                            <div class="col-md-5 mb-1 mt-1">
                                <b>Nomor SK BAN-PT
                                    <span class="float-right">:</span></b>

                            </div>
                            <div class="col-md-7 mb-1 mt-1">
                                1169/SK/BAN-PT/Akred/D/XI/2015
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="form-group d-flex align-items-center justify-content-between mb-4 ml-4">
                <a class="btn btn-primary" href="/lkps/input/001"><i class="fas fa-plus-circle"></i> Ubah data</a>
            </div>

            <!-- /.card-body -->
        </div>
        <!-- /.card -->
</section> @endsection
