@extends('layouts.admin')
@section('subTitle', 'Capaian Lulusan')
@section('page', 'Capaian Lulusan')
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
                    <h3 class="box-title">Manajemen Data Bank Capaian Lulusan</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('bankCapaianLulusan.post') }}" method="POST" enctype="multipart/form-data"
                            class="form">
                            {{ csrf_field() }} {{ method_field('POST') }}
                            <div class="form-group col-md-12">
                                <label for="">Capaian Lulusan Mata Kuliah</label>
                                <input type="text" name="capaian_lulusan" id="capaian_lulusan" class="form-control">
                                <div>
                                    @if ($errors->has('capaian_lulusan'))
                                        <small class="form-text text-danger">{{ $errors->first('capaian_lulusan') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="">Pembahasan</label>
                                <textarea name="keterangan" class="form-control editor" id="keterangan" cols="30" rows="10"></textarea>
                                <div>
                                    @if ($errors->has('keterangan'))
                                        <small class="form-text text-danger">{{ $errors->first('keterangan') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i
                                        class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                                <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                            </div>
                        </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-bordered" id="table" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Capaian Lulusan</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($bankCapaianLulusans as $bankCapaianLulusan)
                                        <tr>
                                            <td> {{ $no++ }} </td>
                                            <td> {{ $bankCapaianLulusan->capaian_lulusan }} </td>
                                            <td> {!! $bankCapaianLulusan->keterangan !!} </td>
                                            <td style="display:inline-block !important;">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('bankCapaianLulusan.edit', [$bankCapaianLulusan->id]) }}"
                                                                class="btn btn-primary btn-sm btn-flat"><i
                                                                    class="fa fa-edit"></i>&nbsp; Edit</a>
                                                        </td>
                                                        <td>
                                                            <form
                                                                action="{{ route('bankCapaianLulusan.delete', [$bankCapaianLulusan->id]) }}"
                                                                method="POST">
                                                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                                                <a class="show_confirm"><button type="submit"
                                                                        class="btn btn-danger btn-sm btn-flat"><i
                                                                            class="fa fa-trash"></i>&nbsp;
                                                                        Hapus</button></a>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        @endsection
        @include('admin/validasi')
        @push('scripts')
            <script>
                $('.show_confirm').click(function(event) {
                    var form = $(this).closest("form");
                    var name = $(this).data("name");
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
