@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
    <div class="flex-lg-row-fluid" id="reload">
        <!--begin::Extended content-->
        @foreach ($materi->tugasKelompoks as $tugas)
            <div class="mb-1">
                <!--begin::Content-->
                <div class="mb-15">
                    <!--begin::Title-->
                    <h4 class="fs-2x text-gray-800 w-bolder mb-6">
                        <div class="tugas tugas-clickable" data-tugas-id="{{ $tugas->id }}">
                            {{ $tugas->judul_tugas }}
                        </div>
                    </h4>
                    <!--end::Title-->

                    <div class="mb-5">
                        <div class="fw-semibold text-gray-600 fs-5">Waktu Pengerjaan:</div>
                        <div class="fw-bold fs-6 text-gray-800 d-flex flex-column">
                            {{ \Carbon\Carbon::parse($tugas->waktu_mulai)->translatedFormat('l, d F Y') }} -
                            {{ \Carbon\Carbon::parse($tugas->waktu_selesai)->translatedFormat('l, d F Y') }}
                            <br>
                            <span class="fs-7 text-danger d-flex align-items-center mt-2">
                                <span class="bullet bullet-dot bg-danger mx-2"></span>
                                @php
                                    $sisaHari = floor(
                                        \Carbon\Carbon::now()->diffInDays(
                                            \Carbon\Carbon::parse($tugas->waktu_selesai),
                                            false,
                                        ),
                                    );
                                @endphp

                                @if ($sisaHari > 0)
                                    Selesai Dalam {{ $sisaHari }} hari
                                @elseif ($sisaHari == 0)
                                    Tugas berakhir hari ini
                                @else
                                    Waktu pengerjaan sudah berakhir
                                @endif
                            </span>

                            @if ($tugas->status_upload == 1)
                                <span class="fs-7 text-warning d-flex align-items-center mt-1">
                                    <span class="bullet bullet-dot bg-warning mx-2"></span>
                                    Anda tetap dapat mengunggah meskipun waktu pengerjaan sudah habis
                                </span>
                            @elseif ($tugas->status_upload == 0)
                                <span class="fs-7 text-warning d-flex align-items-center mt-1">
                                    <span class="bullet bullet-dot bg-warning mx-2"></span>
                                    Waktu pengerjaan sudah berakhir, Anda tidak dapat mengunggah lagi
                                </span>
                            @endif
                        </div>
                    </div>

                    <a target="_blank" href="{{ asset($tugas->file_tugas) }}" download
                        class="text-white btn btn-success btn-sm my-1">
                        Download File
                    </a>

                    <!--begin::Text-->
                    <p class="fw-semibold fs-4 text-gray-600 mb-2">
                        {!! $tugas->tugas !!}
                    </p>
                    <!--end::Text-->
                    <div class="separator separator-dashed my-5"></div>

                    <div class="py-2 mb-5">
                        <h2>Formulir Pengumpulan Tugas Kelompok</h2>
                    </div>
                    @php
                        $currentTime = new DateTime();
                        $deadlineTime = new DateTime($tugas->waktu_selesai);
                        $startTime = new DateTime($tugas->waktu_mulai);
                        $statusUpload = $tugas->status_upload == 1;

                        $sudahDitambahkan = \App\Models\PengumpulanTugasKelompokDetail::join(
                            'pengumpulan_tugas_kelompoks',
                            'pengumpulan_tugas_kelompoks.id',
                            'pengumpulan_tugas_kelompok_details.pengumpulan_tugas_kelompok_id',
                        )
                            ->join(
                                'tugas_kelompok_materis',
                                'tugas_kelompok_materis.id',
                                'pengumpulan_tugas_kelompoks.tugas_kelompok_id',
                            )
                            ->join('materis', 'materis.id', 'tugas_kelompok_materis.materi_id')
                            ->join('topik_pembahasan_kelas', 'topik_pembahasan_kelas.id', 'materis.topik_pembahasan_id')
                            ->where('pengumpulan_tugas_kelompok_details.mahasiswa_id', auth()->user()->id)
                            ->where('topik_pembahasan_kelas.id', $tugas->materi->topik_pembahasan_id)
                            ->first();

                        $anggotaKelompok = [];
                        $penilaian = [];
                        $isKetua = false;
                        $isAnggota = false;
                        $fileUploaded = false;

                        if ($sudahDitambahkan) {
                            $anggotaKelompok = \App\Models\PengumpulanTugasKelompokDetail::where(
                                'pengumpulan_tugas_kelompok_id',
                                $sudahDitambahkan->pengumpulan_tugas_kelompok_id,
                            )
                                ->with('mahasiswa')
                                ->get();
                            $isAnggota = true;
                            $isKetua =
                                $anggotaKelompok->where('mahasiswa_id', auth()->id())->first()->status_anggota ===
                                'ketua';
                            $fileUploaded = $sudahDitambahkan->file_tugas != null;

                            $penilaian = \App\Models\PenilaianKelompok::where(
                                'topik_pembahasan_kelas_id',
                                $tugas->materi->topik_pembahasan_id,
                            )
                                ->where('penilai_id', auth()->user()->id)
                                ->pluck('mahasiswa_id')
                                ->toArray();
                        }
                    @endphp
                    @if ($currentTime < $startTime)
                        <div
                            class="alert alert-dismissible bg-light-warning border-warning border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
                            <i class="ki-duotone ki-warning fs-2hx text-warning me-4 mb-5 mb-sm-0"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <h5 class="mb-1">Pengumpulan Tugas Belum Dimulai</h5>
                                <span>Maaf, waktu pengumpulan tugas belum dimulai. Harap tunggu hingga waktu mulai
                                    tiba.</span>
                            </div>
                        </div>
                    @elseif ($isAnggota)
                        <!-- Display group information and file -->
                        <div
                            class="alert alert-dismissible bg-light-primary border-primary border-dashed d-flex flex-column p-5 mb-2">
                            <i class="ki-duotone ki-primary fs-2hx text-primary me-4 mb-5"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i>
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <h5 class="mb-1">Anda adalah {{ $isKetua ? 'ketua' : 'anggota' }} kelompok</h5>
                                @if ($fileUploaded)
                                    <span>File tugas kelompok Anda telah dikumpulkan.</span>
                                    <span class="text-primary" style="font-size:11px; margin-top: 10px;">File Tugas:
                                        {{ $sudahDitambahkan->file_tugas }}</span>
                                    @if ($isKetua && $statusUpload)
                                        <div class="mt-3">
                                            <form id="form-hapus-tugas"
                                                action="{{ route('mahasiswa.kelas_saya.hapusFile_tugas_kelompok', [$kelas->id, $materi->id, $tugas->id]) }}"
                                                method="POST">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm btn-flat"
                                                    id="btn-hapus-tugas">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                @else
                                    <span>Belum ada file tugas yang dikumpulkan.</span>
                                @endif
                            </div>
                        </div>

                        <!-- Display group members -->
                        <div class="col-lg-12">
                            <div class="card card-flush h-lg-100">
                                <div class="card-header mt-6">
                                    <div class="card-title flex-column">
                                        <h3 class="fw-bold mb-1">Anggota Kelompok</h3>
                                        @if ($isKetua)
                                            <div class="fs-6 text-gray-500">Tambahkan mahasiswa yang belum memiliki kelompok
                                            </div>
                                        @endif
                                    </div>
                                    @if ($isKetua && $statusUpload)
                                        <div class="card-toolbar">
                                            <a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_tambah_anggota">Tambah Anggota</a>
                                        </div>
                                    @endif
                                </div>
                                <div class="card-body p-9 pt-3 mb-9">
                                    <table class="table align-middle table-row-dashed fs-6 gy-5">
                                        <thead>
                                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="min-w-100px">Nama Lengkap</th>
                                                <th class="min-w-100px">Status Anggota</th>
                                                <th class="min-w-50px">Foto</th>
                                                <th class="min-w-100px text-center">Penilaian</th>
                                                @if ($isKetua && $statusUpload)
                                                    <th class="min-w-100px text-end">Aksi</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($anggotaKelompok as $anggota)
                                                <tr>
                                                    <td>
                                                        <a
                                                            class="fs-7 fw-reguler text-gray-900 text-hover-primary">{{ $anggota->mahasiswa->nama_lengkap }}</a>
                                                    </td>
                                                    <td style="text-transform: capitalize;" class="fs-7">
                                                        {{ $anggota->status_anggota }} Kelompok
                                                    </td>
                                                    <td>
                                                        <div class="symbol symbol-35px symbol-circle">
                                                            <img src="{{ asset('storage/' . ($anggota->mahasiswa->foto ?? 'fotos/profil.jpg')) }}"
                                                                alt="User Photo" />
                                                        </div>
                                                    </td>
                                                    @if ($anggota->mahasiswa_id != auth()->id())
                                                        <td class="text-center">
                                                            @if (in_array($anggota->mahasiswa_id, $penilaian))
                                                                <i class="fa fa-check-circle text-success"></i>
                                                            @else
                                                                <button class="btn btn-sm btn-primary"
                                                                    data-bs-toggle="modal" data-bs-target="#modalPenilaian"
                                                                    data-tugas-id="{{ $tugas->id }}"
                                                                    data-kelompok="{{ $sudahDitambahkan->kelompok }}"
                                                                    data-mahasiswa-id="{{ $anggota->mahasiswa_id }}"
                                                                    data-nama-mahasiswa="{{ $anggota->mahasiswa->nama_lengkap }}">
                                                                    Penilaian
                                                                </button>
                                                            @endif
                                                        </td>
                                                    @endif
                                                    @if ($isKetua && $anggota->mahasiswa_id != auth()->id() && $statusUpload)
                                                        <td class="text-end">
                                                            <button class="btn btn-sm btn-danger delete-member"
                                                                data-member-id="{{ $anggota->mahasiswa_id }}"
                                                                data-kelas-id="{{ $kelas->id }}"
                                                                data-materi-id="{{ $materi->id }}"
                                                                data-tugas-id="{{ $tugas->id }}"
                                                                data-pengumpulandetail-id="{{ $anggota->id }}">
                                                                Hapus
                                                            </button>
                                                        </td>
                                                    @endif
                                                </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    @elseif ($statusUpload)
                        <!-- Button to trigger upload modal for users not in a group -->
                        <form class="form" action="#" method="post">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label text-lg-right">Upload Files:</label>
                                <div class="col-lg-10">
                                    <div class="dropzone dropzone-queue mb-2" id="kt_tambah_tugas_kelompok_file"
                                        data-kelas-id="{{ $kelas->id }}" data-materi-id="{{ $materi->id }}"
                                        data-tugas-id="{{ $tugas->id }}">
                                        <div class="dropzone-panel mb-lg-0 mb-2">
                                            <a class="dropzone-select btn btn-sm btn-primary me-2">Pilih File</a>
                                            <a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
                                        </div>
                                        <div class="dropzone-items wm-200px">
                                            <div class="dropzone-item" style="display:none">
                                                <div class="dropzone-file">
                                                    <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                        <span data-dz-name>some_image_file_name.jpg</span>
                                                        <strong>(<span data-dz-size>340kb</span>)</strong>
                                                    </div>
                                                    <div class="dropzone-error" data-dz-errormessage></div>
                                                </div>
                                                <div class="dropzone-progress">
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
                                                            data-dz-uploadprogress>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropzone-toolbar">
                                                    <span class="dropzone-delete" data-dz-remove><i
                                                            class="bi bi-x fs-1"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <span class="form-text text-muted">Maksimal ukuran file adalah 1MB, harap mengupload
                                        hanya 1 file saja.</span>
                                </div>
                            </div>
                        </form>
                    @else
                        <div
                            class="alert alert-dismissible bg-light-danger border-danger border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
                            <i class="ki-duotone ki-error fs-2hx text-danger me-4 mb-5 mb-sm-0"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <div class="d-flex flex-column pe-0 pe-sm-10">
                                <h5 class="mb-1">Batas Waktu Pengumpulan Tugas Telah Berlalu</h5>
                                <span>Maaf, Anda sudah tidak dapat mengumpulkan tugas ini karena batas waktu pengumpulan
                                    telah berlalu atau pengumpulan tugas telah ditutup.</span>
                            </div>
                        </div>
                    @endif
                    <!-- Modal for uploading assignment -->
                    <div class="modal fade" id="kt_modal_upload_tugas" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered mw-650px">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="fw-bold">Upload Tugas Kelompok</h2>
                                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                                class="path2"></span></i>
                                    </div>
                                </div>
                                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                    <form id="kt_modal_upload_tugas_form" class="form" action="#">
                                        <div class="fv-row mb-7">
                                            <label class="d-block fw-semibold fs-6 mb-5">File Tugas</label>
                                            <div class="dz-dropzone dz-clickable" id="kt_modal_upload_tugas_dropzone">
                                                <div class="dz-message needsclick">
                                                    <i class="ki-duotone ki-file-up fs-3hx text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    <div class="ms-4">
                                                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or
                                                            click to upload.</h3>
                                                        <span class="fs-7 fw-semibold text-gray-400">Upload up to 10
                                                            files</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center pt-15">
                                            <button type="reset" class="btn btn-light me-3"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" id="kt_modal_upload_tugas_submit"
                                                class="btn btn-primary">
                                                <span class="indicator-label">Submit</span>
                                                <span class="indicator-progress">Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Extended content-->

            @include('mahasiswa/kelas_saya._modal_tambah_anggota')

            @include('mahasiswa/kelas_saya._modal_penilaian_kelompok')
        @endforeach
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hapusButton = document.getElementById('btn-hapus-tugas');
            if (hapusButton) {
                hapusButton.addEventListener('click', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak dapat membatalkan aksi ini setelah dilakukan!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById('form-hapus-tugas').submit();
                        }
                    });
                });
            }
        });


        document.querySelectorAll('.delete-member').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const memberId = this.getAttribute('data-member-id');
                const kelasId = this.getAttribute('data-kelas-id'); // Ambil ID kelas
                const materiId = this.getAttribute('data-materi-id'); // Ambil ID materi
                const tugasId = this.getAttribute('data-tugas-id');
                const pengumpulanDetailId = this.getAttribute('data-pengumpulandetail-id');

                const deleteMemberUrl =
                    `{{ route('mahasiswa.kelas_saya.hapus_anggota', ['kelas' => ':kelas', 'materi' => ':materi', 'tugasKelompok' => ':tugas', 'anggota' => ':anggota', 'pengumpulanTugasDetail' => ':pengumpulanDetailId']) }}`
                    .replace(':kelas', kelasId)
                    .replace(':materi', materiId)
                    .replace(':tugas', tugasId)
                    .replace(':anggota', memberId)
                    .replace(':pengumpulanDetailId', pengumpulanDetailId);
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Klik Ya, Hapus jika anda yakin!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Send delete request
                        fetch(deleteMemberUrl, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                },
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    Swal.fire(
                                        'Terhapus!',
                                        'Anggota kelompok telah dihapus.',
                                        'success'
                                    ).then(() => {
                                        // Reload the page or update the UI
                                        location.reload();
                                    });
                                } else {
                                    Swal.fire(
                                        'Gagal!',
                                        'Terjadi kesalahan saat menghapus anggota.',
                                        'error'
                                    );
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                submitButton.removeAttribute('data-kt-indicator');
                                submitButton.disabled = false;

                                Swal.fire({
                                    text: error.message ||
                                        "Terjadi kesalahan jaringan. Silakan coba lagi nanti.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, mengerti!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            });
                    }
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Ambil elemen dropzone dan parameter dari data-attributes
            const dropzone = document.querySelector("#kt_tambah_tugas_kelompok_file");
            if (dropzone) {
                const kelasId = dropzone.getAttribute('data-kelas-id');
                const materiId = dropzone.getAttribute('data-materi-id');
                const tugasId = dropzone.getAttribute('data-tugas-id');

                // Hasilkan URL route menggunakan Blade dengan parameter yang benar
                const routeUploadTugasKelompok =
                    `{{ route('mahasiswa.kelas_saya.upload_tugas_kelompok', ['kelas' => 'PLACEHOLDER_KELAS', 'materi' => 'PLACEHOLDER_MATERI', 'tugasKelompok' => 'PLACEHOLDER_TUGAS']) }}`
                    .replace('PLACEHOLDER_KELAS', encodeURIComponent(kelasId))
                    .replace('PLACEHOLDER_MATERI', encodeURIComponent(materiId))
                    .replace('PLACEHOLDER_TUGAS', encodeURIComponent(tugasId));

                // Inisialisasi Dropzone dengan URL dinamis
                var myDropzone = new Dropzone("#kt_tambah_tugas_kelompok_file", {
                    url: routeUploadTugasKelompok, // URL upload dinamis
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}" // Kirim CSRF token untuk keamanan
                    },
                    maxFilesize: 1, // Max filesize in MB
                    previewTemplate: document.querySelector("#kt_tambah_tugas_kelompok_file .dropzone-item")
                        .parentNode.innerHTML,
                    previewsContainer: "#kt_tambah_tugas_kelompok_file .dropzone-items", // Define the container to display the previews
                    clickable: "#kt_tambah_tugas_kelompok_file .dropzone-select" // Define the element that should be used as click trigger to select files.
                });

                myDropzone.on("addedfile", function(file) {
                    if (myDropzone.files.length > 1) {
                        myDropzone.removeFile(file);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Anda hanya dapat mengunggah 1 file saja!'
                        });
                    } else {
                        const dropzoneItems = document.querySelectorAll(
                            '#kt_tambah_tugas_kelompok_file .dropzone-item');
                        if (dropzoneItems.length > 0) {
                            const lastDropzoneItem = dropzoneItems[dropzoneItems.length - 1];

                            // Apply the style only to the last item
                            lastDropzoneItem.style.display = ''; // Uncomment and adjust the style as needed

                            // Set a delay before showing the Swal alert
                            setTimeout(() => {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: '{{ session('success') }}',
                                    icon: 'success',
                                    confirmButtonText: 'Tutup',
                                    allowOutsideClick: false, // Disable closing by clicking outside
                                    allowEscapeKey: false, // Disable closing by pressing Esc
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // Reload only the content inside the div with id="relad"
                                        $.ajax({
                                            url: window.location
                                            .href, // Re-fetch current page content
                                            success: function(response) {
                                                // Use jQuery to replace the content of #relad with the new content
                                                $('#reload').html($(response)
                                                    .find('#reload').html());
                                            },
                                            error: function() {
                                                console.error(
                                                    'Failed to reload content'
                                                    );
                                            }
                                        });
                                    }
                                });
                            }, 300); // 300ms delay (adjust as needed)
                        }
                    }
                });

                myDropzone.on("totaluploadprogress", function(progress) {
                    const progressBars = document.querySelectorAll(
                        '#kt_tambah_tugas_kelompok_file .progress-bar');
                    progressBars.forEach(progressBar => {
                        progressBar.style.width = progress + "%";
                    });
                });

                myDropzone.on("sending", function(file) {
                    const progressBars = document.querySelectorAll(
                        '#kt_tambah_tugas_kelompok_file .progress-bar');
                    progressBars.forEach(progressBar => {
                        progressBar.style.opacity = "1";
                    });
                });

                myDropzone.on("complete", function(progress) {
                    const progressBars = document.querySelectorAll(
                        '#kt_tambah_tugas_kelompok_file .dz-complete');

                    setTimeout(function() {
                        progressBars.forEach(progressBar => {
                            progressBar.querySelector('.progress-bar').style.opacity = "0";
                            progressBar.querySelector('.progress').style.opacity = "0";
                        });
                    }, 300);
                });
            }
        });

        const form = document.querySelector('#kt_modal_new_target_form');
        const submitButton = document.querySelector('#kt_modal_new_target_submit');

        if (form) {
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                const selectElement = form.querySelector('select[name="anggota_id[]"]');
                if (!selectElement || selectElement.selectedOptions.length === 0) {
                    Swal.fire({
                        text: "Mohon pilih setidaknya satu anggota kelompok.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, mengerti!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    return;
                }

                submitButton.setAttribute('data-kt-indicator', 'on');
                submitButton.disabled = true;

                const formData = new FormData(form);

                fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        submitButton.removeAttribute('data-kt-indicator');
                        submitButton.disabled = false;

                        if (data.success) {
                            Swal.fire({
                                text: "Anggota kelompok berhasil ditambahkan!",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, mengerti!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                text: data.message ||
                                    "Terjadi kesalahan saat menambahkan anggota kelompok.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, mengerti!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        submitButton.removeAttribute('data-kt-indicator');
                        submitButton.disabled = false;

                        Swal.fire({
                            text: error.message ||
                                "Terjadi kesalahan jaringan. Silakan coba lagi nanti.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, mengerti!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    });
            });
        }

        // if (cancelButton) {
        //     cancelButton.addEventListener('click', function (e) {
        //         e.preventDefault();
        //         const modal = bootstrap.Modal.getInstance(document.querySelector('#kt_modal_tambah_anggota'));
        //         modal.hide();
        //     });
        // }

        // Mencegah modal dari menutup ketika mengklik di luar modal
        if (modal) {
            modal.addEventListener('click', function(e) {
                if (e.target === this) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        }

        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Tutup',
                allowOutsideClick: false,
                allowEscapeKey: false,
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        @endif

        @if (session('error'))
            Swal.fire({
                title: 'Gagal!',
                text: '{{ session('gagal') }}',
                icon: 'error',
                confirmButtonText: 'Tutup',
                customClass: {
                    confirmButton: "btn btn-danger"
                }
            });
        @endif
    </script>

    <script>
        // Saat tombol Penilaian di-klik
        $(document).on('click', '[data-bs-target="#modalPenilaian"]', function() {
            var tugasId = $(this).data('tugas-id');
            var mahasiswaId = $(this).data('mahasiswa-id');
            var namaMahasiswa = $(this).data('nama-mahasiswa');
            var jumlahPertanyaan = {{ count($soals) }}; // Hitung jumlah pertanyaan
            var kelompok = $(this).data('kelompok'); // Asumsikan nilai kelompok berasal dari data atribut

            // Set nilai input hidden dalam form modal
            $('#tugasId').val(tugasId);
            $('#mahasiswaId').val(mahasiswaId);
            $('#namaMahasiswa').text(namaMahasiswa);
            $('#jumlahPertanyaan').val(jumlahPertanyaan); // Set nilai jumlah pertanyaan
            $('#kelompok').val(kelompok); // Set nilai kelompok
        });
    </script>
@endpush
