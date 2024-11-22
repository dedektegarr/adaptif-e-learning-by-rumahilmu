<?php

namespace App\Http\Controllers;

use App\Models\BankSoalPembahasan;
use App\Models\Kelas;
use App\Models\KelasMahasiswa;
use App\Models\Uas;
use App\Models\UasPeserta;
use App\Models\UasSesi;
use App\Models\UasSoal;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UasController extends Controller
{
    public function index()
    {
        $final_exams = Uas::with('kelas')->get();
        return view('admin/uas.index', compact('final_exams'));
    }

    public function add()
    {
        $ditambahkan = Uas::select('kelas_id')->pluck('kelas_id');
        $my_courses = Kelas::select('id', 'nama_kelas')
            ->whereNotIn('id', $ditambahkan)
            ->get();

        return view('admin/uas.add', compact('my_courses'));
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

        Uas::create([
            'kelas_id'  =>  $request->courseId,
            'tanggal_dilaksanakan'  =>  $request->startDate,
            'waktu_mulai'  =>  $request->timeBegin,
            'waktu_selesai'  =>  $request->timeEnd,
        ]);

        $notification = array(
            'message' => 'Berhasil, data ujian akhir semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas')->with($notification);
    }

    public function edit($id)
    {
        $final_exam = Uas::find($id);
        $idKelasEdit = $final_exam->kelas_id;

        $ditambahkan = Uas::select('kelas_id')->where('id', '!=', $id)->pluck('kelas_id');
        $my_courses = Kelas::select('id', 'nama_kelas')
            ->whereNotIn('id', $ditambahkan)
            ->orWhere('id', $idKelasEdit)
            ->get();

        return view('admin/uas.edit', compact('final_exam', 'my_courses'));
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

        Uas::find($id)->update([
            'kelas_id' => $request->courseId,
            'tanggal_dilaksanakan'  =>  $request->startDate,
            'waktu_mulai'  =>  $request->timeBegin,
            'waktu_selesai'  =>  $request->timeEnd,
        ]);

        $notification = array(
            'message' => 'Berhasil, data ujian akhir semester berhasil diubah',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas')->with($notification);
    }

    public function delete($id)
    {
        Uas::find($id)->delete();
        $notification = array(
            'message' => 'Berhasil, data ujian akhir semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas')->with($notification);
    }

    public function soalIndex($id)
    {
        $final_exam_questions = UasSoal::where('uas_id', $id)->get();
        $jenis = BankSoalPembahasan::select('level_berfikir')
            ->groupBy('level_berfikir')
            ->get();
        $my_course = Uas::with('kelas')->where('id', $id)->first();

        $courseId = $my_course->kelas_id;
        $final_examId = $id;

        return view('admin/uas/soal.index', compact('jenis', 'courseId', 'final_examId', 'final_exam_questions'));
    }

    public function soalPost(Request $request, $final_examId)
    {
        $message = [
            'questionSetId' => 'Pertanyaan tidak boleh kosong',
        ];

        $request->validate([
            'questionSetId' => 'required'
        ], $message);

        UasSoal::create([
            'uas_id'     =>  $final_examId,
            'bank_soal_pembahasan_id' =>  $request->questionSetId,
        ]);

        $notification = array(
            'message' => 'Berhasil, soal ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas.soal', [$final_examId])->with($notification);
    }

    public function soalDelete($final_examId, $soalId)
    {
        UasSoal::where('id', $soalId)->delete();
        $notification = array(
            'message' => 'Berhasil, soal ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas.soal', [$final_examId])->with($notification);
    }

    public function sesiIndex($id)
    {
        $sesis = UasSesi::where('uas_id', $id)->get();
        $sesis = $sesis->map(function ($sesi) {
            $sesi->jumlahPeserta = $sesi->mahasiswas->count();
            $sesi->tanggal_dilaksanakan = Carbon::parse($sesi->tanggal_dilaksanakan)->isoFormat("D MMM Y");
            return $sesi;
        });

        $final_examId = $id;

        return view('admin/uas/sesi.index', compact('sesis', 'final_examId'));
    }

    public function sesiPost(Request $request, $final_examId)
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

        UasSesi::create([
            'uas_id'     =>  $final_examId,
            'nama_sesi' =>  $request->sessionName,
            'tanggal_dilaksanakan' =>  $request->startDate,
            'waktu_mulai' =>  $request->timeBegin,
            'waktu_selesai' =>  $request->timeEnd,
        ]);

        $notification = array(
            'message' => 'Berhasil, sesi ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas.sesi', [$final_examId])->with($notification);
    }

    public function sesiDelete($final_examId, $sesiId)
    {
        UasSesi::find($sesiId)->delete();
        $notification = array(
            'message' => 'Berhasil, sesi ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas.sesi', [$final_examId])->with($notification);
    }

    public function pesertaIndex($final_examId, $sesiId)
    {
        $sesi = UasSesi::find($sesiId);
        $kelasId = $sesi->uas->kelas_id;

        $daftar_peserta = KelasMahasiswa::where('kelas_id', $kelasId)->groupBy('mahasiswa_id')->get();
        $pesertas = $sesi->mahasiswas;

        return view('admin/uas/sesi/peserta.index', compact('pesertas', 'sesi', 'final_examId', 'sesiId', 'daftar_peserta'));
    }

    public function pesertaPost(Request $request, $final_examId, $sesiId)
    {
        $message = [
            'studentId'   =>  'Nama peserta tidak boleh kosong',
        ];

        $request->validate([
            'studentId' => 'required'
        ], $message);

        UasPeserta::create([
            'uas_sesi_id' =>  $sesiId,
            'mahasiswa_id' =>  $request->studentId,
        ]);


        $notification = array(
            'message' => 'Berhasil, peserta ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas.sesi.peserta', [$final_examId, $sesiId])->with($notification);
    }

    public function pesertaDelete($final_examId, $sesiId, $pesertaId)
    {
        $peserta = UasPeserta::where('mahasiswa_id', $pesertaId)->where('uas_sesi_id', $sesiId)->first();

        $peserta->delete();

        $notification = array(
            'message' => 'Berhasil, peserta ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.uas.sesi.peserta', [$final_examId, $sesiId])->with($notification);
    }
}
