<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\User;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use File;
use Illuminate\Support\Facades\Validator;

class DosenController extends Controller
{
    //
    public function index()
    {
        $id_user = auth()->user()->dosen_id;

        $data = [
            'dosen' => Dosen::find($id_user),
        ];


        return view('dosen.dashboard');
    }
    public function profile()
    {
        $id_user = auth()->user()->dosen_id;

        $data = [
            'dosen' => Dosen::find($id_user),
        ];

        return view('dosen.profile', $data);
    }
    public function editProfile()
    {
        $id_user = auth()->user()->dosen_id;

        $data = [
            'dosen' => Dosen::find($id_user),
        ];

        return view('dosen.edit_profile', $data);
    }
    public function updateProfile()
    {
        $id = auth()->user()->dosen_id;
        $idUser = auth()->user()->id;
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,' . auth()->user()->id,
            'date' => 'required',
            'birthplace' => 'required',
            'foto_dos' => 'file|image|mimes:jpeg,png,jpg|max:2048',
        ]);
        if (Request()->foto_dos <> "") {
            $file = Request()->file('foto_dos');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/dos';
            $file->move($tujuan_upload, $nama_file);

            $dosen = Dosen::find($id);
            File::delete('img/dos/' . $dosen->img_url);

            $userData = User::find($idUser);
            $userData->email = Request()->email;

            $dosen->nama = Request()->name;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->img_url = $nama_file;
            $dosen->save();
            $userData->save();
        } else {
            $dosen = Dosen::find($id);

            $userData = User::find($idUser);
            $userData->email = Request()->email;

            $dosen->nama = Request()->name;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->save();
            $userData->save();
        }
        return redirect()->route('pageProfile')->with('pesan', 'Profil diubah!');
    }
    public function updateCredential()
    {
        $id = auth()->user()->id;
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'oldpass' => ['required', new MatchOldPassword],
            'newpass' =>  ['required', 'min:8', 'max:16'],
            'newpass2' => ['required', 'min:8', 'max:16', 'same:newpass'],
        ]);

        $user = User::find($id);
        $user->password = Hash::make(Request()->newpass);
        $user->save();
        return redirect()->route('pageProfile')->with('pesan', 'Password changed!');
    }
}
