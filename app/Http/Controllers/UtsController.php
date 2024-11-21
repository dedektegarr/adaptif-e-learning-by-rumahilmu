<?php

namespace App\Http\Controllers;

use App\Models\BankSoalPembahasan;
use App\Models\Uts;
use App\Models\Kelas;
use App\Models\UtsPeserta;
use App\Models\UtsSesi;
use App\Models\UtsSoal;
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
            'questionSetId' => 'Pertanyaan',
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
        $sesis = UtsSesi::join('mid_exams', 'mid_exams.id', 'mid_exam_sessions.UtsId')
            ->select('mid_exam_sessions.id as id', 'sessionName', 'mid_exam_sessions.startDate', 'mid_exam_sessions.timeBegin', 'mid_exam_sessions.timeEnd')
            ->where('UtsId', $id)
            ->get();
        $midId = $id;
        return view('teacher/uts/sesi.index', compact('sesis', 'midId'));
    }

    public function sesiPost(Request $request, $midId)
    {
        $attributes = [
            'sessionName'   =>  'Sesi Ujian',
            'startDate'   =>  'Tanggal Ujian',
            'timeBegin'   =>  'Jam Mulai',
            'timeEnd'   =>  'Jam Selesai',
        ];
        $this->validate($request, [
            'sessionName'    =>  'required',
            'startDate'    =>  'required',
            'timeBegin'    =>  'required',
            'timeEnd'    =>  'required',
        ], $attributes);

        UtsSesi::create([
            'UtsId'     =>  $midId,
            'sessionName' =>  $request->sessionName,
            'startDate' =>  $request->startDate,
            'timeBegin' =>  $request->timeBegin,
            'timeEnd' =>  $request->timeEnd,
        ]);

        $notification = array(
            'message' => 'Berhasil, sesi ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('teacher.uts.sesi', [$midId])->with($notification);
    }

    public function sesiDelete($midId, $sesiId)
    {
        UtsSesi::where('id', $sesiId)->delete();
        $notification = array(
            'message' => 'Berhasil, sesi ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('teacher.uts.sesi', [$midId])->with($notification);
    }

    public function pesertaIndex($midId, $sesiId)
    {
        $pesertas = UtsPeserta::join('users', 'users.id', 'mid_exam_participants.studentId')
            // ->join('mid_exams_sessions', 'mid_exams_sessions.id','mid_exam_participants.sessionId')
            ->select('mid_exam_participants.id as id', 'firstName', 'lastName')
            ->where('sessionId', $sesiId)
            ->get();
        $sesi = UtsSesi::select('sessionName')->where('id', $sesiId)->first();
        $daftar_peserta = Uts::join('courses', 'courses.id', 'mid_exams.courseId')
            ->join('course_enrolls', 'course_enrolls.courseId', 'courses.id')
            ->join('users', 'users.id', 'course_enrolls.userid')
            ->select('users.id as userId', 'firstName', 'lastName')
            ->where('mid_exams.id', $midId)
            ->get();
        return view('teacher/uts/sesi/peserta.index', compact('pesertas', 'sesi', 'midId', 'sesiId', 'daftar_peserta'));
    }

    public function pesertaPost(Request $request, $midId, $sesiId)
    {
        $attributes = [
            'studentId'   =>  'Nama Peserta',
        ];
        $this->validate($request, [
            'studentId'    =>  'required',
        ], $attributes);

        UtsPeserta::create([
            'sessionId'     =>  $sesiId,
            'studentId'     =>  $request->studentId,
        ]);

        $notification = array(
            'message' => 'Berhasil, peserta ujian tengah semester berhasil ditambahkan',
            'alert-type' => 'success'
        );
        return redirect()->route('teacher.uts.sesi.peserta', [$midId, $sesiId])->with($notification);
    }

    public function pesertaDelete($midId, $sesiId, $pesertaId)
    {
        UtsPeserta::where('id', $pesertaId)->delete();
        $notification = array(
            'message' => 'Berhasil, peserta ujian tengah semester berhasil dihapus',
            'alert-type' => 'success'
        );
        return redirect()->route('teacher.uts.sesi.peserta', [$midId, $sesiId])->with($notification);
    }
}
