@extends('layouts.admin')
@section('subTitle', 'Edit UTS')
@section('page', 'Edit Ujian Tengah Semester')
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
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Ubah Data UTS</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('dosen.uts.update', $mid->id) }}" enctype="multipart/form-data" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Kelas</label>
                                <select name="courseId" class="form-control" id="">
                                    <option disabled selected>-- pilih kelas --</option>
                                    @foreach ($my_courses as $course)
                                        <option value="{{ $course->id }}"
                                            @if ($course->id === $mid->kelas_id) selected @endif>
                                            {{ $course->nama_kelas }}</option>
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
                                    <input type="text" value="{{ $mid->tanggal_dilaksanakan ?? old('startDate') }}"
                                        name="startDate" id="startDate" class="form-control pull-right">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 bootstrap-timepicker">
                                <label for="">Waktu Mulai</label>
                                <div class="input-group">
                                    <input type="text" value="{{ $mid->waktu_mulai ?? old('startDate') }}"
                                        name="timeBegin" id="timeBegin" class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 bootstrap-timepicker">
                                <label for="">Waktu Selesai</label>
                                <div class="input-group">
                                    <input type="text" name="timeEnd"
                                        value="{{ $mid->waktu_selesai ?? old('startDate') }}" id="timeEnd"
                                        class="form-control timepicker">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
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
