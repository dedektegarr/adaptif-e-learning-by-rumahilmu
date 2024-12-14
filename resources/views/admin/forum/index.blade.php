@extends('layouts.admin')
@section('subTitle', 'Forum Diskusi')
@section('page', 'Forum Diskusi')
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
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Filter Forum Diskusi</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('dosen.forum.filter') }}" method="post">
                            {{ csrf_field() }} {{ method_field('POST') }}
                            <div class="form-group col-md-4">
                                <label>Pilih Kelas </label>
                                <select name="courseId2" class="form-control" id="courseId2" required="required">
                                    <option disabled selected>-- pilih kelas --</option>
                                    @foreach ($kelas as $kls)
                                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Pilih Topik</label>
                                <select name="topicId2" id="topicId2" class="form-control">
                                    <option disabled selected>-- pilih topik --</option>
                                </select>
                                @if ($errors->has('topicId'))
                                    <small class="form-text text-danger">{{ $errors->first('topicId') }}</small>
                                @endif
                            </div>

                            <div class="form-group col-md-4">
                                <label for="exampleInputEmail1">Pilih Materi</label>
                                <select name="pageId2" id="pageId2" class="form-control">
                                    <option disabled selected>-- pilih materi --</option>
                                </select>
                                @if ($errors->has('pageId'))
                                    <small class="form-text text-danger">{{ $errors->first('pageId') }}</small>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <button type="reset" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i>&nbsp; Ulangi</button>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-search"></i>&nbsp; Cari Diskusi</button>
                            </div>
                        </form>
                    </div>
                    <div class="row" style="margin-top:20px !important;">
                        <div class="col-md-12">
                            @if (isset($_POST['courseId2']) && !isset($_POST['topicId2']) && !isset($_POST['pageId2']))
                                <div class="alert alert-success">
                                    Anda mencari kelas <b>{{ $forum->materi->topikPembahasanKelas->kelas->nama_kelas }}</b>
                                </div>
                            @elseif (isset($_POST['courseId2']) && isset($_POST['topicId2']) && !isset($_POST['pageId2']))
                                <div class="alert alert-success">
                                    Anda mencari kelas <b>{{ $forum->materi->topikPembahasanKelas->kelas->nama_kelas }}</b>,
                                    topik <b>{{ $forum->materi->topikPembahasanKelas->nama_topik }}</b>
                                </div>
                            @elseif (isset($_POST['courseId2']) && isset($_POST['topicId2']) && isset($_POST['pageId2']))
                                <div class="alert alert-success">
                                    Anda mencari kelas
                                    <b>{{ $forum->materi->topikPembahasanKelas->kelas->nama_kelas }}</b>,
                                    topik
                                    <b>{{ $forum->materi->topikPembahasanKelas->nama_topik }}</b>
                                    dan materi <b>{{ $forum->materi->nama_materi }}
                                        @if ($forum->materi->critical_status == 0)
                                            Tingkat Dasar
                                        @elseif ($forum->materi->critical_status == 1)
                                            Tingkat Sedang
                                        @else
                                            Tingkat Tinggi
                                        @endif
                                    </b>
                                </div>
                            @else
                                <div class="alert alert-warning">
                                    Silahkan pilih kelas terlebih dahulu
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Forum Diskusi Saya</h3>
                    <a onclick="tambahDiskusi()" class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i>&nbsp;
                        Buat Diskusi Baru</a>

                </div>
                <div class="box-body">
                    <div class="row">
                        @if (count($forums) > 0)
                            @foreach ($forums as $forum)
                                <div class="col-md-6">
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
                                                        <li><a class="link-black text-sm"><i
                                                                    class="fa fa-book margin-r-5"></i>Materi :
                                                                {{ $forum->materi->nama_materi }} (
                                                                @if ($forum->materi->critical_status == 0)
                                                                    Dasar
                                                                @elseif ($forum->materi->critical_status == 1)
                                                                    Sedang
                                                                @else
                                                                    Tinggi
                                                                @endif
                                                                )
                                                            </a></li>
                                                        <br>
                                                        <li><a class="link-black text-sm"><i
                                                                    class="fa fa-check margin-r-5"></i>Topik :
                                                                {{ $forum->materi->topikPembahasanKelas->nama_topik }} </a>
                                                        </li>
                                                        <br>
                                                        <li><a class="link-black text-sm"><i
                                                                    class="fa fa-briefcase margin-r-5"></i>Kelas :
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
                                                            <a class="link-black text-sm"><i
                                                                    class="fa fa-comments-o margin-r-5"></i> Jumlah Komentar
                                                                : {{ $forum->diskusiRespons->count() }}
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <a href="{{ route('dosen.forum.detail', [$forum->id]) }}"
                                                        class="btn btn-primary btn-sm btn-flat"><i
                                                            class="fa fa-comments"></i>&nbsp;
                                                        Lihat Selengkapnya</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="alert alert-danger">
                                <i class="fa fa-info-circle"></i>&nbsp;Informasi : {{ Auth::user()->firstName }}
                                {{ Auth::user()->lastName }} belum pernah menambahkan diskusi
                            </div>
                        @endif

                        <!-- Modal -->
                        <div class="modal fade" id="modalDiskusi" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{ route('dosen.forum.post') }}" method="POST">
                                    {{ csrf_field() }} {{ method_field('POST') }}
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p class="modal-title" id="exampleModalLabel">Form Tambah Diskusi
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </p>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label>Pilih Kelas Telebih Dahulu</label>
                                                    <select name="courseId" id="courseId" class="form-control" required>
                                                        <option disabled selected>-- pilih kelas --</option>
                                                        @foreach ($kelas as $kls)
                                                            <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail1">Pilih Topik</label>
                                                    <select name="topicId" id="topicId" class="form-control">
                                                        <option disabled selected>-- pilih topik --</option>
                                                    </select>
                                                    @if ($errors->has('topicId'))
                                                        <small
                                                            class="form-text text-danger">{{ $errors->first('topicId') }}</small>
                                                    @endif
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="exampleInputEmail1">Pilih Materi</label>
                                                    <select name="pageId" id="pageId" class="form-control">
                                                        <option disabled selected>-- pilih materi --</option>
                                                    </select>
                                                    @if ($errors->has('pageId'))
                                                        <small
                                                            class="form-text text-danger">{{ $errors->first('pageId') }}</small>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label>Topik Diskusi</label>
                                                    <input type="text" name="title" class="form-control" required>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label>Isi Forum Diskusi</label>
                                                    <textarea id="forum_create" name="intro" id="content" cols="30" rows="10" required></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger btn-sm"
                                                data-dismiss="modal">Batalkan</button>
                                            <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                                    class="fa fa-check-circle"></i>&nbsp;Simpan Forum</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        if (typeof ClassicEditor !== 'undefined') {
            document.querySelectorAll('#forum_create').forEach((element) => {
                ClassicEditor
                    .create(element)
                    .catch(error => {
                        console.error(error);
                    });
            });

            var cpmkEditEditor;
        }

        function tambahDiskusi() {
            $('#modalDiskusi').modal('show');
        }

        $(document).on('change', '#courseId', function() {
            var courseId = $(this).val();
            // alert(courseId);
            var div = $(this).parent().parent();

            var op = " ";
            $.ajax({
                type: 'get',
                url: "{{ url('get_topics/1') }}",
                data: {
                    'kelas_id': courseId
                },
                success: function(data) {
                    // alert(data[i].id);
                    // alert(data['prodi'][0]['dosen'][0]['pegawai'].pegIsAktif);
                    op += '<option value="0" selected disabled>-- pilih topik --</option>';
                    for (var i = 0; i < data.length; i++) {
                        var ke = 1 + i;
                        op += '<option value="' + data[i].id + '">' + data[i].fullName + '</option>';
                    }
                    div.find('#topicId').html(" ");
                    div.find('#topicId').append(op);
                },
                error: function() {}
            });
        });

        $(document).on('change', '#courseId2', function() {
            var courseId2 = $(this).val();
            // alert(courseId2);
            var div = $(this).parent().parent();

            var op = " ";
            $.ajax({
                type: 'get',
                url: "{{ url('dosen_forum/get_topics2') }}",
                data: {
                    'courseId2': courseId2
                },
                success: function(data) {
                    // alert(data[i].id);
                    // alert(data['prodi'][0]['dosen'][0]['pegawai'].pegIsAktif);
                    op += '<option value="0" selected disabled>-- pilih topik --</option>';
                    for (var i = 0; i < data.length; i++) {
                        var ke = 1 + i;
                        op += '<option value="' + data[i].id + '">' + data[i].nama_topik + '</option>';
                    }
                    div.find('#topicId2').html(" ");
                    div.find('#topicId2').append(op);
                },
                error: function() {}
            });
        });

        $(document).on('change', '#topicId2', function() {
            var topicId2 = $(this).val();
            // alert(topicId2);
            var div = $(this).parent().parent();

            var op = " ";
            $.ajax({
                type: 'get',
                url: "{{ url('dosen_forum/get_page2') }}",
                data: {
                    'topicId2': topicId2
                },
                success: function(data) {
                    var op = '<option value="0" selected disabled>-- pilih materi --</option>';
                    for (var i = 0; i < data.length; i++) {
                        var ke = 1 + i;

                        // Ubah angka critical_status menjadi label
                        var criticalLabel = '';
                        switch (data[i]['critical_status']) {
                            case '0':
                                criticalLabel = 'Dasar';
                                break;
                            case '1':
                                criticalLabel = 'Sedang';
                                break;
                            case '2':
                                criticalLabel = 'Tinggi';
                                break;
                            default:
                                criticalLabel = 'tidak diketahui';
                        }

                        op += '<option value="' + data[i].id + '">' + data[i].nama_materi + " (" +
                            criticalLabel + ")" + '</option>';
                    }
                    div.find('#pageId2').html(" ");
                    div.find('#pageId2').append(op);
                },
                error: function() {}
            });
        });
    </script>
@endpush
