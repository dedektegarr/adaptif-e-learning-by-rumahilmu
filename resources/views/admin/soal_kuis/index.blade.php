@extends('layouts.admin')
@section('subTitle','Soal Kuis Pembahasan')
@section('page','Soal Kuis Pembahasan')
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
                <h3 class="box-title"> Soal Kuis Pembahasan</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <b><i>Perhatian : </i></b><i>Silahkan pilih kelas terlebih dahulu</i>
                        </div>
                    </div>
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kelas</th>
                                    <th>Kode Kelas</th>
                                    <th>Jenis Kelas</th>
                                    <th>Jumlah Soal Kuis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($kelas as $index => $kelas)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $kelas->nama_kelas }}</td>
                                        <td>{{ $kelas->kode_kelas }}</td>
                                        <td>{{ $kelas->jenis_kelas }}</td>
                                        <td>{{ $kelas->bank_soal_pembahasans_count }}</td>
                                        <td>
                                            <div class="action-buttons">
                                                <a href="{{ route('soalKuis.detail',[$kelas->id]) }}" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-check-circle"></i>&nbsp; Pilih</a>
                                            </div>
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
@include('admin/validasi')
@include('admin/rubrik_penilaian/modal_edit')
@push('scripts')
    <script>
        function editRubrikPenilaian(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('rubrik_penilaian') }}/" + id +'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#rubrik_penilaian_id_edit').val(data.id);
                    $('#rubrik_penilaian_edit').val(data.rubrik_penilaian);
                },
                error:function(){
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
    </script>
@endpush

