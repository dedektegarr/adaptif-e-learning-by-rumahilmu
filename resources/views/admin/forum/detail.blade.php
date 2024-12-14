@extends('layouts.admin')
@section('subTitle', 'Detail Diskusi')
@section('page', 'Detail Diskusi')
@section('login_as')
    Selamat Datang,
@endsection
@section('user-login2')
    {{ Auth::user()->nama_lengkap }}
@endsection
@section('sidebar')
    @include('layouts.partials.sidebar')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12" style="margin-bottom:10px !important">
            <a href="{{ route('dosen.forum') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;
                Kembali</a>
        </div>
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Judul dan Permasalahan Diskusi Siswa</h3>
                </div>
                <div class="box-body chat">
                    <div class="nav-tabs-custom">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <div class="post" style="margin-bottom:10px !important;">
                                    <div class="user-block">
                                        @if ($forum->mahasiswa->foto == null || $forum->mahasiswa->foto == '')
                                            <img class="img-circle img-bordered-sm"
                                                src="https://cdn-icons-png.flaticon.com/128/1177/1177568.png"
                                                alt="user image">
                                        @else
                                            <img class="img-circle img-bordered-sm"
                                                src="{{ asset(checkStoragePath($forum->mahasiswa->foto)) }}"
                                                alt="user image">
                                        @endif
                                        <span class="username">
                                            <a href="#">{{ $forum->mahasiswa->nama_lengkap }}</a>
                                        </span>
                                        <span class="description">Waktu Publish -
                                            {{ $forum->created_at->diffForHumans() }}
                                            ({{ $forum->created_at->isoFormat('dddd, D MMMM Y') }})
                                        </span>
                                    </div>
                                    <h5><strong>{{ $forum->materi->nama_materi }}</strong></h5>
                                    <p>

                                        {!! $forum->diskusi !!}
                                    </p>
                                    <ul class="list-inline">
                                        <li><a class="link-black text-sm"><i class="fa fa-book margin-r-5"></i>Materi :
                                                {{ $forum->materi->nama_materi }} (
                                                @if ($forum->critical_status == 0)
                                                    Dasar
                                                @elseif ($forum->critical_status == 1)
                                                    Sedang
                                                @else
                                                    Tinggi
                                                @endif
                                                )
                                            </a></li>
                                        <br>
                                        <li><a class="link-black text-sm"><i class="fa fa-check margin-r-5"></i>Topik :
                                                {{ $forum->materi->topikPembahasanKelas->nama_topik }} </a>
                                        </li>
                                        <br>
                                        <li><a class="link-black text-sm"><i class="fa fa-briefcase margin-r-5"></i>Kelas :
                                                {{ $forum->materi->topikPembahasanKelas->kelas->nama_kelas }}</a>
                                        </li></a></li>
                                        <br>
                                        <li class=""><a class="link-black text-sm"><i
                                                    class="fa fa-user margin-r-5"></i>
                                                Dosen Pengampu :
                                                {{ $forum->materi->topikPembahasanKelas->kelas->pengampu->nama_lengkap }}</a>
                                        </li>
                                        </a></li>
                                        <br>

                                        <li class="">
                                            <a class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Jumlah
                                                Komentar
                                                : {{ $forum->diskusiRespons->count() }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-comments-o"></i>&nbsp;Komentar</h3>
                </div>
                <div class="box-body chat" id="chat-box">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Berhasil :</strong>{{ $message }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <form action="{{ route('dosen.forum.detail.post', [$forum->id]) }}" method="post">
                        {{ csrf_field() }} {{ method_field('POST') }}
                        <div class="row" style="margin-bottom: 10px !important;">
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control"
                                    placeholder="masukan subjek (jika ada)">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="pesan" class="form-control" id="pesan_create" cols="30" rows="10"></textarea>
                                <div>
                                    @if ($errors->has('pesan'))
                                        <small class="form-text text-danger">{{ $errors->first('pesan') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="reset" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i>&nbsp; Ulangi</button>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-check-circle"></i>&nbsp; Publish Komentar</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    @foreach ($forum->diskusiRespons as $komentar)
                        <div class="box-footer box-comments">
                            <div class="box-comment">
                                @if ($komentar->responden->foto == null || $komentar->responden->foto == '')
                                    <img class="img-circle img-sm"
                                        src="https://cdn-icons-png.flaticon.com/128/1177/1177568.png" alt="foto siswa">
                                @else
                                    <img class="img-circle img-sm"
                                        src="{{ asset(checkStoragePath($komentar->responden->foto)) }}" alt="foto siswa">
                                @endif
                                <div class="comment-text">
                                    <span class="username">
                                        <a style="text-transform:uppercase;">{{ $komentar->responden->nama_lengkap }}</a>
                                        <span
                                            class="text-muted pull-right">{{ $komentar->created_at->isoFormat('D MMMM Y') }},
                                            {{ $komentar->created_at->format('H:i') }}</span>
                                    </span>
                                    @if ($komentar->subjek != null)
                                        <strong>{{ $komentar->subjek }}</strong>
                                        <br>
                                    @else
                                    @endif
                                    <p style="text-align: justify; color:#333" style="margin-bottom:0px !important">
                                        {!! $komentar->pesan !!}</p>
                                    @if ($komentar->mahasiswa_id == Auth::user()->id)
                                        <a onclick="editKomentar({{ $komentar->id }})" style="cursor: pointer"><i
                                                class="fa fa-edit"></i>&nbsp; Edit</a>
                                    @endif
                                    @if ($komentar->mahasiswa_id != Auth::user()->id)
                                        @if (empty($komentar->nilai) || $komentar->nilai == null)
                                            <a onclick="penilaian({{ $komentar->id }})" id="apenilaian{{ $komentar->id }}"
                                                style="cursor:pointer;"></i><i class="fa fa-clock-o"></i>&nbsp;Klik Untuk
                                                Menilai</a>
                                            <a onclick="hidepenilaian({{ $komentar->id }})"
                                                id="abatalkanpenilaian{{ $komentar->id }}"
                                                style="display:none; color:red; cursor:pointer"></i>&nbsp;Batalkan
                                                Menilai</a>
                                        @else
                                            <a onclick="ubahpenilaian({{ $komentar->id }})" class="text-green"
                                                id="apenilaianubah{{ $komentar->id }}" style="cursor:pointer;"></i><i
                                                    class="fa fa-check-circle"></i>&nbsp;Ubah Nilai</a>
                                            <a onclick="ubahhidepenilaian({{ $komentar->id }})"
                                                id="abatalkanpenilaianubah{{ $komentar->id }}"
                                                style="display:none; color:red; cursor:pointer"></i>&nbsp;Batalkan Ubah
                                                Nilai</a>
                                        @endif

                                        <br>
                                        <hr style="margin:5px 0px">
                                        <form action="{{ route('dosen.forum.nilai_post', [$komentar->id]) }}"
                                            method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }} {{ method_field('POST') }}
                                            <div class="row" id="penilaian{{ $komentar->id }}" style="display: none">
                                                <div class="form-group col-md-12">
                                                    <label>Pilih Kriteria Penilaian</label>
                                                    <select name="kriteria" class="form-control" id="" required>
                                                        <option disabled selected>-- pilih kriteria penilaian --</option>
                                                        <option value="pemicu">Pemicu</option>
                                                        <option value="eksplorasi">Eksplorasi</option>
                                                        <option value="integrasi">Integrasi</option>
                                                        <option value="resolusi">Resolusi</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                                            class="fa fa-check-circle"></i>&nbsp; Simpan Nilai</button>
                                                </div>
                                            </div>
                                        </form>


                                        <form action="{{ route('dosen.forum.nilai_update', [$komentar->id]) }}"
                                            method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }} {{ method_field('PATCH') }}
                                            <div class="row" id="ubahpenilaian{{ $komentar->id }}"
                                                style="display: none">
                                                <div class="form-group col-md-6">
                                                    @if (!empty($komentar->nilai) || $komentar->nilai != null || $komentar->nilai != '')
                                                        {{-- <input type="hidden" name="id"
                                                            value="{{ $nilai->id }}"> --}}
                                                    @endif

                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Pilih Kriteria Penilaian</label>
                                                    @if (!empty($komentar->nilai))
                                                        <select name="kriteria" class="form-control" id=""
                                                            required>
                                                            <option disabled selected>-- pilih kriteria penilaian --
                                                            </option>
                                                            <option @if ($komentar->jenis_penilaian == 'pemicu') selected @endif
                                                                value="pemicu">Pemicu</option>
                                                            <option @if ($komentar->jenis_penilaian == 'eksplorasi') selected @endif
                                                                value="eksplorasi">Eksplorasi</option>
                                                            <option @if ($komentar->jenis_penilaian == 'integrasi') selected @endif
                                                                value="integrasi">Integrasi</option>
                                                            <option @if ($komentar->jenis_penilaian == 'resolusi') selected @endif
                                                                value="resolusi">Resolusi</option>
                                                        </select>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                                            class="fa fa-check-circle"></i>&nbsp; Simpan Perubahan
                                                        Nilai</button>
                                                </div>
                                            </div>
                                        </form>
                                    @else
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="box-footer">

                </div>
                <div class="modal fade" id="modaledit" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="{{ route('dosen.forum.detail.update') }}" method="post">
                            {{ csrf_field() }} {{ method_field('PATCH') }}
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Edit Komentar
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <input type="hidden" name="id" id="id_edit">
                                        <input type="hidden" name="forumId" id="forum_id">

                                        <div class="form-group col-md-12">
                                            <label>Masukan Subjek (jika ada)</label>
                                            <input type="text" id="subjectedit" name="subject" class="form-control">
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label>Masukan Komentar</label>
                                            <textarea name="message" class="form-control" id="messageedit" cols="30" rows="5"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger btn-sm"
                                        data-dismiss="modal">Batalkan</button>
                                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                            class="fa fa-check-circle"></i>&nbsp;Simpan Perubahan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        function penilaian(id) {
            $('#penilaian' + id).show();
            $('#apenilaian' + id).hide();
            $('#abatalkanpenilaian' + id).show();
        }

        function hidepenilaian(id) {
            $('#penilaian' + id).hide();
            $('#apenilaian' + id).show();
            $('#abatalkanpenilaian' + id).hide();
        }

        function ubahpenilaian(id) {
            $('#ubahpenilaian' + id).show();
            $('#apenilaianubah' + id).hide();
            $('#abatalkanpenilaianubah' + id).show();
        }

        function ubahhidepenilaian(id) {
            $('#ubahpenilaian' + id).hide();
            $('#apenilaianubah' + id).show();
            $('#abatalkanpenilaianubah' + id).hide();
        }

        $(document).ready(function() {
            $("#message").emojioneArea({
                pickerPosition: "bottom",
                tonesStyle: "bullet"
            });
        });
    </script>
@endpush
@push('scripts')
    <script>
        if (typeof ClassicEditor !== 'undefined') {
            document.querySelectorAll('#pesan_create').forEach((element) => {
                ClassicEditor
                    .create(element)
                    .catch(error => {
                        console.error(error);
                    });
            });

            var cpmkEditEditor;
        }
    </script>
@endpush
