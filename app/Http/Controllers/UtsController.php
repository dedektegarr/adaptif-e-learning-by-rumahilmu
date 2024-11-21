<?php

namespace App\Http\Controllers;

use App\Models\BankSoalPembahasan;
use App\Models\Uts;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\UtsPeserta;
use App\Models\UtsSesi;
use App\Models\UtsSoal;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UtsController extends Controller
{
    public function index()
    {
        $mid_exams = Uts::with('kelas')->get();
        return view('admin/uts.index', compact('mid_exams'));
    }

    public function add()
    {
        $ditambahkan = Uts::select('kelas_id')->pluck('kelas_id');
        $my_courses = Kelas::select('id', 'nama_kelas')
            ->whereNotIn('id', $ditambahkan)
            ->get();

        return view('admin/uts.add', compact('my_courses'));
    }

    public function post(Request $request)
    {
        $rules = [
            'courseId'    =>  'required',
            'startDate'    =>  'required',
            'timeBegin'    =>  'required',
            'timeEnd'    =>  'required',
        ];
        $message = [
            'courseId'   =>  'Kelas tidak boleh kosong',
            'startDate'   =>  'Tanggal pengerjakan tidak boleh kosong',
            'timeBegin'  =>  'Waktu mulai tidak boleh kosong',
            'timeEnd'  =>  'Waktu selesai tidak boleh kosong',
        ];
        $request->validate($rules, $message);

        Uts::create([
            'kelas_id'  =>  $request->courseId,
            'tanggal_dilaksanakan'  =>  $request->startDate,
            'waktu_mulai'  =>  $request->timeBegin,
            'waktu_selesai'  =>  $request->timeEnd,
        ]);

        $notification = array(
            'message' => 'Berhasil, data ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts')->with($notification);
    }

    public function edit($id)
    {
        $mid = Uts::find($id);
        $idKelasEdit = $mid->kelas_id;

        $ditambahkan = Uts::select('kelas_id')->where('id', '!=', $id)->pluck('kelas_id');
        $my_courses = Kelas::select('id', 'nama_kelas')
            ->whereNotIn('id', $ditambahkan)
            ->orWhere('id', $idKelasEdit)
            ->get();

        return view('admin/uts.edit', compact('mid', 'my_courses'));
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'courseId'    =>  'required',
            'startDate'    =>  'required',
            'timeBegin'    =>  'required',
            'timeEnd'    =>  'required',
        ];
        $message = [
            'courseId'   =>  'Kelas tidak boleh kosong',
            'startDate'   =>  'Tanggal pengerjakan tidak boleh kosong',
            'timeBegin'  =>  'Waktu mulai tidak boleh kosong',
            'timeEnd'  =>  'Waktu selesai tidak boleh kosong',
        ];
        $request->validate($rules, $message);

        Uts::find($id)->update([
            'kelas_id' => $request->courseId,
            'tanggal_dilaksanakan'  =>  $request->startDate,
            'waktu_mulai'  =>  $request->timeBegin,
            'waktu_selesai'  =>  $request->timeEnd,
        ]);

        $notification = array(
            'message' => 'Berhasil, data ujian tengah semester berhasil diubah',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts')->with($notification);
    }

    public function delete($id)
    {
        Uts::find($id)->delete();
        $notification = array(
            'message' => 'Berhasil, data ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts')->with($notification);
    }

    public function soalIndex($id)
    {
        $mid_questions = UtsSoal::where('uts_id', $id)->get();
        $jenis = BankSoalPembahasan::select('level_berfikir')
            ->groupBy('level_berfikir')
            ->get();
        $my_course = Uts::with('kelas')->where('id', $id)->first();

        $courseId = $my_course->kelas_id;
        $midId = $id;

        return view('admin/uts/soal.index', compact('jenis', 'courseId', 'midId', 'mid_questions'));
    }

    public function soalPost(Request $request, $midId)
    {
        $message = [
            'questionSetId' => 'Pertanyaan tidak boleh kosong',
        ];

        $request->validate([
            'questionSetId' => 'required'
        ], $message);

        UtsSoal::create([
            'uts_id'     =>  $midId,
            'bank_soal_pembahasan_id' =>  $request->questionSetId,
        ]);

        $notification = array(
            'message' => 'Berhasil, soal ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts.soal', [$midId])->with($notification);
    }

    public function soalDelete($midId, $soalId)
    {
        UtsSoal::where('id', $soalId)->delete();
        $notification = array(
            'message' => 'Berhasil, soal ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts.soal', [$midId])->with($notification);
    }

    public function sesiIndex($id)
    {
        $sesis = UtsSesi::where('uts_id', $id)->get();
        $sesis = $sesis->map(function ($sesi) {
            $sesi->jumlahPeserta = $sesi->mahasiswas->count();
            $sesi->tanggal_dilaksanakan = Carbon::parse($sesi->tanggal_dilaksanakan)->isoFormat("D MMM Y");
            return $sesi;
        });

        $midId = $id;

        return view('admin/uts/sesi.index', compact('sesis', 'midId'));
    }

    public function sesiPost(Request $request, $midId)
    {
        $rules = [
            'sessionName'   =>  'required',
            'startDate'   =>  'required',
            'timeBegin'   =>  'required',
            'timeEnd'   =>  'required',
        ];

        $message = [
            'sessionName'   =>  'Sesi Ujian',
            'startDate'   =>  'Tanggal Ujian',
            'timeBegin'   =>  'Jam Mulai',
            'timeEnd'   =>  'Jam Selesai',
        ];

        $request->validate($rules, $message);

        UtsSesi::create([
            'uts_id'     =>  $midId,
            'nama_sesi' =>  $request->sessionName,
            'tanggal_dilaksanakan' =>  $request->startDate,
            'waktu_mulai' =>  $request->timeBegin,
            'waktu_selesai' =>  $request->timeEnd,
        ]);

        $notification = array(
            'message' => 'Berhasil, sesi ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts.sesi', [$midId])->with($notification);
    }

    public function sesiDelete($midId, $sesiId)
    {
        UtsSesi::find($sesiId)->delete();
        $notification = array(
            'message' => 'Berhasil, sesi ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts.sesi', [$midId])->with($notification);
    }

    public function pesertaIndex($midId, $sesiId)
    {
        $sesi = UtsSesi::find($sesiId);
        $kelasId = $sesi->uts->kelas_id;

        $daftar_peserta = KelasMahasiswa::where('kelas_id', $kelasId)->groupBy('mahasiswa_id')->get();
        $pesertas = $sesi->mahasiswas;

        return view('admin/uts/sesi/peserta.index', compact('pesertas', 'sesi', 'midId', 'sesiId', 'daftar_peserta'));
    }

    public function pesertaPost(Request $request, $midId, $sesiId)
    {
        $message = [
            'studentId'   =>  'Nama peserta tidak boleh kosong',
        ];

        $request->validate([
            'studentId' => 'required'
        ], $message);

        UtsPeserta::create([
            'uts_sesi_id' =>  $sesiId,
            'mahasiswa_id' =>  $request->studentId,
        ]);


        $notification = array(
            'message' => 'Berhasil, peserta ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts.sesi.peserta', [$midId, $sesiId])->with($notification);
    }

    public function pesertaDelete($midId, $sesiId, $pesertaId)
    {
        $peserta = UtsPeserta::where('mahasiswa_id', $pesertaId)->where('uts_sesi_id', $sesiId)->first();

        $peserta->delete();

        $notification = array(
            'message' => 'Berhasil, peserta ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uts.sesi.peserta', [$midId, $sesiId])->with($notification);
    }
}
