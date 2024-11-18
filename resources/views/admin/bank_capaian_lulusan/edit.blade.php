@extends('layouts.admin')
@section('subTitle','Edit Capaian Lulusan')
@section('page','Edit Capaian Lulusan')
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
                <h3 class="box-title">Edit Data Bank Capaian Lulusan</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <form action="{{ route('bankCapaianLulusan.update',[$bankCapaianLulusan->id]) }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }} {{ method_field('PATCH') }}
                        <div class="form-group col-md-12">
                            <label for="">Capaian Lulusan Mata Kuliah</label>
                            <input type="text" name="capaian_lulusan" id="capaian_lulusan" value="{{ $bankCapaianLulusan->capaian_lulusan }}" class="form-control">
                            <div>
                                @if ($errors->has('capaian_lulusan'))
                                    <small class="form-text text-danger">{{ $errors->first('capaian_lulusan') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Keterangan</label>
                            <textarea name="keterangan" class="form-control editor" id="keterangan" cols="30" rows="10">{{ $bankCapaianLulusan->keterangan }}</textarea>
                            <div>
                                @if ($errors->has('keterangan'))
                                    <small class="form-text text-danger">{{ $errors->first('keterangan') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                            <a href="{{ route('bankCapaianLulusan') }}" class="btn btn-warning btn-sm" style="color: white"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                            <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(){
            $("form").on("submit", function(){
                $(".btnSubmit").attr("disabled", true);
                $('.btnSubmit').html('<i class="fa fa-spinner fa-spin"></i>&nbsp; Menyimpan');
            });
        });
    </script>
@endpush
