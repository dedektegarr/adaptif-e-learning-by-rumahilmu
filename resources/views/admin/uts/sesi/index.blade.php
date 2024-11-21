@extends('layouts.admin')
@section('subTitle', 'Tambah UTS')
@section('page', 'Tambah Ujian Tengah Semester')
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
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Manajemen Data Soal Ujian Tengah Semester (UTS)</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('dosen.uts.sesi.post', [$midId]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Masukan Nama Sesi</label>
                                <input type="text" name="sessionName" class="form-control">
                                <div>
                                    @if ($errors->has('sessionName'))
                                        <small class="form-text text-danger">{{ $errors->first('sessionName') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Tanggal Ujian</label>
                                <div class="input-group date">
                                    <input type="text" value="{{ old('startDate') }}" name="startDate" id="startDate"
                                        class="form-control pull-right">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                                <div>
                                    @if ($errors->has('startDate'))
                                        <small class="form-text text-danger">{{ $errors->first('startDate') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6 bootstrap-timepicker">
                                <label for="">Jam Mulai</label>
                                <div class="input-group">
                                    <input type="text" name="timeBegin" id="timeBegin" class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div>
                                    @if ($errors->has('timeBegin'))
                                        <small class="form-text text-danger">{{ $errors->first('timeBegin') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6 bootstrap-timepicker">
                                <label for="">Jam Selesai</label>
                                <div class="input-group">
                                    <input type="text" name="timeEnd" id="timeEnd" class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                                <div>
                                    @if ($errors->has('timeEnd'))
                                        <small class="form-text text-danger">{{ $errors->first('timeEnd') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <a href="{{ route('dosen.uts') }}" class="btn btn-warning btn-sm" style="color: white"><i
                                        class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                                <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-check-circle"></i>&nbsp;Simpan Sesi Ujian</button>
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
                            <table class="table table-striped table-bordered" id="table" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Sesi Ujian</th>
                                        <th>Tanggal Ujian</th>
                                        <th>Jam Mulai</th>
                                        <th>Jam Selesai</th>
                                        <th style="text-align:center">Peserta</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($sesis as $sesi)
                                        <tr>
                                            <td> {{ $no++ }} </td>
                                            <td> {{ $sesi->nama_sesi }} </td>
                                            <td>
                                                {{ $sesi->tanggal_dilaksanakan }}
                                            </td>
                                            <td> {{ $sesi->waktu_mulai }} </td>
                                            <td> {{ $sesi->waktu_selesai }}</td>
                                            </td>
                                            <td style="text-align: center">
                                                <a href="{{ route('dosen.uts.sesi.peserta', [$midId, $sesi->id]) }}"
                                                    class="btn btn-primary btn-sm btn-flat">{{ $sesi->jumlahPeserta }}</a>
                                            </td>
                                            <td style="display:inline-block !important;">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <form
                                                                action="{{ route('dosen.uts.sesi.delete', [$midId, $sesi->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="quizId"
                                                                    value="{{ $midId }}">
                                                                <button type="submit"
                                                                    onclick="return confirm('Anda yaking ingin menghapus sesi ini?')"
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
        $('#startDate').datepicker({
            format: 'yyyy/mm/dd',
            autoclose: true
        })

        $('#timeBegin').timepicker({
            showInputs: false
        })

        $('#timeEnd').timepicker({
            showInputs: false
        })
    </script>
@endpush
