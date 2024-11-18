<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // === ADMINISTRATOR
    public function indexAdministrator()
    {
        $users = User::where('role', 'administrator')->get();
        return view('administrator/administrator.index', compact('users'));
    }

    public function addAdministrator()
    {
        return view('administrator/administrator.add');
    }

    public function postAdministrator(Request $request)
    {
        $rules = [
            "username" => 'required:unique:users',
            'nama_lengkap' => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
        ];
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus angka',
            'mimes' => 'The :attribute harus berupa file: :values.',
            'max' => [
                'file' => ':attribute tidak boleh lebih dari :max kilobytes.',
            ],
        ];

        $request->validate($rules, $messages);

        User::create([
            'username' =>  $request->username,
            'nama_lengkap' =>  $request->nama_lengkap,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'email' =>  $request->email,
            'is_active' =>  $request->is_active,
            'password' => bcrypt($request->password),
            'role' =>  'administrator',
        ]);

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.administrator')->with($notification);
    }

    public function editAdministrator($id)
    {
        $data = User::where('id', $id)->first();
        return view('administrator/administrator.edit', compact('data'));
    }

    public function updateadministrator(Request $request, $id)
    {
        $user = User::find($id);

        $rules = [
            "username" => 'required:unique:users',
            'nama_lengkap' => "required"
        ];

        if ($user->email !== $request->email) {
            $rules['email'] = "required|email|unique:users";
        }

        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus angka',
            'mimes' => 'The :attribute harus berupa file: :values.',
            'max' => [
                'file' => ':attribute tidak boleh lebih dari :max kilobytes.',
            ],
        ];

        $request->validate($rules, $messages);

        $user->update($request->all());

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.administrator')->with($notification);
    }

    public function deleteAdministrator($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Berhasil, data user berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.administrator')->with($notification);
    }

    public function ubahPassword(Request $request)
    {
        $user = User::find($request->idPassword);

        $user->update([
            'password'  =>  bcrypt($request->password_ubah),
        ]);

        if ($user->role === 'administrator') {
            $redirectPath = "administrator.administrator";
        } elseif ($user->role === 'dosen') {
            $redirectPath = "administrator.teacher";
        } elseif ($user->role === 'mahasiswa') {
            $redirectPath = "administrator.student";
        }

        return redirect()->route($redirectPath)->with(['success' =>  'Password berhasil di generate !']);
    }

    // === DOSEN ===
    public function indexteacher()
    {
        $users = User::where('role', 'dosen')->get();
        return view('administrator/teacher.index', compact('users'));
    }

    public function addTeacher()
    {
        return view('administrator/teacher.add');
    }

    public function postTeacher(Request $request)
    {
        $rules = [
            "username" => 'required:unique:users',
            'nama_lengkap' => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
        ];
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus angka',
            'mimes' => 'The :attribute harus berupa file: :values.',
            'max' => [
                'file' => ':attribute tidak boleh lebih dari :max kilobytes.',
            ],
        ];

        $request->validate($rules, $messages);

        User::create([
            'username' =>  $request->username,
            'nama_lengkap' =>  $request->nama_lengkap,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'email' =>  $request->email,
            'is_active' =>  $request->is_active,
            'password' => bcrypt($request->password),
            'role' =>  'dosen',
        ]);

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.teacher')->with($notification);
    }

    public function editTeacher($id)
    {
        $data = User::where('id', $id)->first();
        return view('administrator/teacher.edit', compact('data'));
    }

    public function updateTeacher(Request $request, $id)
    {
        $user = User::find($id);

        $rules = [
            "username" => 'required:unique:users',
            'nama_lengkap' => "required"
        ];

        if ($user->email !== $request->email) {
            $rules['email'] = "required|email|unique:users";
        }

        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus angka',
            'mimes' => 'The :attribute harus berupa file: :values.',
            'max' => [
                'file' => ':attribute tidak boleh lebih dari :max kilobytes.',
            ],
        ];

        $request->validate($rules, $messages);

        $user->update($request->all());

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.teacher')->with($notification);
    }

    public function deleteTeacher($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Berhasil, data user berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.teacher')->with($notification);
    }

    // === MAHASISWA ===
    public function indexStudent()
    {
        $users = User::where('role', 'mahasiswa')->latest()->get();
        return view('administrator/student.index', compact('users'));
    }

    public function addStudent()
    {
        return view('administrator/student.add');
    }

    public function postStudent(Request $request)
    {
        $rules = [
            "username" => 'required:unique:users',
            'nama_lengkap' => "required",
            "email" => "required|email|unique:users",
            "password" => "required",
            "jalur_masuk" => "nullable",
            "rata_ujian" => "nullable",
            "asal_sekolah" => "nullable",
        ];
        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus angka',
            'mimes' => 'The :attribute harus berupa file: :values.',
            'max' => [
                'file' => ':attribute tidak boleh lebih dari :max kilobytes.',
            ],
        ];

        $request->validate($rules, $messages);

        User::create([
            'username' =>  $request->username,
            'nama_lengkap' =>  $request->nama_lengkap,
            'jenis_kelamin' =>  $request->jenis_kelamin,
            'email' =>  $request->email,
            'is_active' =>  $request->is_active,
            'password' => bcrypt($request->password),
            'rata_ujian' => $request->rata_ujian,
            'jalur_masuk' => $request->jalur_masuk,
            'asal_sekolah' => $request->asal_sekolah,
            'role' =>  'mahasiswa',
        ]);

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.student')->with($notification);
    }

    public function editStudent($id)
    {
        $data = User::where('id', $id)->first();
        return view('administrator/student.edit', compact('data'));
    }

    public function updateStudent(Request $request, $id)
    {
        $user = User::find($id);

        $rules = [
            "username" => 'required:unique:users',
            'nama_lengkap' => "required"
        ];

        if ($user->email !== $request->email) {
            $rules['email'] = "required|email|unique:users";
        }

        $messages = [
            'required' => ':attribute harus diisi',
            'numeric' => ':attribute harus angka',
            'mimes' => 'The :attribute harus berupa file: :values.',
            'max' => [
                'file' => ':attribute tidak boleh lebih dari :max kilobytes.',
            ],
        ];

        $request->validate($rules, $messages);

        $user->update($request->all());

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.student')->with($notification);
    }

    public function deleteStudent($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array(
            'message' => 'Berhasil, data user berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.student')->with($notification);
    }
}
