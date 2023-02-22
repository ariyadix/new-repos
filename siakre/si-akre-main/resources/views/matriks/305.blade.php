@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.5. KEUANGAN, SARANA DAN PRASARANA</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">5. KEUANGAN, SARANA DAN PRASARANA
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
                            <th rowspan="2">Skor
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
                                <th colspan="11" class="nilai">5.1 [PENETAPAN]</th>
                            </tr>
                        </div>


                        @php($row_id = 351)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                43
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">5.1 [PENETAPAN] A. Ketersediaan kebijakan, standar, IKU, dan IKT
                                terkait keuangan, sarana, dan prasarana mendukung penyelenggaraan tridarma.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>5.1 [PENETAPAN] Ketersediaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan
                                keuangan, sarana, dan prasarana mencakup: A. Sistem pengelolaan dana dan pembiayaan untuk
                                proses pembelajaran, penelitian dan PkM, pembiayaan untuk investasi (SDM, sarana dan
                                prasarana) yang mendukung penyelenggaraan tridarma disertai dasar perhitungan kecukupan dan
                                keberlanjutan keuangan, sarana, dan prasarana.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, pembiayaan untuk investasi (SDM, sarana dan prasarana)
                                    yang mendukung penyelenggaraan tridarma disertai dasar perhitungan kecukupan dan
                                    keberlanjutan keuangan, sarana, dan prasarana, disertai bukti yang sahih dan sangat
                                    lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, pembiayaan untuk investasi (SDM, sarana dan prasarana)
                                    yang mendukung penyelenggaraan tridarma disertai dasar perhitungan kecukupan dan
                                    keberlanjutan keuangan, sarana, dan prasarana, disertai bukti yang sahih dan
                                    lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, pembiayaan untuk investasi (SDM, sarana dan prasarana)
                                    yang mendukung penyelenggaraan tridarma disertai dasar perhitungan kecukupan dan
                                    keberlanjutan keuangan, sarana, dan prasarana, disertai bukti yang sahih dan cukup
                                    lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, pembiayaan untuk investasi (SDM, sarana dan prasarana)
                                    yang mendukung penyelenggaraan tridarma disertai dasar perhitungan kecukupan dan
                                    keberlanjutan keuangan, sarana, dan prasarana, disertai bukti yang sahih dan kurang
                                    lengkap.</span>
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
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
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



                        @php($row_id = 352)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                44
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Pengelolaan sarana dan prasarana.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Pengelolaan sarana dan prasarana.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya pengelolaan sarana dan prasarana, disertai bukti
                                    yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan sarana dan prasarana, disertai
                                    bukti yang sahih dan lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan sarana dan prasarana, disertai
                                    bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya sistem pengelolaan sarana dan prasarana, disertai
                                    bukti yang sahih dan kurang lengkap.</span>
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
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
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
                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">5.2 [PELAKSANAAN]</th>
                            </tr>
                        </div>

                        @php($row_id = 353)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                45
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">5.2 [PELAKSANAAN] A. Keterlaksanaan sistem pengelolaan dana dan
                                pembiayaan mendukung penyelenggaraan tridarma.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>5.2 [PELAKSANAAN] Keterlaksanaan kebijakan dan standar yang berkaitan dengan keuangan,
                                sarana, dan prasarana yang mencakup: A. Sistem pengelolaan dana dan pembiayaan untuk proses
                                pembelajaran, penelitian dan PkM, serta untuk investasi (SDM, sarana dan prasarana) yang
                                mendukung penyelenggaraan tridarma.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, serta untuk investasi (SDM, sarana dan prasarana) yang
                                    mendukung penyelenggaraan tridarma secara sangat efektif disertai bukti yang
                                    sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, serta untuk investasi (SDM, sarana dan prasarana) yang
                                    mendukung penyelenggaraan tridarma secara efektif disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, serta untuk investasi (SDM, sarana dan prasarana) yang
                                    mendukung penyelenggaraan tridarma secara cukup efektif disertai bukti yang
                                    sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan dana dan pembiayaan untuk proses
                                    pembelajaran, penelitian dan PkM, serta untuk investasi (SDM, sarana dan prasarana) yang
                                    mendukung penyelenggaraan tridarma secara kurang efektif disertai bukti yang
                                    sahih.</span>
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
                            <td class="bobot" data-bobot="5">5</td>{{-- BOBOT --}}
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

                        @php($row_id = 354)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                46
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan pengelolaan sarana dan prasarana menunjang proses
                                pembelajaran, penelitian dan PkM.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan pengelolaan sarana dan prasarana, serta kecukupannya untuk menunjang
                                proses pembelajaran, penelitian dan PkM, meliputi laboratorium, perangkat keras, perangkat
                                lunak, bandwidth, dan bahan pustaka.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan sarana dan prasarana, serta
                                    kecukupannya untuk menunjang proses pembelajaran, penelitian dan PkM, meliputi
                                    laboratorium, perangkat keras, perangkat lunak, bandwidth, dan bahan pustaka secara
                                    sangat efektif dan disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan sarana dan prasarana, serta
                                    kecukupannya untuk menunjang proses pembelajaran, penelitian dan PkM, meliputi
                                    laboratorium, perangkat keras, perangkat lunak, bandwidth, dan bahan pustaka secara
                                    efektif dan disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan sarana dan prasarana, serta
                                    kecukupannya untuk menunjang proses pembelajaran, penelitian dan PkM, meliputi
                                    laboratorium, perangkat keras, perangkat lunak, bandwidth, dan bahan pustaka secara
                                    cukup dan disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan sarana dan prasarana, serta
                                    kecukupannya untuk menunjang proses pembelajaran, penelitian dan PkM, meliputi
                                    laboratorium, perangkat keras, perangkat lunak, bandwidth, dan bahan pustaka secara
                                    kurang dan disertai bukti sahih.</span>
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
                            <td class="bobot" data-bobot="5">5</td>{{-- BOBOT --}}
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
                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">5.3 [EVALUASI]</th>
                            </tr>
                        </div>

                        @php($row_id = 355)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                47
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">5.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan
                                ketercapaian standar (IKU dan IKT) terkait keuangan, sarana, dan prasarana.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>5.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan
                                IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan
                                dengan keuangan, sarana, dan prasarana, termasuk evaluasi kepuasan dosen, tenaga
                                kependidikan dan mahasiswa terhadap ketersediaan dan keteraksesan sarana prasarana.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan sangat efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan keuangan,
                                    sarana, dan prasarana, termasuk evaluasi kepuasan dosen, tenaga kependidikan dan
                                    mahasiswa terhadap ketersediaan dan keteraksesan sarana prasarana.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif mengenai
                                    kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali praktik
                                    baik, praktik buruk dan praktik yang baru yang berkaitan dengan keuangan, sarana, dan
                                    prasarana, termasuk evaluasi kepuasan dosen, tenaga kependidikan dan mahasiswa terhadap
                                    ketersediaan dan keteraksesan sarana prasarana.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan cukup efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan keuangan,
                                    sarana, dan prasarana, termasuk evaluasi kepuasan dosen, tenaga kependidikan dan
                                    mahasiswa terhadap ketersediaan dan keteraksesan sarana prasarana</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat menemu-kenali
                                    praktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan keuangan,
                                    sarana, dan prasarana, termasuk evaluasi kepuasan dosen, tenaga kependidikan dan
                                    mahasiswa terhadap ketersediaan dan keteraksesan sarana prasarana.</span>
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
                            <td class="bobot" data-bobot="4">4</td>{{-- BOBOT --}}
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
                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">5.4 [PENGENDALIAN]</th>
                            </tr>
                        </div>

                        @php($row_id = 356)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                48
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">5.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan
                                implementasi terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) terkait keuangan,
                                sarana, dan prasarana.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>5.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan
                                rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan
                                dengan keuangan, sarana, dan prasarana.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang sangat
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan keuangan, sarana, dan prasarana.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan keuangan, sarana, dan prasarana.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan keuangan, sarana, dan prasarana.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang kurang
                                    lengkap (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan
                                    IKT) yang berkaitan dengan keuangan, sarana, dan prasarana.</span>
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
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
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
                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">5.5 [PENINGKATAN]</th>
                            </tr>
                        </div>

                        @php($row_id = 357)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                49
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">5.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi terhadap
                                standar (IKU dan IKT) terkait keuangan, sarana, dan prasarana.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>5.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan
                                penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan keuangan, sarana, dan
                                prasarana.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara sangat efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan keuangan, sarana, dan prasarana disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif (peningkatan,
                                    penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan
                                    keuangan, sarana, dan prasarana disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara cukup efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan keuangan, sarana, dan prasarana disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara kurang efektif
                                    (peningkatan, penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                    berkaitan dengan keuangan, sarana, dan prasarana tanpa disertai bukti yang sahih.</span>
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
                            <td class="bobot" data-bobot="2">2</td>{{-- BOBOT --}}
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
        <!-- /.card -->
    </section>
    @include('matriks.modal_parts')

@endsection

@include('matriks.scripts')
