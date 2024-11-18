@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="flex-lg-row-fluid" id="reload">
    <!--begin::Extended content-->
    @foreach ($materi->tugasIndividus as $index => $tugas)
        <div class="mb-1">
            <!--begin::Content-->
            <div class="mb-15">
                <!--begin::Title-->
                <h4 class="fs-2x text-gray-800 w-bolder mb-6">
                    <div class="tugas tugas-clickable" data-tugas-id="{{ $tugas->id }}">
                        Tugas Individu Materi {{ $materi->nama_materi }} Ke {{ $index+1 }}
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
                                $now = \Carbon\Carbon::now()->startOfDay(); // Set waktu ke 00:00:00 hari ini
                                $sisaHari = $now->diffInDays($tugas->waktu_selesai, false);
                            @endphp

                            @if ($sisaHari > 0)
                                Selesai Dalam {{ $sisaHari }} hari
                            @elseif ($sisaHari == 0)
                                Tugas berakhir hari ini
                            @else
                                Waktu pengerjaan sudah berakhir
                            @endif
                        </span>
                        {{ \Carbon\Carbon::now() }}

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

                <a target="_blank" href="{{ asset($tugas->file_tugas) }}" download class="text-white btn btn-success btn-sm my-1">
                    Download File
                </a>

                <!--begin::Text-->
                <p class="fw-semibold fs-4 text-gray-600 mb-2">
                    {!! $tugas->tugas !!}
                </p>
                <!--end::Text-->
                <div class="separator separator-dashed my-5"></div>

                <div class="py-2 mb-5">
                    <h2>Formulir Pengumpulan Tugas Individu</h2>
                </div>
                @php
                    $currentTime = \Carbon\Carbon::now()->startOfDay(); // Menghilangkan jam, hanya membandingkan tanggal
                    $deadlineTime = \Carbon\Carbon::parse($tugas->waktu_selesai)->startOfDay(); // Set waktu ke 00:00:00
                    $startTime = \Carbon\Carbon::parse($tugas->waktu_mulai)->startOfDay(); // Set waktu ke 00:00:00

                    $statusUpload = $tugas->status_upload == 1;

                    $sudahDitambahkan = \App\Models\PengumpulanTugasIndividu::join('tugas_individu_materis','tugas_individu_materis.id','pengumpulan_tugas_individus.tugas_individu_id')
                                    ->join('materis','materis.id','tugas_individu_materis.materi_id')
                                    ->select('pengumpulan_tugas_individus.id','pengumpulan_tugas_individus.file_tugas')
                                    ->where('pengumpulan_tugas_individus.mahasiswa_id', auth()->user()->id)
                                    ->where('pengumpulan_tugas_individus.tugas_individu_id', $tugas->id)
                                    ->first();

                    $fileUploaded = false;
                    $isComplete = false;
                    if ($sudahDitambahkan) {
                        $isComplete = true;
                        $fileUploaded = $sudahDitambahkan->file_tugas != null;
                    }
                @endphp
                @if ($currentTime < $startTime)
                    <div class="alert alert-dismissible bg-light-warning border-warning border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
                        <i class="ki-duotone ki-warning fs-2hx text-warning me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <h5 class="mb-1">Pengumpulan Tugas Belum Dimulai</h5>
                            <span>Maaf, waktu pengumpulan tugas belum dimulai. Harap tunggu hingga waktu mulai tiba.</span>
                        </div>
                    </div>
                @elseif ($currentTime >= $startTime && $deadlineTime >= $currentTime && $isComplete)
                    <!-- Display group information and file -->
                    <div class="alert alert-dismissible bg-light-primary border-primary border-dashed d-flex flex-column p-5 mb-2">
                        <i class="ki-duotone ki-primary fs-2hx text-primary me-4 mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                        <div class="d-flex flex-column pe-0 pe-sm-10">
                            <h5 class="mb-1">Status Pengumpulan Tugas</h5>
                            @if($fileUploaded)
                                <span>File tugas Individu Anda telah dikumpulkan.</span>
                                <span class="text-primary" style="font-size:11px; margin-top: 10px;">File Tugas: {{ $sudahDitambahkan->file_tugas }}</span>
                                <div class="mt-3">
                                    <form id="form-hapus-tugas" action="{{ route('mahasiswa.kelas_saya.hapusFile_tugas_individu', [$kelas->id, $materi->id, $tugas->id]) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="button" class="btn btn-danger btn-sm btn-flat btn-hapus-tugas">
                                            <i class="fa fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            @else
                                <span>Belum ada file tugas yang dikumpulkan.</span>
                            @endif
                        </div>
                    </div>
                @elseif ($currentTime >= $startTime && $deadlineTime >= $currentTime && !$isComplete)
                    <!-- Button to trigger upload modal for users not in a group -->
                    <form class="form" action="#" method="post">
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label text-lg-right">Upload Files:</label>
                            <div class="col-lg-10">
                                <div class="dropzone dropzone-queue mb-2" id="kt_tambah_tugas_individu_file"
                                    data-kelas-id="{{ $kelas->id }}"
                                    data-materi-id="{{ $materi->id }}"
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
                                                    <div
                                                        class="progress-bar bg-primary"
                                                        role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropzone-toolbar">
                                                <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <span class="form-text text-muted">Maksimal ukuran file adalah 1MB, harap mengupload hanya 1 file saja.</span>
                            </div>
                        </div>
                    </form>
                @elseif($currentTime > $deadlineTime)
                    @if ($statusUpload)
                        @if ($isComplete)
                            <div class="alert alert-dismissible bg-light-primary border-primary border-dashed d-flex flex-column p-5 mb-2">
                                <i class="ki-duotone ki-primary fs-2hx text-primary me-4 mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                    <h5 class="mb-1">Status Pengumpulan Tugas</h5>
                                    @if($fileUploaded)
                                        <span>File tugas Individu Anda telah dikumpulkan.</span>
                                        <span class="text-primary" style="font-size:11px; margin-top: 10px;">File Tugas: {{ $sudahDitambahkan->file_tugas }}</span>
                                        <div class="mt-3">
                                            <form id="form-hapus-tugas" action="{{ route('mahasiswa.kelas_saya.hapusFile_tugas_individu', [$kelas->id, $materi->id, $tugas->id]) }}" method="POST">
                                                @csrf @method('DELETE')
                                                <button type="button" class="btn btn-danger btn-sm btn-flat btn-hapus-tugas">
                                                    <i class="fa fa-trash"></i> Hapus
                                                </button>
                                            </form>
                                        </div>
                                    @else
                                        <span>Belum ada file tugas yang dikumpulkan.</span>
                                    @endif
                                </div>
                            </div>
                        @else
                            <form class="form" action="#" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label text-lg-right">Upload Files:</label>
                                    <div class="col-lg-10">
                                        <div class="dropzone dropzone-queue mb-2" id="kt_tambah_tugas_individu_file"
                                            data-kelas-id="{{ $kelas->id }}"
                                            data-materi-id="{{ $materi->id }}"
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
                                                            <div
                                                                class="progress-bar bg-primary"
                                                                role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="dropzone-toolbar">
                                                        <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="form-text text-muted">Maksimal ukuran file adalah 1MB, harap mengupload hanya 1 file saja.</span>
                                    </div>
                                </div>
                            </form>
                        @endif
                    @else
                        @if ($isComplete)
                                <div class="alert alert-dismissible bg-light-primary border-primary border-dashed d-flex flex-column p-5 mb-2">
                                    <i class="ki-duotone ki-primary fs-2hx text-primary me-4 mb-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                    <div class="d-flex flex-column pe-0 pe-sm-10">
                                        <h5 class="mb-1">Status Pengumpulan Tugas</h5>
                                        <span>File tugas Individu Anda telah dikumpulkan.</span>
                                        <span class="text-primary" style="font-size:11px; margin-top: 10px;">File Tugas: {{ $sudahDitambahkan->file_tugas }}</span>
                                    </div>
                                </div>
                            @else
                            <div class="alert alert-dismissible bg-light-danger border-danger border-dashed d-flex flex-column flex-sm-row p-5 mb-10">
                                <i class="ki-duotone ki-error fs-2hx text-danger me-4 mb-5 mb-sm-0"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                                <div class="d-flex flex-column pe-0 pe-sm-10">
                                    <h5 class="mb-1">Batas Waktu Pengumpulan Tugas Telah Berlalu</h5>
                                    <span>Maaf, Anda sudah tidak dapat mengumpulkan tugas ini karena batas waktu pengumpulan telah berlalu atau pengumpulan tugas telah ditutup.</span>
                                </div>
                            </div>
                        @endif
                    @endif
                @endif
                <!-- Modal for uploading assignment -->
                <div class="modal fade" id="kt_modal_upload_tugas" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="fw-bold">Upload Tugas Individu</h2>
                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
                                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                </div>
                            </div>
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <form id="kt_modal_upload_tugas_form" class="form" action="#">
                                    <div class="fv-row mb-7">
                                        <label class="d-block fw-semibold fs-6 mb-5">File Tugas</label>
                                        <div class="dz-dropzone dz-clickable" id="kt_modal_upload_tugas_dropzone">
                                            <div class="dz-message needsclick">
                                                <i class="ki-duotone ki-file-up fs-3hx text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                    <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center pt-15">
                                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" id="kt_modal_upload_tugas_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
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
        <hr style="border: 0; height: 2px; background: linear-gradient(to right, #00c6ff, #0072ff); opacity: 0.8; border-radius: 5px; margin-top: 30px; margin-bottom: 30px;">
        <!--end::Extended content-->
    @endforeach
