@extends('layouts.admin')
@section('subTitle', 'Soal UTS')
@section('page', 'Manajemen Soal UTS')
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
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Manajemen Soal Ujian Tengah Semester (UTS)</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <form action="{{ route('dosen.uts.soal.post', [$midId]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Pilih Jenis Soal</label>
                                <select name="jenis" id="jenis"
                                    class="form-control @error('jenis') is-invalid @enderror">
                                    <option disabled selected>-- pilih jenis soal --</option>
                                    @foreach ($jenis as $jenis)
                                        <option value="{{ $jenis->level_berfikir }}"
                                            {{ old('jenis') == $jenis->level_berfikir ? 'selected' : '' }}>
                                            {{ $jenis->level_berfikir }}</option>
                                    @endforeach
                                </select>
                                <div>
                                    @if ($errors->has('jenis'))
                                        <small class="form-text text-danger">{{ $errors->first('jenis') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Pilih Soal</label>
                                <select name="questionSetId" id="questionSetId"
                                    class="form-control @error('questionSetId') is-invalid @enderror">
                                    <option disabled selected>-- pilih soal --</option>
                                </select>
                                <div>
                                    @if ($errors->has('questionSetId'))
                                        <small class="form-text text-danger">{{ $errors->first('questionSetId') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <label for="exampleInputEmail1">Detail Soal</label>
                                <div style="padding: 1em; border-radius: .3em; min-height: 200px; background-color: rgba(239, 239, 239, 1)"
                                    contenteditable="false" id="review" readonly></div>
                                <div>
                                    @if ($errors->has('questionSetId'))
                                        <small class="form-text text-danger">{{ $errors->first('questionSetId') }}</small>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <a href="{{ route('dosen.uts') }}" class="btn btn-warning btn-sm" style="color: white"><i
                                        class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                                <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                        class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                        class="fa fa-check-circle"></i>&nbsp;Gunakan Soal</button>
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
                            <table class="table table-striped table-bordered" id="soalTable" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Soal</th>
                                        <th>Level Berfikir</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($mid_questions as $question)
                                        <tr>
                                            <td> {{ $no++ }} </td>
                                            <td> {!! $question->bankSoalPembahasan->pertanyaan !!} </td>
                                            <td> {{ $question->bankSoalPembahasan->level_berfikir }} </td>

                                            <td style="display:inline-block !important;">
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <form
                                                                action="{{ route('dosen.uts.soal.delete', [$midId, $question->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <input type="hidden" name="quizId"
                                                                    value="{{ $midId }}">
                                                                <button type="submit"
                                                                    onclick="return confirm('Anda yaking ingin menghapus soal ini?')"
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
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#questionSetId").select2();
        });

        $(document).ready(function() {
            $('#soalTable').DataTable({
                responsive: true,
            });
        });

        function deleteCourse(id) {
            $('#modaldelete').modal('show');
            $('#id_hapus').val(id);
        }

        $(document).ready(function() {
            $('#questionSetId').change(function() {
                var id = $('#questionSetId').val();
                $.ajax({
                    url: `{{ url('bank_soal/${id}') }}`,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        $('#review').html(data.pertanyaan)
                    },
                    error: function() {
                        alert("Nothing Data");
                    }
                });
            })
        });

        $(document).ready(function() {
            $('#jenis').change(function() {
                var jenis = $('#jenis').val();
                var div = $(this).parent().parent();
                var courseId = {{ $courseId }};
                var op = " ";
                $.ajax({
                    url: `{{ url('bank_soal') }}?level_berfikir=${jenis}&kelasId=${courseId}`,
                    type: "GET",
                    dataType: "JSON",
                    success: function(data) {
                        op += '<option value="0" selected disabled>-- pilih soal --</option>';
                        for (var i = 0; i < data.length; i++) {
                            var ke = 1 + i;
                            op += '<option value="' + data[i].id + '">' + data[i].pertanyaan +
                                '</option>';
                        }
                        div.find('#questionSetId').html(" ");
                        div.find('#questionSetId').append(op);
                    },
                    error: function() {
                        alert("Nothing Data");
                    }
                });
            })
        })
    </script>
@endpush
