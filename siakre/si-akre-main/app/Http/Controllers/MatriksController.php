<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\Matriks;
use App\Models\Reviewer;
use DeepCopy\Matcher\Matcher;
use Barryvdh\DomPDF\Facade\Pdf;
// use Barryvdh\Snappy\Facades\SnappyPdf;
// use PDF; //import Fungsi PDF
// use Barryvdh\Snappy\Facades\SnappyPdf as PDF;

class MatriksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (Auth::user()->level == 1 || Auth::user()->level == 5) {
            $prodi =
                Prodi::find(
                    $request->query('id')
                );
            if (null == $request->query('id')) {
                return redirect('/matriks/prodi');
            }
            if (Auth::user()->level == 1) {
                $rev_id = $prodi->id;
                $matriksSum = Matriks::getSummary($prodi->id, $rev_id);
                $reviewer = Matriks::getAllRev();
                // $matriksSum = Matriks::getSummaryRev($prodi->id);
                $matriksSumAll = Matriks::getSummaryAll($prodi->id, $rev_id);
            } elseif (Auth::user()->level == 5) {
                $rev_id = Auth::user()->id;
                $matriksSum = Matriks::getSummaryRev($prodi->id, $rev_id);
                $reviewer = Reviewer::find(Auth::user()->reviewer->id);
                // $matriksSum = Matriks::getSummaryRev($prodi->id)
                $matriksSumAll = Matriks::getSummaryAll($prodi->id, $rev_id);
            }
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
            $rev_id = $prodi->id;
            $matriksSum = Matriks::getSummary($prodi->id, $rev_id);
            $reviewer = Matriks::getAllRev();
            $matriksSumAll = Matriks::getSummaryAll($prodi->id, $rev_id);
        }

        $matriksSumEveryRev = Matriks::getSummaryEveryReviewers($prodi->id);
        $matriksSumProdi = Matriks::getSummary($prodi->id, $prodi->id);
        $matriksSumReviewers = Matriks::getSummaryAllRev($prodi->id);

        // return $matriksSumReviewers;
        $data = [
            'prodi' => $prodi,
            'dataMatriks' => $matriksSum,
            'dataMatriksReviewer' => $matriksSumReviewers,
            'dataMatriksProdi' => $matriksSumProdi,
            'matriksSumAll' => $matriksSumAll,
            'matriksSumAllRevs' => $matriksSumEveryRev,
            'reviewer' => $reviewer
        ];
        // return $matriksSumReviewers;

        if (Auth::user()->level == 1) {
            return view('admin.matriks', $data);
        } else if (Auth::user()->level == 2) {
            return view('admin_prodi.matriks', $data);
        } else if (Auth::user()->level == 5) {
            return view('reviewer.matriks', $data);
        }
    }
    public function index_prodi(Request $request)
    {
        $data = [
            'prodi' => Prodi::get(),
        ];
        return view('matriks.index_prodi', $data);
    }
    public function cetak_pdf(Request $request)
    {
        if (Auth::user()->level == 1 || Auth::user()->level == 5) {
            $prodi =
                Prodi::find(
                    $request->query('id')
                );
            if (null == $request->query('id')) {
                return redirect('/matriks/prodi');
            }
            if (Auth::user()->level == 1) {
                $rev_id = $prodi->id;
                $matriksSum = Matriks::getSummary($prodi->id, $rev_id);
                $reviewer = Matriks::getAllRev();
                // $matriksSum = Matriks::getSummaryRev($prodi->id);
                $matriksSumAll = Matriks::getSummaryAll($prodi->id, $rev_id);
            } elseif (Auth::user()->level == 5) {
                $rev_id = Auth::user()->id;
                $matriksSum = Matriks::getSummaryRev($prodi->id, $rev_id);
                $reviewer = Reviewer::find(Auth::user()->reviewer->id);
                // $matriksSum = Matriks::getSummaryRev($prodi->id)
                $matriksSumAll = Matriks::getSummaryAll($prodi->id, $rev_id);
            }
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
            $rev_id = $prodi->id;
            $matriksSum = Matriks::getSummary($prodi->id, $rev_id);
            $reviewer = Matriks::getAllRev();
            $matriksSumAll = Matriks::getSummaryAll($prodi->id, $rev_id);
        }

        $matriksSumEveryRev = Matriks::getSummaryEveryReviewers($prodi->id);
        $matriksSumProdi = Matriks::getSummary($prodi->id, $prodi->id);
        $matriksSumReviewers = Matriks::getSummaryAllRev($prodi->id);

        // return $matriksSumEveryRev;
        $data = [
            'prodi' => $prodi,
            'dataMatriks' => $matriksSum,
            'dataMatriksReviewer' => $matriksSumReviewers,
            'dataMatriksProdi' => $matriksSumProdi,
            'matriksSumAll' => $matriksSumAll,
            'matriksSumAllRevs' => $matriksSumEveryRev,
            'reviewer' => $reviewer
        ];
        if (Auth::user()->level == 1) {
            $pdf = PDF::loadview('/matriks/matriks_prodi_pdf', $data);
        } else if (Auth::user()->level == 2) {
            $pdf = PDF::loadview('/matriks/matriks_prodi_pdf', $data);
        } else if (Auth::user()->level == 5) {
            $pdf = PDF::loadview('/matriks/matriks_pdf', $data);
        }
        return $pdf->stream('Matriks.pdf');
    }
    public function form($id, Request $request)
    {
        if (Auth::user()->level == 1 || Auth::user()->level == 5) {
            $prodi =
                Prodi::find(
                    $request->query('id')
                );
            if (null == $request->query('id')) {
                return redirect('/matriks/prodi');
            }
            if (Auth::user()->level == 1) {
                if (null == $request->query('rev')) {
                    $rev = new Reviewer;
                    $rev_id = 0;
                }else{
                    $rev = Reviewer::find($request->query('rev'));
                    $rev_id = $rev->user->id;
                }
                
                $reviewer = Matriks::getAllRev();
                $matriksSum = Matriks::getSummaryRowAdm($prodi->id, $rev_id);
                $matriksKomentarCount = Matriks::getAllCommentCount($prodi->id);
            } elseif (Auth::user()->level == 5) {
                $rev_id = Auth::user()->id;
                $rev = Auth::user()->reviewer;
                $reviewer = [];
                $matriksSum = Matriks::getSummaryRowRev($prodi->id, $rev_id);
                $matriksKomentarCount = Matriks::getAllCommentCount($prodi->id, $rev_id);
            }
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
            if (null == $request->query('rev')) {
                $rev = new Reviewer;
                $rev_id = 0;
            } else {
                $rev = Reviewer::find($request->query('rev'));
                $rev_id = $rev->user->id;
            }

            $reviewer = Matriks::getAllRev();
            $matriksSum = Matriks::getSummaryRow($prodi->id, $prodi->user->id);
            //get Allcomment
            $matriksKomentarCount = Matriks::getAllCommentCount($prodi->id);
        }
        $matriks = Matriks::all()->where('prodi_id', $prodi->id)->where('user_id', $rev_id);
        $matriksBuktiList = Matriks::all()->where('prodi_id', $prodi->id)->where('user_id', $prodi->user->id);

        // return $matriksSum;
        $data = [
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'idForm' => $id,
            'prodi' => $prodi,
            'matriks' => $matriks,
            'matriksBukti' => $matriksBuktiList,
            'reffer_id' => $rev_id,
            'reviewer' => $rev,
            'dataMatriks' => $matriksSum,
            'jmlKomentarMatriks' => $matriksKomentarCount,
            'reviewerAll' => $reviewer
        ];
        // return $matriksBuktiList;
        return view('matriks.' . $id[0]  . $id[1] . $id[2], $data);
    }
    public function komentar(Request $request)
    {
        $rev_id = $request->query('rev');
        $row_id =  $request->query('id');
        $prodi_id =  $request->query('prodi');

        $matriksComments = Matriks::getAllComment($row_id, $prodi_id, $rev_id);
        return $matriksComments;
    }

    public function postKomentar(Request $request)
    {
        $t_group = (int)substr($request->row_id, 0, 2);

        if (Matriks::find($request->id)) {
            $matriks = Matriks::find($request->id);
            $matriks->komentar = $request->comment;
            $matriks->save();
        } else {
            $data = array_merge(
                [
                    'id' => $request->id,
                    'row_id' => $request->row_id,
                    't_group' => $t_group,
                    'komentar' => $request->comment,
                    'prodi_id' => $request->prodi_id,
                    'user_id' => $request->rev_id,
                ]
            );
            Matriks::create($data);
        }
        return response()->json([
            'success' => 'Komentar matriks berhasil disimpan!',
            'value' => $request->comment
        ]);
    }
    public function prev_num($id)
    {
        $is = $id[0];
        $js = $id[1];
        $ks = $id[2];
        $ks -= 1;
        $loop = 0;
        $loop1 = 0;
        $loop2 = 0;
        for ($i = $is; $i >= 0; $i--) {
            if ($loop2 == 0) {
                $i = $is;
            }
            for ($j = 9; $j >= 0; $j--) {
                if ($loop1 == 0) {
                    $j = $js;
                }
                for ($k = 9; $k >= 0; $k--) {
                    if ($loop == 0) {
                        $k = $ks;
                    }
                    if (view()->exists('matriks.' . $i  . $j . $k)) {
                        $id[0] = $i;
                        $id[1] = $j;
                        $id[2] = $k;

                        return $id;
                    }
                    $loop++;
                }
                $loop1++;
            }
            $loop2++;
        }
        return 0;
    }

    public function next_num($id)
    {

        $is = $id[0];
        $js = $id[1];
        $ks = $id[2];
        $ks += 1;
        $loop = 0;
        for ($i = $is; $i <= 9; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                if ($loop == 0) {
                    $j = $js;
                }
                for ($k = 0; $k <= 9; $k++) {
                    if ($loop == 0) {
                        $k = $ks;
                    }

                    if (view()->exists('matriks.' . $i  . $j . $k)) {
                        $id[0] = $i;
                        $id[1] = $j;
                        $id[2] = $k;
                        return $id;
                    }
                    $loop++;
                }
            }
        }
        return 0;
    }
    public function updateMatriks(Request $request)
    {
        $t_group = (int)substr($request->row_id, 0, 2);
        if (Matriks::find($request->id)) {
            $matriks = Matriks::find($request->id);
            $matriks->row_id = $request->row_id;
            $matriks->t_group = $t_group;
            $matriks->grade = $request->grade;
            $matriks->skor = $request->skor;
            $matriks->prodi_id = $request->prodi_id;
            $matriks->user_id = $request->rev_id;
            $matriks->save();
        } else {
            $data = array_merge(
                [
                    'id' => $request->id,
                    'row_id' => $request->row_id,
                    't_group' => $t_group,
                    'grade' => $request->grade,
                    'skor' => $request->skor,
                    'prodi_id' => $request->prodi_id,
                    'user_id' => $request->rev_id,
                ]
            );
            Matriks::create($data);
        }
        return response()->json(['success' => 'Nilai matriks berhasil disimpan!']);
    }
    public function updateMatriksBukti(Request $request)
    {
        $t_group = (int)substr($request->row_id, 0, 2);

        if (Matriks::find($request->id)) {
            $matriks = Matriks::find($request->id);
            $matriks->row_id = $request->row_id;
            $matriks->t_group = $t_group;
            $matriks->bukti = $request->bukti;
            $matriks->save();
        } else {
            $data = array_merge(
                [
                    'id' => $request->id,
                    'row_id' => $request->row_id,
                    't_group' => $t_group,
                    'bukti' => $request->bukti,
                    'prodi_id' => $request->prodi_id,
                    'user_id' => $request->rev_id,
                ]
            );
            Matriks::create($data);
        }
        $data =
            Matriks::find($request->id)->bukti;
        return response()->json([
            'success' => 'Bukti matriks berhasil disimpan!',
            'data' => $data
        ]);
    }
}
