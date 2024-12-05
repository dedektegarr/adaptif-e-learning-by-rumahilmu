@extends('layouts.admin')
@section('subTitle', 'Tugas Individu Materi')
@section('materi', 'Tugas Individu Materi')
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
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Tugas Individu Materi ({{ $data->topikPembahasanKelas->kelas->nama_kelas }}),
                        Topik ({{ $data->topikPembahasanKelas->nama_topik }}), Materi ({{ $data->nama_materi }})</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 10px;">
                            <form
                                action="{{ route('kelas.topikPembahasan.materi.tugasIndividu.post', [$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id, $data->id]) }}"
                                method="POST" class="form" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Tugas (Text)</label>
                                        <textarea name="tugas" class="form-control" id="tugas_create" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Jadwal:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" name="jadwal" class="form-control pull-right"
                                                id="jadwal">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">File Tugas</label>
                                        <input type="file" name="file_tugas" class="form-control">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="">Status Upload Tugas</label>
                                        <select name="status_upload" class="form-control" id="">
                                            <option>-- pilih status upload tugas --</option>
                                            <option value="0">Tidak Boleh Upload Lewat Waktu</option>
                                            <option value="1">Boleh Upload Lewat Waktu</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <a href="{{ route('kelas.topikPembahasan.materi', [$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id]) }}"
                                            class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;
                                            Kembali</a>
                                        <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                                class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                        <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i
                                                class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                                        <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"> Daftar Tugas Individu ({{ $data->topikPembahasanKelas->kelas->nama_kelas }}),
                        Topik ({{ $data->topikPembahasanKelas->nama_topik }}), Materi ({{ $data->nama_materi }})</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table"
                                    style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tugas</th>
                                            <th>File Tugas <small style="color: red">PDF</small></th>
                                            <th>Waktu Mulai</th>
                                            <th>Waktu Selesai</th>
                                            <th>Status Upload Tugas</th>
                                            <th>Rubrik Penilaian</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data->tugasIndividus as $index => $tugasIndividu)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{!! $tugasIndividu->tugas !!}</td>
                                                <td>
                                                    @if ($tugasIndividu->file_tugas != null)
                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ asset($tugasIndividu->file_tugas) }}" target="_blank">
                                                            <i style="margin-right: 3px" class="fa fa-file"></i>
                                                            Lihat File Tugas
                                                        </a>
                                                    @else
                                                        <a style="color:red;"><i>-</i></a>
                                                    @endif
                                                </td>
                                                <td>{{ $tugasIndividu->waktu_mulai }}</td>
                                                <td>{{ $tugasIndividu->waktu_selesai }}</td>
                                                <td>
                                                    @if ($tugasIndividu->status_upload == '0')
                                                        <label for="" class="label label-warning">tidak boleh upload
                                                            lewat waktu</label>
                                                    @else
                                                        <label for="" class="label label-warning">Boleh upload lewat
                                                            waktu</label>
                                                    @endif
                                                </td>
                                                <td>
                                                    <ul class="list-group">
                                                        @foreach ($tugasIndividu->rubrikPenilaians as $rubrikPenilaian)
                                                            <li
                                                                class="list-group-item d-flex justify-content-between align-items-center">
                                                                {{ $rubrikPenilaian->rubrik_penilaian }}
                                                                <i class="fa fa-check-circle text-success"></i>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                    <div class="text-center" style="margin-top: 10px;">
                                                        <a onclick="tambahRubrikPenilaian({{ $tugasIndividu->id }})"
                                                            class="btn btn-success btn-sm btn-flat btn-add">
                                                            <i class="fa fa-plus"></i>&nbsp; Tambah Rubrik Penilaian
                                                        </a>
                                                    </div>
                                                </td>
                                                <td class="action-buttons">
                                                    <a href="" class="btn btn-success btn btn-flat btn-sm"><i
                                                            class="fa fa-check-circle"></i>&nbsp; Penilaian</a>
                                                    <a onclick="editKelas({{ $data->topikPembahasanKelas->kelas->id }}, {{ $data->topikPembahasanKelas->id }}, {{ $data->id }}, {{ $tugasIndividu->id }})"
                                                        class="btn btn-primary btn-sm btn-flat"><i
                                                            class="fa fa-edit"></i>&nbsp;
                                                        Edit</a>
                                                    <form
                                                        action="{{ route('kelas.topikPembahasan.materi.tugasIndividu.delete', [$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id, $data->id, $tugasIndividu->id]) }}"
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
    </div>
