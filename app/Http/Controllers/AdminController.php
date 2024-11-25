<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // === ADMINISTRATOR
    public function indexAdministrator(Request $request)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman administrator');

        $users = User::where('role', 'administrator')->get();
        return view('administrator/administrator.index', compact('users'));
    }

    public function addAdministrator(Request $request)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman tambah administrator');

        return view('administrator/administrator.add');
    }

    public function postAdministrator(Request $request, User $user)
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

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($user)
            ->event('menambah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' menambah data administrator');

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.administrator')->with($notification);
    }

    public function editAdministrator(Request $request, $id)
    {
        $data = User::where('id', $id)->first();

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman edit administrator ' . $data->nama_lengkap);

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

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengubah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengubah data administrator ' . $user->nama_lengkap);

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.administrator')->with($notification);
    }

    public function deleteAdministrator(Request $request, $id)
    {
        $user = User::find($id);
        $userName = $user->nama_lengkap;
        $user->delete();

        activity()
            ->causedBy(Auth::user()->id)
            ->event('menghapus')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' menghapus data administrator ' . $userName);

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

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengubah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengubah password administrator ' . $user->nama_lengkap);

        return redirect()->route($redirectPath)->with(['success' =>  'Password berhasil di generate !']);
    }

    // === DOSEN ===
    public function indexteacher(Request $request)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman dosen');

        $users = User::where('role', 'dosen')->get();
        return view('administrator/teacher.index', compact('users'));
    }

    public function addTeacher(Request $request)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman tambah dosen ');

        return view('administrator/teacher.add');
    }

    public function postTeacher(Request $request, User $user)
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

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($user)
            ->event('menambah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' menambah data dosen ');

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.teacher')->with($notification);
    }

    public function editTeacher(Request $request, $id)
    {
        $data = User::where('id', $id)->first();

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman edit dosen ' . $data->nama_lengkap);

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

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengubah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengubah data dosen ' . $user->nama_lengkap);

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.teacher')->with($notification);
    }

    public function deleteTeacher(Request $request, $id)
    {
        $user = User::find($id);
        $userName = $user->nama_lengkap;
        $user->delete();

        activity()
            ->causedBy(Auth::user()->id)
            ->event('menghapus')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' menghapus data dosen ' . $userName);

        $notification = array(
            'message' => 'Berhasil, data user berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.teacher')->with($notification);
    }

    // === MAHASISWA ===
    public function indexStudent(Request $request)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman mahasiswa');

        $users = User::where('role', 'mahasiswa')->latest()->get();
        return view('administrator/student.index', compact('users'));
    }

    public function addStudent(Request $request)
    {
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman tambah mahasiswa ');

        return view('administrator/student.add');
    }

    public function postStudent(Request $request, User $user)
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

        activity()
            ->causedBy(Auth::user()->id)
            ->performedOn($user)
            ->event('menambah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' menambah data mahasiswa ');

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.student')->with($notification);
    }

    public function editStudent(Request $request, $id)
    {
        $data = User::where('id', $id)->first();

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman edit mahasiswa ' . $data->nama_lengkap);

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

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengubah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengubah data mahasiswa ' . $user->nama_lengkap);

        $notification = array(
            'message' => 'Berhasil, data user berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.student')->with($notification);
    }

    public function deleteStudent(Request $request, $id)
    {
        $user = User::find($id);
        $userName = $user->nama_lengkap;
        $user->delete();

        activity()
            ->causedBy(Auth::user()->id)
            ->event('menghapus')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' menghapus data mahasiswa ' . $userName);

        $notification = array(
            'message' => 'Berhasil, data user berhasil dihapus!',
            'alert-type' => 'success'
        );
        return redirect()->route('administrator.student')->with($notification);
    }
}
