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
                <h3 class="box-title"> Soal Kuis Pembahasan</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <b><i>Perhatian : </i></b><i>Silahkan pilih kelas terlebih dahulu</i>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('soalKuis.jawaban.post',[$kelas->id, $soal->id]) }}" method="POST" class="form">
                            @csrf {{ method_field('POST') }}
                            <div class="row">
                                <!-- Jawaban Field -->
                                <div class="form-group col-md-12">
                                    <label for="jawaban">Jawaban</label>
                                    <textarea name="jawaban" class="form-control" id="jawaban" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="status_jawaban">Status Jawaban</label>
                                    <select name="status_jawaban" class="form-control" id="status_jawaban" required>
                                        <option disabled selected>-- pilih status --</option>
                                        <option value="1">Benar</option>
                                        <option value="0">Salah</option>
                                    </select>
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
                                    <th>Jawaban</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($soal->jawabans as $index => $jawaban)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{!! $jawaban->jawaban !!}</td>
                                        <td>
                                            @if ($jawaban->status_jawaban == "1")
                                                <small class="label label-success">Benar</small>
                                            @else
                                                <small class="label label-danger">Salah</small>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="action-buttons">
                                                <form action="{{ route('soalKuis.jawaban.delete',[$kelas->id, $soal->id,$jawaban->id]) }}" method="POST" style="margin: 0;">
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
@push('scripts')
    <script>
        if (typeof ClassicEditor !== 'undefined') {
            document.querySelectorAll('#jawaban').forEach((element) => {
                ClassicEditor
                    .create(element)
                    .catch(error => {
                        console.error(error);
                    });
            });
        }

        @if(session('success'))
            swal({
                title: "Berhasil!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        @endif

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
                    $('#modalTambah').modal('show');
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

