@extends('layouts.admin')
@section('subTitle', 'Data Mahasiswa')
@section('page', 'Data Mahasiswa')
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
            <div class="row" style="margin-right:-15px; margin-left:-15px;">
                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Berhasil :</strong>{{ $message }}
                        </div>
                    @elseif ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Gagal :</strong>{{ $message }}
                        </div>
                    @else
                        {{--  <div class="alert alert-success alert-block" id="keterangan">
                            <strong><i class="fa fa-info-circle"></i>&nbsp;Perhatian: </strong> Berikut semua berkas berkas yang sudah diupload oleh operator !!
                        </div>  --}}
                    @endif
                </div>
                <div class="col-md-12">
                    <a href="{{ route('administrator.student.add') }}" class="btn btn-primary btn-sm btn-flat"><i
                            class="fa fa-plus"></i>&nbsp;Tambah Data</a>
                </div>

                <div class="col-md-12">
                    <table class="table table-striped table-bordered" id="studentTable" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NPM</th>
                                <th>Nama Lengkap</th>
                                <th>Email</th>
                                <th>Jalur masuk</th>
                                <th>Nilai Ujian</th>
                                <th>Asal Sekolah</th>
                                <th>Jenis Kelamin</th>
                                <th>Status</th>
                                <th>Ubah password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->nama_lengkap }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->jalur_masuk }}</td>
                                    <td>{{ $user->rata_ujian }}</td>
                                    <td>{{ $user->asal_sekolah }}</td>
                                    <td>{{ $user->jenis_kelamin }}</td>
                                    <td>
                                        @if ($user->is_active == '1')
                                            <label class="badge badge-primary">Active</label>
                                        @else
                                            <label class="badge badge-danger">Non Active</label>
                                        @endif
                                    </td>
                                    <td>
                                        <a onclick="ubahPassword({{ $user->id }})" class="btn btn-primary btn-sm"
                                            style="color:white; cursor:pointer;"><i class="fa fa-key"></i></a>
                                    </td>

                                    {{--  <td>
                                @if ($user->status == 'aktif')
                                    <form action="{{ route('admin.user.nonAktifkanStatus', [$user->id]) }}" method="POST">
                                        {{ csrf_field() }} {{ method_field('PATCH') }}
                                        <button type="submit" class="btn btn-danger btn-sm" style="color:white; cursor:pointer;"><i class="fa fa-thumbs-down"></i></button>
                                    </form>
                                    @else
                                    <form action="{{ route('admin.user.aktifkanStatus', [$user->id]) }}" method="POST">
                                        {{ csrf_field() }} {{ method_field('PATCH') }}
                                        <button type="submit" class="btn btn-primary btn-sm" style="color:white; cursor:pointer;"><i class="fa fa-thumbs-up"></i></button>
                                    </form>
                                @endif
                               </td>  --}}

                                    <td>
                                        <a href="{{ route('administrator.student.edit', [$user->id]) }}"
                                            class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp;
                                            Edit</a>
                                        <form action="{{ route('administrator.student.delete', [$user->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                onclick="return confirm('Apa anda yakin ingin menghapus data mahasiswa ini?')"
                                                class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash"></i>&nbsp;
                                                Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!-- Modal Hapus-->
                    <div class="modal fade modal-danger" id="modalhapus" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                {{--  <form action="{{ route('admin.surat_masuk.delete',[$user->id]) }}"method="POST">
                                {{ csrf_field() }} {{ method_field('DELETE') }}  --}}
                                <div class="modal-header">
                                    <p style="font-size:15px; font-weight:bold;" class="modal-title"><i
                                            class="fa fa-trash"></i>&nbsp;Form Konfirmasi Hapus Data</p>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" id="id_hapus">
                                            Apakah anda yakin ingin menghapus data? klik hapus jika iya !!
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button"
                                        style="border: 1px solid #fff;background: transparent;color: #fff;"
                                        class="btn btn-sm btn-outline pull-left" data-dismiss="modal"><i
                                            class="fa fa-close"></i>&nbsp; Batalkan</button>
                                    <button type="submit"
                                        style="border: 1px solid #fff;background: transparent;color: #fff;"
                                        class="btn btn-sm btn-outline"><i class="fa fa-check-circle"></i>&nbsp; Ya,
                                        Hapus</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="modalubahpassword" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <form action="{{ route('administrator.ubah_password') }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" id="idUbahPassword" name="idPassword">
                                    <div class="modal-header">
                                        <p style="font-size:15px; font-weight:bold;" class="modal-title"><i
                                                class="fa fa-key"></i>&nbsp;Form Ubah Password AKun user</p>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="alert alert-danger">
                                                    <i class="fa fa-info-circle"></i>&nbsp;Form ubah password akun user
                                                </div>
                                                <input type="hidden" name="id" id="id">
                                                <div class="form-group">
                                                    <label for="">Masukan Password</label>
                                                    <input type="password" name="password_ubah" id="password_ubah"
                                                        class="form-control password">
                                                </div>

                                                <div class="form-group">
                                                    <label for="">Konfirmasi Password</label>
                                                    <input type="password" name="password_ubah2" id="password_ubah2"
                                                        class="form-control password2">
                                                </div>
                                                <div>
                                                    <a class="password_ubah_sama"
                                                        style="color: green; font-size:12px; font-style:italic; display:none;"><i
                                                            class="fa fa-check-circle"></i>&nbsp;Password Sama!!</a>
                                                    <a class="password_ubah_tidak_sama"
                                                        style="color: red; font-size:12px; font-style:italic; display:none;"><i
                                                            class="fa fa-close"></i>&nbsp;Password Tidak Sama!!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i
                                                class="fa fa-close"></i>&nbsp; Batalkan</button>
                                        <button type="submit" class="btn btn-primary btn-sm" id="btn-submit-ubah"
                                            disabled><i class="fa fa-check-circle"></i>&nbsp; Ubah Password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#studentTable').DataTable({
                responsive: true,
            });
        });
    </script>
@endpush
@push('scripts')
    <script>
        function ubahPassword(id) {
            $('#modalubahpassword').modal('show');
            $('#idUbahPassword').val(id);
        }

        function batalkan() {
            $('#form-tambah').hide(300);
            $('#generate').show(300);
        }

        function generatePassword() {
            $('#modalgeneratepassword').modal('show');
        }

        $(document).ready(function() {
            $("#password, #password2").keyup(function() {
                var password = $("#password").val();
                var ulangi = $("#password2").val();
                if ($("#password").val() == $("#password2").val()) {
                    $('.password_sama').show(200);
                    $('.password_tidak_sama').hide(200);
                    $('#btn-submit').attr("disabled", false);
                } else {
                    $('.password_sama').hide(200);
                    $('.password_tidak_sama').show(200);
                    $('#btn-submit').attr("disabled", true);
                }
            });
        });

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