</div>

@endsection

@push('scripts')
    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const hapusButtons = document.querySelectorAll('.btn-hapus-tugas');
            hapusButtons.forEach(function(button) {
                button.addEventListener('click', function (e) {
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
                            this.closest('form').submit();
                        }
                    });
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function () {
            // Ambil elemen dropzone dan parameter dari data-attributes
            const dropzone = document.querySelector("#kt_tambah_tugas_individu_file");
            if (dropzone) {
                const kelasId = dropzone.getAttribute('data-kelas-id');
                const materiId = dropzone.getAttribute('data-materi-id');
                const tugasId = dropzone.getAttribute('data-tugas-id');

                // Hasilkan URL route menggunakan Blade dengan parameter yang benar
                const routeUploadTugasIndividu = `{{ route('mahasiswa.kelas_saya.upload_tugas_individu', ['kelas' => 'PLACEHOLDER_KELAS', 'materi' => 'PLACEHOLDER_MATERI', 'tugasIndividu' => 'PLACEHOLDER_TUGAS']) }}`.replace('PLACEHOLDER_KELAS', encodeURIComponent(kelasId))
                                                                                                                        .replace('PLACEHOLDER_MATERI', encodeURIComponent(materiId))
                                                                                                                        .replace('PLACEHOLDER_TUGAS', encodeURIComponent(tugasId));

                // Inisialisasi Dropzone dengan URL dinamis
                var myDropzone = new Dropzone("#kt_tambah_tugas_individu_file", {
                    url: routeUploadTugasIndividu, // URL upload dinamis
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}" // Kirim CSRF token untuk keamanan
                    },
                    maxFilesize: 1, // Max filesize in MB
                    previewTemplate: document.querySelector("#kt_tambah_tugas_individu_file .dropzone-item").parentNode.innerHTML,
                    previewsContainer: "#kt_tambah_tugas_individu_file .dropzone-items", // Define the container to display the previews
                    clickable: "#kt_tambah_tugas_individu_file .dropzone-select" // Define the element that should be used as click trigger to select files.
                });

                myDropzone.on("addedfile", function (file) {
                    if (myDropzone.files.length > 1) {
                        myDropzone.removeFile(file);
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Anda hanya dapat mengunggah 1 file saja!'
                        });
                    } else {
                        const dropzoneItems = document.querySelectorAll('#kt_tambah_tugas_individu_file .dropzone-item');
                        if (dropzoneItems.length > 0) {
                            const lastDropzoneItem = dropzoneItems[dropzoneItems.length - 1];

                            // Apply the style only to the last item
                            lastDropzoneItem.style.display = ''; // Uncomment and adjust the style as needed

                            // Set a delay before showing the Swal alert
                            setTimeout(() => {
                                Swal.fire({
                                    title: 'Berhasil!',
                                    text: '{{ session("success") }}',
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
                                            url: window.location.href, // Re-fetch current page content
                                            success: function(response) {
                                                // Use jQuery to replace the content of #relad with the new content
                                                $('#reload').html($(response).find('#reload').html());
                                            },
                                            error: function() {
                                                console.error('Failed to reload content');
                                            }
                                        });
                                    }
                                });
                            }, 300); // 300ms delay (adjust as needed)
                        }
                    }
                });

                myDropzone.on("totaluploadprogress", function (progress) {
                    const progressBars = document.querySelectorAll('#kt_tambah_tugas_individu_file .progress-bar');
                    progressBars.forEach(progressBar => {
                        progressBar.style.width = progress + "%";
                    });
                });

                myDropzone.on("sending", function (file) {
                    const progressBars = document.querySelectorAll('#kt_tambah_tugas_individu_file .progress-bar');
                    progressBars.forEach(progressBar => {
                        progressBar.style.opacity = "1";
                    });
                });

                myDropzone.on("complete", function (progress) {
                    const progressBars = document.querySelectorAll('#kt_tambah_tugas_individu_file .dz-complete');

                    setTimeout(function () {
                        progressBars.forEach(progressBar => {
                            progressBar.querySelector('.progress-bar').style.opacity = "0";
                            progressBar.querySelector('.progress').style.opacity = "0";
                        });
                    }, 300);
                });
            }
        });

        // Mencegah modal dari menutup ketika mengklik di luar modal
        if (modal) {
            modal.addEventListener('click', function (e) {
                if (e.target === this) {
                    e.preventDefault();
                    e.stopPropagation();
                }
            });
        }

        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session("success") }}',
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
                text: '{{ session("gagal") }}',
                icon: 'error',
                confirmButtonText: 'Tutup',
                customClass: {
                    confirmButton: "btn btn-danger"
                }
            });
        @endif

    </script>
@endpush
