@extends('layouts.admin')
@section('subTitle', 'UAS')
@section('page', 'Ujian Akhir Semester')
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
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Manajemen Ujian Akhir Semester</h3>
                    <div class="pull-right">
                        <a href="{{ route('dosen.uas.add') }}" class="btn btn-primary btn-sm btn-flat"><i
                                class="fa fa-plus"></i>&nbsp; Tambah UAS</a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
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
                                        <th>Kelas</th>
                                        <th>Tanggal Ujian</th>
                                        <th>Waktu Mulai</th>
                                        <th>Waktu Selesai</th>
                                        <th style="text-align:center">Soal Ujian</th>
                                        <th style="text-align:center">Sesi Ujian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($final_exams as $exam)
                                        @php
                                            $jumlah_soal = \App\Models\UasSoal::where('uas_id', $exam->id)
                                                ->get()
                                                ->count();
                                            $jumlah_sesi = \App\Models\UasSesi::where('uas_id', $exam->id)
                                                ->get()
                                                ->count();
                                        @endphp
                                        <tr>
                                            <td> {{ $no++ }} </td>
                                            <td>
                                                <a href="">{{ $exam->kelas->nama_kelas }}</a>
                                            </td>
                                            <td>
                                                {{ Carbon\Carbon::parse($exam->tanggal_dilaksanakan)->isoFormat('D MMMM Y') }}
                                            </td>
                                            <td> {{ $exam->waktu_mulai }} </td>
                                            <td> {{ $exam->waktu_selesai }}</td>
                                            <td style="text-align: center">
                                                <a href="{{ route('dosen.uas.soal', [$exam->id]) }}"
                                                    class="btn btn-primary btn-sm btn-flat">{{ $jumlah_soal }}</a>
                                            </td>
                                            <td style="text-align: center">
                                                <a href="{{ route('dosen.uas.sesi', [$exam->id]) }}"
                                                    class="btn btn-success btn-sm btn-flat">{{ $jumlah_sesi }}</a>
                                            </td>
                                            <td>
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <a href="{{ route('dosen.uas.edit', [$exam->id]) }}"
                                                                class="btn btn-primary btn-sm btn-flat"><i
                                                                    class="fa fa-edit"></i>&nbsp; Edit</a>
                                                        </td>
                                                        <td>
                                                            <form action="{{ route('dosen.uas.delete', [$exam->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    onclick="return confirm('Anda yakin ingin menghapus UAS ini?')"
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
                    <!-- Modal Hapus-->
                    {{--  <div class="modal fade modal-danger" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action=" {{ route('teacher.quiz.delete',[$exam->id]) }}" method="POST">
                            {{ csrf_field() }} {{ method_field('DELETE') }}
                            <div class="modal-header">
                                <p style="font-size:15px; font-weight:bold;" class="modal-title"><i class="fa fa-trash"></i>&nbsp;Confirmation Form To Delete</p>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="hidden" name="id" id="id_hapus">
                                        Are you sure you want to delete this quiz?
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" style="border: 1px solid #fff;background: transparent;color: #fff;" class="btn btn-sm btn-outline pull-left" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp; Cancel</button>
                                <button type="submit" style="border: 1px solid #fff;background: transparent;color: #fff;" class="btn btn-sm btn-outline"><i class="fa fa-check-circle"></i>&nbsp; Yes, Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@include('admin/validasi')
@push('scripts')
    <script>
        $(document).ready(function() {
            $('.show_confirm').click(function(event) {
                event.preventDefault();
                var form = $(this).closest("form");

                swal({
                        title: "Apakah Anda Yakin?",
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
        });
    </script>
@endpush
