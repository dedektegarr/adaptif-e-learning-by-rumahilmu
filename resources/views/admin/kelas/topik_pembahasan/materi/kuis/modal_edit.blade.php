<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('kelas.topikPembahasan.materi.kuis.update',[$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id, $data->id]) }}" method="POST" class="form">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p style="font-weight: bold"><i class="fa fa-plus"></i>&nbsp;Form Edit</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="kuis_id" id="kuis_id_edit">

                        <!-- Jenis Kuis -->
                        <div class="form-group col-md-12">
                            <label for="">Jenis Kuis</label>
                            <select name="jenis_kuis" id="jenis_kuis_edit" class="form-control">
                                <!-- Options akan diisi secara dinamis oleh JavaScript -->
                            </select>
                        </div>

                        <!-- Jadwal -->
                        <div class="form-group col-md-12">
                            <label>Jadwal:</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input type="text" name="jadwal" class="form-control pull-right" id="jadwal_edit">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batalkan</button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
