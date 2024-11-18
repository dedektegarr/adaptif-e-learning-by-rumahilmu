@extends('layouts.admin')
@section('subTitle','Tambah Kelas')
@section('page','Tambah Kelas')
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
                <h3 class="box-title">Tambah Kelas</h3>
            </div>
            <div class="box-body">
                <div class="row">
                     <form action="{{ route('kelas.post') }}" enctype="multipart/form-data" method="POST" class="form">
                        @csrf @method('POST')
                        <div class="form-group col-md-6">
                            <label for="">Jenis Kelas</label>
                            <select name="jenis_kelas" class="form-control" id="">
                                <option>pilih jenis kelas</option>
                                <option value="adaptif">Adaptif</option>
                                <option value="umum">Umum</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Nama Kelas</label>
                            <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Kode Kelas</label>
                            <input type="text" name="kode_kelas" id="kode_kelas" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Tahun</label>
                            <select name="tahun" id="tahun" class="form-control"></select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Semester</label>
                            <select name="semester" class="form-control" id="semester">
                                <option disabled="disabled" selected="selected">-- pilih semester --</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Jumlah Topik</label>
                            <input type="text" name="jumlah_topik" class="form-control" />
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Gambar Thumbnail</label>
                            <input type="file" name="thumbnail" class="form-control" />
                        </div>

                        <div class="form-group col-md-6">
                            <label>Tanggal Mulai</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" value="{{ old('tanggal_mulai') }}" name="tanggal_mulai" id="tanggal_mulai" class="form-control pull-right">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Tanggal Selesai</label>
                             <div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text"  value="{{ old('tanggal_selesai') }}" name="tanggal_selesai" id="tanggal_selesai" class="form-control pull-right">
                            </div>
                        </div>

                        <div class="col-md-12" style="text-align: center">
                            <a href="{{ route('kelas') }}" class="btn btn-warning btn-sm" style="color: white"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                            <button type="reset" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-check-circle"></i>&nbsp; Ulangi</button>
                            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
                            <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('admin/validasi')
@push('scripts')
    <script>
        $('#tahun').each(function() {
            var year = (new Date()).getFullYear();
            var current = year;
            year -= 2;
            for (var i = 0; i < 3; i++) {
            if ((year+i) == current)
                $(this).append('<option selected value="' + (year + i) + '">' + (year + i) + '</option>');
            else
                $(this).append('<option value="' + (year + i) + '">' + (year + i) + '</option>');
            }
        });

        $('#tanggal_mulai').datepicker({
            format: 'yyyy/mm/dd', autoclose: true
        })

        $('#tanggal_selesai').datepicker({
            format: 'yyyy/mm/dd', autoclose: true
        })
    </script>
@endpush
