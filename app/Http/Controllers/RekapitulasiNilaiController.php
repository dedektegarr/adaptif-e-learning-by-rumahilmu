<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class RekapitulasiNilaiController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();

        return view("admin.rekapitulasi.index", compact("kelas"));
    }
}
