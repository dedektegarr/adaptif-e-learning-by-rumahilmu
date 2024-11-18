<div class="modal fade" id="modalTambahRubrikPenilaian">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('kelas.topikPembahasan.materi.tugasKelompok.tambahRubrikPenilaian',[$data->topikPembahasanKelas->kelas->id, $data->topikPembahasanKelas->id, $data->id]) }}" method="POST" class="form">
                {{ csrf_field() }} {{ method_field('POST') }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <p style="font-weight: bold"><i class="fa fa-plus"></i>&nbsp;Tambah Rubrik Penilaian</p>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="tugas_kelompok_id" id="tugas_kelompok_id_tambah_rubrik">
                        <div class="col-md-12">
                            <div class="alert alert-danger">Pilih Rubrik Penilaian Yang Ingin Ditambahkan</div>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>
                                            <input type="checkbox" id="checkAll" />
                                        </th>
                                        <th>No</th>
                                        <th>Rubrik Penilaian</th>
                                    </tr>
                                </thead>
                                <tbody id="rubrikPenilaianList">
                                    <!-- Rubrik penilaian akan diisi oleh jQuery -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm btn-flat" data-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Batalkan</button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
