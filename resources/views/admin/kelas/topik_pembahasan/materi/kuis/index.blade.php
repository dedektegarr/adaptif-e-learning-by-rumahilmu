@extends('layouts.admin')
@section('subTitle','Kuis Materi')
@section('materi','Kuis Materi')
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
                <h3 class="box-title"> Kuis Materi ({{ $data->topikPembahasanKelas->kelas->nama_kelas }}), Topik ({{ $data->topikPembahasanKelas->nama_topik }}), Materi ({{ $data->nama_materi }})</h3>
            </div>
            <div class="box-body">
                @if($pretestExists && $posttestExists)
                    <div class="alert alert-danger">
                        Kuis Pretest dan Posttest sudah ditambahkan.
                    </div>
                    <div style="margin-bottom: 10px !important;">
                        <a href="{{ route('kelas.topikPembahasan.materi',[$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id]) }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                    </div>
                @else
                    <form action="{{ route('kelas.topikPembahasan.materi.kuis.post',[$data->topikPembahasanKelas->kelas->id,$data->topikPembahasanKelas->id, $data->id]) }}" method="POST" class="form" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="">Jenis Kuis</label>
                                <select name="jenis_kuis" id="jenis_kuis_add" class="form-control">
                                    @if(!$pretestExists)
                                        <option value="pretest">Pre Test</option>
                                    @endif
                                    @if(!$posttestExists)
                                        <option value="posttest">Post Test</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Jadwal:</label>
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="fa fa-clock-o"></i>
                                    </div>
                                    <input type="text" name="jadwal" class="form-control pull-right" id="jadwal">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="{{ route('kelas.topikPembahasan.materi',[$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id]) }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                            <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                            <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                        </div>
                    </form>
                @endif

                <div class="col-md-12 table-responsive">
                    <a href=""></a>
                    <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Kuis</th>
                                <th>Waktu Selesai</th>
                                <th>Jenis Kuis</th>
                                <th>Soal Kuis</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->kuis as $index => $kuis)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>
                                        @if ($kuis->jenis_kuis == "pretest")
                                            Pre Test
                                        @else
                                            Post Test
                                        @endif
                                    </td>
                                    <td>{{ $kuis->waktu_mulai }}</td>
                                    <td>{{ $kuis->waktu_selesai }}</td>
                                    <td>
                                        <a href="{{ route('kelas.topikPembahasan.materi.soalKuis',[$data->topikPembahasanKelas->kelas->id,$data->topikPembahasanKelas->id, $data->id, $kuis->id]) }}" class="btn btn-default btn-sm btn-flat">{{ $kuis->pertanyaan_count }} Soal Kuis</a>
                                    </td>
                                    <td class="action-buttons">
                                        <a onclick="editKuis({{ $data->topikPembahasanKelas->kelas->id }}, {{ $data->topikPembahasanKelas->id }}, {{ $data->id }}, {{ $kuis->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                        <form action="{{ route('kelas.topikPembahasan.materi.kuis.delete',[$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id, $data->id, $kuis->id]) }}" method="POST" style="margin: 0;">
                                            {{ csrf_field() }} {{ method_field("DELETE") }}
                                            <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                        </form>
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
@endsection
@include('admin/validasi')
@include('admin/kelas/topik_pembahasan/materi/kuis.modal_edit')
@push('scripts')
    <script>
        function editKuis(kelas_id, topik_pembahasan_id, materi_id, kuis_id) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let url = "{{ url('manajemen_kelas') }}/" + kelas_id + '/topik_pembahasan_kelas/' + topik_pembahasan_id + '/manajemen_materi/' + materi_id + '/kuis/' + kuis_id + '/edit';
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            $('#modalEdit').modal('show');
            $('#kuis_id_edit').val(data.id);

            let waktuMulai = moment(data.waktu_mulai).format('MM/DD/YYYY hh:mm A');
            let waktuSelesai = moment(data.waktu_selesai).format('MM/DD/YYYY hh:mm A');
            let jadwal = `${waktuMulai} - ${waktuSelesai}`;
            $('#jadwal_edit').val(jadwal);

            // Generate options for jenis_kuis
            let jenisKuisOptions = '';
            if (!data.pretestExists || data.jenis_kuis === 'pretest') {
                jenisKuisOptions += `<option value="pretest" ${data.jenis_kuis === 'pretest' ? 'selected' : ''}>Pre Test</option>`;
            }
            if (!data.posttestExists || data.jenis_kuis === 'posttest') {
                jenisKuisOptions += `<option value="posttest" ${data.jenis_kuis === 'posttest' ? 'selected' : ''}>Post Test</option>`;
            }
            $('#jenis_kuis_edit').html(jenisKuisOptions);
        },
        error: function() {
            $('#gagal').show(100);
        }
    });

    return false;
}


        $('.show_confirm').click(function(event) {
            var form =  $(this).closest("form");
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

        $('#jadwal').daterangepicker({ timePicker: true, timePickerIncrement: 5, locale: { format: 'MM/DD/YYYY hh:mm A' }})
        $('#jadwal_edit').daterangepicker({ timePicker: true, timePickerIncrement: 5, locale: { format: 'MM/DD/YYYY hh:mm A' }})
    </script>
@endpush

