<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('kelas.topikPembahasan.materi.tugasKelompok.update',[$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id, $data->id]) }}" method="POST" class="form">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <p style="font-weight: bold"><i class="fa fa-plus"></i>&nbsp;Form Edit</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="tugas_kelompok_id" id="tugas_kelompok_id_edit">
                        <div class="col-md-12">
                            <div class="alert alert-danger">File Lama : <a id="fileLama"></a></div>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Judul Tugas</label>
                            <input type="text" name="judul_tugas" id="judul_tugas_edit" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">File Tugas</a></small></label>
                            <input type="file" name="file_tugas" id="file_tugas_edit" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Tugas (Text)</label>
                            <textarea name="tugas" id="tugas_edit" class="form-control" id="tugas_create" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label>Jadwal:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input type="text" name="jadwal" class="form-control pull-right" id="jadwal_edit">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Status Upload Tugas</label>
                            <select name="status_upload" class="form-control" id="status_upload_edit">
                                <option>-- pilih status upload tugas --</option>
                                <option value="0">Tidak Boleh Upload Lewat Waktu</option>
                                <option value="1">Boleh Upload Lewat Waktu</option>
                            </select>
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
