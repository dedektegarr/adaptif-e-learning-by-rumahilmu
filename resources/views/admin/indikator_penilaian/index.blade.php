@extends('layouts.admin')
@section('subTitle','Indikator Penilaian')
@section('page','Indikator Penilaian')
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
                <h3 class="box-title"> Indikator Penilaian</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12" style="margin-bottom: 10px;">
                        <form action="{{ route('indikatorPenilaian.post') }}" method="POST" class="form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Pilih Rubrik</label>
                                    <select name="rubrik_penilaian_id" id="rubrik_penilaian_id" class="form-control @error('rubrik_penilaian_id') is-invalid @enderror">
                                        <option disabled selected>-- Pilih Rubrik --</option>
                                        @foreach ($rubrikPenilaians as $rubrikPenilaian)
                                            <option value="{{ $rubrikPenilaian->id }}">{{ $rubrikPenilaian->rubrik_penilaian }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Nama Indikator</label>
                                    <input type="text" name="nama_indikator" class="form-control @error('nama_indikator') is-invalid @enderror">
                                    <div>
                                        @if ($errors->has('nama_indikator'))
                                            <small class="form-text text-danger">{{ $errors->first('nama_indikator') }}</small>
                                        @endif
                                    </div>
                                </div>
                                    <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">
                                    <div>
                                        @if ($errors->has('keterangan'))
                                            <small class="form-text text-danger">{{ $errors->first('keterangan') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputEmail1">Skor Indikator</label>
                                    <input type="number" name="skor_indikator" class="form-control @error('skor_indikator') is-invalid @enderror">
                                    <div>
                                        @if ($errors->has('skor_indikator'))
                                            <small class="form-text text-danger">{{ $errors->first('skor_indikator') }}</small>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                                    <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                                    <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Rubrik Penilaian</th>
                                    <th>Indikator Penilaian</th>
                                    <th>Keterangan</th>
                                    <th>Skor Indikator</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($indikatorPenilaians as $index => $indikatorPenilaian)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{{ $indikatorPenilaian->rubrikPenilaian->rubrik_penilaian }}</td>
                                        <td>{{ $indikatorPenilaian->nama_indikator }}</td>
                                        <td>{{ $indikatorPenilaian->keterangan }}</td>
                                        <td>{{ $indikatorPenilaian->skor_indikator }}</td>
                                        <td>
                                            <div class="action-buttons">
                                                <a onclick="editindikatorPenilaian({{ $indikatorPenilaian->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                                <form action="{{ route('indikatorPenilaian.delete',[$indikatorPenilaian->id]) }}" method="POST" style="margin: 0;">
                                                    {{ csrf_field() }} {{ method_field("DELETE") }}
                                                    <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
                                                </form>
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
@include('admin/indikator_penilaian/modal_edit')
@push('scripts')
    <script>
        function editindikatorPenilaian(id){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            url = "{{ url('indikator_penilaian') }}/" + id +'/edit';
            $.ajax({
                url : url,
                type : 'GET',
                success : function(data){
                    $('#modalEdit').modal('show');
                    $('#indikator_penilaian_id_edit').val(data.id);
                    $('#rubrik_penilaian_id_edit').val(data.rubrik_penilaian_id);
                    $('#nama_indikator_edit').val(data.nama_indikator);
                    $('#keterangan_edit').val(data.keterangan);
                    $('#skor_indikator_edit').val(data.skor_indikator);
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

