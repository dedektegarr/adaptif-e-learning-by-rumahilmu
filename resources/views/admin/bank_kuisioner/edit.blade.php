@extends('layouts.admin')
@section('subTitle','Edit Bank Kuisioner')
@section('page','Edit Bank Kuisioner')
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
                <h3 class="box-title">Edit Data Bank Kuisioner</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <form action="{{ route('bankKuisioner.update',[$bankKuisioner->id]) }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }} {{ method_field('PATCH') }}
                        <div class="form-group col-md-12">
                            <label for="">Pertanyaan Kuisioner</label>
                            <input type="text" value="{{ $bankKuisioner->pertanyaan }}"  name="pertanyaan" id="pertanyaan" class="form-control">
                            <div>
                                @if ($errors->has('pertanyaan'))
                                    <small class="form-text text-danger">{{ $errors->first('pertanyaan') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Pilih Jenis Kuesioner</label>
                            <select name="jenis_kuisioner_id" id="jenis_kuisioner_id" class="form-control @error('jenis_kuisioner_id') is-invalid @enderror">
                                <option disabled selected>-- Pilih Jenis --</option>
                                @foreach ($jenisKuisioners as $jenisKuisioner)
                                    <option value="{{ $jenisKuisioner->id }}" @if ($jenisKuisioner->id == $bankKuisioner->jenis_kuisioner_id)
                                        selected
                                    @endif>{{ $jenisKuisioner->jenis_kuisioner }}</option>
                                @endforeach
                            </select>
                            <div>
                                @if ($errors->has('jenis_kuisioner_id'))
                                    <small class="form-text text-danger">{{ $errors->first('jenis_kuisioner_id') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Tipe Pertanyaan</label>
                            <select name="tipe_kuisioner" class="form-control" id="tipe_kuisioner">
                                <option disabled selected>-- pilih tipe pertanyaan --</option>
                                <option value="positif" @if ($bankKuisioner->tipe_kuisioner == 'positif') selected

                                @endif>Pertanyaan Positif</option>
                                <option value="negatif" @if ($bankKuisioner->tipe_kuisioner == 'negatif') selected

                                @endif>Pertanyaan Negatif</option>
                            </select>
                            <div>
                                @if ($errors->has('tipe_kuisioner'))
                                    <small class="form-text text-danger">{{ $errors->first('tipe_kuisioner') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12" style="text-align: center">
                            <a href="{{ route('bankKuisioner') }}" class="btn btn-warning btn-sm" style="color: white"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
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
