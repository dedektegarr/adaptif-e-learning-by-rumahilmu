<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\DiskusiRespon;
use App\Models\KelasMahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MahasiswaProfilController extends Controller
{
    public function dashboard(Request $request){

        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties([ 'url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman dashboard mahasiswa.');
        return view('mahasiswa.dashboard');
    }

    public function pengaturanProfil(Request $request){
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties([ 'url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman pengaturan profil mahasiswa.');
        return view('mahasiswa.pengaturan_profil');
    }

    public function logAktivitas(Request $request){
        activity()
            ->causedBy(Auth::user()->id)
            ->event('mengakses')
            ->withProperties([ 'url' => $request->fullUrl()])
            ->log(Auth::user()->nama_user . ' mengakses halaman log aktivitas mahasiswa.');
        $aktivitas = DB::table('activity_log')
            ->where('causer_id', Auth::user()->id)
            ->orderBy('created_at', 'desc')
            ->limit(15)
            ->get();
        return view('mahasiswa.logs',compact('aktivitas'));
    }

    public function pengaturanProfilUpdate(Request $request)
    {
        Log::info('Request received:', $request->all());

        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'jenis_kelamin' => 'required|in:L,P',
            'jalur_ujian' => 'required|string',
            'rata_ujian' => 'required|numeric',
            'asal_sekolah' => 'required|string|max:255',
            'asal_provinsi_sma' => 'required|string|max:255',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($validator->fails()) {
            Log::error('Validation failed:', $validator->errors()->toArray());
            return response()->json(['success' => false, 'errors' => $validator->errors()], 422);
        }

        DB::beginTransaction();
        try {
            $user = User::findOrFail(Auth::id());

            if ($request->hasFile('avatar')) {
                if ($user->foto && Storage::disk('public')->exists($user->foto)) {
                    Storage::disk('public')->delete($user->foto);
                }
                $avatarPath = $request->file('avatar')->store('fotos', 'public');
                $user->foto = $avatarPath;
            }

            $user->fill($request->only([
                'nama_lengkap',
                'username',
                'email',
                'jenis_kelamin',
                'jalur_masuk',
                'rata_ujian',
                'asal_sekolah',
                'asal_provinsi_sma'
            ]));

            activity()
            ->causedBy(Auth::user()->id)
            ->event('menyimpan')
            ->withProperties([ 'url' => $request->fullUrl(), 'user : '   =>  $user])
            ->log(Auth::user()->nama_user . ' mengupdate profil mahasiswa.');

            if ($user->isDirty()) {
                $user->save();
                DB::commit();
                Log::info('Profile updated successfully for user: ' . $user->id);
                $completionPercentage = $user->getProfileCompletionPercentage();
                return response()->json([
                    'success' => true,
                    'message' => 'Profil berhasil diperbarui.',
                    'completionPercentage' => $completionPercentage
                ]);
            } else {
                DB::rollback();
                Log::info('No changes detected for user: ' . $user->id);
                return response()->json([
                    'success' => false,
                    'message' => 'Tidak ada perubahan yang terdeteksi pada profil.',
                ], 200);
            }
        } catch (\Exception $e) {
            DB::rollback();
            Log::error('Profile update failed: ' . $e->getMessage());
            return response()->json(['success' => false, 'errors' => ['general' => ['Terjadi kesalahan saat memperbarui profil: ' . $e->getMessage()]]], 500);
        }
    }
}
