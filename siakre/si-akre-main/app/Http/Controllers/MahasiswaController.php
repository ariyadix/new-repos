<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;

use App\Models\User;
use App\Models\Mahasiswa;

use Illuminate\Support\Facades\Hash;
use File;

class MahasiswaController extends Controller
{
    public function index()
    {
        $id_user = auth()->user()->mhs_id;

        $data = [
            'mhs' => Mahasiswa::find($id_user),
        ];


        return view('mhs.dashboard');
    }
    public function profile()
    {
        $id_user = auth()->user()->mhs_id;

        $data = [
            'mhs' => Mahasiswa::find($id_user),
        ];

        return view('mhs.profile', $data);
    }
    public function editProfile()
    {
        $id_user = auth()->user()->mhs_id;

        $data = [
            'mhs' => Mahasiswa::find($id_user),
        ];

        return view('mhs.edit_profile', $data);
    }
    public function updateProfile()
    {
        $id = auth()->user()->mhs_id;
        $idUser = auth()->user()->id;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,' . auth()->user()->id,
            // 'address' => 'required',
            'date' => 'required',
            'birthplace' => 'required',
            'foto_mhs' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if (Request()->foto_mhs <> "") {
            $file = Request()->file('foto_mhs');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/mhs';
            $file->move($tujuan_upload, $nama_file);

            $mhs = Mahasiswa::find($id);
            File::delete('img/mhs/' . $mhs->img_url);

            $userData = User::find($idUser);
            $userData->email = Request()->email;
            $userData->save();

            $mhs->nama = Request()->name;
            $mhs->alamat = Request()->address;
            $mhs->tgl_lahir = Request()->date;
            $mhs->tmp_lahir = Request()->birthplace;
            $mhs->img_url = $nama_file;
            $mhs->save();
        } else {
            $mhs = Mahasiswa::find($id);

            $userData = User::find($idUser);
            $userData->email = Request()->email;

            $mhs->nama = Request()->name;
            $mhs->alamat = Request()->address;
            $mhs->tgl_lahir = Request()->date;
            $mhs->tmp_lahir = Request()->birthplace;
            $mhs->save();
            $userData->save();
        }
        return redirect()->route('pageProfile')->with('pesan', 'Profil diubah !'. $userData->email);
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