@endsection
@include('admin/validasi')
@include('admin/kelas/topik_pembahasan/materi/tugas_individu.modal_edit')
@include('admin/kelas/topik_pembahasan/materi/tugas_individu.modal_tambah_rubrik_penilaian')
@push('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'materi'
            if (typeof ClassicEditor !== 'undefined') {
                document.querySelectorAll('#tugas_create').forEach((element) => {
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
                            .create(document.querySelector('#tugas_edit'))
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

        function editKelas(kelas_id, topik_pembahasan_id, materi_id, tugas_individu_id) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('manajemen_kelas') }}/" + kelas_id + '/topik_pembahasan_kelas/' + topik_pembahasan_id +
                '/manajemen_materi/' + materi_id + '/tugas_individu/' + tugas_individu_id + '/edit';

            $.ajax({
                url: url,
                type: 'GET',
                success: function(data) {
                    $('#modalEdit').modal('show');
                    $('#tugas_individu_id_edit').val(data.id);
                    $('#judul_tugas_edit').val(data.judul_tugas);
                    $('#tugas_edit').val(data.tugas);
                    $('#fileLama').text(data.file_tugas);

                    var waktuMulai = moment(data.waktu_mulai).format('MM/DD/YYYY hh:mm A');
                    var waktuSelesai = moment(data.waktu_selesai).format('MM/DD/YYYY hh:mm A');

                    var jadwal = `${waktuMulai} - ${waktuSelesai}`;

                    $('#jadwal_edit').val(jadwal);
                    $('#status_upload_edit').val(data.status_upload);

                },
                error: function() {
                    $('#gagal').show(100);
                }
            });
            return false;
        }

        function tambahRubrikPenilaian(id) {
            $('#modalTambahRubrikPenilaian').modal('show');
            $('#tugas_individu_id_tambah_rubrik').val(id);

            // Hapus checkbox yang ada di modal
            $('#rubrikPenilaianList').empty();

            $.ajax({
                url: "{{ route('kelas.topikPembahasan.materi.tugasIndividu.getRubrikPenilaian') }}",
                type: 'GET',
                data: {
                    tugas_individu_id: id
                },
                success: function(data) {
                    var existingRubrikIds = data.existingRubrikIds;

                    // Loop untuk menambahkan checkbox ke tabel
                    data.rubrikPenilaians.forEach(function(rubrikPenilaian, index) {
                        var isChecked = existingRubrikIds.includes(rubrikPenilaian.id);

                        $('#rubrikPenilaianList').append(`
                            <tr>
                                <td>
                                    <input type="checkbox"
                                        class="checkbox-item"
                                        name="rubrik_penilaians[]"
                                        value="${rubrikPenilaian.id}"
                                        ${isChecked ? 'checked' : ''} />
                                </td>
                                <td>${index + 1}</td>
                                <td>${rubrikPenilaian.rubrik_penilaian}</td>
                            </tr>
                        `);
                    });
                },
                error: function() {
                    console.error('Gagal memuat data rubrik penilaian');
                }
            });
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

        $('#jadwal').daterangepicker({
            timePicker: true,
            timePickerIncrement: 5,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
        $('#jadwal_edit').daterangepicker({
            timePicker: true,
            timePickerIncrement: 5,
            locale: {
                format: 'MM/DD/YYYY hh:mm A'
            }
        })
    </script>
@endpush
