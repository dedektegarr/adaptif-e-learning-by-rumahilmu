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
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Tambah Data UTS</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('dosen.uts.post') }}" enctype="multipart/form-data" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Kelas</label>
                                <select name="courseId" class="form-control" id="">
                                    <option disabled selected>-- pilih kelas --</option>
                                    @foreach ($my_courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->nama_kelas }}</option>
                                    @endforeach
                                </select>
                                <div>
                                    @if ($errors->has('courseId'))
                                        <small class="form-text text-danger">{{ $errors->first('courseId') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label>Waktu Mulai</label>
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
                                <label for="">Waktu Mulai</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('timeBegin') }}" name="timeBegin" id="timeBegin"
                                        class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div>
                                        @if ($errors->has('timeBegin'))
                                            <small class="form-text text-danger">{{ $errors->first('timeBegin') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 bootstrap-timepicker">
                                <label for="">Waktu Selesai</label>
                                <div class="input-group">
                                    <input type="text" value="{{ old('timeEnd') }}" name="timeEnd" id="timeEnd"
                                        class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <div>
                                        @if ($errors->has('timeEnd'))
                                            <small class="form-text text-danger">{{ $errors->first('timeEnd') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <hr style="width: 50%" class="mt-0">
                                <a href="{{ route('dosen.uts') }}" class="btn btn-warning btn-sm" style="color: white"><i
                                        class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                                <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                            </div>
                        </form>
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
