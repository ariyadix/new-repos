<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Rules\MatchOldPassword;
use App\Models\User;
use App\Models\Prodi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use File;

class AdminProdiController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index_prodi()
    {
        return view('dosen.prodi');
    }

    public function updateProfile()
    {
        $id = auth()->user()->prodi_id;
        $idUser = auth()->user()->id;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,' . auth()->user()->id,
            'website' => 'required',
            // 'no_sk_pembukaan' => 'required',
            // 'tgl_sk_pembukaan' => 'required',
            // 'pejabat_sk_pembukaan' => 'required',
            // 'thn_menerima_mhs' => 'required',
            // 'akreditasi' => 'required',
            // 'no_sk_ban_pt' => 'required',
        ]);

        $userData = User::find($idUser);
        $userData->email = Request()->email;
        $userData->save();

        $prodi = Prodi::find($id);
        $prodi->nama = Request()->nama;
        $prodi->alamat = Request()->alamat;
        $prodi->email = Request()->email;
        $prodi->website = Request()->website;
        $prodi->no_sk_pembukaan = Request()->no_sk_pembukaan;
        $prodi->tgl_sk_pembukaan = Request()->tgl_sk_pembukaan;
        $prodi->pejabat_sk_pembukaan = Request()->pejabat_sk_pembukaan;
        $prodi->thn_menerima_mhs = Request()->thn_menerima_mhs;
        $prodi->akreditasi = Request()->akreditasi;
        $prodi->no_sk_ban_pt = Request()->no_sk_ban_pt;
        $prodi->save();
        return redirect()->route('pageProfile')->with('pesan', 'Profil berhasil diubah!');
    }

    public function updateCredential()
    {
        $id = auth()->user()->id;
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'old_password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user = User::find($id);
        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('pageProfile')->with('pesan', 'Password changed!');
    }

    public function detailProdi()
    {
        $id_user = auth()->user()->dosen->prodi->id;
        if (!Prodi::find($id_user)) {
            abort(404);
        }

        $data = [
            'prodi' => Prodi::find($id_user),
        ];
        return view('admin.prodi.v_prodi_detail', $data);
    }
    public function editProdi()
    {

        if (!Prodi::find($id)) {
            abort(404);
        }
        $data = [
            'prodi' => Prodi::find($id),
        ];
        return view('admin.prodi.v_edit_prodi', $data);
    }

    public function updateProdi()
    {
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
        ]);

        $dosen = Prodi::find($id);
        $dosen->nama = Request()->name;
        $dosen->save();
        return redirect()->route('prodiDetail', $id)->with('pesan', 'Updated a data !');
    }

    public function index_penilaian()
    {
        return view('matriks.index');
    }
    public function form_penilaian($id)
    {
        if (Auth::user()->level == 1) {
            $prodi = Prodi::find(7);
        } elseif (Auth::user()->level == 2) {
            $prodi = Prodi::find(Auth::user()->prodi->id);
        } elseif (Auth::user()->level == 3) {
            $prodi = Prodi::find(Auth::user()->dosen->prodi_id);
        } elseif (Auth::user()->level == 4) {
            $prodi = Prodi::find(Auth::user()->mhs->prodi_id);
        }
        $data = [
            'prev' => $this->prev_num($id),
            'next' => $this->next_num($id),
            'prodi' => $prodi
        ];
        // return $tables;
        return view('matriks.' . $id[0]  . $id[1] . $id[2], $data);
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
}
