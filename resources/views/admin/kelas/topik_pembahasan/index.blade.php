@extends('layouts.admin')
@section('subTitle','Topik Pembahasan Kelas')
@section('page','Topik Pembahasan Kelas')
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
                <h3 class="box-title"> Topik Pembahasan Kelas ({{ $data->nama_kelas }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('kelas.topikPembahasan.post',[$data->id]) }}" method="POST" class="form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Nama Topik</label>
                                    <input type="text" name="nama_topik" class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Topik Ke</label>
                                    <input type="text" name="topik_ke" class="form-control">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Capaian Pembelajaran Mata Kuliah (CPMK)</label>
                                    <textarea name="cpmk" class="form-control" id="cpmk_create" cols="30" rows="10"></textarea>
                                    <div>
                                        @if ($errors->has('cpmk'))
                                            <small class="form-text text-danger">{{ $errors->first('cpmk') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('kelas') }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
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
                                    <th>Nama Topik</th>
                                    <th>Topik Ke</th>
                                    <th>CPMK</th>
                                    <th>Sub CPMK</th>
                                    <th>Materi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->topikPembahasanKelas as $index => $topikPembahasan)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $topikPembahasan->nama_topik }}</td>
                                        <td>{{ $topikPembahasan->topik_ke }}</td>
                                        <td>{!! $topikPembahasan->cpmk !!}</td>
                                        <td>
                                            <a href="{{ route('kelas.topikPembahasan.subCpmk',[$data->id, $topikPembahasan->id]) }}">{{ $topikPembahasan->sub_cpmks_count }} Data</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('kelas.topikPembahasan.materi',[$data->id, $topikPembahasan->id]) }}">{{ $topikPembahasan->materis_count }} Data</a>
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <a onclick="editTopikPembahasan({{ $data->id }}, {{ $topikPembahasan->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                <form action="{{ route('kelas.topikPembahasan.delete',[$data->id, $topikPembahasan->id]) }}" method="POST" style="margin: 0;">
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
@include('admin/kelas/topik_pembahasan.modal_edit')
@push('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'cpmk_create'
            if (typeof ClassicEditor !== 'undefined') {
                document.querySelectorAll('#cpmk_create').forEach((element) => {
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
                            .create(document.querySelector('#cpmk_edit'))
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

        function editTopikPembahasan(kelas_id, topik_pembahasan_id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('manajemen_kelas') }}/" + kelas_id + '/topik_pembahasan_kelas/' + topik_pembahasan_id+'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#topik_pembahasan_id_edit').val(data.id);
                    $('#nama_topik_edit').val(data.nama_topik);
                    $('#topik_ke_edit').val(data.topik_ke);
                    $('#cpmk_edit').val(data.cpmk);

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

