<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class RegistrationController extends Controller
{
    public function registrationPost(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'jenis_kelamin' => 'required|string|in:L,P',
            'jalur_masuk' => 'required|string|in:snmptn,sbmptn,mandiri',
            'rata_ujian' => 'required|numeric|between:0,100',
            'password' => 'required|string|min:8|confirmed',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $image = Image::make($request->file('foto'));

        // Validasi ukuran gambar harus persegi atau portrait
        if (!($image->width() <= $image->height())) {
            return redirect()->route('registration')->with('error', 'Gagal, foto harus persegi atau portrait.');
        }

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');

            $originalName = pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
            $extension = $foto->getClientOriginalExtension();

            $uniqueFileName = $originalName . '-' . Str::uuid() . '.' . $extension;
            $path = $foto->storeAs('fotos', $uniqueFileName, 'public');

            if ($foto->isValid()) {
                $simpan = User::create([
                    'nama_lengkap' => $request->nama_lengkap,
                    'email' => $request->email,
                    'username' => $request->username,
                    'jenis_kelamin' => $request->jenis_kelamin,
                    'jalur_masuk' => $request->jalur_masuk,
                    'rata_ujian' => $request->rata_ujian,
                    'password' => bcrypt($request->password),
                    'is_active' =>  1,
                    'foto' => $path,
                    'role'  =>  'mahasiswa',
                ]);

                activity()
                    ->causedBy(Auth::user())
                    ->performedOn($simpan)
                    ->event('user_registered')
                    ->withProperties([
                        'created_fields' => $simpan,
                        'log_name' => 'Registrasi'
                    ])
                    ->log($simpan->nama_lengkap . ' telah mendaftar sebagai pengguna baru.');

                    return redirect()->route('login')->with('success', 'Pendaftaran berhasil. Silakan login.');
            } else {
                return redirect()->route('registration')->with('error', 'Gagal, file tidak valid.');
            }
        } else {
            return redirect()->route('registration')->with('error', 'Gagal, foto harus diunggah.');
        }
    }
}
