@extends('layouts.admin')
@section('subTitle', 'Edit Data Dosen')
@section('page', 'Edit Data Dosen')
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
    <section class="panel" style="margin-bottom:20px;">
        <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
            <form action="{{ route('administrator.teacher.update', $data->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                <div class="row" style="margin-right:-15px; margin-left:-15px;">
                    <div class="row" style="padding: 0 1em">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap"
                                    class="tags form-control @error('nama_lengkap') is-invalid @enderror"
                                    value="{{ $data->nama_lengkap }}" />
                                <div>
                                    @if ($errors->has('nama_lengkap'))
                                        <small class="form-text text-danger">{{ $errors->first('nama_lengkap') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jenis kelamin</label>
                                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option disabled>-- Pilih Jenis Kelamin --</option>

                                    <option value="L" @if ($data->jenis_kelamin === 'L') selected @endif>Laki-laki
                                    </option>
                                    <option value="P" @if ($data->jenis_kelamin === 'P') selected @endif>Perempuan
                                    </option>

                                </select>
                                @if ($errors->has('jenis_kelamin'))
                                    <small class="form-text text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>

                                <select name="is_active" class="form-control">
                                    <option disabled>-- Select Role --</option>
                                    <option value="1" @if ($data->is_active === 1) selected @endif>Active</option>
                                    <option value="0" @if ($data->is_active === 0) selected @endif>Non Active
                                    </option>
                                </select>
                                @if ($errors->has('is_active'))
                                    <small class="form-text text-danger">{{ $errors->first('is_active') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username"
                                    class="tags form-control @error('username') is-invalid @enderror"
                                    value="{{ $data->username }}" />
                                <div>
                                    @if ($errors->has('username'))
                                        <small class="form-text text-danger">{{ $errors->first('username') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" name="email"
                                    class="tags form-control @error('email') is-invalid @enderror"
                                    value="{{ $data->email }}" />
                                <div>
                                    @if ($errors->has('email'))
                                        <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <hr style="width: 50%" class="mt-0">
                    <a href="{{ route('administrator.administrator') }}" class="btn btn-warning btn-sm"
                        style="color: white"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                    <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                            class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                            class="fa fa-check-circle"></i>&nbsp;Simpan Data</button>
                </div>
            </form>
        </div>
    </section>
@endsection
