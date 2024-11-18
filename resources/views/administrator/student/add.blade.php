@extends('layouts.admin')
@section('subTitle', 'Tambah Data Mahasiswa')
@section('page', 'Tambah Data Mahasiswa')
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
            <form action="{{ route('administrator.student.post') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="row" style="margin-right:-15px; margin-left:-15px;">
                    <div class="col-md-12">
                        <div class="alert alert-primary alert-block text-center" id="keterangan">

                            <strong class="text-uppercase"><i class="fa fa-info-circle"></i>&nbsp;Perhatian: </strong><br>
                            Silahkan tambahkan usulan kegiatan anda, harap melengkapi data terlebih dahulu agar proses
                            pengajuan
                            usulan tidak ada masalah kedepannya !!
                        </div>
                    </div>
                    <div class="row" style="padding: 0 1em">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text" name="nama_lengkap"
                                    class="tags form-control @error('nama_lengkap') is-invalid @enderror"
                                    value="{{ old('nama_lengkap') }}" />
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

                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>

                                </select>
                                <div>
                                    @if ($errors->has('jenis_kelamin'))
                                        <small class="form-text text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jalur Masuk</label>

                                <select name="jalur_masuk" class="form-control">
                                    <option disabled>-- Pilih Jalur Masuk --</option>
                                    <option value="snmptn">snmptn</option>
                                    <option value="sbmptn">sbmptn</option>
                                    <option value="mandiri">mandiri</option>
                                </select>
                                @if ($errors->has('jalur_masuk'))
                                    <small class="form-text text-danger">{{ $errors->first('jalur_masuk') }}</small>
                                @endif
                            </div>
                            <div class="form-group ">
                                <label for="exampleInputEmail1">Nilai Ujian</label>
                                <input type="number" step="any" name="rata_ujian"
                                    class="tags form-control @error('rata_ujian') is-invalid @enderror" />
                                <div>
                                    @if ($errors->has('rata_ujian'))
                                        <small class="form-text text-danger">{{ $errors->first('rata_ujian') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Asal Sekolah</label>
                                <input type="text" name="asal_sekolah"
                                    class="tags form-control @error('asal_sekolah') is-invalid @enderror" />
                                <div>
                                    @if ($errors->has('asal_sekolah'))
                                        <small class="form-text text-danger">{{ $errors->first('asal_sekolah') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>

                                <select name="is_active" class="form-control">
                                    <option disabled>-- Select Role --</option>
                                    <option value="1">Active</option>
                                    <option value="0">Non Active</option>
                                </select>
                                @if ($errors->has('is_active'))
                                    <small class="form-text text-danger">{{ $errors->first('is_active') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">NPM</label>
                                <input type="text" name="username"
                                    class="tags form-control @error('username') is-invalid @enderror"
                                    value="{{ old('username') }}" />
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
                                    value="{{ old('email') }}" />
                                <div>
                                    @if ($errors->has('email'))
                                        <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <input type="password" name="password"
                                    class="tags form-control @error('password') is-invalid @enderror"
                                    value="{{ old('password') }}" />
                                <div>
                                    @if ($errors->has('password'))
                                        <small class="form-text text-danger">{{ $errors->first('password') }}</small>
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
