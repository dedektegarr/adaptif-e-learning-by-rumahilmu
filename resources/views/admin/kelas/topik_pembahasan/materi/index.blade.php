@extends('layouts.admin')
@section('subTitle', 'Detail Materi')
@section('materi', 'Detail Materi')
@section('login_as')
    Selamat Datang,
@endsection
@section('user-login2')
    {{ Auth::user()->nama_lengkap }}
@endsection
@section('sidebar')
    @include('layouts.partials.sidebar')
@endsection

@push('styles')
    <style>

    </style>
@endpush
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Detail Materi ({{ $data->kelas->nama_kelas }}), Topik ({{ $data->nama_topik }})
                    </h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        @if ($allLevelsAdded)
                            <div class="col-md-12">
                                <div class="alert alert-danger" style="margin-bottom: 5px !important;">
                                    Perhatian: semua tingkat sudah ditambahkan
                                </div>
                                <div class="" style="margin-bottom: 10px">
                                    <a href="{{ route('kelas.topikPembahasan', [$data->kelas->id]) }}"
                                        class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;
                                        Kembali</a>
                                </div>
                            </div>
                        @else
                            <div class="col-md-12" style="margin-bottom: 10px;">
                                <form
                                    action="{{ route('kelas.topikPembahasan.materi.post', [$data->kelas->id, $data->id]) }}"
                                    method="POST" class="form" enctype="multipart/form-data">
                                    @csrf @method('POST')
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="">Materi Pembelajaran (Text)</label>
                                            <textarea name="isi_materi" class="form-control" id="isi_materi_create" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Nama Materi</label>
                                            <input type="text" name="nama_materi" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">File Materi</label>
                                            <input type="file" name="file_materi" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">URL Materi Youtube <small style="color: red">(Masukan
                                                    hanya ID youtubenya saja)</small></label>
                                            <input type="text" name="url_materi" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">URL Materi Youtube Kedua <small
                                                    style="color: red">(Masukan hanya ID youtubenya saja)</small></label>
                                            <input type="text" name="url_kedua_materi" class="form-control">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Tingkat</label>
                                            <select name="critical_status" class="form-control" id="">
                                                @foreach ($options as $option)
                                                    <option value="{{ $option }}">{{ $labels[$option] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <a href="{{ route('kelas.topikPembahasan', [$data->kelas->id]) }}"
                                                class="btn btn-warning btn-sm btn-flat"><i
                                                    class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                                            <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                                    class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i
                                                    class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                                            <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endif
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="table"
                                style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Materi</th>
                                        <th>File Materi <small style="color: red">PDF</small></th>
                                        <th>Url <small style="color: red">Video Youtube</small></th>
                                        <th>Url <small style="color: red">Video Youtube Kedua</small></th>
                                        <th>Tingkatan</th>
                                        <th style="width: 8% !important;">Fitur Detail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->materis as $index => $materi)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{!! $materi->nama_materi !!}</td>
                                            <td>
                                                @if ($materi->file_materi != null)
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ asset('storage/' . $materi->file_materi) }}"
                                                        target="_blank">
                                                        <i style="margin-right: 3px" class="fa fa-file"></i>
                                                        Lihat Materi
                                                    </a>
                                                @else
                                                    <a style="color:red;"><i>-</i></a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($materi->url_materi == null || $materi->url_materi == '')
                                                    <a style="color: red;">url tidak tersedia</a>
                                                @else
                                                    <a class="btn btn-primary btn-sm" href="{{ $materi->contentUrl }}"
                                                        target="_blank">
                                                        <i style="margin-right: 3px" class="fa fa-video"></i>
                                                        Youtube 1</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($materi->url_kedua_materi == null || $materi->url_kedua_materi == '')
                                                    <a style="color: red;">url tidak tersedia</a>
                                                @else
                                                    <a class="btn btn-primary btn-sm"
                                                        href="{{ $materi->url_kedua_materi }}" target="_blank">
                                                        <i style="margin-right: 3px" class="fa fa-video"></i>
                                                        Youtube 2</a>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($materi->critical_status == '0')
                                                    <small class="label label-success">Dasar</small>
                                                @elseif ($materi->critical_status == '1')
                                                    <small class="label label-warning">Sedang</small>
                                                @elseif ($materi->critical_status == '2')
                                                    <small class="label label-danger">Tinggi</small>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="button-container2">
                                                    <a href="{{ route('kelas.topikPembahasan.materi.tugasIndividu', [$data->kelas->id, $data->id, $materi->id]) }}"
                                                        class="btn btn-default btn-sm btn-flat"><i
                                                            class="fa fa-user"></i>&nbsp;Tugas Individu</a>
                                                    <a href="{{ route('kelas.topikPembahasan.materi.tugasKelompok', [$data->kelas->id, $data->id, $materi->id]) }}"
                                                        class="btn btn-default btn-sm btn-flat"><i
                                                            class="fa fa-users"></i>&nbsp;Tugas Kelompok</a>
                                                    <a href="{{ route('kelas.topikPembahasan.materi.kuis', [$data->kelas->id, $data->id, $materi->id]) }}"
                                                        class="btn btn-default btn-sm btn-flat"><i
                                                            class="fa fa-question"></i>&nbsp;Kuis</a>
                                                </div>
                                            </td>

                                            <td class="button-container">
                                                <a href="{{ route('kelas.topikPembahasan.materi.detail', [$data->kelas->id, $data->id, $materi->id]) }}"
                                                    class="btn btn-warning btn-sm btn-flat"><i
                                                        class="fa fa-info-circle"></i>&nbsp; Detail</a>
                                                <a onclick="editMateri({{ $data->kelas->id }}, {{ $data->id }}, {{ $materi->id }})"
                                                    class="btn btn-primary btn-sm btn-flat"><i
                                                        class="fa fa-edit"></i>&nbsp; Edit</a>
                                                <form
                                                    action="{{ route('kelas.topikPembahasan.materi.delete', [$data->kelas->id, $data->id, $materi->id]) }}"
                                                    method="POST" style="margin: 0;">
                                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm btn-flat show_confirm"><i
                                                            class="fa fa-trash"></i>&nbsp; Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@include('admin/validasi')
