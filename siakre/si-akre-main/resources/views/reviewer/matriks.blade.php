@extends('layouts.apps')
@section('title', 'Dashboard')
@section('header')
    <div class="col-sm-6">
        <h1 class="m-0">Penilaian Kinerja Program Studi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Beranda</a></li>
            <li class="breadcrumb-item active">Penilaian Kinerja Program Studi</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <div class="row justify-content-center">
        <section class="col-lg-12 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <h3 class="profile-username text-center">IDENTITAS</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <p><b>Program Studi : </b>{{ $prodi->nama }}</p>
                            @if (Auth::user()->level == 5)
                                {{-- @foreach ($reviewer as $column) --}}
                                <b>Nama Reviewer : </b>{{ Auth::user()->reviewer->nama }}
                                {{-- @endforeach --}}
                            @endif
                        </div>
                        <div class="col-12 col-lg-6 text-right">
                            <a class="btn btn-info"
                                href="/matriks/cetak_pdf{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"
                                target="_blank">Ubah PDF</a>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="text-center card-title" style="float: none; font-weight:500">Penilaian Kinerja
                        Program Studi</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="tbl_list" class="table table-bordered table-center-text">
                        <thead>
                            <tr>
                                <th class="mt-1 mb-1" colspan="2">BAB/KRITERIA</th>
                                <th class="mt-1 mb-1">Bobot(Skor Maksimal)
                                </th>
                                {{-- @foreach ($dataMatriksReviewer as $column => $value) --}}
                                {{-- @foreach ($reviewer as $column) --}}
                                {{-- <th class="mt-1 mb-1">Nilai Hasil
                                        R-1<br>({{ $reviewer->nama }})
                                    </th> --}}
                                {{-- @endforeach --}}
                                <th class="mt-1 mb-1">Nilai
                                </th>
                                <th class="mt-1 mb-1">Jml butir
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            <tr>
                                <th class="mt-1 mb-1 text-start" colspan="2">
                                    INSTRUMEN SUPLEMEN KONVERSI PERINGKAT AKREDITASI
                                </th>
                                <th colspan="5">

                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $row_id = 11;
                            @endphp
                            <tr
                                class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    A
                                </td>
                                <td class="text-start">
                                    KONDISI EKSTERNAL
                                </td>
                                <td>
                                    6(1,5%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}
                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/101{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>
                            </tr>
                            @php
                                $row_id = 21;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField > 0 ? 'incomplete' : '' }}">
                                <td>
                                    B
                                </td>
                                <td class="text-start">
                                    PROFIL UNIT PENGELOLA PROGRAM STUDI
                                </td>
                                <td>
                                    6(1,5%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    1
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/101{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 31;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    C
                                </td>
                                <td class="text-start">
                                    1. VISI, MISI, TUJUAN DAN STRATEGI
                                </td>
                                <td>
                                    4(1,0%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    9
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/301{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 32;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>

                                </td>
                                <td class="text-start">
                                    2. TATA PAMONG, TATA KELOLA, DAN KERJASAMA
                                </td>
                                <td>
                                    20 (5,0%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/302{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 33;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    3. MAHASISWA
                                </td>
                                <td>
                                    14 (3,5%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    9
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/303{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 34;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    4. SUMBER DAYA MANUSIA
                                </td>
                                <td>
                                    30 (7,5%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/304{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 35;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    5. KEUANGAN, SARANA DAN PRASARANA
                                </td>
                                <td>
                                    22 (5,5%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    7
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/305{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 36;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    6. PENDIDIKAN
                                </td>
                                <td>
                                    30 (7,5%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    15
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/306{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 37;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    7. PENELITIAN
                                </td>
                                <td>
                                    16 (4,0 %)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/307{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 38;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    8. PENGABDIAN KEPADA MASYARAKAT
                                </td>
                                <td>
                                    12 (3,0%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    11
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/308{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 39;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                </td>
                                <td class="text-start">
                                    9. LUARAN DAN CAPAIAN TRIDHARMA
                                </td>
                                <td>
                                    208 (52%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    17
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/309{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 41;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    D </td>
                                <td class="text-start">
                                    SUPLEMEN PROGRAM STUDI
                                </td>
                                <td>
                                    20(5,0%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    5
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/401{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            @php
                                $row_id = 51;
                            @endphp

                            <tr
                                class=" {{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }}">
                                <td>
                                    E
                                </td>
                                <td class="text-start">
                                    ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN
                                </td>
                                <td>
                                    12(3,0%)
                                </td>

                                <td>
                                    {{ getArrayItem($row_id, $dataMatriks)->skor ?: '-' }}

                                </td>
                                <td>
                                    4
                                </td>
                                <td>
                                    <a class="btn btn-info"
                                        href="/matriks/view/501{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}"><i
                                            class="fas fa-pen"></i></a>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    Nilai Hasil
                                </td>
                                <td style="text-align: center!important">
                                    400 (100%)
                                </td>
                                <td>{{ $matriksSumAll }} ({{ number_format(($matriksSumAll / 400) * 100, 2, '.', '') }}%)</td>
                                <td>
                                    112
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">Nilai Akreditasi</td>
                                <td colspan="5">
                                    <b>
                                        @php
                                            if ($matriksSumAll >= 361) {
                                                echo 'Unggul';
                                            } elseif ($matriksSumAll >= 301 && $matriksSumAll < 361) {
                                                echo 'Baik Sekali';
                                            } elseif ($matriksSumAll >= 200 && $matriksSumAll < 301) {
                                                echo 'Baik';
                                            } else {
                                                echo 'Tidak memenuhi syarat peringkat';
                                            }
                                        @endphp
                                    </b>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </section>
    </div>
@endsection
