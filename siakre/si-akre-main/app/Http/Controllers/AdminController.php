<?php

namespace App\Http\Controllers;

// use App\Http\Middleware\Reviewer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Prodi;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\User;
use App\Models\Reviewer;
use App\Models\Permission;

use Illuminate\Support\Facades\DB;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

use Yajra\Datatables\Datatables;

// use Datatables;
use File;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->level == 1) {

            // index_dosen();
        }
    }
    public function prodi_data(Request $request)
    {
        return Datatables::of(Prodi::all())
            ->addColumn('kode_prodi', function (Prodi $prodi) {
                return sprintf('PR%03d', $prodi->id);
            })
            ->addColumn('action', function (Prodi $prodi) {
                $btn = '
                <a class="btn btn-info" href="/manage/prodi/' . $prodi->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/prodi/edit/' . $prodi->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $prodi->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                return $btn;
            })
            ->rawColumns(['action'])
            ->toJson();
    }
    public function index_iaps()
    {
        $data = [
            'prodi' => Prodi::get(),
        ];
        return view('admin.admin.iaps_prodi', $data);
    }

    public function index_prodi(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Prodi::all())
                ->addColumn('kode_prodi', function (Prodi $prodi) {
                    return strtoupper($prodi->user->username);
                })
                ->addColumn('action', function (Prodi $prodi) {
                    $btn = '
                <a class="btn btn-info" href="/manage/prodi/' . $prodi->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/prodi/edit/' . $prodi->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $prodi->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'prodi' => Prodi::get(),
        ];
        return view('admin.prodi.v_prodi', $data);
    }
    public function index_audit_log(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(DB::table('audits')->orderBy('id', 'ASC')->get())
                ->addColumn('model', function ($audit) {
                    $words = explode('\\', $audit->auditable_type);
                    return $words[count($words) - 1];
                })
                ->addColumn('user', function ($audit) {
                    $user = User::get()->where('id', '=', $audit->user_id)->first();
                    if ($user == null) {
                        return "deleted user";
                    }
                    if ($user->level == 1) {
                        $name = 'admin';
                    } elseif ($user->level == 2) {
                        $name = $user->prodi->nama;
                    } elseif ($user->level == 3) {
                        $name = $user->dosen->nama;
                    } elseif ($user->level == 4) {
                        $name = $user->mhs->nama;
                    } elseif ($user->level == 5) {
                        $name = $user->reviewer->nama;
                    }
                    return  $name;
                })
                ->addColumn('log_event', function ($audit) {
                    $badge = '<span class=" badge rounded-pill '
                        . (($audit->event == 'created') ? ' bg-green '  : ($audit->event == 'deleted' ? ' bg-red ' : ($audit->event == 'updated' ? ' bg-yellow ' : '')))
                        . '">' . $audit->event . '</span>';
                    return  $badge;
                })
                ->addColumn('action', function ($audit) {
                    $btn = '
                    <a class="btn btn-info" href="/audit-log/' . $audit->id . '"><i class="fas fa-info-circle"></i> Detail</a>                    ';
                    return $btn;
                })
                ->rawColumns(['log_event', 'action'])
                ->toJson();
        }
        return view('admin.audit_log');
    }
    public function audit_log_detail($id)
    {
        $roles = array("Super Admin", "Admin Prodi", "Dosen", "Mahasiswa", "Reviewer");
        $audit = DB::table('audits')->where('id', '=', $id)->first();
        $user = User::find($audit->user_id);
        if ($user == null) {
            $user_url = '#';
            $user_role = '-';
            $user = (object) [
                "id" => null,
                "username" => "deleted user",
            ];
        } else {
            $user_role = $roles[$user->level - 1];
            if ($user->level == 1) {
                $user_url = '#';
            } elseif ($user->level == 2) {
                $user_url = '/manage/prodi/' . $user->prodi->id;
            } elseif ($user->level == 3) {
                $user_url =
                    '/manage/dosen/' . $user->id;
            } elseif ($user->level == 4) {
                $user_url =
                    '/manage/mhs/' . $user->id;
            } elseif ($user->level == 5) {
                $user_url =
                    '/manage/reviewer/' . $user->reviewer->id;
            }
            $user_role = $roles[$user->level - 1];
        }
        if ($audit->event == 'updated' || $audit->event == 'created') {
            $data_modified = json_decode($audit->new_values);
            $data_modified2 = json_decode($audit->old_values);
        } else if ($audit->event == 'deleted') {
            $data_modified = json_decode($audit->old_values);
            $data_modified2 = json_decode($audit->new_values);
        }
        $data = [
            'audit' => $audit,
            'data_modified' => $data_modified,
            'data_modified2' => $data_modified2,
            'user' => $user,
            'user_role' => $user_role,
            'user_url' => $user_url,
        ];

        // return $audit;
        return view('admin.audit_log_detail', $data);
    }

    public function index_form_access()
    {

        $data = [
            'permission' => Permission::get(),

        ];

        // return Permission::get();
        return view('admin.form_access', $data);
    }
    public function next_form($id)
    {
        $id = strval($id);
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

                        return $id;
                    }
                    $loop++;
                }
            }
        }
        return 0;
    }
    public function update_form_access(Request $request)
    {
        $initial = array(1, 2);
        $startForm = 211;
        while (true) {
            $accessList  = ($request->input('form' . $startForm)) ? $request->input('form' . $startForm) : array();

            if (Permission::find($startForm)) {
                $perm = Permission::find($startForm);
                $perm->access = json_encode(
                    array_merge(
                        $initial,
                        $accessList
                    )
                );
                $perm->save();
            } else {
                Permission::create([
                    'id' => $startForm,
                    'access' => json_encode(
                        array_merge(
                            $initial,
                            $accessList
                        )
                    ),
                ]);
            }

            if ($this->next_form($startForm) == 0) {
                break;
            }
            $startForm = $this->next_form($startForm);
        }
        // $perm = Permission::find($startForm);
        // $accessList  = ($request->input('form211')) ? $request->input('form211') : array();
        // $perm->access = json_encode(
        //     array_merge(
        //         $initial,
        //         $accessList
        //     )
        // );
        // $perm->save();

        return redirect()->route('formAccess')->with('pesan', 'Perubahan tersimpan');
    }

    public function detailProdi($id)
    {

        if (!Prodi::find($id)) {
            abort(404);
        }

        $data = [
            'prodi' => Prodi::find($id),
        ];
        return view('admin.prodi.v_prodi_detail', $data);
    }

    public function addProdi()
    {
        return view('admin.prodi.v_add_prodi');
    }
    public function insertProdi()
    {
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,',
            'username' => 'required|regex:/^[A-Za-z0-9 ]+$/|unique:users,username|max:10',
            'password' =>  ['required', 'min:8', 'max:16'],
            're-password' => ['required', 'min:8', 'max:16', 'same:password'],
        ]);

        $prodi = Prodi::create([
            'nama' => Request()->name,
            'email' => Request()->email,
        ]);

        User::create([
            'username' => Request()->username,
            'email' => Request()->email,
            'password' => Hash::make(
                Request()->password
            ),
            'level' => 2,
            'prodi_id' => $prodi->id,
        ]);

        return redirect()->route('prodiList')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function deleteProdi($id)
    {
        $prodi = Prodi::find($id);
        $user = User::where('prodi_id', $id);
        $prodi->delete();
        $user->delete();
        return redirect()->route('prodiList')->with('pesan', 'Data berhasil dihapus !');
    }
    public function editProdi($id)
    {

        if (!Prodi::find($id)) {
            abort(404);
        }
        $prodi = Prodi::find($id);
        $userData = $prodi->user;

        $data = [
            'prodi' => $prodi,
            'userData' => $userData,
        ];
        return view('admin.prodi.v_edit_prodi', $data);
    }

    public function updateProdi($id)
    {
        $prodi = Prodi::find($id);
        $user = $prodi->user;

        Request()->validate([
            'username' => 'required|unique:users,username,' . $prodi->user->id . 'max:5|max:10',
            'name' => 'required',
            'alamat' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $prodi->user->id,
            'website' => 'required',
            // 'no_sk_pembukaan' => 'required',
            // 'tgl_sk_pembukaan' => 'required',
            // 'pejabat_sk_pembukaan' => 'required',
            // 'thn_menerima_mhs' => 'required',
            // 'akreditasi' => 'required',
            // 'no_sk_ban_pt' => 'required',
        ]);
        $user->email = Request()->email;
        $user->save();

        $prodi->nama = Request()->name;
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

        if (Request()->username != $user->username) {
            $user->username = Request()->username;
            $user->save();
        }
        return redirect()->route('prodiDetail', $id)->with('pesan', 'Data berhasil diubah!');
    }
    public function editProdiPassword($id)
    {
        $data = [
            'prodi' => Prodi::find($id),
        ];

        return view('admin.prodi.v_edit_password', $data);
    }
    public function updateProdiCredential($id)
    {
        $prodi = Prodi::find($id);
        $user = $prodi->user;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'admin-password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('prodiDetail', $id)->with('pesan', 'Password changed!');
    }

    public function index_mhs(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Mahasiswa::all())
                ->addColumn('kode_mhs', function (Mahasiswa $mhs) {
                    return strtoupper($mhs->user->username);
                })
                ->addColumn('action', function (Mahasiswa $mhs) {
                    $btn = '
                <a class="btn btn-info" href="/manage/mhs/' . $mhs->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/mhs/edit/' . $mhs->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $mhs->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'mhs' => Mahasiswa::get(),
        ];
        return view('admin.mhs.v_mhs', $data);
    }
    public function detailMhs($id)
    {

        if (!Mahasiswa::find($id)) {
            abort(404);
        }
        $mhs = Mahasiswa::find($id);
        $userData = $mhs->user;
        $data = [
            'mhs' => $mhs,
            'userData' => $userData,
        ];
        return view('admin.mhs.v_mhs_detail', $data);
    }

    public function addMhs()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];

        return view('admin.mhs.v_add_mhs', $data);
    }
    public function insertMhs()
    {
        Request()->validate([
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,',
            'id_prodi' => 'required',
            'username' => 'required|regex:/^[A-Za-z0-9 ]+$/|unique:users,username|max:13',
            'foto_mhs' => 'file|image|mimes:jpeg,png,jpg|max:2048',

            'password' =>  ['required', 'min:8', 'max:16'],
            're-password' => ['required', 'min:8', 'max:16', 'same:password'],
        ]);
        if (Request()->foto_mhs <> "") {
            $file = Request()->file('foto_mhs');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/mhs';
            $file->move($tujuan_upload, $nama_file);
            $img_url = $nama_file;
        } else {
            $img_url  = 'user.jpg';
        }
        $mhs = Mahasiswa::create([
            'nama' => Request()->name,
            'nim' => Request()->username,
            'tmp_lahir' => Request()->birthplace,
            'tgl_lahir' => Request()->date,
            'alamat' => Request()->address,
            'img_url' =>  $img_url,
            'prodi_id' => Request()->id_prodi,
        ]);

        User::create([
            'username' => Request()->username,
            'email' => Request()->email,
            'password' => Hash::make(
                Request()->password
            ),
            'level' => 4,
            'mhs_id' => $mhs->id,

        ]);

        return redirect()->route('mhsList')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function deleteMhs($id)
    {
        $mhs = Mahasiswa::find($id);
        $user = User::where('mhs_id', $id);
        File::delete('img/mhs/' . $mhs->img_url);

        $mhs->delete();
        $user->delete();
        return redirect()->route('mhsList')->with('pesan', 'Data berhasil dihapus !');
    }
    public function editMhs($id)
    {

        if (!Mahasiswa::find($id)) {
            abort(404);
        }
        $mhs = Mahasiswa::find($id);
        $userData = $mhs->user;
        $data = [
            'mhs' => $mhs,
            'userData' => $userData,
            'prodi' => Prodi::all(),
            // 'user' => Mahasiswa::find($id)->user,
        ];
        return view('admin.mhs.v_edit_mhs', $data);
    }

    public function updateMhs($id)
    {
        $mhs = Mahasiswa::find($id);
        $user = $mhs->user;

        Request()->validate([
            'username' => 'required|unique:users,username,' . $mhs->user->id . 'max:5|max:13',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $mhs->user->id,

            'name' => 'required',
            'id_prodi' => 'required',
            'address' => 'required',
            'foto_mhs' => 'file|image|mimes:jpeg,png,jpg|max:2048',

        ]);
        if (Request()->foto_mhs <> "") {
            $file = Request()->file('foto_mhs');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/mhs';
            $file->move($tujuan_upload, $nama_file);

            $mhs = Mahasiswa::find($id);
            File::delete('img/mhs/' . $mhs->img_url);

            $user->email = Request()->email;
            $user->save();

            $mhs->nama = Request()->name;
            $mhs->prodi_id = Request()->id_prodi;
            $mhs->alamat = Request()->address;
            $mhs->tgl_lahir = Request()->date;
            $mhs->tmp_lahir = Request()->birthplace;
            $mhs->img_url = $nama_file;
            $mhs->save();
        } else {
            $user->email = Request()->email;
            $user->save();

            $mhs->nama = Request()->name;
            $mhs->prodi_id = Request()->id_prodi;

            $mhs->alamat = Request()->address;
            $mhs->tgl_lahir = Request()->date;
            $mhs->tmp_lahir = Request()->birthplace;
            $mhs->save();
        }

        if (Request()->username != $user->username) {
            $user->username = Request()->username;
            $user->save();
        }
        return redirect()->route('mhsDetail', $id)->with('pesan', 'Data berhasil diubah!');
    }
    public function editMhsPassword($id)
    {
        $data = [
            'mhs' => Mahasiswa::find($id),
        ];

        return view('admin.mhs.v_edit_password', $data);
    }
    public function updateMhsCredential($id)
    {
        $mhs = Mahasiswa::find($id);
        $user = $mhs->user;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'admin-password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('mhsDetail', $id)->with('pesan', 'Password changed!');
    }



    public function index_dosen(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Dosen::all())
                // ->addColumn('kode_mhs', function (Dosen $mhs) {
                //     return strtoupper($mhs->user);
                // })
                ->addColumn('action', function (Dosen $dosen) {
                    $btn = '
                <a class="btn btn-info" href="/manage/dosen/' . $dosen->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/dosen/edit/' . $dosen->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $dosen->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'dosen' => Dosen::get(),
        ];
        return view('admin.dosen.v_dosen', $data);
    }

    public function detailDosen($id)
    {

        if (!Dosen::find($id)) {
            abort(404);
        }
        $dosen = Dosen::find($id);
        $userData = $dosen->user;
        $data = [
            'dosen' => $dosen,
            'userData' => $userData,
        ];
        return view('admin.dosen.v_dosen_detail', $data);
    }

    public function addDosen()
    {
        $data = [
            'prodi' => Prodi::all(),
        ];

        return view('admin.dosen.v_add_dosen', $data);
    }
    public function insertDosen()
    {
        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,',
            'id_prodi' => 'required',
            'username' => 'required|regex:/^[A-Za-z0-9 ]+$/|unique:users,username|max:18',
            'foto_dos' => 'file|image|mimes:jpeg,png,jpg|max:2048',


            'password' =>  ['required', 'min:8', 'max:16'],
            're-password' => ['required', 'min:8', 'max:16', 'same:password'],
        ]);
        if (Request()->foto_dos <> "") {
            $file = Request()->file('foto_dos');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/dos';
            $file->move($tujuan_upload, $nama_file);
            $img_url = $nama_file;
        } else {
            $img_url  = 'user.jpg';
        }
        $dosen = Dosen::create([
            'nama' => Request()->name,
            'nip' => Request()->username,
            'tmp_lahir' => Request()->birthplace,
            'tgl_lahir' => Request()->date,
            'alamat' => Request()->address,
            'img_url' =>  $img_url,
            'prodi_id' => Request()->id_prodi,
        ]);

        User::create([
            'username' => Request()->username,
            'email' => Request()->email,
            'password' => Hash::make(
                Request()->password
            ),
            'level' => 3,
            'dosen_id' => $dosen->id,

        ]);

        return redirect()->route('dosenList')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function deleteDosen($id)
    {
        $dosen = Dosen::find($id);
        $user = User::where('dosen_id', $id);
        File::delete('img/dos/' . $dosen->img_url);

        $dosen->delete();
        $user->delete();
        return redirect()->route('dosenList')->with('pesan', 'Data berhasil dihapus !');
    }
    public function editDosen($id)
    {

        if (!Dosen::find($id)) {
            abort(404);
        }
        $dosen = Dosen::find($id);
        $userData = $dosen->user;

        $data = [
            'dosen' => $dosen,
            'userData' => $userData,
            'prodi' => Prodi::all(),
            // 'user' => Dosen::find($id)->user,
        ];
        return view('admin.dosen.v_edit_dosen', $data);
    }

    public function updateDosen($id)
    {
        $dosen = Dosen::find($id);
        $user = $dosen->user;

        Request()->validate([
            'username' => 'required|unique:users,username,' . $dosen->user->id . 'max:5|max:18',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $dosen->user->id,

            'name' => 'required',
            'address' => 'required',
            'foto_dos' => 'file|image|mimes:jpeg,png,jpg|max:2048',

        ]);
        if (Request()->foto_dos <> "") {
            $file = Request()->file('foto_dos');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/dos';
            $file->move($tujuan_upload, $nama_file);

            $dosen = Dosen::find($id);
            File::delete('img/dos/' . $dosen->img_url);

            $user->email = Request()->email;
            $user->save();

            $dosen->nama = Request()->name;
            // $dosen->prodi_id = Request()->id_prodi;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->img_url = $nama_file;
            $dosen->save();
        } else {
            $user->email = Request()->email;
            $user->save();

            $dosen->nama = Request()->name;
            // $dosen->prodi_id = Request()->id_prodi;
            $dosen->alamat = Request()->address;
            $dosen->tgl_lahir = Request()->date;
            $dosen->tmp_lahir = Request()->birthplace;
            $dosen->save();
        }

        if (Request()->username != $user->username) {
            $user->username = Request()->username;
            $dosen->nip = Request()->username;
            $user->save();
        }
        return redirect()->route('dosenDetail', $id)->with('pesan', 'Data berhasil diubah!');
    }
    public function editDosenPassword($id)
    {
        $data = [
            'dosen' => Dosen::find($id),
        ];

        return view('admin.dosen.v_edit_password', $data);
    }
    public function updateDosenCredential($id)
    {
        $dosen = Dosen::find($id);
        $user = $dosen->user;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'admin-password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('dosenDetail', $id)->with('pesan', 'Password changed!');
    }

    public function index_reviewer(Request $request)
    {
        if ($request->ajax()) {
            return Datatables::of(Reviewer::all())
                ->addColumn('action', function (Reviewer $reviewer) {
                    $btn = '
                <a class="btn btn-info" href="/manage/reviewer/' . $reviewer->id . '"><i class="fas fa-info-circle"></i> Detail</a>
                <a class="btn btn-secondary" href="/manage/reviewer/edit/' . $reviewer->id . '"><i class="far fa-edit"></i> Edit</a>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete' . $reviewer->id . '">
                <i class="fas fa-trash-alt"></i> Hapus
                </button>
                ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        $data = [
            'reviewer' => Reviewer::get(),
        ];
        return view('admin.reviewer.v_reviewer', $data);
    }

    public function detailReviewer($id)
    {

        if (!Reviewer::find($id)) {
            abort(404);
        }
        $reviewer = Reviewer::find($id);
        $userData = $reviewer->user;

        $data = [
            'reviewer' => $reviewer,
            'userData' => $userData,

        ];
        return view('admin.reviewer.v_reviewer_detail', $data);
    }

    public function addReviewer()
    {
        $data = [
            'reviewer' => Reviewer::all(),
        ];

        return view('admin.reviewer.v_add_reviewer', $data);
    }
    public function insertReviewer()
    {
        Request()->validate([
            // 'id' => 'required|unique:reviewer,id|min:10|max:18',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,',
            'instansi' => 'required',
            'username' => 'required|regex:/^[A-Za-z0-9 ]+$/|unique:users,username|max:18',
            'foto_rev' => 'file|image|mimes:jpeg,png,jpg|max:2048',


            'password' =>  ['required', 'min:8', 'max:16'],
            're-password' => ['required', 'min:8', 'max:16', 'same:password'],
        ]);
        if (Request()->foto_rev <> "") {
            $file = Request()->file('foto_rev');
            $nama_file = time() . Request()->name . "." . $file->extension();

            $tujuan_upload = 'img/rev';
            $file->move($tujuan_upload, $nama_file);
            $img_url = $nama_file;
        } else {
            $img_url  = 'user.jpg';
        }
        $reviewer = Reviewer::create([
            'nama' => Request()->name,
            'instansi' => Request()->instansi,
            'rev_id' => Request()->username,
            'tmp_lahir' => Request()->birthplace,
            'tgl_lahir' => Request()->date,
            'alamat' => Request()->address,

            'img_url' =>  $img_url,
        ]);

        User::create([
            'username' => Request()->username,
            'email' => Request()->email,
            'password' => Hash::make(
                Request()->password
            ),
            'level' => 5,
            'rev_id' => $reviewer->id,

        ]);

        return redirect()->route('reviewerList')->with('pesan', 'Data berhasil ditambahkan!');
    }

    public function deleteReviewer($id)
    {
        $reviewer = Reviewer::find($id);
        $user = User::where('rev_id', $id);
        try {
            if ($reviewer->img_url <> 'default.jpg') { //jika foto lama tidak user.jpg maka hapus foto lama
                File::delete('img/rev/' . $reviewer->img_url);
            }
        } catch (\Throwable $th) {
            //throw $th;
        }

        $reviewer->delete();
        $user->delete();
        return redirect()->route('reviewerList')->with('pesan', 'Data berhasil dihapus !');
    }
    public function editReviewer($id)
    {

        if (!Reviewer::find($id)) {
            abort(404);
        }
        $reviewer = Reviewer::find($id);
        $userData = $reviewer->user;

        $data = [
            'reviewer' => $reviewer,
            'userData' => $userData,
        ];
        return view('admin.reviewer.v_edit_reviewer', $data);
    }

    public function updateReviewer($id)
    {
        $reviewer = Reviewer::find($id);
        $user = $reviewer->user;

        Request()->validate([
            'username' => 'required|unique:users,username,' . $reviewer->user->id . 'max:5|max:18',
            'email' => 'required|email:rfc,dns|unique:users,email,' . $reviewer->user->id,

            'name' => 'required',
            'instansi' => 'required',
            // 'address' => 'required',
            'foto_rev' => 'file|image|mimes:jpeg,png,jpg|max:2048',

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

            $user->email = Request()->email;
            $user->save();

            $reviewer->nama = Request()->name;
            $reviewer->instansi = Request()->instansi;
            $reviewer->alamat = Request()->address;
            $reviewer->tgl_lahir = Request()->date;
            $reviewer->tmp_lahir = Request()->birthplace;
            $reviewer->img_url = $nama_file;
            $reviewer->save();
        } else {
            $user->email = Request()->email;
            $user->save();

            $reviewer->nama = Request()->name;
            $reviewer->instansi = Request()->instansi;
            $reviewer->alamat = Request()->address;
            $reviewer->tgl_lahir = Request()->date;
            $reviewer->tmp_lahir = Request()->birthplace;
            $reviewer->save();
        }

        if (Request()->username != $user->username) {
            $user->username = Request()->username;
            $reviewer->nip = Request()->username;
            $user->save();
        }
        return redirect()->route('reviewerDetail', $id)->with('pesan', 'Data berhasil diubah!');
    }
    public function editReviewerPassword($id)
    {
        $data = [
            'reviewer' => Reviewer::find($id),
        ];

        return view('admin.reviewer.v_edit_password', $data);
    }
    public function updateReviewerCredential($id)
    {
        $reviewer = Reviewer::find($id);
        $user = $reviewer->user;

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'admin-password' => ['required', new MatchOldPassword],
            'new_password' =>  ['required', 'min:8', 'max:16'],
            'retype_new_password' => ['required', 'min:8', 'max:16', 'same:new_password'],
        ]);

        $user->password = Hash::make(Request()->new_password);
        $user->save();
        return redirect()->route('reviewerDetail', $id)->with('pesan', 'Password changed!');
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
        $idUser = auth()->user()->id;
        $userData = User::find($idUser);

        Request()->validate([
            // 'id' => 'required|unique:teacher,id|min:10|max:10',
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email,' . auth()->user()->id,
        ]);

        $userData->name = Request()->name;
        $userData->email = Request()->email;
        $userData->save();

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
