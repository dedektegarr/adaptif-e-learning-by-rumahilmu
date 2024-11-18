@extends('layouts.admin')
@section('subTitle','Edit Kelas')
@section('page','Edit Kelas')
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
                <h3 class="box-title">Edit Data Kelas : ({{ $kelas->nama_kelas }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                     <form action="{{ route('kelas.update',[$kelas->id]) }}" enctype="multipart/form-data" method="POST" class="form">
                        {{ csrf_field() }} {{ method_field('PATCH') }}
                        <div class="form-group col-md-6">
                            <label for="">Jenis Kelas</label>
                            <select name="jenis_kelas" value="{{ $kelas->jenis_kelas }}" class="form-control" id="">
                                <option>pilih jenis kelas</option>
                                <option {{ $kelas->jenis_kelas == "adaptif" ? 'selected' : '' }} value="adaptif">Adaptif</option>
                                <option {{ $kelas->jenis_kelas == "umum" ? 'selected' : '' }} value="umum">Umum</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Nama Kelas</label>
                            <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" id="nama_kelas" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Kode Kelas</label>
                            <input type="text" name="kode_kelas" value="{{ $kelas->kode_kelas }}" id="kode_kelas" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Tahun</label>
                            <select name="tahun" value="{{ $kelas->tahun }}" id="tahun" class="form-control"></select>
                        </div>

                        <div class="form-group col-md-6">
                            <label>Semester</label>
                            <select name="semester" class="form-control" id="semester">
                                <option disabled="disabled" selected="selected">-- pilih semester --</option>
                                <option {{ $kelas->semester == "1" ? 'selected' : '' }} value="1">1</option>
                                <option {{ $kelas->semester == "2" ? 'selected' : '' }} value="2">2</option>
                                <option {{ $kelas->semester == "3" ? 'selected' : '' }} value="3">3</option>
                                <option {{ $kelas->semester == "4" ? 'selected' : '' }} value="4">4</option>
                                <option {{ $kelas->semester == "5" ? 'selected' : '' }} value="5">5</option>
                                <option {{ $kelas->semester == "6" ? 'selected' : '' }} value="6">6</option>
                                <option {{ $kelas->semester == "7" ? 'selected' : '' }} value="7">7</option>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Jumlah Topik</label>
                            <input type="text" name="jumlah_topik" value="{{ $kelas->jumlah_topik }}" class="form-control" />
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
                                <input type="text" value="{{ $kelas->waktu_mulai }}" name="tanggal_mulai" id="tanggal_mulai" class="form-control pull-right">
                            </div>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Tanggal Selesai</label>
                             <div class="input-group date">
                                <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text"  value="{{ $kelas->waktu_selesai }}" name="tanggal_selesai" id="tanggal_selesai" class="form-control pull-right">
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
        $(document).ready(function(){
            $("form").on("submit", function(){
                $(".btnSubmit").attr("disabled", true);
                $('.btnSubmit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Menyimpan');
            });
        });

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
