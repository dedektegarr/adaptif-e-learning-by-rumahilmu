@extends('layouts.admin')
@section('subTitle','Dashboard')
@section('page','Dashboard')
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
                <h3 class="box-title">Manajemen Data Jenis Kuesioner</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <form action="{{ route('jenisKuisioner.post') }}" method="POST" enctype="multipart/form-data" class="form">
                        {{ csrf_field() }} {{ method_field("POST") }}

                         <div class="form-group col-md-12">
                            <label for="">Jenis Kuisioner</label>
                            <input type="text" value="{{ old('jenis_kuisioner') }}" name="jenis_kuisioner" id="jenis_kuisioner" class="form-control">
                            <div>
                                @if ($errors->has('jenis_kuisioner'))
                                    <small class="form-text text-danger">{{ $errors->first('jenis_kuisioner') }}</small>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-12" style="text-align: center">
                            <button type="reset" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-check-circle"></i>&nbsp; Ulangi</button>
                            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp; Simpan</button>
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
                                    <th>Jenis Kuisioner</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no=1;
                                @endphp
                                @foreach ($jenisKuisioners as $jenisKuisioner)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ ucfirst($jenisKuisioner->jenis_kuisioner) }}</td>

                                        <td style="display:inline-block !important;">
                                            <table>
                                                <tr>
                                                    <td>
                                                     <a href="{{ route('jenisKuisioner.edit',[$jenisKuisioner->id]) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('jenisKuisioner.delete',[$jenisKuisioner->id]) }}" method="POST">
                                                            {{ csrf_field() }} {{ method_field("DELETE") }}
                                                            <a class="show_confirm"><button type="submit" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash"></i>&nbsp; Hapus</button></a>
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
            var form =  $(this).closest("form");
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

