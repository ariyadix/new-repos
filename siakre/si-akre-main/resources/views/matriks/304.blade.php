@extends('layouts.apps')
@section('title', 'Dashboard')
@php($lkps = 401)
@include('matriks.form_header')
@section('content')
    <section class="content">
        <div class="card card-primary card-outline header_stick">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <p><b>Matriks : </b>C.4. SUMBER DAYA MANUSIA</p> {{-- Judul --}}
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
                <h3 class="text-center card-title" style="float: none; font-weight:500">4. SUMBER DAYA MANUSIA</h3>
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
                                <th colspan="11" class="nilai">4.1 [PENETAPAN]</th>
                            </tr>

                            @php($row_id = 341)
                            <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                data-id="{{ $row_id }}">
                                <td class="matriks_id" data-id="{{ $row_id }}">
                                    32
                                </td>{{-- NO BUTIR --}}
                                <td class="text-start">4.1 [PENETAPAN] A. Ketersediaan dokumen kebijakan, standar, IKU,
                                    dan IKT yang berkaitan dengan SDM terkait ketersediaan Profil DTPR.
                                </td>{{-- ELEMEN --}}
                                <td><a
                                        href="/lkps/view/401{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}">4.1</a>
                                </td>{{-- DOKUMEN BORANG --}}
                                <td>4.1 [PENETAPAN] Ketersediaan dokumen kebijakan, standar, IKU, dan IKT yang berkaitan
                                    dengan SDM mencakup: A. Ketersediaan Profil DTPR (kecukupan jumlah, jabfung,
                                    kualifikasi, keahlian, beban kerja EWMP, kenggotaan dalam organisasi, dan sertifikasi
                                    profesi).
                                </td>{{-- DESKRIPTOR --}}
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="4">
                                        <span class="caption">4</span></label>
                                    <span class="tooltiptext">Tersedianya profil DTPR (kualifikasi, keahlian, beban kerja
                                        EWMP, kenggotaan dalam organisasi, dan sertifikasi profesi) disertai bukti yang
                                        sahih dan sangat lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio" {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="3">
                                        <span class="caption">3</span></label>
                                    <span class="tooltiptext">Tersedianya profil DTPR (kualifikasi, keahlian, beban kerja
                                        EWMP, kenggotaan dalam organisasi, dan sertifikasi profesi) disertai bukti yang
                                        sahih dan lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="2">
                                        <span class="caption">2</span></label>
                                    <span class="tooltiptext">Tersedianya profil DTPR (kualifikasi, keahlian, beban kerja
                                        EWMP, kenggotaan dalam organisasi, dan sertifikasi profesi) disertai bukti yang
                                        sahih dan cukup lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="1">
                                        <span class="caption">1</span></label>
                                    <span class="tooltiptext">Tersedianya profil DTPR (kualifikasi, keahlian, beban kerja
                                        EWMP, kenggotaan dalam organisasi, dan sertifikasi profesi) disertai bukti yang
                                        sahih dan kurang lengkap.</span>
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
                                                data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                data-skor="">Upload
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

                            @php($row_id = 342)
                            <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                data-id="{{ $row_id }}">
                                <td class="matriks_id" data-id="{{ $row_id }}">
                                    33
                                </td>{{-- NO BUTIR --}}
                                <td class="text-start">B. Ketersediaan kebijakan pengembangan DTPR.
                                </td>{{-- ELEMEN --}}
                                <td></td>{{-- LOKASI --}}
                                <td>B. Ketersediaan kebijakan pengembangan DTPR.
                                </td>{{-- DESKRIPTOR --}}
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="4">
                                        <span class="caption">4</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan dosen tetap DTPR
                                        disertai bukti yang sahih dan sangat lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="3">
                                        <span class="caption">3</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan dosen tetap DTPR
                                        disertai bukti yang sahih dan lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="2">
                                        <span class="caption">2</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan dosen tetap DTPR
                                        disertai bukti yang sahih dan cukup lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="1">
                                        <span class="caption">1</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan dosen tetap DTPR
                                        disertai bukti yang sahih dan kurang lengkap.</span>
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
                                                data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                data-skor="">Upload
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

                            @php($row_id = 343)
                            <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                data-id="{{ $row_id }}">
                                <td class="matriks_id" data-id="{{ $row_id }}">
                                    34
                                </td>{{-- NO BUTIR --}}
                                <td class="text-start">C. Ketersediaan kebijakan pengembangan tenaga kependidikan.
                                </td>{{-- ELEMEN --}}
                                <td></td>{{-- LOKASI --}}
                                <td>C. Ketersediaan kebijakan pengembangan tenaga kependidikan.
                                </td>{{-- DESKRIPTOR --}}
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="4">
                                        <span class="caption">4</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan tenaga kependidikan
                                        disertai bukti yang sahih dan sangat lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="3">
                                        <span class="caption">3</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan tenaga kependidikan
                                        disertai bukti yang sahih dan lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="2">
                                        <span class="caption">2</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan tenaga kependidikan
                                        disertai bukti yang sahih dan cukup lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="1">
                                        <span class="caption">1</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengembangan tenaga kependidikan
                                        disertai bukti yang sahih dan kurang lengkap.</span>
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
                                                data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                data-skor="">Upload
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

                            @php($row_id = 344)
                            <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                data-id="{{ $row_id }}">
                                <td class="matriks_id" data-id="{{ $row_id }}">
                                    35
                                </td>{{-- NO BUTIR --}}
                                <td class="text-start">D. Ketersediaan kebijakan pengakuan/rekognisi atas
                                    kepakaran/prestasi/kinerja DTPR
                                </td>{{-- ELEMEN --}}
                                <td></td>{{-- LOKASI --}}
                                <td>D.Ketersediaan kebijakan pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPR:
                                    a) menjadi visiting lecturer atau visiting scholar di program studi/perguruan tinggi
                                    terakreditasi A/Unggul atau program studi/perguruan tinggi internasional bereputasi.
                                    b) menjadi keynote speaker/invited speaker pada pertemuan ilmiah tingkat nasional/
                                    internasional
                                    c) menjadi editor atau mitra bestari pada jurnal nasional terakreditasi/jurnal
                                    internasional bereputasi di bidang infokom.
                                    d) menjadi staf ahli/narasumber di lembaga tingkat wilayah/nasional/internasional pada
                                    bidang infokom atau menjadi tenaga ahli/konsultan di lembaga/industri tingkat
                                    wilayah/nasional/internasional pada bidang infokom
                                    e) mendapat penghargaan atas prestasi dan kinerja di tingkat
                                    wilayah/nasional/internasional.
                                </td>{{-- DESKRIPTOR --}}
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="4">
                                        <span class="caption">4</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengakuan/rekognisi atas
                                        kepakaran/prestasi/kinerja DTPR disertai bukti sahih dan sangat lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="3">
                                        <span class="caption">3</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengakuan/rekognisi atas
                                        kepakaran/prestasi/kinerja DTPR disertai bukti sahih dan lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="2">
                                        <span class="caption">2</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengakuan/rekognisi atas
                                        kepakaran/prestasi/kinerja DTPR disertai bukti sahih dan cukup lengkap.</span>
                                </td>
                                <td class="penilaian_check_field">
                                    <label>
                                        <input type="radio"
                                            {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                            name="nilai{{ $row_id }}" value="1">
                                        <span class="caption">1</span></label>
                                    <span class="tooltiptext">Tersedianya kebijakan pengakuan/rekognisi atas
                                        kepakaran/prestasi/kinerja DTPR disertai bukti sahih dan cukup lengkap.</span>
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
                                                data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                data-skor="">Upload
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
                                    <th colspan="11" class="nilai">4.2 [PELAKSANAAN]</th>
                                </tr>
                                @php($row_id = 345)
                                <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                    data-id="{{ $row_id }}">
                                    <td class="matriks_id" data-id="{{ $row_id }}">
                                        36
                                    </td>{{-- NO BUTIR --}}
                                    <td class="text-start">4.2 [PELAKSANAAN]
                                        A. Keterlaksanaan atas kebijakan, standar, IKU, dan IKT yang berkaitan dengan SDM
                                        terkait Kegiatan DTPR.
                                    </td>{{-- ELEMEN --}}
                                    <td><a
                                            href="/lkps/view/401{{ Auth::user()->level == 1 || Auth::user()->level == 5 ? '?id=' . $prodi->id : '' }}">4.1</a>
                                    </td>{{-- DOKUMEN BORANG --}}
                                    <td>4.2 [PELAKSANAAN] Keterlaksanaan atas kebijakan, standar, IKU, dan IKT yang
                                        berkaitan dengan SDM mencakup: A. Kegiatan DTPR yang mencakup rata-rata beban tugas
                                        (EWMP), pembimbingan, keanggotaan dalam organisasi profesi dan kepemilikan
                                        sertifikasi profesi, sesuai Tabel 4.1 LKPS.
                                    </td>{{-- DESKRIPTOR --}}
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="4">
                                            <span class="caption">4</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan DTPR yang mencakup beban tugas
                                            (EWMP), pembimbingan, keanggotaan dalam organisasi profesi dan kepemilikan
                                            sertifikasi profesi secara sangat efektif disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="3">
                                            <span class="caption">3</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan DTPR yang mencakup beban tugas
                                            (EWMP), pembimbingan, keanggotaan dalam organisasi profesi dan kepemilikan
                                            sertifikasi profesi secara efektif disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="2">
                                            <span class="caption">2</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan DTPR yang mencakup beban tugas
                                            (EWMP), pembimbingan, keanggotaan dalam organisasi profesi dan kepemilikan
                                            sertifikasi profesi secara efektif disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="1">
                                            <span class="caption">1</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan DTPR yang mencakup beban tugas
                                            (EWMP), pembimbingan, keanggotaan dalam organisasi profesi dan kepemilikan
                                            sertifikasi profesi secara efektif disertai bukti yang sahih.</span>
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
                                                    data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                    data-skor="">Upload
                                                    Bukti</a>
                                            </label>
                                        @endif
                                    </td>{{-- BUKTI PENILAIAN --}}
                                    <td class="comment">
                                        @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                            <div class="row">
                                                <a id="lihat_comment"
                                                    class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                                    data-toggle="modal" data-target="#comment"
                                                    data-row="{{ $row_id }}" data-prodi="{{ $prodi->id }}"
                                                    data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                                    Komentar</a>
                                            </div>
                                        @else
                                            <i>Tidak ada komentar</i>
                                        @endif
                                    </td>
                                    {{-- Komentar --}}
                                </tr>


                                @php($row_id = 346)
                                <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                    data-id="{{ $row_id }}">
                                    <td class="matriks_id" data-id="{{ $row_id }}">
                                        37
                                    </td>{{-- NO BUTIR --}}
                                    <td class="text-start">B. Keterlaksanaan kegiatan untuk pengembangan DTPR.
                                    </td>{{-- ELEMEN --}}
                                    <td></td>{{-- LOKASI --}}
                                    <td>B. Keterlaksanaan kegiatan untuk pengembangan DTPR.
                                    </td>{{-- DESKRIPTOR --}}
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="4">
                                            <span class="caption">4</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan DTPR secara sangat efektif
                                            disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="3">
                                            <span class="caption">3</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan DTPR secara efektif
                                            disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="2">
                                            <span class="caption">2</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan DTPR secara cukup efektif
                                            disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="1">
                                            <span class="caption">1</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan DTPR secara kurang efektif
                                            disertai bukti yang sahih.</span>
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
                                                    data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                    data-skor="">Upload
                                                    Bukti</a>
                                            </label>
                                        @endif
                                    </td>{{-- BUKTI PENILAIAN --}}
                                    <td class="comment">
                                        @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                            <div class="row">
                                                <a id="lihat_comment"
                                                    class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                                    data-toggle="modal" data-target="#comment"
                                                    data-row="{{ $row_id }}" data-prodi="{{ $prodi->id }}"
                                                    data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                                    Komentar</a>
                                            </div>
                                        @else
                                            <i>Tidak ada komentar</i>
                                        @endif
                                    </td>
                                    {{-- Komentar --}}
                                </tr>

                                @php($row_id = 347)
                                <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                    data-id="{{ $row_id }}">
                                    <td class="matriks_id" data-id="{{ $row_id }}">
                                        38
                                    </td>{{-- NO BUTIR --}}
                                    <td class="text-start">C. Keterlaksanaan pengembangan tenaga kependidikan.
                                    </td>{{-- ELEMEN --}}
                                    <td></td>{{-- LOKASI --}}
                                    <td>C. Keterlaksanaan pengembangan tenaga kependidikan dengan efektif, disertai bukti
                                        yang sahih.
                                    </td>{{-- DESKRIPTOR --}}
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="4">
                                            <span class="caption">4</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan tenaga kependidikan secara
                                            sangat efektif disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="3">
                                            <span class="caption">3</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan tenaga kependidikan secara
                                            efektif disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="2">
                                            <span class="caption">2</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan tenaga kependidikan secara
                                            cukup efektif disertai bukti yang sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="1">
                                            <span class="caption">1</span></label>
                                        <span class="tooltiptext">Terlaksananya pengembangan tenaga kependidikan secara
                                            kurang efektif disertai bukti yang sahih.</span>
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
                                                    data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                    data-skor="">Upload
                                                    Bukti</a>
                                            </label>
                                        @endif
                                    </td>{{-- BUKTI PENILAIAN --}}
                                    <td class="comment">
                                        @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                            <div class="row">
                                                <a id="lihat_comment"
                                                    class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                                    data-toggle="modal" data-target="#comment"
                                                    data-row="{{ $row_id }}" data-prodi="{{ $prodi->id }}"
                                                    data-rev="{{ Auth::user()->level == 5 ? Auth::user()->id : '' }}">{{ getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id ? 'Lihat' : 'Beri' }}
                                                    Komentar</a>
                                            </div>
                                        @else
                                            <i>Tidak ada komentar</i>
                                        @endif
                                    </td>
                                    {{-- Komentar --}}
                                </tr>

                                @php($row_id = 348)
                                <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                    data-id="{{ $row_id }}">
                                    <td class="matriks_id" data-id="{{ $row_id }}">
                                        39
                                    </td>{{-- NO BUTIR --}}
                                    <td class="text-start">D. Keterlaksanaan kegiatan terkait pengakuan/rekognisi atas
                                        kepakaran/prestasi/ki nerja DTPR.
                                    </td>{{-- ELEMEN --}}
                                    <td></td>{{-- LOKASI --}}
                                    <td>D. Keterlaksanaan kegiatan terkait pengakuan/rekognisi atas
                                        kepakaran/prestasi/kinerja DTPR: a) menjadi visiting lecturer atau visiting scholar.
                                        b) menjadi keynote speaker/invited speaker pada pertemuan ilmiah tingkat nasional/
                                        internasional. c) menjadi editor atau mitra bestari pada jurnal nasional
                                        terakreditasi/jurnal internasional bereputasi di bidang infokom. d) menjadi staf
                                        ahli/narasumber di lembaga tingkat wilayah/nasional/internasi onal pada bidang
                                        infokom atau menjadi tenaga ahli/konsultan di lembaga/industri tingkat
                                        wilayah/nasional/internasional pada bidang infokom. e) mendapat penghargaan atas
                                        prestasi dan kinerja di tingkat wilayah/nasional/internasional.
                                    </td>{{-- DESKRIPTOR --}}
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="4">
                                            <span class="caption">4</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan terkait pengakuan/rekognisi
                                            atas kepakaran/prestasi/kinerja DTPR secara sangat efektif disertai bukti
                                            sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="3">
                                            <span class="caption">3</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan terkait pengakuan/rekognisi
                                            atas kepakaran/prestasi/kinerja DTPR secara efektif disertai bukti sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="2">
                                            <span class="caption">2</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan terkait pengakuan/rekognisi
                                            atas kepakaran/prestasi/kinerja DTPR secara cukup efektif disertai bukti
                                            sahih.</span>
                                    </td>
                                    <td class="penilaian_check_field">
                                        <label>
                                            <input type="radio"
                                                {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                                name="nilai{{ $row_id }}" value="1">
                                            <span class="caption">1</span></label>
                                        <span class="tooltiptext">Terlaksananya kegiatan terkait pengakuan/rekognisi
                                            atas kepakaran/prestasi/kinerja DTPR secara kurang efektif disertai bukti
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
                                                    data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                    data-skor="">Upload
                                                    Bukti</a>
                                            </label>
                                        @endif
                                    </td>{{-- BUKTI PENILAIAN --}}
                                    <td class="comment">
                                        @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                            <div class="row">
                                                <a id="lihat_comment"
                                                    class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                                    data-toggle="modal" data-target="#comment"
                                                    data-row="{{ $row_id }}" data-prodi="{{ $prodi->id }}"
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
                                        <th colspan="11" class="nilai">4.3 [EVALUASI]</th>
                                    </tr>
                                    @php($row_id = 349)
                                    <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                        data-id="{{ $row_id }}">
                                        <td class="matriks_id" data-id="{{ $row_id }}">
                                            40
                                        </td>{{-- NO BUTIR --}}
                                        <td class="text-start">4.3 [EVALUASI] Keterlaksanaan evaluasi mengenai
                                            kebijakan dan ketercapaian standar (IKU dan IKT) terkait SDM.
                                        </td>{{-- ELEMEN --}}
                                        <td></td>{{-- LOKASI --}}
                                        <td>4.3 [EVALUASI] Keterlaksanaan evaluasi mengenai kebijakan dan ketercapaian
                                            standar (IKU dan IKT) sehingga menemu-kenali praktik baik, praktik buruk dan
                                            praktik yang baru yang berkaitan dengan SDM, termasuk evaluasi tingkat kepuasan
                                            dosen dan tenaga kependidikan terhadap sistem pengelolaan SDM.
                                        </td>{{-- DESKRIPTOR --}}
                                        <td class="penilaian_check_field">
                                            <label>
                                                <input type="radio"
                                                    {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                                    name="nilai{{ $row_id }}" value="4">
                                                <span class="caption">4</span></label>
                                            <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan sangat
                                                efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga
                                                dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang
                                                berkaitan dengan SDM, termasuk evaluasi tingkat kepuasan dosen dan tenaga
                                                kependidikan terhadap sistem pengelolaan SDM.</span>
                                        </td>
                                        <td class="penilaian_check_field">
                                            <label>
                                                <input type="radio"
                                                    {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                                    name="nilai{{ $row_id }}" value="3">
                                                <span class="caption">3</span></label>
                                            <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan efektif
                                                mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga dapat
                                                menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang
                                                berkaitan dengan SDM, termasuk evaluasi tingkat kepuasan dosen dan tenaga
                                                kependidikan terhadap sistem pengelolaan SDM.</span>
                                        </td>
                                        <td class="penilaian_check_field">
                                            <label>
                                                <input type="radio"
                                                    {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                                    name="nilai{{ $row_id }}" value="2">
                                                <span class="caption">2</span></label>
                                            <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan cukup
                                                efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga
                                                dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang
                                                berkaitan dengan SDM, termasuk evaluasi tingkat kepuasan dosen dan tenaga
                                                kependidikan terhadap sistem pengelolaan SDM.</span>
                                        </td>
                                        <td class="penilaian_check_field">
                                            <label>
                                                <input type="radio"
                                                    {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                                    name="nilai{{ $row_id }}" value="1">
                                                <span class="caption">1</span></label>
                                            <span class="tooltiptext">Terlaksananya evaluasi secara berkala dan kurang
                                                efektif mengenai kebijakan dan ketercapaian standar (IKU dan IKT) sehingga
                                                dapat menemu-kenali praktik baik, praktik buruk dan praktik yang baru yang
                                                berkaitan dengan sSDM, termasuk evaluasi tingkat kepuasan dosen dan tenaga
                                                kependidikan terhadap sistem pengelolaan SDM.</span>
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
                                        <td class="bobot" data-bobot="8">8</td>{{-- BOBOT --}}
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
                                                        data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                        data-skor="">Upload
                                                        Bukti</a>
                                                </label>
                                            @endif
                                        </td>{{-- BUKTI PENILAIAN --}}
                                        <td class="comment">
                                            @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                                <div class="row">
                                                    <a id="lihat_comment"
                                                        class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                                        data-toggle="modal" data-target="#comment"
                                                        data-row="{{ $row_id }}" data-prodi="{{ $prodi->id }}"
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
                                            <th colspan="11" class="nilai">4.4 [PENGENDALIAN]</th>
                                        </tr>

                                        @php($row_id = 3410)
                                        <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                            data-id="{{ $row_id }}">
                                            <td class="matriks_id" data-id="{{ $row_id }}">
                                                41
                                            </td>{{-- NO BUTIR --}}
                                            <td class="text-start">4.4 [PENGENDALIAN] Ketersediaan dokumen tindak
                                                lanjut dan implementasi terhadap hasil evaluasi ketercapaian standar (IKU
                                                dan IKT) terkait SDM.
                                            </td>{{-- ELEMEN --}}
                                            <td></td>{{-- LOKASI --}}
                                            <td>4.4 [PENGENDALIAN] Ketersediaan dokumen tindak lanjut dan implementasi
                                                (revisi dan rekomendasi) terhadap hasil evaluasi ketercapaian standar (IKU
                                                dan IKT) yang berkaitan dengan SDM.
                                            </td>{{-- DESKRIPTOR --}}
                                            <td class="penilaian_check_field">
                                                <label>
                                                    <input type="radio"
                                                        {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                                        name="nilai{{ $row_id }}" value="4">
                                                    <span class="caption">4</span></label>
                                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan
                                                    implementasi yang sangat lengkap (revisi dan rekomendasi) terhadap hasil
                                                    evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan
                                                    SDM.</span>
                                            </td>
                                            <td class="penilaian_check_field">
                                                <label>
                                                    <input type="radio"
                                                        {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                                        name="nilai{{ $row_id }}" value="3">
                                                    <span class="caption">3</span></label>
                                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan
                                                    implementasi yang lengkap (revisi dan rekomendasi) terhadap hasil
                                                    evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan
                                                    SDM.</span>
                                            </td>
                                            <td class="penilaian_check_field">
                                                <label>
                                                    <input type="radio"
                                                        {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                                        name="nilai{{ $row_id }}" value="2">
                                                    <span class="caption">2</span></label>
                                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan
                                                    implementasi yang cukup lengkap (revisi dan rekomendasi) terhadap hasil
                                                    evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan
                                                    SDM.</span>
                                            </td>
                                            <td class="penilaian_check_field">
                                                <label>
                                                    <input type="radio"
                                                        {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                                        name="nilai{{ $row_id }}" value="1">
                                                    <span class="caption">1</span></label>
                                                <span class="tooltiptext">Tersedianya dokumen tindak lanjut dan
                                                    implementasi yang kurang lengkap (revisi dan rekomendasi) terhadap hasil
                                                    evaluasi ketercapaian standar (IKU dan IKT) yang berkaitan dengan
                                                    SDM.</span>
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
                                                            data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                            data-skor="">Upload
                                                            Bukti</a>
                                                    </label>
                                                @endif
                                            </td>{{-- BUKTI PENILAIAN --}}
                                            <td class="comment">
                                                @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                                    <div class="row">
                                                        <a id="lihat_comment"
                                                            class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                                            data-toggle="modal" data-target="#comment"
                                                            data-row="{{ $row_id }}"
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
                                                <th colspan="11" class="nilai">4.5 [PENINGKATAN]</th>
                                            </tr>

                                            @php($row_id = 3411)
                                            <tr class="{{ getArrayItem($row_id, $dataMatriks)->remainingField != 0 ? 'incomplete' : '' }} {{ $reviewer->id == null ? 'disable-input-radio' : '' }} {{ Auth::user()->level == 2 ? 'view-only' : '' }}"
                                                data-id="{{ $row_id }}">
                                                <td class="matriks_id" data-id="{{ $row_id }}">
                                                    42
                                                </td>{{-- NO BUTIR --}}
                                                <td class="text-start">4.5 [PENINGKATAN] Keterlaksanaan proses
                                                    optimalisasi terkait SDM.
                                                </td>{{-- ELEMEN --}}
                                                <td></td>{{-- LOKASI --}}
                                                <td>4.5 [PENINGKATAN] Keterlaksanaan proses optimalisasi (peningkatan,
                                                    penyesuaian, dan penyelarasan) terhadap standar (IKU dan IKT) yang
                                                    berkaitan dengan SDM.
                                                </td>{{-- DESKRIPTOR --}}
                                                <td class="penilaian_check_field">
                                                    <label>
                                                        <input type="radio"
                                                            {{ getMatriksGrade($row_id, $matriks) == 4 ? 'checked' : '' }}
                                                            name="nilai{{ $row_id }}" value="4">
                                                        <span class="caption">4</span></label>
                                                    <span class="tooltiptext">Terlaksananya proses optimalisasi secara
                                                        sangat efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap
                                                        standar (IKU dan IKT) yang berkaitan dengan SDM disertai bukti yang
                                                        sahih.</span>
                                                </td>
                                                <td class="penilaian_check_field">
                                                    <label>
                                                        <input type="radio"
                                                            {{ getMatriksGrade($row_id, $matriks) == 3 ? 'checked' : '' }}
                                                            name="nilai{{ $row_id }}" value="3">
                                                        <span class="caption">3</span></label>
                                                    <span class="tooltiptext">Terlaksananya proses optimalisasi secara
                                                        efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap
                                                        standar (IKU dan IKT) yang berkaitan dengan SDM disertai bukti yang
                                                        sahih.</span>
                                                </td>
                                                <td class="penilaian_check_field">
                                                    <label>
                                                        <input type="radio"
                                                            {{ getMatriksGrade($row_id, $matriks) == 2 ? 'checked' : '' }}
                                                            name="nilai{{ $row_id }}" value="2">
                                                        <span class="caption">2</span></label>
                                                    <span class="tooltiptext">Terlaksananya proses optimalisasi secara
                                                        cukup efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap
                                                        standar (IKU dan IKT) yang berkaitan dengan SDM disertai bukti yang
                                                        sahih.</span>
                                                </td>
                                                <td class="penilaian_check_field">
                                                    <label>
                                                        <input type="radio"
                                                            {{ getMatriksGrade($row_id, $matriks) == 1 ? 'checked' : '' }}
                                                            name="nilai{{ $row_id }}" value="1">
                                                        <span class="caption">1</span></label>
                                                    <span class="tooltiptext">Terlaksananya proses optimalisasi secara
                                                        kurang efektif (peningkatan, penyesuaian, dan penyelarasan) terhadap
                                                        standar (IKU dan IKT) yang berkaitan dengan SDM disertai bukti yang
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
                                                                data-url="{{ getMatriksBukti($row_id, $matriksBukti) }}"
                                                                data-skor="">Upload
                                                                Bukti</a>
                                                        </label>
                                                    @endif
                                                </td>{{-- BUKTI PENILAIAN --}}
                                                <td class="comment">
                                                    @if (Auth::user()->level == 5 || getArrayItemWithId('row_id', $row_id, $jmlKomentarMatriks)->row_id != null)
                                                        <div class="row">
                                                            <a id="lihat_comment"
                                                                class="btn btn-outline-primary col-12 ml-auto mr-auto input_comment_trigg"
                                                                data-toggle="modal" data-target="#comment"
                                                                data-row="{{ $row_id }}"
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
