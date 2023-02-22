@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card header_stick card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.1. VISI, MISI, TUJUAN DAN STRATEGI</p> {{-- Judul --}}
                    </div>
                    <div class="col-12 col-lg-6">
                        {{-- <p><b>Sub-kriteria : </b></p> --}}
                    </div>
                </div>

            </div>
            <!-- /.card-body -->
            @include('matriks.form_nav')

        </div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="text-center card-title" style="float: none; font-weight:500">1. VISI, MISI, TUJUAN DAN STRATEGI
                </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="tbl_list" class="table table-bordered table-center-text">
                    <thead>
                        <tr>
                            <th rowspan="2">No Butir</th>
                            <th rowspan="2" class="p_elem">Elemen</th>
                            <th rowspan="2">Dokumen Borang
                            </th>
                            <th rowspan="2" class="p_indi">Deskriptor
                            </th>
                            <th colspan="4" class="p_indi">Alasan Penilaian
                            </th>
                            <th rowspan="2">Nilai
                            </th>
                            <th rowspan="2">Bobot
                            </th>
                            <th rowspan="2">Bukti
                            </th>
                            <th rowspan="2">Komentar
                            </th>
                        </tr>
                        <tr>
                            <th>Sangat Baik</th>
                            <th>Baik</th>
                            <th>Cukup</th>
                            <th>Kurang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">1.1 [PENETAPAN]</th>
                            </tr>
                        </div>
                        @php($row_id = 311)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                3
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.1 [PENETAPAN] A. Ketersediaan dokumen kebijakan, standar, IKU, dan
                                IKT yang berkaitan dengan Visi, Misi, Tujuan, Strategi (VMTS) UPPS dan PS
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.1[PENETAPAN] Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan dengan
                                Visi, Misi, Tujuan,Strategi (VMTS) UPPS dan PS yang mencakup: A. Rumusan VMTS UPPS dan PS
                                yang sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                kepentingan internal dan eksternal.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sangat sesuai dengan
                                    VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku kepentingan
                                    internal dan eksternal.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sesuai dengan VMTS
                                    PT, memayungi visi keilmuan program Tersedianya rumusan VMTS UPPS dan PS yang sesuai
                                    dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                    kepentingan internal dan eksternal</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>

                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2 </span>
                                </label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sesuai dengan VMTS
                                    PT, memayungi visi keilmuan program Tersedianya rumusan VMTS UPPS dan PS yang cukup
                                    sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                    kepentingan internal dan eksternal</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya rumusan VMTS UPPS dan PS yang sesuai dengan VMTS
                                    PT, memayungi visi keilmuan program Tersedianya rumusan VMTS UPPS dan PS yang kurang
                                    sesuai dengan VMTS PT, memayungi visi keilmuan program studi dan melibatkan pemangku
                                    kepentingan internal dan eksternal</span>
                            </td>

                            <td
                                class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        @php($row_id = 312)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                4
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Rumusan strategi pencapaian VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Rumusan strategi pencapaian VMTS UPPS dan PS yang memenuhi tahapan yang jelas, dokumen
                                yang lengkap dan terkait pencapaian visi misi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS sangat
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS cukup
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya rumusan strategi pencapaian VMTS UPPS dan PS kurang
                                    memenuhi tahapan yang jelas, dokumen yang lengkap dan terkait pencapaian visi
                                    misi.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                                    ? 'skor_a'
                                    : (getMatriksGrade($row_id, $matriks) == 3
                                        ? 'skor_b'
                                        : (getMatriksGrade($row_id, $matriks) == 2
                                            ? 'skor_c'
                                            : (getMatriksGrade($row_id, $matriks) == 1
                                                ? 'skor_d'
                                                : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        @php($row_id = 313)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                5
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Rumusan visi keilmuan PS
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Rumusan visi keilmuan PS sesuai KKNI level 6.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara sangat jelas.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara jelas.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara cukup jelas.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya rumusan visi keilmuan PS sesuai KKNI level jenjang
                                    PS secara kurang jelas</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        <tr>
                            <th colspan="11">1.2 [PELAKSANAAN]</th>
                        </tr>
                        @php($row_id = 314)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                6
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.2 [PELAKSANAAN] A. Keterlaksanaan kebijakan, standar, IKU, dan IKT
                                yang berkaitan dengan VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.2 [PELAKSANAAN] Keterlaksanaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan VMTS
                                UPPS dan PS mencakup: A. Keterlaksanaan VMTS UPPS dan PS yang sesuai dengan VMTS PT,
                                memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal dan
                                eksternal.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang sangat efektif dengan VMTS
                                    PT, memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal
                                    dan eksternal, disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang efektif dengan VMTS PT,
                                    memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal dan
                                    eksternal, disertai bukti sahih</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang cukup efektif dengan VMTS
                                    PT, memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal
                                    dan eksternal, disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya VMTS UPPS dan PS yang kurang efektif dengan VMTS
                                    PT, memayungi visi keilmuan Program Studi dan melibatkan pemangku kepentingan internal
                                    dan eksternal, disertai bukti sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai {{ getMatriksGrade($row_id, $matriks) == 4
                                    ? 'skor_a'
                                    : (getMatriksGrade($row_id, $matriks) == 3
                                        ? 'skor_b'
                                        : (getMatriksGrade($row_id, $matriks) == 2
                                            ? 'skor_c'
                                            : (getMatriksGrade($row_id, $matriks) == 1
                                                ? 'skor_d'
                                                : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        @php($row_id = 315)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                7
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan strategi pencapaian VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan strategi pencapaian VMTS UPPS dan PS yang memenuhi tahapan yang jelas,
                                dokumen yang lengkap dan terkait pencapaian visi misi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    sangat efektif dilengkapi dengan tahapan yang jelas, dokumen yang lengkap dan terkait
                                    pencapaian visi misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    efektif dilengkapi dengan tahapan yang jelas, dokumen yang lengkap dan terkait
                                    pencapaian visi misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    cukup efektif dilengkapi dengan tahapan yang cukup jelas, dokumen yang cukup lengkap dan
                                    terkait pencapaian visi misi.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Keterlaksanaan strategi pencapaian VMTS UPPS dan PS dengan
                                    kurang efektif dilengkapi dengan tahapan yang kurang jelas, dokumen yang kurang lengkap
                                    dan kurang terkait pencapaian visi misi.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        @php($row_id = 316)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                8
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Keterlaksanaan visi keilmuan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Keterlaksanaan visi keilmuan PS mengandung muatan KKNI level 6.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara sangat efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara cukup efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Keterlaksanaan visi keilmuan PS sesuai KKNI level jenjang PS
                                    secara kurang efektif disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.25">0.25</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        <tr>
                            <th colspan="11">1.3 [EVALUASI]</th>
                        </tr>
                        @php($row_id = 317)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                9
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala dan efektif
                                mengenai kebijakan dan ketercapaian standar (IKU dan IKT) terkait VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.3 [EVALUASI] Keterlaksanaan evaluasi secara berkala dan efektif mengenai kebijakan dan
                                ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik baik, praktik buruk
                                dan praktik yang baru yang berkaitan dengan VMTS UPPS dan PS, termasuk survei pemahaman
                                dosen, tendik dan mahasiswa terhadap VMTS UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan sangat efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan
                                    PS, termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan
                                    PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenai
                                    kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik
                                    baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan PS,
                                    termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan cukup efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan
                                    PS, termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan
                                    PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan VMTS UPPS dan
                                    PS, termasuk survei pemahaman dosen, tendik dan mahasiswa terhadap VMTS UPPS dan
                                    PS.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="1">1</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        <tr>
                            <th colspan="11">1.4 [PENGENDALIAN]</th>
                        </tr>
                        @php($row_id = 318)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                10
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan
                                implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) terkait VMTS UPPS
                                dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan
                                rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan
                                dengan VMTS UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang sangat
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang kurang
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan VMTS UPPS dan PS.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                        <tr>
                            <th colspan="11">1.5 [PENINGKATAN]</th>
                        </tr>
                        @php($row_id = 319)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null  ? 'disable-input-radio': '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                11
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">1.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terhadap
                                standar (IKU dan IKT) terkait VMTS UPPS dan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>1.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan
                                penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan VMTS UPPS dan PS.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara sangat efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan VMTS UPPS dan PS, disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif (peningkatan,
                                    penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan VMTS
                                    UPPS dan PS, disertai bukti yang sahih. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan VMTS UPPS dan PS, disertai bukti yang sahih. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara kurang efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan VMTS UPPS dan PS, disertai bukti yang sahih.</span>
                            </td>{{-- ALASAN PENILAIAN 1 --}}
                            <td
                                class="nilai 
                            {{ getMatriksGrade($row_id, $matriks) == 4
                                ? 'skor_a'
                                : (getMatriksGrade($row_id, $matriks) == 3
                                    ? 'skor_b'
                                    : (getMatriksGrade($row_id, $matriks) == 2
                                        ? 'skor_c'
                                        : (getMatriksGrade($row_id, $matriks) == 1
                                            ? 'skor_d'
                                            : ''))) }}">
                                {{ getMatriksSkor($row_id, $matriks) }}
                            </td>{{-- NILAI --}}
                            <td class="bobot" data-bobot="0.5">0.5</td>{{-- BOBOT --}}
                            <td class="bukti_penilaian">
                                <label for="bukti" class="row">
                                    <a class="btn btn-primary col-12 ml-auto mr-auto {{ getMatriksBukti($row_id, $matriksBukti) == null ? 'hidden' : '' }}"
                                        id="lihat_bukti"
                                        href="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) != null ? getMatriksBukti($row_id, $matriksBukti) : '' }}"
                                        target="_blank">Lihat
                                        Bukti</a>
                                </label>
                                @if (Auth::user()->level != 5)
                                    <label for="bukti" class="row">
                                        <a class="btn btn-outline-primary col-12 ml-auto mr-auto input_bukti_trigg"
                                            data-toggle="modal" data-target="#bukti_penilaian"
                                            data-row="{{ $row_id }}"
                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}" data-skor="">Upload
                                            Bukti</a>
                                    </label>
                                @endif
                            </td>{{-- BUKTI PENILAIAN --}}
                            <td class="comment">
                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                    <div class="row">
                                        <a id="lihat_comment"
                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                            data-toggle="modal" data-target="#comment" data-row="{{ $row_id }}"
                                            data-prodi="{{ $prodi->id }}"
                                            data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                            Komentar</a>
                                    </div>
                                @else
                                    <i>Tidak ada komentar</i>
                                @endif
                            </td>
                            {{-- Komentar --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <!-- /.card -->
    </section>
    @include('matriks.modal_parts')
@endsection

@include('matriks.scripts')
