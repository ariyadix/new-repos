<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Models\Reviewer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Prodi;


use File;

class ReviewerController extends Controller
{
    public function index()
    {
        $id_user = auth()->user()->rev_id;

        $data = [
            'reviewer' => Reviewer::find($id_user),
        ];


        return view('reviewer.dashboard');
    }
    public function index_lkps()
    {
        $data = [
            'prodi' => Prodi::get(),
        ];
        return view('reviewer.lkps_prodi', $data);
    }
    public function profile()
    {
        $id_user = auth()->user()->rev_id;

        $data = [
            'reviewer' => Reviewer::find($id_user),
        ];

        return view('reviewer.profile', $data);
    }
    public function editProfile()
    {
        $id_user = auth()->user()->rev_id;

        $data = [
            'mhs' => Reviewer::find($id_user),
        ];

        return view('reviewer.edit_profile', $data);
    }
    public function updateProfile()
    {
        $id = auth()->user()->rev_id;
        $idUser = auth()->user()->id;
        $userData = User::find($idUser);
        $reviewer = Reviewer::find($id);

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,' . auth()->user()->id,
            'instansi' => 'required',
            // 'address' => 'required',
            'date' => 'required',
            'birthplace' => 'required',
            'foto_dos' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if (Request()->foto_rev <> "") {
            $file = Request()->file('foto_rev');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/rev';
            $file->move($tujuan_upload, $nama_file);

            $reviewer = Reviewer::find($id);
            if ($reviewer->img_url <> 'default.jpg') { //jika foto lama tidak user.jpg maka hapus foto lama
                File::delete('img/rev/' . $reviewer->img_url);
            }

            $userData->email = Request()->email;
            $userData->save();

            $reviewer->nama = Request()->name;
            $reviewer->instansi = Request()->instansi;
            $reviewer->alamat = Request()->address;
            $reviewer->tgl_lahir = Request()->date;
            $reviewer->tmp_lahir = Request()->birthplace;
            $reviewer->img_url = $nama_file;
            $reviewer->save();
        } else {
            $userData->email = Request()->email;
            $userData->save();

            $reviewer->nama = Request()->name;
            $reviewer->instansi = Request()->instansi;
            $reviewer->alamat = Request()->address;
            $reviewer->tgl_lahir = Request()->date;
            $reviewer->tmp_lahir = Request()->birthplace;
            $reviewer->save();
        }

        return redirect()->route('pageProfile')->with('pesan', 'Profil diubah!');
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
}
