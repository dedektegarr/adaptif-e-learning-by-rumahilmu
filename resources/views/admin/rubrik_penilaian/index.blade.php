@extends('layouts.admin')
@section('subTitle','Rubrik Penilaian')
@section('page','Rubrik Penilaian')
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
                <h3 class="box-title"> Rubrik Penilaian</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('rubrikPenilaian.post') }}" method="POST" class="form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="">Rubrik Penilaian</label>
                                    <input type="rubrik_penilaian" name="rubrik_penilaian" class="form-control">
                                </div>
                                <div class="col-md-12 text-center">
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
                                    <th>Rubrik Penilaian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rubrikPenilaians as $index => $rubrikPenilaian)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $rubrikPenilaian->rubrik_penilaian }}</td>
                                        <td>
                                            <div class="action-buttons">
                                                <a onclick="editRubrikPenilaian({{ $rubrikPenilaian->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                <form action="{{ route('rubrikPenilaian.delete',[$rubrikPenilaian->id]) }}" method="POST" style="margin: 0;">
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
@include('admin/rubrik_penilaian/modal_edit')
@push('scripts')
    <script>
        function editRubrikPenilaian(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('rubrik_penilaian') }}/" + id +'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#rubrik_penilaian_id_edit').val(data.id);
                    $('#rubrik_penilaian_edit').val(data.rubrik_penilaian);
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

