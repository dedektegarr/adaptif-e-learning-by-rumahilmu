<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('soalKuis.update',[$kelas->id]) }}" method="POST" class="form">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <p style="font-weight: bold"><i class="fa fa-plus"></i>&nbsp;Form Edit</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="soal_kuis_id" id="soal_kuis_id_edit">

                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Level Berpikir</label>
                            <select name="level_berfikir" class="form-control" id="level_berfikir_edit" required>
                                <option disabled selected>-- pilih Level --</option>
                                <option value="Mengingat">Mengingat</option>
                                <option value="Memahami">Memahami</option>
                                <option value="Menerapkan">Menerapkan</option>
                                <option value="Menganalisis">Menganalisis</option>
                                <option value="Mengevaluasi">Mengevaluasi</option>
                                <option value="Menciptakan">Menciptakan</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Pertanyaan</label>
                            <textarea name="pertanyaan" class="form-control" id="pertanyaan_edit" cols="30" rows="10"></textarea>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="">Pembahasan</label>
                            <textarea name="pembahasan" class="form-control" id="pembahasan_edit" cols="30" rows="10"></textarea>
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
