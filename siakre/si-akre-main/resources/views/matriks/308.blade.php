@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.8. PENGABDIAN KEPADA MASYARAKAT</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">8. PENGABDIAN KEPADA MASYARAKAT</h3>
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
                                <th colspan="11" class="nilai">8.1 [PENETAPAN]</th>
                            </tr>
                        </div>
                        @php($row_id = 381)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                76
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">8.1 [PENETAPAN] A. Ketersediaan peraturan terkait keberadaan lembaga
                                pengelola PkM DTPR dan mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>8.1 [PENETAPAN] Ketersediaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan kegiatan
                                PkM DTPR yang mencakup: A. Peraturan terkait keberadaan lembaga/ unit pengelola PkM, baik
                                berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Pengabdian
                                Masyarakat (PkM) atau peta jalan PkM yang memayungi tema PkM DTPR dan penerapan keilmuan
                                untuk menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar
                                PkM.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya peraturanterkait keberadaan lembaga/ unit pengelola
                                    PkM, baik berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi Rencana
                                    Induk Pengabdian Masyarakat (PkM) atau peta jalan PkM yang memayungi tema PkM DTPR,
                                    serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau masyarakat, dan
                                    dilengkapi dengan
                                    standar PkM disertai bukti yang sahih dan sangat lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">lembaga/ unit pengelola PkM, baik berdiri sendiri atau
                                    bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Pengabdian Masyarakat (PkM)
                                    atau peta jalan PkM yang memayungi tema PkM DTPR, serta penerapan keilmuan untuk
                                    menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar PkM
                                    disertai bukti yang sahih dan lengkap. </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">lembaga/ unit pengelola PkM, baik berdiri sendiri atau
                                    bergabung dalam lembaga lain, yang dilengkapi Rencana Induk Pengabdian Masyarakat (PkM)
                                    atau peta jalan PkM yang memayungi tema PkM DTPR, serta penerapan keilmuan untuk
                                    menyelesaikan permasalahan industri atau masyarakat, dan dilengkapi dengan standar PkM
                                    disertai bukti yang sahih dan cukup lengkap.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya peraturan terkait keberadaan lembaga/ unit
                                    pengelola PkM, baik berdiri sendiri atau bergabung dalam lembaga lain, yang dilengkapi
                                    Rencana Induk Pengabdian Masyarakat (PkM) atau peta jalan PkM yang memayungi tema PkM
                                    DTPR, serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau
                                    masyarakat, dan dilengkapi dengan standar PkM disertai bukti yang sahih dan kurang
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

                        @php($row_id = 382)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                77
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start"> B. Ketersediaan dokumen pengelolaan PkM yang lengkap.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Ketersediaan dokumen pengelolaan PkM yang lengkap.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan PkM disertai bukti yang sangat
                                    lengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan PkM disertai bukti yang lengkap
                                    dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan PkM disertai bukti yang cukup
                                    lengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumen pengelolaan PkM disertai bukti yang kurang
                                    lengkap dan sahih.</span>
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

                        @php($row_id = 383)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                78
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Rumusan visi keilmuan PS.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Ketersediaan mekanisme pelaksanaan PkM DTPR dan mahasiswa sesuai dengan agenda PkM DTPR
                                yang merujuk kepada peta jalan PkM.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianyamekanismepelaksanaan PkMDTPR dan mahasiswasesuai
                                    dengan agendaPkM DTPR yangmerujuk kepada petajalan PkM disertaibukti yang sangatlengkap
                                    dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianyamekanismepelaksanaan PkMDTPR dan mahasiswasesuai
                                    dengan agendaPkM DTPR yangmerujuk kepada petajalan PkM disertaibukti yang lengkap
                                    dansahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianyamekanismepelaksanaan PkMDTPR dan mahasiswasesuai
                                    dengan agendaPkM DTPR yangmerujuk kepada petajalan PkM disertaibukti yang cukuplengkap
                                    dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianyamekanismepelaksanaan PkMDTPR dan mahasiswasesuai
                                    dengan agendaPkM DTPR yangmerujuk kepada petajalan PkM disertaibukti yang kuranglengkap
                                    dan sahih.</span>
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

                        @php($row_id = 384)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                79
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Ketersediaan mekanisme monitoring kesesuaian PkM DTPR dan
                                mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Ketersediaan mekanisme monitoring kesesuaian PkM DTPR dan mahasiswa dengan peta jalan,
                                dan penggunaan hasil evaluasi untuk perbaikan relevansi PkM.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya mekanis memonitoring kesesuaian PkM DTPR dan
                                    mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi
                                    PkM, disertai dengan dokumen yang sangat lengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian PkM DTPR dan
                                    mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi
                                    PkM, disertai dengan dokumen yang lengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian PkM DTPR dan
                                    mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi
                                    PkM, disertai dengan dokumen yang cukup lengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya mekanisme monitoring kesesuaian PkM DTPR dan
                                    mahasiswa dengan peta jalan, dan penggunaan hasil evaluasi untuk perbaikan relevansi
                                    PkM, disertai dengan dokumen yang kurang lengkap dan sahih.</span>
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

                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">8.2 [PELAKSANAAN]</th>
                            </tr>
                        </div>
                        @php($row_id = 385)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                80
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">8.2 [PELAKSANAAN] A. Ketersediaan kebijakan, standar, IKU, dan IKT
                                yang berkaitan dengan kegiatan PkM DTPR dan mahasiswa terkait proses pengelolaan lembaga
                                PkM.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>8.2 [PELAKSANAAN] Ketersediaan kebijakan, standar, IKU, dan IKT yang berkaitan dengan
                                kegiatan PkM DTPR yang mencakup: A. Proses pengelolaan lembaga PkM dalam mengelola PkM DTPR
                                dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan industri atau
                                masyarakat yang relevan dengan peta jalan PkM, dan kesesuaiannya dengan standar PkM.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya proses pengelolaan lembaga PkM dalam mengelola
                                    PkM DTPR dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan
                                    industri atau masyarakat yang relevan dengan peta jalan PkM, dan kesesuaiannya dengan
                                    standar PkM secara sangat efektif dan disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses pengelolaan lembaga PkM dalam mengelola
                                    PkM DTPR dan mahasiswa serta penerapan keilmuan untuk menyelesaikan permasalahan
                                    industri atau masyarakat yang relevan dengan peta jalan PkM, dan kesesuaiannya dengan
                                    standar PkM secara efektif dan disertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya prosespengelolaan lembagaPkM dalam mengelolaPkM
                                    DTPR danmahasiswa sertapenerapan keilmuanuntuk menyelesaikanpermasalahan industriatau
                                    masyarakat yangrelevan dengan petajalan PkM, dankesesuaiannya denganstandar PkM
                                    secaracukup efektif dandisertai bukti sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya prosespengelolaan lembagaPkM dalam mengelolaPkM
                                    DTPR danmahasiswa sertapenerapan keilmuanuntuk menyelesaikanpermasalahan industriatau
                                    masyarakat yangrelevan dengan petajalan PkM, dankesesuaiannya denganstandar PkM
                                    secarakurang efektif dandisertai bukti sahih.</span>
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

                        @php($row_id = 386)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                81
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">B. Keterlaksanaan pengelolaan PkM dengan dokumen yang lengkap.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Keterlaksanaan pengelolaan PkM dengan dokumen yang lengkap, mulai dari call for proposal
                                hingga laporan akhir.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan PkM dengan dokumen yang sangat
                                    lengkap dan sahih, mulai dari call for proposal hingga laporan akhir.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan PkM dengan dokumen yang lengkap dan
                                    sahih, mulai dari call for proposal hingga laporan akhir.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan PkM dengan dokumen yang cukup
                                    lengkap dan sahih, mulai dari call for proposal hingga laporan akhir.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya pengelolaan PkM dengan dokumen yang kurang
                                    lengkap dan sahih, mulai dari call for proposal hingga laporan akhir.</span>
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

                        @php($row_id = 387)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                82
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">C. Keterlaksanaan PkM DTPR dan mahasiswa sesuai dengan agenda PkM
                                DTPR.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>C. Keterlaksanaan PkM DTPR dan mahasiswa sesuai dengan agenda PkM DTPR yang merujuk kepada
                                peta jalan PkM.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananyakegiatan PkM DTPRdan mahasiswa sesuaidengan
                                    agenda PkMDTPR yang merujukkepada peta jalanPkM, yang dilengkapidengan dokumen
                                    yangsangat lengkap dansahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananyakegiatan PkM DTPRdan mahasiswa sesuaidengan
                                    agenda PkMDTPR yang merujukkepada peta jalanPkM, yang dilengkapidengan dokumen
                                    yanglengkap dan sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananyakegiatan PkM DTPRdan mahasiswa sesuaidengan
                                    agenda PkMDTPR yang merujukkepada peta jalanPkM, yang dilengkapidengan dokumen yangcukup
                                    lengkap dansahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananyakegiatan PkM DTPRdan mahasiswa sesuaidengan
                                    agenda PkMDTPR yang merujukkepada peta jalanPkM, yang dilengkapidengan dokumen
                                    yangkurang lengkap dansahih.</span>
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

                        @php($row_id = 388)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                83
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">D. Keterlaksanaan monitoring kesesuaian PkM DTPR dan mahasiswa.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>D. Keterlaksanaan monitoring kesesuaian PkM DTPR dan mahasiswa dengan peta jalan, dan
                                penggunaan hasil monitoring untuk perbaikan relevansi PkM.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananyamonitoring kesesuaianPkM DTPR danmahasiswa
                                    denganpeta jalan, danpenggunaan hasilmonitoring untukperbaikan relevansiPkM secara
                                    sangatefektif.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananyamonitoring kesesuaianPkM DTPR danmahasiswa
                                    denganpeta jalan, danpenggunaan hasilmonitoring untukperbaikan relevansiPkM secara
                                    efektif.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananyamonitoring kesesuaianPkM DTPR danmahasiswa
                                    denganpeta jalan, danpenggunaan hasilmonitoring untukperbaikan relevansiPkM secara
                                    cukupefektif.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananyamonitoring kesesuaianPkM DTPR danmahasiswa
                                    denganpeta jalan, danpenggunaan hasilmonitoring untukperbaikan relevansiPkM secara
                                    kurangefektif.</span>
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

                        <div class="nilai">
                            <tr class="nilai">
                                <th colspan="11" class="nilai">8.3 [EVALUASI]</th>
                            </tr>
                        </div>
                        @php($row_id = 389)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                84
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">8.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan
                                ketercapaian standar (IKU dan IKT) terkait kegiatan PkM DTPR.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>8.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian standar (IKU dan
                                IKT) sehingga menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang berkaitan
                                dengan kegiatan PkM DTPR, termasuk survei kepuasan DTPR terhadap pengelolaan kegiatan PkM.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasisecara berkala dansangat efektifmengenai
                                    kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik,
                                    praktikburuk dan praktik yangbaru yang berkaitandengan kegiatan PkMDTPR, termasuk
                                    surveikepuasan dosen terhadap pengelolaankegiatan PkM.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasisecara berkala danefektif
                                    mengenaikebijakan danketercapaian standar(IKU dan IKT) sehinggadapat
                                    menemu-kenalipraktik baik, praktikburuk dan praktik yangbaru yang berkaitandengan
                                    kegiatan PkMDTPR, termasuk surveikepuasan dosen terhadap pengelolaankegiatan PkM.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasisecara berkala dancukup efektifmengenai
                                    kebijakandan ketercapaianstandar (IKU dan IKT)sehingga dapatmenemu-kenalipraktik baik,
                                    praktikburuk dan praktik yangbaru yang berkaitandengan kegiatan PkMDTPR, termasuk
                                    surveikepuasan dosen terhadap pengelolaankegiatan PkM.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang efektif
                                    mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat
                                    menemu-kenalipraktik baik, praktik buruk dan praktik yang baru yang berkaitan dengan
                                    kegiatan PkMDTPR, termasuk survei kepuasan dosen terhadap pengelolaan kegiatan
                                    PkM.</span>
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
                                <th colspan="11" class="nilai">8.4 [PENGENDALIAN]</th>
                            </tr>
                        </div>
                        @php($row_id = 3810)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                85
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">8.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan
                                implementasi terkait kegiatan PkM DTPR.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>8.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi (revisi dan
                                rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan
                                dengan kegiatan PkM DTPR.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangsangat
                                    lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT)
                                    yangberkaitan dengankegiatan PkM DTPR.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Tersedianya dokumentindak lanjut dan implementasi yang lengkap
                                    (revisi danrekomendasi)terhadap hasil evaluasi ketercapaian standar(IKU dan IKT) yang
                                    berkaitan denga nkegiatan PkM DTPR.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan implementasi yang cukup
                                    lengkap (revisidan rekomendasi)terhadap hasil evaluasi ketercapaian standar(IKU dan IKT)
                                    yang berkaitan dengan kegiatan PkM DTPR.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Tersedianya dokumentindak lanjut danimplementasi yangkurang
                                    lengkap (revisidan rekomendasi)terhadap hasil evaluasiketercapaian standar(IKU dan IKT)
                                    yangberkaitan dengankegiatan PkM DTPR.</span>
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
                                <th colspan="11" class="nilai">8.3 [EVALUASI]</th>
                            </tr>
                        </div>
                        @php($row_id = 3811)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                86
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">8.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan
                                ketercapaian standar (IKU dan IKT) terkait kegiatan PkM DTPR.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>8.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan, penyesuaian, dan
                                penyelarasan) terhadap standar (IKU dan IKT) yang berkaitan dengan kegiatan PkM DTPR.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">Terlaksananya prosesoptimalisasi secara sangat
                                    efektif(peningkatan,penyesuaian, danpenyelarasan) terhadap standar (IKUdan IKT) yang
                                    berkaitan dengan kegiatan PkM DTPR disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">Terlaksananya proses optimalisasi secara efektif
                                    (peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKUdan IKT) yang berkaitan
                                    dengan kegiatan PkM DTPR disertai bukti yang sahih.x </span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">Terlaksananya prosesoptimalisasi secara cukup
                                    efektif(peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKUdan IKT) yang
                                    berkaitan dengan kegiatan PkM DTPR disertai bukti yang sahih.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">Terlaksananya prosesoptimalisasi secara kurang
                                    efektif(peningkatan,penyesuaian, danpenyelarasan)terhadap standar (IKUdan IKT) yang
                                    berkaitan dengan kegiatan PkM DTPR disertai bukti yang sahih.</span>
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
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->
    </section>
    @include('matriks.modal_parts')

@endsection

@include('matriks.scripts')
