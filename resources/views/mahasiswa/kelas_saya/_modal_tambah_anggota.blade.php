<div class="modal fade" id="kt_modal_tambah_anggota" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header align-items-start px-10">
                <!--begin::Modal title-->
                <h2 class="fw-bold">Tambah Anggota Kelompok</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </button>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 pt-3 pb-5">
                <!--begin::Alert-->
                <div class="alert alert-danger d-flex align-items-center p-5 mb-5">
                    <i class="fas fa-exclamation-triangle fa-2x me-3 text-danger"></i>
                    <div class="d-flex flex-column">
                        <span class="fw-bold">Tambahkan mahasiswa yang belum ditambahkan di kelompok lain.</span>
                    </div>
                </div>
                <!--end::Alert-->

                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form"
                    action="{{ route('mahasiswa.kelas_saya.simpan_anggota', [$kelas->id, $materi->id, $tugas->id]) }}">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Nama Anggota</span>
                        </label>
                        <select class="form-select form-select-sm form-select-solid" name="anggota_id[]"
                            data-control="select2" data-close-on-select="true" data-placeholder="Pilih anggota"
                            data-allow-clear="true" multiple="multiple">
                            <option></option>
                            @foreach ($mahasiswas as $mahasiswa)
                                <option value="{{ $mahasiswa->mahasiswa->id }}">
                                    {{ $mahasiswa->mahasiswa->nama_lengkap }}</option>
                            @endforeach
                        </select>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light btn-sm me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary btn-sm">
                            <span class="indicator-label">Submit</span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
