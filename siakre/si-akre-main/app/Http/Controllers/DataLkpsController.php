<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Permission;
use App\Models\Prodi;
use App\Models\Lkps\{
    Jcmb,
    Reratadtpr,
    Sarpra,
    Pnpkm,
    Ktk,
    Addsi,
    Kpl,
    Kbkl,
    Ktw,
    Mt,
    Ipk,
    Spps,
};

class DataLkpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public static function getLkpsData($id, $prodi_id)
    {
        $lkpsData = json_decode(file_get_contents(storage_path() . "/lkps.json"), true);
        $lkpsData = $lkpsData['lkps'];

        foreach ($lkpsData as $n) {
            if ($n['id'] == $id) {
                $lkpsData = $n;
            }
        }
        $tableName = $lkpsData['table'];
        $ts_year_id = "ts_" . $prodi_id;
        $ts_year = DB::table('utils')->where('id', '=', $ts_year_id)->first();
        // return $ts_year;
        if ($lkpsData['id'] == 501) {
            $tableData = DB::table($tableName)
                ->where('prodi_id', '=', $prodi_id)
                ->where('ts', '=', $ts_year ? $ts_year->value : null,)
                ->get();
        } else {
            $tableData = DB::table($tableName)
                ->where('prodi_id', '=', $prodi_id)
                ->get();
        }
        return $tableData;
    }
    public static function getLkpsDataRow($prodi_id, $id_row)
    {
        $tableData = DB::table('jcmb')
            ->where('prodi_id', '=', $prodi_id)
            ->get();
        foreach ($tableData as $tableRow) {
            if ($tableRow->id == $id_row) {
                return $tableRow;
            }
        }
        return null;
    }

    public function insertLkps($id, Request $request)
    {
        switch ($id) {
            case '301':
                return $this->insertJcmb($request);
                break;
            case '401':
                return $this->insertReretadtpr($request);
                break;
            case '402':
                return $this->insertKtk($request);
                break;
            case '501':
                return $this->insertSpps($request);
                break;
            case '502':
                return $this->insertAddsi($request);
                break;
            case '503':
                return $this->insertSarpra($request);
                break;
            case '902':
                return $this->insertKtw($request);
            case '901':
                return $this->insertIpk($request);
                break;
            case '903':
                return $this->insertKpl($request);
                break;
            case '905':
                return $this->insertKbkl($request);
                break;
            case '904':
                return $this->insertMt($request);
                break;
            case '906':
                return $this->insertPnpkm($request);
                break;
            default:
                # code...
                break;
        }
    }
    public function deleteLkps($tableId, $id, Request $request)
    {
        switch ($tableId) {
            case '301':
                return $this->deleteJcmb($id, $request);
                break;
            case '401':
                return $this->deleteReretadtpr($id, $request);
                break;
            case '402':
                return $this->deleteKtk($id, $request);
                break;
            case '501':
                return $this->deleteSpps($id, $request);
                break;
            case '502':
                return $this->deleteAddsi($id, $request);
                break;
            case '503':
                return $this->deleteSarpra($id, $request);
                break;
            case '902':
                return $this->deleteKtw($id, $request);
            case '901':
                return $this->deleteIpk($id, $request);
                break;
            case '903':
                return $this->deleteKpl($id, $request);
                break;
            case '905':
                return $this->deleteKbkl($id, $request);
            case '904':
                return $this->deleteMt($id, $request);
                break;
            case '906':
                return $this->deletePnpkm($id, $request);
                break;
            default:
                # code...
                break;
        }
    }
    public function edit($id, Request $request)
    {
        switch ($id) {
            case '301':
                return $this->editJcmb($id, $request);
                break;
            case '401':
                return $this->editReretadtpr($id, $request);
                break;
            case '402':
                return $this->editKtk($id, $request);
                break;
            case '402':
                return $this->editAddsi($id, $request);
                break;
            case '501':
                return $this->editSpps($id, $request);
                break;
            case '503':
                return $this->editSarpra($id, $request);
                break;
            case '902':
                return $this->editKtw($id, $request);
            case '901':
                return $this->editIpk($id, $request);
                break;
            case '903':
                return $this->editKpl($id, $request);
                break;
            case '905':
                return $this->editKbkl($id, $request);
            case '904':
                return $this->editMt($id, $request);
                break;
            case '906':
                return $this->editPnpkm($id, $request);
                break;
            default:
                # code...
                break;
        }

        $form = Permission::find($id);
        $permit = json_decode($form->access, true);

        $data = [
            'idTable' => $id
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------301 JCMB------------------------------
    private function insertJcmb(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Jcmb::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'ta' => $request->ta,
                'dy_tmpng' => ($request->dy_tmpng ? $request->dy_tmpng : 0),
                'jcm_pendftr' => ($request->jcm_pendftr ? $request->jcm_pendftr : 0),
                'jcm_lulus' => ($request->jcm_lulus ? $request->jcm_lulus : 0),
                'jmb_reg' => ($request->jmb_reg ? $request->jmb_reg : 0),
                'jmb_transfer' => ($request->jmb_transfer ? $request->jmb_transfer : 0),
                'jma_reg' => ($request->jma_reg ? $request->jma_reg : 0),
                'jma_transfer' => ($request->jma_transfer ? $request->jma_transfer : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/301' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteJcmb($id, Request $request)
    {
        $data = Jcmb::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/301' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editJcmb($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Jcmb::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // -------------------------401 RERETADTPR------------------------------
    private function insertReretadtpr(Request $request)
    {
        $request->validate([
            'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Reratadtpr::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'nm_dosen' => $request->nm_dosen,
                'sks_pss' => ($request->sks_pss ? $request->sks_pss : 0),
                'skd_psl_pts' => ($request->skd_psl_pts ? $request->skd_psl_pts : 0),
                'skd_ptl' => ($request->skd_ptl ? $request->skd_ptl : 0),
                'skd_penelitian' => ($request->skd_penelitian ? $request->skd_penelitian : 0),
                'skd_pengmas' => ($request->skd_pengmas ? $request->skd_pengmas : 0),
                'sksmen_pts' => ($request->sksmen_pts ? $request->sksmen_pts : 0),
                'sksmen_ptl' => ($request->sksmen_ptl ? $request->sksmen_ptl : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/401' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteReretadtpr($id, Request $request)
    {
        $data = Reratadtpr::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/401' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editReretadtpr($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Reratadtpr::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];

        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // -------------------------402 KTK------------------------------
    private function insertKtk(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Ktk::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'jtk' => $request->jtk,
                'jtk_s3' => ($request->jtk_s3 ? $request->jtk_s3 : 0),
                'jtk_s2' => ($request->jtk_s2 ? $request->jtk_s2 : 0),
                'jtk_s1' => ($request->jtk_s1 ? $request->jtk_s1 : 0),
                'jtk_d4' => ($request->jtk_d4 ? $request->jtk_d4 : 0),
                'jtk_d3' => ($request->jtk_d3 ? $request->jtk_d3 : 0),
                'jtk_d2' => ($request->jtk_d2 ? $request->jtk_d2 : 0),
                'jtk_d1' => ($request->jtk_d1 ? $request->jtk_d1 : 0),
                'jtk_sm' => ($request->jtk_sm ? $request->jtk_sm : 0),
                'uk' => ($request->uk ? $request->uk : 0),

                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/402' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteKtk($id, Request $request)
    {
        $data = Ktk::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/402' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editKtk($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Ktk::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // -------------------------501 SPPS------------------------------
    private function insertSpps(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'bukti' => 'required',
            'bukti_link' => 'required',
            'sumber_dana' => 'required',
        ]);
        switch ($request->sd_type) {
            case 1:
                if ($validator->fails()) {
                    return
                        redirect(url()->previous() . '#tabs-1')->withInput()->withErrors($validator);
                }
                break;
            case 2:
                if ($validator->fails()) {
                    return
                        redirect(url()->previous() . '#tabs-2')->withInput()->withErrors($validator);
                }
                break;
            case 3:
                if ($validator->fails()) {
                    return
                        redirect(url()->previous() . '#tabs-3')->withInput()->withErrors($validator);
                }
                break;

            default:
                break;
        }

        // return $request->id;
        Spps::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'ts' => $request->ts,
                'sd' => ($request->sumber_dana),
                'sd_type' => ($request->sd_type),
                'jml' => ($request->jml ? $request->jml : 0),
                'bukti' => ($request->bukti),
                'bukti_link' => ($request->bukti_link),
                'ket' => ($request->ket ? $request->ket : ''),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/501' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteSpps($id, Request $request)
    {
        $data = Spps::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/501' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editSpps($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Spps::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------502 ADDSI------------------------------
    private function insertAddsi(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Addsi::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'jns_data' => $request->jns_data,
                'sppdd_sm' => ($request->sppdd_sm ? $request->sppdd_sm : 0),
                'sppdd_komtj' => ($request->sppdd_komtj ? $request->sppdd_komtj : 0),
                'sppdd_komlan' => ($request->sppdd_komlan ? $request->sppdd_komlan : 0),
                'sppdd_komwan' => ($request->sppdd_komwan ? $request->sppdd_komwan : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/502' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteAddsi($id, Request $request)
    {
        $data = Addsi::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/502' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editAddsi($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Addsi::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------503 SARPRA------------------------------
    private function insertSarpra(Request $request)
    {
        $request->validate([
            'sar_pra' => 'required',
        ]);
        // return $request->id;
        Sarpra::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'sar_pra' => $request->sar_pra,
                'dy_tamp' => ($request->dy_tamp ? $request->dy_tamp : 0),
                'luasr' => ($request->luasr ? $request->luasr : 0),
                'jmd' => ($request->jmd ? $request->jmd : 0),
                'jam_lay' => ($request->jam_lay ? $request->jam_lay : 0),
                'prngkt' => ($request->prngkt ? $request->prngkt : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/503' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteSarpra($id, Request $request)
    {
        $data = Sarpra::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/503' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editSarpra($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Sarpra::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------901 IPK------------------------------
    private function insertIpk(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Ipk::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'tl' => $request->tl,
                'jml_lulusan' => ($request->jml_lulusan ? $request->jml_lulusan : 0),
                'ipk_min' => ($request->ipk_min ? $request->ipk_min : 0),
                'ipk_rerata' => ($request->ipk_rerata ? $request->ipk_rerata : 0),
                'ipk_maks' => ($request->ipk_maks ? $request->ipk_maks : 0),

                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/901' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteIpk($id, Request $request)
    {
        $data = Ipk::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/901' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editIpk($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Ipk::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------902 KTW------------------------------
    private function insertKtw(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Ktw::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'ta' => $request->ta,
                'jmd' => ($request->jmd ? $request->jmd : 0),
                'jml_6' => ($request->jml_6),
                'jml_5' => ($request->jml_5),
                'jml_4' => ($request->jml_4),
                'jml_3' => ($request->jml_3),
                'jml_2' => ($request->jml_2),
                'jml_1' => ($request->jml_1),
                'akhir_ts' => ($request->akhir_ts ? $request->akhir_ts : 0),
                'jl_ats' => ($request->jl_ats ? $request->jl_ats : 0),
                'rerata_masastudi' => ($request->rerata_masastudi ? $request->rerata_masastudi : 0),
                'jml_mhs' => ($request->jml_mhs ? $request->jml_mhs : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/902' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteKtw($id, Request $request)
    {
        $data = Ktw::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/902' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editKtw($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Ktw::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // ------------------------- 903 KPL------------------------------
    private function insertKpl(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Kpl::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'jns_kemp' => $request->jns_kemp,
                'tkp_ps' => ($request->tkp_ps ? $request->tkp_ps : 0),
                'tkp_b' => ($request->tkp_b ? $request->tkp_b : 0),
                'tkp_c' => ($request->tkp_c ? $request->tkp_c : 0),
                'tkp_k' => ($request->tkp_k ? $request->tkp_k : 0),
                'rnc_tndlnjt' => ($request->rnc_tndlnjt ? $request->rnc_tndlnjt : '-'),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/903' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteKpl($id, Request $request)
    {
        $data = Kpl::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/903' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editKpl($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Kpl::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // -------------------------905 KBKL------------------------------
    private function insertKbkl(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Kbkl::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'tl' => $request->tl,
                'jml_lus' => ($request->jml_lus ? $request->jml_lus : 0),
                'lus_trlck' => ($request->lus_trlck ? $request->lus_trlck : 0),
                'prfsi_infokom' => ($request->prfsi_infokom ? $request->prfsi_infokom : 0),
                'prfsi_non_info' => ($request->prfsi_non_info ? $request->prfsi_non_info : 0),
                'ltk_multi' => ($request->ltk_multi ? $request->ltk_multi : 0),
                'ltk_nas' => ($request->ltk_nas ? $request->ltk_nas : 0),
                'ltk_wir' => ($request->ltk_wir ? $request->ltk_wir : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/905' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteKbkl($id, Request $request)
    {
        $data = Kbkl::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/905' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editKbkl($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Kbkl::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }
    // -------------------------904 MT------------------------------
    private function insertMt(Request $request)
    {
        $request->validate([
            // 'nm_dosen' => 'required',
        ]);
        // return $request->id;
        Mt::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'tl' => $request->tl,
                'jml_lus' => ($request->jml_lus ? $request->jml_lus : 0),
                'jml_lust' => ($request->jml_lust ? $request->jml_lust : 0),
                'rerata_tunggu' => ($request->rerata_tunggu ? $request->rerata_tunggu : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/904' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deleteMt($id, Request $request)
    {
        $data = Mt::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/904' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editMt($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Mt::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    // ------------------------- 906 PNPKM------------------------------
    private function insertPnpkm(Request $request)
    {
        $request->validate([
            'dtpr' => 'required',
        ]);
        Pnpkm::updateOrCreate(
            [
                'id'   => $request->id,
            ],
            [
                'dtpr' => $request->dtpr,
                'pub_infokom' => ($request->pub_infokom ? $request->pub_infokom : 0),
                'pen_infokom' => ($request->pen_infokom ? $request->pen_infokom : 0),
                'pen_infokomHKI' => ($request->pen_infokomHKI ? $request->pen_infokomHKI : 0),
                'pkm_infokomadop' => ($request->pkm_infokomadop ? $request->pkm_infokomadop : 0),
                'pkm_infokomhki' => ($request->pkm_infokomhki ? $request->pkm_infokomhki : 0),
                'prodi_id' => (int)($request->prodi_id),
            ]
        );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/906' . $admin_path)->with('pesan', 'Data berhasil diperbaharui !');
    }
    private function deletePnpkm($id, Request $request)
    {
        $data = Pnpkm::find($id);
        $data->delete();
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/906' . $admin_path)->with('pesan', 'Data berhasil dihapus !');
    }
    private function editPnpkm($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $dataItem = Pnpkm::find($request->id);
        $prodi = $dataItem->prodi_id;
        // return $dataItem->nm_dosen;
        $data = [
            'tables' => $this->allowedTable(),
            'dataItem' => $dataItem,
            'idTable' => $id,
            'prodi' => Prodi::find($prodi),
        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    public function updateJCMB(Request $request)
    {
        DB::table('jcmb')
            ->updateOrInsert(
                [
                    'id' => $request->id_ta,
                ],
                [
                    'ta' => $request->ta_year,
                    'prodi_id' => (int)($request->prodi_id),
                    'dy_tmpng' => $request->dy_tmpng,
                    'jcm_pendftr' => $request->jcm_pendftr,
                    'jcm_lulus' => $request->jcm_lulus,
                    'jmb_reg' => $request->jmb_reg,
                    'jmb_transfer' => $request->jmb_transfer,
                    'jma_reg' => $request->jma_reg,
                    'jma_transfer' => $request->jma_transfer,

                ]
            );
        $admin_path = '';
        if (Auth::user()->level == 1) {
            $admin_path = '?id=' . $request->prodi_id;
        }
        return redirect('/lkps/view/301' . $admin_path);
    }

    public function updateTsYear(Request $request)
    {

        DB::table('utils')
            ->updateOrInsert(
                ['id' => $request->id],
                ['value' => $request->value],
                ['prodi_id' => $request->prodi_id]
            );


        return response()->json(['success' => 'Nilai TS berhasil disimpan!']);
    }

    public function allowedTable()
    {
        $permission =  Permission::get();
        # code...
        $tables = array();
        foreach ($permission as $n) {
            if (in_array(Auth::user()->level, json_decode($n->access, true))) {
                if (!(array_key_exists(strval($n->id)[0], $tables))) {
                    $tables[strval($n->id)[0]] = array($n->id);
                } else {
                    array_push($tables[strval($n->id)[0]], $n->id);
                }
            }
        }
        return $tables;
    }
}
