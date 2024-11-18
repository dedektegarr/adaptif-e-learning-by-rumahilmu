<?php

namespace App\Http\Controllers;

use App\Models\BankCapaianLulusan;
use App\Models\Materi;
use App\Models\TopikPembahasanKelas;
use Illuminate\Http\Request;

class PencarianController extends Controller
{
    public function cariCapaianLulusanId(Request $request){
        return BankCapaianLulusan::findOrFail($request->capaianLulusanId);
    }

    public function cariTopik(Request $request){
        $topiks = TopikPembahasanKelas::where('kelas_id',$request->kelas_id)->get();
        return $topiks;
    }

    public function cariMateri(Request $request){
        $materis = Materi::where('topik_pembahasan_id',$request->topik_pembahasan_id)->get();
        return $materis;
    }
}
