@extends('layouts.admin')
@section('subTitle', 'Tambah UAS')
@section('page', 'Tambah Ujian Akhir Semester')
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
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Tambah Peserta Sesi Ujian :
                        <b>{{ $sesi->nama_sesi }}</b>
                    </h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('dosen.uas.sesi.peserta.post', [$final_examId, $sesiId]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Pilih Peserta</label>
                                <select name="studentId" class="form-control select2" id="studentId">
                                    <option disabled selected>-- pilih peserta --</option>
                                    @foreach ($daftar_peserta as $peserta)
                                        <option value="{{ $peserta->mahasiswa->id }}">
                                            {{ $peserta->mahasiswa->nama_lengkap }}</option>
                                    @endforeach
                                </select>
                                <div>
                                    @if ($errors->has('studentId'))
                                        <small class="form-text text-danger">{{ $errors->first('studentId') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <a href="{{ route('dosen.uas') }}" class="btn btn-warning btn-sm" style="color: white"><i
                                        class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                                <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-check-circle"></i>&nbsp;Tambahkan Pesera</button>
                            </div>
                        </form>
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
                            @endif
                        </div>
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-bordered" id="pesertaTable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Peserta</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($pesertas as $peserta)
                                        <tr>
                                            <td> {{ $no++ }} </td>
                                            <td> {{ $peserta->nama_lengkap }} </td>
                                            <td style="display:inline-block !important;">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <form
                                                                action="{{ route('dosen.uas.sesi.peserta.delete', [$final_examId, $sesiId, $peserta->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="quizId"
                                                                    value="{{ $final_examId }}">
                                                                <button type="submit"
                                                                    onclick="return confirm('Anda yakin ingin menghapus mahasiswa ini?')"
                                                                    class="btn btn-danger btn-sm btn-flat"><i
                                                                        class="fa fa-trash"></i>&nbsp; Hapus</button>
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
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            $('#pesertaTable').DataTable({
                responsive: true,
            });
        });

        $(document).ready(function() {
            $('#studentId').select2();
        });
    </script>
@endpush
