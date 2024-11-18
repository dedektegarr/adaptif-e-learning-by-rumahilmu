<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('indikatorPenilaian.update') }}" method="POST" class="form">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <p style="font-weight: bold"><i class="fa fa-plus"></i>&nbsp;Form Edit</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="indikator_penilaian_id" id="indikator_penilaian_id_edit">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Pilih Indikator</label>
                            <select name="rubrik_penilaian_id" id="rubrik_penilaian_id_edit" class="form-control @error('rubrik_penilaian_id') is-invalid @enderror">
                                <option disabled selected>-- Pilih Rubrik --</option>
                                @foreach ($rubrikPenilaians as $rubrikPenilaian)
                                    <option value="{{ $rubrikPenilaian->id }}">{{ $rubrikPenilaian->rubrik_penilaian }}</option>
                                @endforeach
                            </select>
                            <div>
                                @if ($errors->has('rubrik_penilaian_id'))
                                    <small class="form-text text-danger">{{ $errors->first('rubrik_penilaian_id') }}</small>
                                @endif
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Nama Indikator</label>
                            <input type="text" name="nama_indikator" id="nama_indikator_edit" class="form-control @error('nama_indikator') is-invalid @enderror">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Keterangan</label>
                            <input type="text" name="keterangan" id="keterangan_edit" class="form-control @error('keterangan') is-invalid @enderror">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Skor Indikator</label>
                            <input type="number" name="skor_indikator" id="skor_indikator_edit" class="form-control @error('skor_indikator') is-invalid @enderror">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-sm btn-flat " data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batalkan</button>
                <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
