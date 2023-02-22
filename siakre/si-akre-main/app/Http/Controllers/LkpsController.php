<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Datatables;


use App\Models\Permission;
use App\Models\Prodi;

class LkpsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if (Auth::user()->level == 1) {
            $data = [
                'prodi' =>
                Prodi::find(
                    $request->query('id')
                ),
                'tables' => $this->allowedTable(),

            ];
            if (null == $request->query('id')) {
                return redirect('/admin/iaps');
            }

            return view('admin.lkps', $data);
        } elseif (Auth::user()->level == 2) {
            $data = [
                'tables' => $this->allowedTable(),

            ];

            return view('admin_prodi.lkps', $data);
        } elseif (Auth::user()->level == 3) {
            $data = [
                'prodi' =>
                Prodi::find(Auth::user()->dosen->prodi_id),
                'tables' => $this->allowedTable(),

            ];

            return view('v_user_lkps', $data);
        } elseif (Auth::user()->level == 4) {
            $data = [
                'prodi' =>
                Prodi::find(Auth::user()->mhs->prodi_id),
                'tables' => $this->allowedTable(),

            ];

            return view('v_user_lkps', $data);
        } elseif (Auth::user()->level == 5) {
            $data = [
                'prodi' =>
                Prodi::find(
                    $request->query('id')
                ),
                'tables' => $this->allowedTable(),

            ];
            if (null == $request->query('id')) {
                return redirect('/');
            }

            return view('reviewer.lkps', $data);
        }
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
    public function form($id, Request $request)
    {
        // return Permission::find($id);
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $tables = $this->allowedTable();
        if (Auth::user()->level == 1) {
            if (null == $request->query('id')) {
                return redirect('/admin/iaps');
            }

            $prodi =
                Prodi::find(
                    $request->query('id')
                );
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
        } elseif (Auth::user()->level == 3) {
            $prodi = Prodi::find(Auth::user()->dosen->prodi_id);
        } elseif (Auth::user()->level == 4) {
            $prodi = Prodi::find(Auth::user()->mhs->prodi_id);
        } elseif (Auth::user()->level == 5) {
            if (null == $request->query('id')) {
                return redirect('/matriks');
            }
            $prodi =
                Prodi::find(
                    $request->query('id')
                );
        }
        $tableData = DataLkpsController::getLkpsData($id, $prodi->id);
        // return $tableData;
        $formMatriks  = null;
        if ($id[0] != 1 && $id[0] != 2) {
            $formMatriks = '30' . $id[0];
        }

        $ts_year_id = "ts_" . $prodi->id;
        $ts_year = DB::table('utils')->where('id', '=', $ts_year_id)->first();

        if ($request->ajax()) {
            return
                Datatables::of($tableData)
                ->addColumn('action', function ($tableData) use ($id) {
                    $button = '';
                    if (Auth::user()->level == 1) {
                        $button .= '<a href="' . $tableData->id . '" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
                    }
                    $btn = '
                    <a class="btn btn-sm btn-secondary mb-2" href="/lkps/edit/' . $id . '?id=' .  $tableData->id . '"><i class="far fa-edit"></i></a>
                    <form method="POST" action="/lkps/delete/' . $id . '/' .  $tableData->id . '">
                            <input name="_method" type="hidden" value="GET">
                            <input type="hidden" name="prodi_id" class="form-control hide_num" id="prodi_id" placeholder=""
                            value="' . $tableData->prodi_id . '" min="0">
                            <button type="submit" class="btn btn-sm btn-danger delete_confirm" data-toggle="tooltip"><i class="fas fa-trash-alt"></i></button>
                    </form>
                ';
                    return $btn;
                })

                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'tables' => $this->allowedTable(),
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'idTable' => $id,
            'idTableMatriks' => $formMatriks,
            'prodi' => $prodi,
            'tsYear' => $ts_year ? $ts_year->value : null,
            'permit' => $form,
            'tableData' => $tableData
        ];

        if (in_array(Auth::user()->level, $permit)) {
            return view('lkps.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    public function admin_input($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);

        $data = [
            'tables' => $this->allowedTable(),
            'idTable' => $id,
            'prodi' =>
            Prodi::find(
                $request->query('id')
            ),

        ];
        if (in_array(Auth::user()->level, $permit)) {
            if ($id < 111) {
                return view('lkps.input.identitas.' . $id[1] . $id[2], $data);
            }
            return view('lkps.input.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps?id=' . $request->query('id'));
        }
    }
    public function admin_form($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        $tables = $this->allowedTable();
        if (Auth::user()->level == 1) {
            $prodi = Prodi::find($request->query('id'));
        }
        $data = [
            'tables' => $this->allowedTable(),
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'idTable' => $id,
            'prodi' =>
            $prodi,
            'permit' => $form,

        ];
        // return $tables;
        if (in_array(Auth::user()->level, $permit)) {
            # code...
            return view('lkps.' . $id[0] . '.' . $id[1] . $id[2], $data);
        } else {
            return redirect('/lkps');
        }
    }

    public function input($id, Request $request)
    {
        $form = Permission::find($id);
        $permit = json_decode($form->access, true);
        if (Auth::user()->level == 1) {
            if (null == $request->query('id')) {
                return redirect('/admin/iaps');
            }

            $prodi =
                Prodi::find(
                    $request->query('id')
                );
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
        } elseif (Auth::user()->level == 3) {
            $prodi = Prodi::find(Auth::user()->dosen->prodi_id);
        } elseif (Auth::user()->level == 4) {
            $prodi = Prodi::find(Auth::user()->mhs->prodi_id);
        }
        if (null == $request->query('edit')) {
            $editId = null;
        } else {
            $editId = $request->query('edit');
        }
        $ts_year_id = "ts_" . $prodi->id;
        $ts_year = DB::table('utils')->where('id', '=', $ts_year_id)->first();
        $tableData = DataLkpsController::getLkpsData($id, $prodi->id);
        $data = [
            'tables' => $this->allowedTable(),
            'idTable' => $id,
            'tsYear' => $ts_year ? $ts_year->value : null,
            'tableData' => $tableData,
            'editId' => $editId,
            'prodi' =>
            $prodi
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
                    if (view()->exists('lkps.' . $i . '.' . $j . $k)) {
                        $id[0] = $i;
                        $id[1] = $j;
                        $id[2] = $k;

                        $form = Permission::find($id);
                        if (Permission::find($id)) {
                            $permit = json_decode($form->access, true);
                        } else {
                            $permit  = array(1);
                        }
                        if (in_array(Auth::user()->level, $permit)) {
                            return $id;
                        }
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

                    if (view()->exists('lkps.' . $i . '.' . $j . $k)) {
                        $id[0] = $i;
                        $id[1] = $j;
                        $id[2] = $k;
                        $form = Permission::find($id);
                        if (Permission::find($id)) {
                            $permit = json_decode($form->access, true);
                        } else {
                            $permit  = array(1);
                        }
                        if (in_array(Auth::user()->level, $permit)) {
                            return $id;
                        }
                    }
                    $loop++;
                }
            }
        }
        return 0;
    }
}
