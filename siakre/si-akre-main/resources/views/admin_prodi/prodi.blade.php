@extends('layouts.apps')
@section('title', 'Program Studi {{ $prodi->nama }}')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Detail Program Studi {{ $prodi->nama }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item"><a href="/prodi">Program Studi</a></li>
            <li class="breadcrumb-item active">{{ $prodi->nama }}</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    @if (session('pesan'))
        <div class="alert alert-success" role="alert">
            {{ session('pesan') }}
        </div>
    @endif<!-- /.container-fluid -->

    <!-- Main content -->
    <div class="card p-4">

        <div>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card " style="height: 100%">
                        <div class="card-body" style="padding-top:3rem">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="mt-3">
                                    <h4>{{ $prodi->nama }}</h4>
                                    <p class="text-secondary mb-1">{{ $prodi->getProdiID() }}</p>
                                    <p class="text-muted font-size-sm"><i class="fas fa-university"></i>
                                        {{-- {{ $prodi->mata_kuliah->sum('sks') }} SKS</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <ul class="nav nav-pills" id="mytab">
                        <li class="nav-item">
                            <a href="#biodata" data-toggle="tab" class="nav-link m-l active" aria-expanded="true">Data
                                Program
                                Studi</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="panel tab-pane wrapper-lg  active" id="biodata">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Jenis Program</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            Program Sarjana
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Nama Program Studi</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            {{ $prodi->nama }}
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="mt-5 text-left">
                                                <a class="btn btn-success" href='/prodi/edit/{{ $prodi->id }}'><i
                                                        class="far fa-edit"></i> Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
