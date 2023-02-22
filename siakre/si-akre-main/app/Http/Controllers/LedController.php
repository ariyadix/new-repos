<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Models\Prodi;
use App\Models\Led;

use Illuminate\Http\Request;

class LedController extends Controller
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
                // 'tables' => $this->allowedTable(),

            ];
            if (null == $request->query('id')) {
                return redirect('/admin/iaps');
            }

            return view('led.index', $data);
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
            $data = [
                'prodi' => $prodi,
            ];
            return view('led.index', $data);
        }
    }
    public function form($id, Request $request)
    {
        // $form = Permission::find($id);
        // $permit = json_decode($form->access, true);
        // $tables = $this->allowedTable();
        $ledValues = json_decode(file_get_contents(storage_path() . "/led.json"), true);
        // $ledValuesNav = json_decode(file_get_contents(storage_path() . "/led-nav.json"), true);

        if (Auth::user()->level == 1) {
            $prodi =
                Prodi::find(
                    $request->query('id')
                );
            if (null == $request->query('id')) {
                return redirect('/admin/iaps');
            }
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
        } elseif (Auth::user()->level == 3) {
            $prodi = Prodi::find(Auth::user()->dosen->prodi_id);
        }
        $formPenilaian  = null;
        if ($id[0] != 1 && $id[0] != 2) {
            $formPenilaian = '30' . $id[0];
        }

        if ($id != 'all') {
            $tableValue = $this->getInfo($id, $ledValues['led']);
            $multi_value = array();
            if (isset($tableValue['multi_input'])) {
                foreach ($tableValue['multi_input_value'] as
                $index => $key) {
                    if (Led::find($key['id'] . $prodi->id)) {
                        array_push($multi_value, Led::find($key['id'] . $prodi->id));
                    } else {
                        array_push($multi_value, null);
                    }
                }
            }
            $prev = $this->prev_num($id);
            $next = $this->next_num($id);
            if ($next == 0) {
                $next = 'all';
                // return $next;
            }

            $data = [
                'tables' => $ledValues['led'],
                'prev' =>  $prev,
                'next' => $next,
                'value' => Led::find($id . $prodi->id),
                'multi_value' => $multi_value,
                'idTable' => $id,
                'tableValue' => $tableValue,
                // 'led_nav' => $ledValuesNav,
                'prodi' => $prodi,
                // 'permit' => $form
            ];

            if ($tableValue) {
                // return $prodi;
                // return  $multi_value;
                // return $ledValuesNav['led'][$id[0] - 1]['bab_value'][$id[1] - 1]['sub_kriteria'][$id[2] - 1];
                return view('led.base', $data);
            } else {
                return redirect('/led');
            }
        }else {
            $allValue = array();
                foreach ($ledValues['led'] as
                $index => $key) {
                if (isset($key['multi_input'])) {
                    foreach ($key['multi_input_value'] as
                        $index => $key_multi) {
                            if (Led::find($key_multi['id'] . $prodi->id)) {
                                array_push($allValue, Led::find($key_multi['id'] . $prodi->id));
                            } 
                        }
                } else {
                    if (Led::find($key['id'] . $prodi->id)) {
                        array_push($allValue, Led::find($key['id'] . $prodi->id));
                    } 
                }
                }
                // return $allValue;
            $data = [
                'tables' => $ledValues['led'],
                'prev' => 311,
                'next' => null,
                'value' => Led::find($id . $prodi->id),
                'allValue' => $allValue,
                'idTable' => $id,
                // 'led_nav' => $ledValuesNav,
                'prodi' => $prodi,
                // 'permit' => $form
            ];

                // return $prodi;
                // return  $multi_value;
                // return $ledValuesNav['led'][$id[0] - 1]['bab_value'][$id[1] - 1]['sub_kriteria'][$id[2] - 1];
                return view('led.all', $data);
        }
        
    }
    private function getInfo($id, $array)
    {
        foreach ($array as $index => $json) {
            if ($json['id'] == $id) {
                return $json;
            }
        }
        return null;
    }

    public function prev_num($id)
    {
        $ledValues = json_decode(file_get_contents(storage_path() . "/led.json"), true);

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
                    $idTemp = $i . $j . $k;
                    if ($this->getInfo($idTemp, $ledValues['led'])) {
                        return $idTemp;
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
        $ledValues = json_decode(file_get_contents(storage_path() . "/led.json"), true);

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

                    $idTemp = $i . $j . $k;
                    if ($this->getInfo($idTemp, $ledValues['led'])) {
                        return $idTemp;
                    }
                    $loop++;
                }
            }
        }
        return 0;
    }
    public function updateLed(Request $request)
    {
        if (Led::find($request->id)) {
            $led = Led::find($request->id);
            $led->value = $request->value_text;
            $led->prodi_id = $request->prod_id;
            $led->save();
        } else {
            $data = array_merge(
                [
                    'id' => $request->id,
                    'value' => $request->value_text,
                    'prodi_id' => $request->prod_id,
                ]
            );
            Led::create($data);
        }
        return redirect()->route('viewLed', $request->form_id . ((Auth::user()->level == 1) ? "?id=" . $request->prod_id : ''));
    }
}
