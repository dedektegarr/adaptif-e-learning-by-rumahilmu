<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('kelas.topikPembahasan.materi.update',[$data->kelas->id, $data->id]) }}" method="POST" class="form">
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <p style="font-weight: bold"><i class="fa fa-plus"></i>&nbsp;Form Edit</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="materi_id" id="materi_id_edit">
                        <div class="form-group col-md-12">
                            <label for="">Materi Pembelajaran (Text)</label>
                            <textarea name="isi_materi" class="form-control" id="isi_materi_edit" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Nama Materi</label>
                            <input type="text" name="nama_materi" id="nama_materi_edit" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">File Materi <small style="color: red">(File Lama : <a id="fileLama"></a>)</small></label>
                            <input type="file" name="file_materi" id="file_materi_edit" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">File Materi Youtube <small style="color: red">(Masukan hanya ID youtubenya saja)</small></label>
                            <input type="text" name="url_materi" id="url_materi_edit" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">File Materi Youtube Kedua <small style="color: red">(Masukan hanya ID youtubenya saja)</small></label>
                            <input type="text" name="url_kedua_materi" id="url_kedua_materi_edit" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">Tingkat</label>
                            <select name="critical_status" class="form-control" id="">
                                @foreach ($options as $option)
                                    <option value="{{ $option }}">{{ $labels[$option] }}</option>
                                @endforeach
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
