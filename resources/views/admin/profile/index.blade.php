@extends('layouts.admin')
@section('subTitle', 'Pengaturan Profil')
@section('page', 'Pengaturan Profil')
@section('login_as')
    Selamat Datang,
@endsection
@section('user-login2')
    {{ $dosen->nama_lengkap }}
@endsection
@section('sidebar')
    @include('layouts.partials.sidebar')
@endsection
@section('content')
    <div class="row">
        <div class="col-md-3 sm-6">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-user"></i>&nbsp;Profil Saya</h3>
                </div>
                <div class="box-body box-profile">
                    @if ($dosen->foto == null)
                        <img class="profile-user-img img-responsive img-circle"
                            src="https://cdn-icons-png.flaticon.com/128/1177/1177568.png" alt="{{ $dosen->nama_lengkap }}">
                    @else
                        <img class="profile-user-img img-responsive img-circle"
                            src="{{ asset(checkStoragePath($dosen->foto)) }}" alt="{{ $dosen->nama_lengkap }}">
                    @endif
                    <h3 class="profile-username text-center">{{ $dosen->nama_lengkap }}</h3>
                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Username</b> <a class="pull-right">{{ $dosen->username }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b> <a class="pull-right">{{ $dosen->email }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Status User</b> <a class="pull-right">
                                @if ($dosen->isActive == 1)
                                    Aktif
                                @else
                                    Tidak Aktif
                                @endif
                            </a>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary btn-sm btn-flat btn-block" data-toggle="modal"
                        data-target="#exampleModal">
                        <i class="fa fa-key"></i>&nbsp;Ubah Password
                    </button>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action=" {{ route('dosen.profil.ubah_password') }} " method="POST">
                            {{ csrf_field() }} {{ method_field('PATCH') }}
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Form Ubah Password
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </h5>
                            </div>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="form-group col-md-12">
                                        <label for="">Masukan Password</label>
                                        <input type="hidden" name="id" id="id" value={{ $dosen->id }}>
                                        <input type="password" name="password_ubah" id="password_ubah"
                                            class="form-control password">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Konfirmasi Password</label>
                                        <input type="password" name="password_ubah2" id="password_ubah2"
                                            class="form-control password2">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <a class="password_ubah_sama"
                                            style="color: green; font-size:12px; font-style:italic; display:none;"><i
                                                class="fa fa-check-circle"></i>&nbsp;Password Sama!!</a>
                                        <a class="password_ubah_tidak_sama"
                                            style="color: red; font-size:12px; font-style:italic; display:none;"><i
                                                class="fa fa-close"></i>&nbsp;Password Tidak Sama!!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i
                                        class="fa fa-close"></i>&nbsp; Batalkan</button>
                                <button type="submit" class="btn btn-primary btn-sm" id="btn-submit-ubah" disable><i
                                        class="fa fa-check-circle"></i>&nbsp; Ubah Password</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#settings" data-toggle="tab"><i class="fa fa-cog"></i>&nbsp;Pengaturan</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="active tab-pane" id="settings">
                        <form class="form-horizontal" action="{{ route('dosen.profil.update', [$dosen->id]) }}"
                            method="post" enctype="multipart/form-data">
                            {{ csrf_field() }} {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Nomor Induk Kepegawaian</label>
                                <div class="col-sm-10">
                                    <input type="text" name="username" class="form-control"
                                        value="{{ $dosen->username }}" id="username">
                                    <div>
                                        @if ($errors->has('username'))
                                            <small class="form-text text-danger">{{ $errors->first('username') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fullName" class="col-sm-2 control-label">Nama Lengkap</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_lengkap" class="form-control"
                                        value="{{ $dosen->nama_lengkap }}">
                                    <div>
                                        @if ($errors->has('nama_lengkap'))
                                            <small
                                                class="form-text text-danger">{{ $errors->first('nama_lengkap') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">Email</label>

                                <div class="col-sm-10">
                                    <input type="email" name="email" value="{{ $dosen->email }}"
                                        class="form-control" id="email">
                                    <div>
                                        @if ($errors->has('email'))
                                            <small class="form-text text-danger">{{ $errors->first('email') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputExperience" class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-10">
                                    <select name="jenis_kelamin" class="form-control" id="">
                                        <option disabled selected>-- pilih jenis kelamin --</option>
                                        <option value="L" @if ($dosen->jenis_kelamin == 'L') selected @endif>Laki-Laki
                                        </option>
                                        <option value="P" @if ($dosen->jenis_kelamin == 'P') selected @endif>Perempuan
                                        </option>
                                    </select>
                                    <div>
                                        @if ($errors->has('jenis_kelamin'))
                                            <small
                                                class="form-text text-danger">{{ $errors->first('jenis_kelamin') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="foto" class="col-sm-2 control-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto" class="form-control">
                                    <div>
                                        @if ($errors->has('foto'))
                                            <small class="form-text text-danger">{{ $errors->first('foto') }}</small>
                                        @else
                                            <small class="form-text text-danger">Input foto ukuran 350 x 350 piksel</small>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                            class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                            class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#password_ubah, #password_ubah2").keyup(function() {
                var password_ubah = $("#password_ubah").val();
                var ulangi = $("#password_ubah2").val();
                if ($("#password_ubah").val() == $("#password_ubah2").val()) {
                    $('.password_ubah_sama').show(200);
                    $('.password_ubah_tidak_sama').hide(200);
                    $('#btn-submit-ubah').attr("disabled", false);
                } else {
                    $('.password_ubah_sama').hide(200);
                    $('.password_ubah_tidak_sama').show(200);
                    $('#btn-submit-ubah').attr("disabled", true);
                }
            });
        });
    </script>
@endpush
