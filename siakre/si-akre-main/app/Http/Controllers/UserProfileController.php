<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Reviewer;

class UserProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->level == 1) {
            $id_user = auth()->user()->id;
            $user = User::find($id_user);
            $data = [
                'user' => $user,
            ];
            return view('admin.admin.v_profile', $data);
        } elseif (Auth::user()->level == 2) {
            $id_prodi = auth()->user()->prodi_id;
            $id_user = auth()->user()->id;
            $prodi = new Prodi;

            $data = [
                'prodi' => Prodi::find($id_prodi),
                'userData' => User::find($id_user),
                'isComplete' => $prodi->isComplete()

            ];
            return view('admin_prodi.profile', $data);
        } elseif (Auth::user()->level == 3) {
            $id_dos = auth()->user()->dosen_id;
            $id_user = auth()->user()->id;

            $data = [
                'dosen' => Dosen::find($id_dos),
                'userData' => User::find($id_user),
            ];

            return view('dosen.profile', $data);
        } elseif (Auth::user()->level == 4) {
            $id_mhs = auth()->user()->mhs_id;
            $id_user = auth()->user()->id;

            $data = [
                'mhs' => Mahasiswa::find($id_mhs),
                'userData' => User::find($id_user),
            ];

            return view('mhs.profile', $data);
        } elseif (Auth::user()->level == 5) {
            $id_rev = auth()->user()->rev_id;
            $id_user = auth()->user()->id;

            $data = [
                'reviewer' => Reviewer::find($id_rev),
                'userData' => User::find($id_user),
            ];

            return view('reviewer.profile', $data);
        }
    }
    public function editProfile()
    {
        if (Auth::user()->level == 1) {
            $id_user = auth()->user()->id;
            $data = [
                'user' => User::find($id_user),
            ];

            return view('admin.admin.edit_profile', $data);
        } elseif (Auth::user()->level == 2) {
            $id_prodi = auth()->user()->prodi_id;
            $id_user = auth()->user()->id;

            $data = [
                'prodi' => Prodi::find($id_prodi),
                'userData' => User::find($id_user),
            ];

            return view('admin_prodi.edit_profile', $data);
        } elseif (Auth::user()->level == 3) {
            $id_dos = auth()->user()->dosen_id;
            $id_user = auth()->user()->id;

            $data = [
                'dosen' => Dosen::find($id_dos),
                'userData' => User::find($id_user),
            ];

            return view('dosen.edit_profile', $data);
        } elseif (Auth::user()->level == 4) {
            $id_mhs = auth()->user()->mhs_id;
            $id_user = auth()->user()->id;

            $data = [
                'mhs' => Mahasiswa::find($id_mhs),
                'userData' => User::find($id_user),
            ];

            return view('mhs.edit_profile', $data);
        } elseif (Auth::user()->level == 5) {
            return redirect('/');
        }
    }
    public function editPassword()
    {
        if (Auth::user()->level == 1) {
            $id_user = auth()->user()->id;
            $data = [
                'user' => User::find($id_user),
            ];
            return view('admin.admin.edit_password', $data);
        } elseif (Auth::user()->level == 2) {
            $id_user = auth()->user()->prodi_id;
            $data = [
                'prodi' => Prodi::find($id_user),
            ];
            return view('admin_prodi.edit_password', $data);
        } elseif (Auth::user()->level == 3) {
            $id_user = auth()->user()->dosen_id;

            $data = [
                'dosen' => Dosen::find($id_user),
            ];

            return view('dosen.edit_password', $data);
        } elseif (Auth::user()->level == 4) {

            $id_user = auth()->user()->mhs_id;

            $data = [
                'mhs' => Mahasiswa::find($id_user),
            ];

            return view('mhs.edit_password', $data);
        } elseif (Auth::user()->level == 5) {

            $id_user = auth()->user()->rev_id;

            $data = [
                'reviewer' => Reviewer::find($id_user),
            ];

            return view('reviewer.edit_password', $data);
        }
    }
}
