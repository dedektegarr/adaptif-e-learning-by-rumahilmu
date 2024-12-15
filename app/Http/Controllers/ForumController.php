<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\Kelas;
use App\Models\Materi;
use App\Models\TopikPembahasanKelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Diskusi::where("mahasiswa_id", Auth::user()->id)->latest()->get();
        $kelas = Kelas::all();

        return view('admin/forum.index', compact('forums', "kelas"));
    }

    public function detail(Diskusi $forum)
    {
        return view("admin.forum.detail", compact("forum"));
    }

    public function post(Request $request)
    {
        $validated = $request->validate([
            "kelas_id" => "required",
            "topik_id" => "required",
            "materi_id" => "required",
            "judul" => "required",
            "diskusi" => "required"
        ]);

        Diskusi::create([
            "materi_id" => $validated["materi_id"],
            "mahasiswa_id" => Auth::user()->id,
            "judul" => $validated["judul"],
            "diskusi" => $validated["diskusi"],
        ]);

        $notification = array(
            'message' => 'Berhasil, forum diskusi berhasil ditambahkan!',
            'alert-type' => 'success'
        );
        return redirect()->route('dosen.forum')->with($notification);
    }

    public function getTopics(Request $request)
    {
        $topics = TopikPembahasanKelas::where('kelas_id', $request->kelas_id)->get();
        return $topics;
    }

    public function getMateri(Request $request)
    {
        $topics = Materi::where('topik_pembahasan_id', $request->topik_id)->get();
        return $topics;
    }

    public function filter(Request $request)
    {
        $request->validate([
            "courseId2" => "required",
        ]);

        $kelas = Kelas::where('pengampu_id', Auth::user()->id)->get();
        $forums = Diskusi::when($request->pageId2, function ($query) use ($request) {
            return $query->where("materi_id", $request->pageId2);
        })->when($request->topicId2, function ($query) use ($request) {
            return $query->whereHas("materi", function ($q) use ($request) {
                $q->where("topik_pembahasan_id", $request->topicId2);
            });
        })->when($request->courseId2, function ($query) use ($request) {
            return $query->whereHas("materi", function ($q) use ($request) {
                return $q->whereHas("topikPembahasanKelas", function ($t) use ($request) {
                    $t->where("kelas_id", $request->courseId2);
                });
            });
        })->get();

        $forum = $forums[0];

        return view('admin/forum.index', compact('forums', "kelas", "forum"));
    }
}
