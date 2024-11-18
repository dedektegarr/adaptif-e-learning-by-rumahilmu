@extends('layouts.admin')
@section('subTitle','Soal Kuis Pembahasan')
@section('page','Soal Kuis Pembahasan')
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
                <h3 class="box-title"> Soal Kuis Pembahasan Kelas <b><i>{{ $kelas->nama_kelas }}</i></b></h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('soalKuis.post',[$kelas->id]) }}" method="POST" class="form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Level Berpikir</label>
                                    <select name="level_berfikir" class="form-control" id="" required>
                                        <option disabled selected>-- pilih Level --</option>
                                        <option value="Mengingat">Mengingat</option>
                                        <option value="Memahami">Memahami</option>
                                        <option value="Menerapkan">Menerapkan</option>
                                        <option value="Menganalisis">Menganalisis</option>
                                        <option value="Mengevaluasi">Mengevaluasi</option>
                                        <option value="Menciptakan">Menciptakan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Pertanyaan</label>
                                    <textarea name="pertanyaan" class="form-control" id="pertanyaan_create" cols="30" rows="10"></textarea>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Pembahasan</label>
                                    <textarea name="pembahasan" class="form-control" id="pembahasan_create" cols="30" rows="10"></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('soalKuis') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                                    <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                    <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                                    <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pertanyaan</th>
                                    <th>Level Berfikir</th>
                                    <th>Pembahasan</th>
                                    <th>Jawaban</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soalKuis as $index => $soalKuis)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{!! $soalKuis->pertanyaan !!}</td>
                                        <td>{{ $soalKuis->level_berfikir }}</td>
                                        <td>{!! $soalKuis->pembahasan !!}</td>
                                        <td>
                                            {{ $soalKuis->jawabans_count }} Jawaban
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <a href="{{ route('soalKuis.jawaban',[$kelas->id, $soalKuis->id]) }}" class="btn btn-success btn-sm btn-flat"><i class="fa fa-question-circle"></i>&nbsp;Detail Jawaban</a>
                                                <a onclick="editSoalKuis({{ $kelas->id }},{{ $soalKuis->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                <form action="{{ route('soalKuis.delete',[$soalKuis->id, $kelas->id]) }}" method="POST" style="margin: 0;">
                                                    {{ csrf_field() }} {{ method_field("DELETE") }}
                                                    <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                                </form>
                                            </div>
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
@include('admin/soal_kuis/modal_edit')
@push('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'cpmk_create'
            if (typeof ClassicEditor !== 'undefined') {
                document.querySelectorAll('#pembahasan_create').forEach((element) => {
                    ClassicEditor
                        .create(element)
                        .catch(error => {
                            console.error(error);
                        });
                });

                var cpmkEditEditor;

                $('#modalEdit').on('shown.bs.modal', function() {
                    if (!cpmkEditEditor) {
                        ClassicEditor
                            .create(document.querySelector('#pembahasan_edit'))
                            .then(editor => {
                                cpmkEditEditor = editor;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });

                $('#modalEdit').on('hidden.bs.modal', function() {
                    if (cpmkEditEditor) {
                        cpmkEditEditor.destroy()
                            .then(() => {
                                cpmkEditEditor = null;
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

        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'cpmk_create'
            if (typeof ClassicEditor !== 'undefined') {
                document.querySelectorAll('#pertanyaan_create').forEach((element) => {
                    ClassicEditor
                        .create(element)
                        .catch(error => {
                            console.error(error);
                        });
                });

                var cpmkEditEditor;

                $('#modalEdit').on('shown.bs.modal', function() {
                    if (!cpmkEditEditor) {
                        ClassicEditor
                            .create(document.querySelector('#pertanyaan_edit'))
                            .then(editor => {
                                cpmkEditEditor = editor;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });

                $('#modalEdit').on('hidden.bs.modal', function() {
                    if (cpmkEditEditor) {
                        cpmkEditEditor.destroy()
                            .then(() => {
                                cpmkEditEditor = null;
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

        function editSoalKuis(kelas_id, id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('soal_kuis') }}/" + id +'/kelas/'+kelas_id+'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#soal_kuis_id_edit').val(data.id);
                    $('#kelas_id_edit').val(data.kelas_id);
                    $('#pertanyaan_edit').val(data.pertanyaan);
                    $('#level_berfikir_edit').val(data.level_berfikir);
                    $('#pembahasan_edit').val(data.pembahasan);
                },
                error:function(){
                    $('#gagal').show(100);
                }
            });
            return false;
        }

        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
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

