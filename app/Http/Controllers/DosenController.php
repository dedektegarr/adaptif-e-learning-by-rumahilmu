<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DosenController extends Controller
{
    public function profile()
    {
        $dosen = User::find(Auth::user()->id);

        return view("admin.profile.index", compact("dosen"));
    }

    public function update(Request $request)
    {
        $dosen = User::find(Auth::user()->id);

        $rules = [
            "username" => 'required:unique:users',
            'nama_lengkap' => "required",
        ];

        if ($dosen->email !== $request->email) {
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
        $data = [
            "username" => $request->username,
            "nama_lengkap" => $request->nama_lengkap,
            "email" => $request->email,
            "jenis_kelamin" => $request->jenis_kelamin,
        ];

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');

            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $data["foto"] = $foto->store('fotos', 'public');
        }

        $dosen->update($data);

        $notification = array(
            'message' => 'Berhasil, data anda berhasil diubah!',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.profile')->with($notification);
    }

    public function ubahPassword(Request $request)
    {
        $user = User::find(Auth::user()->id);

        $user->update([
            'password'  =>  bcrypt($request->password_ubah),
        ]);

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengubah')
            ->withProperties(['url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengubah password');

        $notification = array(
            'message' => 'Berhasil, password anda berhasil diubah!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
