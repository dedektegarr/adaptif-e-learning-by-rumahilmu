@extends('layouts.admin')
@section('subTitle','Edit Jenis Kuisioner')
@section('page','Edit Jenis Kuisioner')
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
                <h3 class="box-title">Edit Data Jenis Kuisioner</h3>
            </div>
            <div class="box-body">
                <div class="row">
                     <form action="{{ route('jenisKuisioner.update',[$jenisKuisioner->id]) }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }} {{ method_field('PATCH') }}
                        <div class="form-group col-md-12">
                            <label for="">Jenis Kuisioner</label>
                            <input type="text" value="{{ $jenisKuisioner->jenis_kuisioner }}"  name="jenis_kuisioner" id="jenis_kuisioner" class="form-control">
                            <div>
                                @if ($errors->has('jenis_kuisioner'))
                                    <small class="form-text text-danger">{{ $errors->first('jenis_kuisioner') }}</small>
                                @endif
                            </div>
                        </div>


                        <div class="col-md-12" style="text-align: center">
                            <a href="{{ route('jenisKuisioner') }}" class="btn btn-warning btn-sm" style="color: white"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
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
