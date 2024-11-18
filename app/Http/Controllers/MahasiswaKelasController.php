<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\KelasMahasiswaDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;

class MahasiswaKelasController extends Controller
{
    public function index(Kelas $kelas){
        $data = Kelas::with(['mahasiswas' => function($query) {
                        $query->withCount(['activities', 'kelasMahasiswa as details_count' => function($query) {
                            $query->withCount('details'); // Menghitung details dari kelasMahasiswa
                        }]);
                    }])
                    ->whereHas('pengampu', function ($query) {
                        $query->where('pengampu_id', Auth::user()->id);
                    })
                    ->where('id', $kelas->id)
                    ->orderBy('kelas.created_at', 'desc')
                    ->first();
        return view('admin/kelas.mahasiswa.index',compact('data'));
    }

    public function aktivitas(Kelas $kelas, User $mahasiswa){
        $datas = Activity::where('causer_id', $mahasiswa->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Paginasi dengan 10 item per halaman
        return view('admin/kelas.mahasiswa.aktivitas',compact('datas','kelas','mahasiswa'));
    }

    public function riwayatBelajar(Kelas $kelas, User $mahasiswa){
        $datas = KelasMahasiswaDetail::with(['kelasMahasiswa'])
                ->whereHas('kelasMahasiswa', function($query) use ($mahasiswa, $kelas) {
                    $query->where('mahasiswa_id', $mahasiswa->id)
                        ->where('kelas_id', $kelas->id);
                })
                ->get();
        return $datas;
    }
}
