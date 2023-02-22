@extends('layouts.apps')
@section('title', 'Dashboard')
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>E.ANALISIS DAN PENETAPAN PROGRAM PENGEMBANGAN</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">ANALISIS DAN PENETAPAN PROGRAM
                    PENGEMBANGAN</h3>
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

                        @php($row_id = 511)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                129
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">Kelengkapan, keluasan, kedalaman, ketepatan, dan ketajaman analisis
                                untuk mengidentifikasi akar masalah
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Analisis SWOT atau Analisis Lain yang Relevan Kekuatan atau faktor pendorong, kelemahan atau
                                faktor penghambat, peluang dan ancaman yang dihadapi dalam keterkaitannya dengan hasil
                                analisis capaian kinerja. Hasil identifikasi tersebut dianalisis untuk menentukan posisi
                                UPPS dan program studi yang diakreditasi, serta menjadi dasar untuk mendapatkan alternatif
                                solusi dan menetapkan program pengembangan.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">UPPS telah melakukan analisis capaian kinerja yang: 1)
                                    analisisnya didukung oleh data/informasi yang relevan (merujuk pada pencapaian standar
                                    mutu perguruan tinggi) dan berkualitas (andal dan memadai) yang didukung oleh keberadaan
                                    pangkalan data institusi yang terintegrasi. 2) konsisten dengan seluruh kriteria yang
                                    diuraikan sebelumnya, 3) analisisnya dilakukan secara komprehensif, tepat, dan tajam
                                    untuk mengidentifikasi akar masalah di UPPS. 4) hasilnyadipublikasikan kepada para
                                    pemangku kepentingan internal dan eksternal serta mudah diakses.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">UPPS telah melakukan analisis capaian kinerja yang: 1)
                                    analisisnya didukung oleh data/informasi yang relevan (merujuk pada pencapaian standar
                                    mutu perguruan tinggi) dan berkualitas (andal dan memadai) yang didukung oleh keberadaan
                                    pangkalan data institusi yang belum terintegrasi. 2) konsisten dengan sebagian besar (7
                                    s.d. 8) kriteria yang diuraikan sebelumnya, 3) analisisnya dilakukan secara komprehensif
                                    dan tepat untuk mengidentifikasi akar masalah di UPPS. 4) hasilnya dipublikasikan kepada
                                    para pemangku kepentingan internal serta mudah diakses.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">UPPS telah melakukan analisis capaian kinerja yang: 1)
                                    analisisnya didukung oleh data/informasi yang relevan (merujuk pada pencapaian standar
                                    mutu perguruan tinggi) dan berkualitas (andal dan memadai). 2) konsisten dengan sebagian
                                    (5 s.d. 6) kriteria yang diuraikan sebelumnya, 3) analisisnya dilakukan secara
                                    komprehensif untuk mengidentifikasi akar masalah di UPPS. 4) hasilnya dipublikasikan
                                    kepada para pemangku kepentingan internal.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">UPPS telah melakukan analisis capaian kinerja yang: 1)
                                    analisisnya tidak sepenuhnya didukung oleh data/informasi yang relevan (merujuk pada
                                    pencapaian standar standar mutu perguruan tinggi) dan berkualitas (andal dan memadai).
                                    2) konsisten dengan sebagian kecil (kurang dari 5) kriteria yang diuraikan sebelumnya,
                                    3) analisisnya dilakukan tidak secara komprehensif untuk mengidentifikasi akar masalah
                                    di UPPS. 4) hasilnya tidak dipublikasikan.</span>
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
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
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

                        @php($row_id = 512)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                130
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">Kekuatan atau faktor pendorong, kelemahan atau faktor penghambat,
                                peluang dan ancaman.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>B. Ketersediaan dokumen pengelolaan penelitian yang lengkap.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">UPPS melakukan analisis SWOT atau analisis lain yang relevan,
                                    serta memenuhi aspek- aspek sebagai berikut: 1) melakukan identifikasi kekuatan atau
                                    faktor pendorong, kelemahan atau faktor penghambat, peluang dan ancaman yang dihadapi
                                    UPPS dilakukan secara tepat, 2) memiliki keterkaitan dengan hasil analisis capaian
                                    kinerja, 3) merumuskan strategi pengembangan UPPS yang berkesesuaian, dan 4)
                                    menghasilkan program-program pengembangan alternatif yang tepat.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">UPPS melakukan analisis SWOT atau analisis lain yang relevan,
                                    serta memenuhi aspek- aspek sebagai berikut: 1) melakukan identifikasi kekuatan atau
                                    faktor pendorong, kelemahan atau faktor penghambat, peluang dan ancaman yang dihadapi
                                    UPPS dilakukan secara tepat, 2) memiliki keterkaitan dengan hasil analisis capaian
                                    kinerja, dan 3) merumuskan strategi pengembangan UPPS yang berkesesuaian.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">UPPS melakukan analisis SWOT atau analisis lain yang relevan,
                                    serta memenuhi aspek- aspek sebagai berikut: 1) melakukan identifikasi kekuatan atau
                                    faktor pendorong, kelemahan atau faktor penghambat, peluang dan ancaman yang dihadapi
                                    UPPS dilakukan secara tepat, dan 2) memiliki keterkaitan dengan hasil analisis capaian
                                    kinerja.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">UPPS melakukan analisis SWOT atau analisis lain yang memenuhi
                                    aspek- aspek sebagai berikut: 1) melakukan identifikasi kekuatan atau faktor pendorong,
                                    kelemahan atau faktor penghambat, peluang dan ancaman yang dihadapi UPPS, dan 2)
                                    memiliki keterkaitan dengan hasil analisis capaian kinerja, namun tidak terstruktur dan
                                    tidak sistematis.</span>
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
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
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

                        @php($row_id = 513)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                131
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">Kemampuan UPPS dalam menetapkan strategi dan programpengembangan
                                berdasarkan prioritas.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Strategi Pengembangan Kemampuan UPPS dalam menetapkan strategi dan program pengembangan
                                berdasarkan prioritas sesuai dengan kapasitas, kebutuhan, dan VMT UPPS secara keseluruhan,
                                terutama pengembangan program studi yang diakreditasi.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">UPPS menetapkan prioritas program pengembangan berdasarkan
                                    hasil analisis SWOT atau analisis lainnya yang mempertimbangkan secara komprehensif: 1)
                                    kapasitas UPPS, 2) kebutuhan UPPS dan PS di masa depan, 3) rencana strategis UPPS yang
                                    berlaku, 4) aspirasi dari pemangku kepentingan internal dan eksternal, dan 5) program
                                    yang menjamin keberlanjutan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">UPPS menetapkan prioritas program pengembangan berdasarkan
                                    hasil analisis SWOT atau analisis lainnya yang mempertimbangkan secara komprehensif: 1)
                                    kapasitas UPPS, 2) kebutuhan UPPS dan PS di masa depan, 3) rencana strategis UPPS yang
                                    berlaku, dan 4) aspirasi dari pemangku kepentingan internal.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">UPPS menetapkan prioritas program pengembangan berdasarkan
                                    hasil analisis SWOT atau analisis lainnya yang mempertimbangkan secara komprehensif: 1)
                                    kapasitas UPPS, 2) kebutuhan UPPS dan PS di masa depan, dan 3) rencana strategis UPPS
                                    yang berlaku.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">UPPS menetapkan prioritas program pengembangan namun belum
                                    mempertimbangan secara komprehensif: 1) kapasitas UPPS, 2) kebutuhan UPPS dan PS, dan 3)
                                    rencana strategis UPPS yang berlaku.</span>
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
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
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

                        @php($row_id = 514)
                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                            data-id="{{ $row_id }}">
                            <td class="matriks_id" data-id="{{ $row_id }}">
                                132
                            </td>{{-- NO BUTIR --}}
                            <td class="text-start">Program pengembangan dan praktik baik yang dihasilkan dapat dijamin
                                keberlangsungannya.
                            </td>{{-- ELEMEN --}}
                            <td></td>{{-- LOKASI --}}
                            <td>Program Keberlanjutan Program pengembangan dan praktik baik yang dihasilkan dapat dijamin
                                keberlangsungannya. Tersedia penjelasan mencakup jaminan ketersediaan sumberdaya untuk
                                mendukung pelaksanaan program termasuk rencana penjaminan mutu yang berkelanjutan.
                            </td>{{-- DESKRIPTOR --}}
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="4">
                                    <span class="caption">4</span></label>
                                <span class="tooltiptext">UPPS memiliki kebijakan dan upaya yang diturunkan ke dalam
                                    berbagai peraturan untuk menjamin keberlanjutan program yang mencakup: 1) alokasi sumber
                                    daya, 2) kemampuan melaksanakan, 3) rencana penjaminan mutu yang berkelanjutan, dan 4)
                                    keberadaan dukungan stakeholders eksternal.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="3">
                                    <span class="caption">3</span></label>
                                <span class="tooltiptext">UPPS memiliki kebijakan dan upaya yang diturunkan ke dalam
                                    berbagai peraturan untuk menjamin keberlanjutan program yang mencakup: 1) alokasi sumber
                                    daya, 2) kemampuan melaksanakan, dan 3) rencana penjaminan mutu yang
                                    berkelanjutan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="2">
                                    <span class="caption">2</span></label>
                                <span class="tooltiptext">UPPS memiliki kebijakan dan upaya untuk menjamin keberlanjutan
                                    program yang mencakup: 1) alokasi sumber daya, 2) kemampuan melaksanakan, dan 3) rencana
                                    penjaminan mutu yang berkelanjutan.</span>
                            </td>
                            <td class="penilaian_check_field">
                                <label>
                                    <input {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }} type="radio"
                                        name="nilai{{ $row_id }}" value="1">
                                    <span class="caption">1</span></label>
                                <span class="tooltiptext">UPPS memiliki kebijakan dan upaya namun belum cukup untuk
                                    menjamin keberlanjutan program.</span>
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
                            <td class="bobot" data-bobot="3">3</td>{{-- BOBOT --}}
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
