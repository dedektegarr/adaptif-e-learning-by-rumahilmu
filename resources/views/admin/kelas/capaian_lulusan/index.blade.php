@extends('layouts.admin')
@section('subTitle','Capaian Lulusan Kelas')
@section('page','Capaian Lulusan Kelas')
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
                <h3 class="box-title"> Capaian Lulusan Kelas ({{ $data->nama_kelas }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('kelas.capaianLulusan.post',[$data->id]) }}" method="POST" class="form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="capaian_lulusan_id">Capaian Lulusan</label>
                                    <select class="form-control" id="capaian_lulusan_id" name="capaian_lulusan_id" required>
                                        <option selected disabled>-- pilih capaian lulusan --</option>
                                        @foreach($capaianLulusanOptions as $capaianLulusan)
                                            <option value="{{ $capaianLulusan->id }}">{{ $capaianLulusan->capaian_lulusan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Keterangan</label>
                                    <textarea name="keterangan" id="keterangan" class="form-control" cols="30" rows="3" readonly></textarea>
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
                                    <th>Capaian Lulusan</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->capaianLulusans as $index => $capaianLulusan)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $capaianLulusan->capaian_lulusan }}</td>
                                        <td>{!! $capaianLulusan->keterangan !!}</td>
                                        <td>
                                            <div class="action-buttons">
                                                <form action="{{ route('kelas.capaianLulusan.delete',[$data->id, $capaianLulusan->id]) }}" method="POST" style="margin: 0;">
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
        $(document).on('change','#capaian_lulusan_id',function(){
            var capaianLulusanId = $(this).val();
            // alert(capaianLulusanId);
            var div = $(this).parent().parent();
            var op=" ";
            $.ajax({
            type :'get',
            url: "{{ url('/pencarian/cari_capaian_lulusan_id') }}",
            data:{'capaianLulusanId':capaianLulusanId},
                success:function(data){
                    var html = $(data.keterangan).html();
                    $('#keterangan').val(html);
                },
                    error:function(){
                }
            });
        });

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