@include('admin/kelas/topik_pembahasan/materi.modal_edit')
@push('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'materi'
            if (typeof ClassicEditor !== 'undefined') {
                document.querySelectorAll('#isi_materi_create').forEach((element) => {
                    ClassicEditor
                        .create(element)
                        .catch(error => {
                            console.error(error);
                        });
                });

                var materiEditEditor;

                $('#modalEdit').on('shown.bs.modal', function() {
                    if (!materiEditEditor) {
                        ClassicEditor
                            .create(document.querySelector('#isi_materi_edit'))
                            .then(editor => {
                                materiEditEditor = editor;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });

                $('#modalEdit').on('hidden.bs.modal', function() {
                    if (materiEditEditor) {
                        materiEditEditor.destroy()
                            .then(() => {
                                materiEditEditor = null;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });
            } else {
                console.error('ClassicEditor is not defined');
            }
        });

        function editMateri(kelas_id, topik_pembahasan_id, materi_id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('manajemen_kelas') }}/" + kelas_id + '/topik_pembahasan_kelas/' + topik_pembahasan_id +
                '/manajemen_materi/' + materi_id + '/edit';
            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $('#modalEdit').modal('show');
                    $('#materi_id_edit').val(data.id);
                    $('#isi_materi_edit').val(data.isi_materi);
                    $('#nama_materi_edit').val(data.nama_materi);
                    $('#fileLama').text(data.file_materi);
                    $('#url_materi_edit').val(data.url_materi);
                    $('#url_kedua_materi_edit').val(data.url_kedua_materi);

                },
                error: function() {
                    $('#gagal').show(100);
                }
            });
            return false;
        }

        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            swal({
                    title: `Apakah Anda Yakin?`,
                    text: "Harap untuk memeriksa kembali sebelum menghapus data.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
@endpush
