@extends('mahasiswa/dashboard_template')

@section('dashboardProfile')
    <!--begin::Basic info-->
    <div class="card mb-5 mb-xl-10">
        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Profile Details</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <!--begin::Content-->
        <div id="kt_account_settings_profile_details" class="collapse show">
            <!--begin::Form-->
            <form id="kt_account_profile_details_form" action="{{ route('mahasiswa.dashboard.pengaturan_profil.update') }}"
                class="form" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Foto Profil</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Image input-->
                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                style="background-image: url('{{ asset('assets/media/svg/avatars/blank.svg') }}')">
                                <!--begin::Preview existing avatar-->
                                <div class="image-input-wrapper w-125px h-125px"
                                    style="background-image: url('{{ Auth::user()->foto ? Storage::url(Auth::user()->foto) : asset('assets/media/avatars/blank.svg') }}')">
                                </div>
                                <!--end::Preview existing avatar-->
                                <!--begin::Label-->
                                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                    <i class="ki-duotone ki-pencil fs-7">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <!--begin::Inputs-->
                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Label-->
                                <!--begin::Cancel-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Cancel-->
                                <!--begin::Remove-->
                                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                    <i class="ki-duotone ki-cross fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <!--end::Remove-->
                            </div>
                            <!--end::Image input-->

                            <!-- Display current file name -->
                            @if (Auth::user()->foto)
                                <div class="form-text">File saat ini: {{ basename(Auth::user()->foto) }}</div>
                            @endif

                            <!-- Hidden input to store current file path -->
                            <input type="hidden" name="current_avatar" value="{{ Auth::user()->foto }}">
                            <!--begin::Hint-->
                            <div class="form-text">Jenis file yang diperbolehkan: png, jpg, jpeg.</div>
                            <div class="form-text">Harap pilih file foto persegi untuk tampilan yang maksimal.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nama Lengkap</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <!--begin::Row-->
                            <div class="row">
                                <!--begin::Col-->
                                <div class="col-lg-12 fv-row">
                                    <input type="text" name="nama_lengkap"
                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                        placeholder="nama lengkap" value="{{ Auth::user()->nama_lengkap }}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Nomor Pokok Mahasiswa (NPM)</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="username" class="form-control form-control-lg form-control-solid"
                                placeholder="nomor pokok mahasiswa" value="{{ Auth::user()->username }}" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="email" class="form-control form-control-lg form-control-solid"
                                placeholder="nomor pokok mahasiswa" value="{{ Auth::user()->email }}" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Jenis Kelamin</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="jenis_kelamin" aria-label="pilih jenis kelamin" data-control="select2"
                                data-placeholder="Pilih jenis kelamin..."
                                class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Pilih Jenis Kelamin...</option>
                                <option {{ Auth::user()->jenis_kelamin == 'L' ? 'selected' : '' }} value="L">Laki-Laki
                                </option>
                                <option {{ Auth::user()->jenis_kelamin == 'P' ? 'selected' : '' }} value="P">Perempuan
                                </option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                            <span class="required">Jalur Masuk</span>
                        </label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <select name="jalur_ujian" aria-label="pilih jalur masuk" data-control="select2"
                                data-placeholder="Pilih jalur masuk..."
                                class="form-select form-select-solid form-select-lg fw-semibold">
                                <option value="">Pilih Jalur Masuk...</option>
                                <option {{ Auth::user()->jalur_masuk == 'sbmptn' ? 'selected' : '' }} value="sbmptn">SBMPTM
                                </option>
                                <option {{ Auth::user()->jalur_masuk == 'snmptn' ? 'selected' : '' }} value="snmptn">
                                    UNDANGAN/SNMPTN</option>
                                <option {{ Auth::user()->jalur_masuk == 'mandiri' ? 'selected' : '' }} value="mandiri">
                                    MANDIRI</option>
                            </select>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Rata-Rata Nilai Ujian</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="rata_ujian"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="rata-rata nilai ujian" value="{{ Auth::user()->rata_ujian }}" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Asal Sekolah</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="asal_sekolah"
                                class="form-control form-control-lg form-control-solid" placeholder="asal sekolah"
                                value="{{ Auth::user()->asal_sekolah }}" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-6">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Asal Provinsi Sma</label>
                        <!--end::Label-->
                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <input type="text" name="asal_provinsi_sma"
                                class="form-control form-control-lg form-control-solid" placeholder="asal provinsi sma"
                                value="{{ Auth::user()->asal_provinsi_sma }}" />
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-0">
                        <!--begin::Label-->
                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Akun Aktif</label>
                        <!--begin::Label-->
                        <!--begin::Label-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                <input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing"
                                    checked="checked" disabled />
                                <label class="form-check-label" for="allowmarketing"></label>
                            </div>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->
                </div>
                <!--end::Card body-->
                <!--begin::Actions-->
                <div class="card-footer d-flex justify-content-end py-6 px-9">
                    <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Simpan
                        Perubahan</button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Basic info-->
@endsection

@push('scripts')
    <script>
        document.getElementById('kt_account_profile_details_submit').addEventListener('click', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: "Anda akan mengupdate data profil?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, update data!'
            }).then((result) => {
                if (result.isConfirmed) {
                    let form = document.getElementById('kt_account_profile_details_form');
                    let formData = new FormData(form);

                    fetch(form.action, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest'
                            }
                        })
                        .then(response => {
                            // Coba parsing response JSON
                            return response.json().catch(() => {
                                // Jika parsing JSON gagal, lemparkan error ke catch
                                throw new Error('Response is not valid JSON');
                            });
                        })
                        .then(data => {
                            if (data.success) {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: 'Profil berhasil diupdate.',
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    // Reload halaman setelah profil berhasil di-update
                                    window.location.reload();
                                });
                                document.getElementById('completion-percentage').textContent = data
                                    .completionPercentage + '%';
                                document.querySelector('[role="progressbar"]').style.width = data
                                    .completionPercentage + '%';
                                document.querySelector('[role="progressbar"]').setAttribute(
                                    'aria-valuenow', data.completionPercentage);
                            } else {
                                let errorMessage = '';
                                for (let key in data.errors) {
                                    errorMessage += data.errors[key].join('<br>') + '<br>';
                                }
                                Swal.fire({
                                    title: 'Error!',
                                    html: errorMessage, // Menggunakan html untuk menampilkan pesan error
                                    icon: 'error',
                                    confirmButtonText: 'Tutup'
                                });
                            }
                        })
                        .catch(error => {
                            // Menangani error jika ada masalah dalam request atau parsing response
                            console.error('Error:', error);
                            Swal.fire({
                                title: 'Error!',
                                text: 'Terdapat error ketika mengupdate.',
                                icon: 'error',
                                confirmButtonText: 'Tutup'
                            });
                        });
                }
            });
        });
    </script>
@endpush
