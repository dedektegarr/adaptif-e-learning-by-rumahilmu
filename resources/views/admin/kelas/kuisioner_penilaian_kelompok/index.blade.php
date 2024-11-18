@extends('layouts.admin')
@section('subTitle','Kuisioner Penilaian Kelompok Kelas')
@section('page','Kuisioner Penilaian Kelompok Kelas')
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
                <h3 class="box-title"> Kuisioner Penilaian Kelompok Kelas ({{ $data->nama_kelas }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('kelas.kuisionerKelompok.post',[$data->id]) }}" method="POST" class="form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="bank_penilaian_kelompok_id"></label>
                                    <select class="form-control" id="bank_penilaian_kelompok_id" name="bank_penilaian_kelompok_id" required>
                                        <option>-- pilih kuisioner --</option>
                                        @foreach($kuisionerPenilaianKelompoks as $kuisioner)
                                            <option value="{{ $kuisioner->id }}">{{ $kuisioner->pertanyaan }}</option>
                                        @endforeach
                                    </select>
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
                                    <th>Pertanyaan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->kuisionerPenilaianKelompoks as $index => $kuisioner)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $kuisioner->pertanyaan }}</td>
                                        <td>
                                            <div class="action-buttons">
                                                <form action="{{ route('kelas.kuisionerKelompok.delete',[$data->id, $kuisioner->id]) }}" method="POST" style="margin: 0;">
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

