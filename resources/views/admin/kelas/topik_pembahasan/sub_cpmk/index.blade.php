@extends('layouts.admin')
@section('subTitle','Detail Sub CPMK')
@section('page','Detail Sub CPMK')
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
                <h3 class="box-title"> Detail Sub CPMK ({{ $data->kelas->nama_kelas }}), Topik ({{ $data->nama_topik }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('kelas.topikPembahasan.subCpmk.post',[$data->kelas->id,$data->id]) }}" method="POST" class="form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="">Sub Capaian Pembelajaran Mata Kuliah (Sub CPMK)</label>
                                    <textarea name="sub_cpmk" class="form-control" id="sub_cpmk" cols="30" rows="10"></textarea>
                                    <div>
                                        @if ($errors->has('sub_cpmk'))
                                            <small class="form-text text-danger">{{ $errors->first('sub_cpmk') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <a href="{{ route('kelas.topikPembahasan',[$data->kelas->id]) }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
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
                                    <th>Sub CPMK</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->subCpmks as $index => $subCpmk)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{!! $subCpmk->sub_cpmk !!}</td>
                                        <td>
                                            <div class="action-buttons">
                                                <a onclick="editsubCpmk({{ $data->kelas->id }}, {{ $data->id }}, {{ $subCpmk->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                <form action="{{ route('kelas.topikPembahasan.subCpmk.delete',[$data->kelas->id, $data->id, $subCpmk->id]) }}" method="POST" style="margin: 0;">
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
@include('admin/kelas/topik_pembahasan/sub_cpmk.modal_edit')
@push('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'sub_cpmk'
            if (typeof ClassicEditor !== 'undefined') {
                document.querySelectorAll('#sub_cpmk').forEach((element) => {
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
                            .create(document.querySelector('#sub_cpmk_edit'))
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

        function editsubCpmk(kelas_id, topik_pembahasan_id, sub_cpmk_id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('manajemen_kelas') }}/" + kelas_id + '/topik_pembahasan_kelas/' + topik_pembahasan_id+'/sub_cpmk/'+ sub_cpmk_id+'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#sub_cpmk_id_edit').val(data.id);
                    $('#sub_cpmk_edit').val(data.sub_cpmk);

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

