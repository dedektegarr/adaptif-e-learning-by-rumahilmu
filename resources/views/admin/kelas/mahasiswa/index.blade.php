@extends('layouts.admin')
@section('subTitle','Mahasiswa Mengambil Kelas')
@section('page','Mahasiswa Mengambil Kelas')
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
                <h3 class="box-title"> Mahasiswa Mengambil Kelas ({{ $data->nama_kelas }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Email</th>
                                    <th>Nomor Pokok Mahasiswa (NPM)</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Jalur Masuk</th>
                                    <th>Asal Sekolah</th>
                                    <th>Rata-Rata Ujian</th>
                                    <th>Asal Provinsi SMA</th>
                                    <th>Aktivitas</th>
                                    <th>Riwayat Belajar</th>
                                    <th>Riwayat Kuis</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->mahasiswas as $index => $mahasiswa)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $mahasiswa->nama_lengkap }}</td>
                                        <td>{{ $mahasiswa->email }}</td>
                                        <td>{{ $mahasiswa->username }}</td>
                                        <td>{{ $mahasiswa->jenis_kelamin }}</td>
                                        <td>{{ $mahasiswa->jalur_masuk }}</td>
                                        <td>{{ $mahasiswa->asal_sekolah }}</td>
                                        <td>{{ $mahasiswa->rata_ujian }}</td>
                                        <td>{{ $mahasiswa->asal_provinsi_sma }}</td>
                                        <td>
                                            <a href="{{ route('kelas.mahasiswa.aktivitas',[$data->id, $mahasiswa->id]) }}" class="btn btn-primary btn-sm btn-flat">{{ $mahasiswa->activities_count }} Data</a>
                                        </td>
                                        <td>
                                            <a href="{{ route('kelas.mahasiswa.riwayatBelajar',[$data->id, $mahasiswa->id]) }}" class="btn btn-success btn-sm btn-flat">{{ $mahasiswa->details_count }} Data</a>
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-warning btn-sm btn-flat">{{ $mahasiswa->details_count }} Data</a>
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
@include('admin/kelas/topik_pembahasan.modal_edit')
@push('scripts')
    <script>
        $(document).ready(function() {
            // Inisialisasi CKEditor untuk textarea 'cpmk_create'
            if (typeof ClassicEditor !== 'undefined') {
                document.querySelectorAll('#cpmk_create').forEach((element) => {
                    ClassicEditor
                        .create(element)
                        .catch(error => {
                            console.error(error);
                        });
                });

                var cpmkEditEditor;

                $('#modalEdit').on('shown.bs.modal', function() {
                    if (!cpmkEditEditor) {
                        ClassicEditor
                            .create(document.querySelector('#cpmk_edit'))
                            .then(editor => {
                                cpmkEditEditor = editor;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });

                $('#modalEdit').on('hidden.bs.modal', function() {
                    if (cpmkEditEditor) {
                        cpmkEditEditor.destroy()
                            .then(() => {
                                cpmkEditEditor = null;
                            })
                            .catch(error => {
                                console.error(error);
                            });
                    }
                });
            } else {
                console.error('ClassicEditor is not defined');
            }
        });

        function editmahasiswa(kelas_id, topik_pembahasan_id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('manajemen_kelas') }}/" + kelas_id + '/topik_pembahasan_kelas/' + topik_pembahasan_id+'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#topik_pembahasan_id_edit').val(data.id);
                    $('#nama_topik_edit').val(data.nama_topik);
                    $('#topik_ke_edit').val(data.topik_ke);
                    $('#cpmk_edit').val(data.cpmk);

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

