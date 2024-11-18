@extends('mahasiswa/kelas_saya.detail_materi_template')
@push('styles')
    <style>
       .custom-btn-submit {
            background-color: #007bff !important;
            color: white !important;
            align-items: center !important;
        }

        .custom-btn-submit i {
            margin-right: 8px !important;
        }

        .btn-icon {
            padding: 5px;
            margin-left: auto; /* Biar tombol selalu di ujung kanan */
        }

        .fa-trash {
            font-size: 12px; /* Ukuran lebih kecil */
        }
    </style>
@endpush
@section('contentMateri')
    <div class="container-fluid">
        <div class="row g-5 g-xxl-8">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Feeds Widget 1-->
                <div class="card mb-5 mb-xxl-8">
                    <!--begin::Body-->
                    <div class="card-body pb-0">
                        <!--begin::Header-->
                        <div class="d-flex align-items-center">
                            <!--begin::User-->
                            <div class="d-flex align-items-center flex-grow-1">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-45px me-5">
                                    <img src="{{ asset('storage/' . (Auth::user()->foto ?? 'fotos/profil.jpg')) }}" alt="User Photo" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-6 fw-bold">{{ auth()->user()->nama_lengkap }}</a>
                                    <span class="text-gray-500 fw-bold">{{ auth()->user()->username }} - {{ auth()->user()->email }}</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Header-->
                        <!--begin::Form-->
                        <form id="kt_forms_widget_1_form" accept="{{ route('mahasiswa.kelas_saya.diskusi.post',[$kelas->id,$materi->id]) }}" method="POST" class="ql-quil ql-quil-plain pb-3">
                            @csrf @method('POST')

                            <input type="text" name="judul" class="title-input" placeholder="Masukkan judul diskusi" style="width: 100% !important; padding-top: 1.5rem !important;
                            padding-bottom: 1.5rem !important;
                            font-size: 13px !important;
                            border: none;
                            border-bottom: 1px solid #ccc;
                                font-family: Helvetica, Arial, sans-serif !important;
                            color:#4B5675 !important;
                            outline: none !important; ">

                            <!--begin::Editor-->
                            <input type="hidden" name="diskusi" id="quill_content">
                            <div id="kt_forms_widget_1_editor" class="py-6"></div>
                            <!--end::Editor-->
                            <div class="separator"></div>
                            <!--begin::Toolbar-->
                            <div id="kt_forms_widget_1_editor_toolbar" name="diskusi" class="ql-toolbar d-flex flex-stack py-2">
                                <div class="me-2">
                                    <span class="ql-formats ql-size ms-0">
                                        <select class="ql-size w-75px"></select>
                                    </span>
                                    <span class="ql-formats">
                                        <button class="ql-bold"></button>
                                        <button class="ql-italic"></button>
                                        <button class="ql-underline"></button>
                                    </span>
                                </div>
                                <div class="me-n3">
                                    <!-- Submit Button with clear layout -->
                                    <button type="submit" class="btn btn-sm" style="width:100px !important; height:35px !important; background-color: #007bff !important; color: white !important; display: flex !important; align-items: center !important;">
                                        <i class="ki-duotone ki-check fs-2 me-2"></i> Kirim
                                    </button>
                                </div>
                            </div>
                            <!--end::Toolbar-->
                        </form>


                        <!--end::Form-->
                    </div>
                    <!--end::Body-->
                </div>
            </div>
            <!--end::Col-->
        </div>

        <div class="mb-10" id="kt_social_feeds_posts">
            @foreach ($diskusis as $diskusi)
                <div class="card card-flush mb-10">
                    <!--begin::Card header-->
                    <div class="card-header pt-9">
                        <!--begin::Author-->
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-50px me-5">
                                <img src="{{ $diskusi->mahasiswa->foto ? asset('storage/' . $diskusi->mahasiswa->foto) : asset('storage/fotos/profil.jpg') }}" alt="{{ $diskusi->mahasiswa->nama_lengkap }}" />
                            </div>
                            <!--end::Avatar-->
                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Name-->
                                <a href="#" class="text-gray-800 text-hover-primary fs-4 fw-bold">{{ $diskusi->mahasiswa->nama_lengkap }}</a>
                                <!--end::Name-->
                                <!--begin::Date-->
                                <span class="text-gray-500 fw-semibold d-block">
                                    {{ $diskusi->mahasiswa->username }} - {{ $diskusi->mahasiswa->email }}
                                </span>
                                <!--end::Date-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Author-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu wrapper-->
                            <div class="m-0">
                                <!--begin::Menu toggle-->
                                <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary me-n4" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                    <i class="ki-duotone ki-dots-square fs-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </button>
                                <!--end::Menu toggle-->
                            </div>
                            <!--end::Menu wrapper-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Post content-->
                        <div class="fs-6 fw-normal text-gray-700">{!! $diskusi->diskusi !!}</div>
                        <!--end::Post content-->
                    </div>
                    <!--end::Card body-->
                    <!--begin::Card footer-->
                    <div class="card-footer pt-0">
                        <!--begin::Info-->
                        <div class="mb-6">
                            <!--begin::Separator-->
                            <div class="separator separator-solid"></div>
                            <!--end::Separator-->
                            <!--begin::Nav-->
                            <ul class="nav py-3">
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary btn-active-light-primary fw-bold px-4 me-1 collapsible" data-bs-toggle="collapse" href="#kt_social_feeds_comments_{{ $diskusi->id }}">
                                        <i class="ki-duotone ki-message-text-2 fs-2 me-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>{{ $diskusi->diskusi_respons_count }} Komentar</a>
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item">
                                    <a href="#" class="nav-link btn btn-sm btn-color-gray-600 btn-active-color-primary fw-bold px-4 me-1">
                                    <i class="ki-duotone ki-heart fs-2 me-1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>{{ Carbon\Carbon::parse($diskusi->created_at)->translatedFormat('l, d F Y H:i:s') }}</a>
                                </li>
                                <!--end::Item-->
                            </ul>
                            <!--end::Nav-->
                            <!--begin::Separator-->
                            <div class="separator separator-solid mb-1"></div>
                            <!--end::Separator-->
                            <!--begin::Comments-->
                            <div class="collapse" id="kt_social_feeds_comments_{{ $diskusi->id }}">

                                @foreach ($diskusi->diskusiRespons as $respon)
                                    <div class="d-flex pt-6 align-items-center justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="{{ $respon->responden->foto ? asset('storage/' . $respon->responden->foto) : asset('storage/fotos/profil.jpg') }}" alt="{{ $respon->responden->nama_lengkap }}" />
                                            </div>
                                            <div class="d-flex flex-column flex-row-fluid">
                                                <!--begin::Info-->
                                                <div class="d-flex align-items-center flex-wrap mb-0">
                                                    <!--begin::Name-->
                                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold me-6">{{ $respon->responden->nama_lengkap }}</a>
                                                    <!--end::Name-->
                                                    <!--begin::Date-->
                                                    <span class="text-gray-500 fw-semibold fs-7 me-5">{{ Carbon\Carbon::parse($respon->created_at)->translatedFormat('l, d F Y H:i:s') }}</span>
                                                    <!--end::Date-->
                                                </div>
                                                <!--end::Info-->
                                                <!--begin::Text-->
                                                <span class="text-gray-800 fs-7 fw-normal pt-1">{!! $respon->pesan !!}</span>
                                                <!--end::Text-->
                                            </div>
                                        </div>

                                        <!-- Tombol kecil dengan ikon Trash di sebelah kanan -->
                                        @if($respon->canDelete && is_null($respon->nilai))
                                            <button class="btn btn-icon btn-light btn-sm btn-edit-respon"
                                                data-id="{{ $respon->id }}"
                                                data-pesan="{{ htmlspecialchars($respon->pesan, ENT_QUOTES, 'UTF-8') }}"
                                                data-bs-toggle="modal"
                                                data-bs-target="#editResponModal">
                                                <i class="fa fa-edit text-muted"></i>
                                            </button>
                                        @endif

                                    </div>
                                @endforeach

                            </div>
                            <!--end::Collapse-->
                        </div>
                        <!--end::Info-->
                        <!--begin::Comment form-->
                        <form id="formBalas-{{ $diskusi->id }}" action="{{ route('mahasiswa.kelas_saya.diskusi.balas',[$kelas->id, $materi->id, $diskusi->id]) }}" method="POST">
                            @csrf @method('POST')
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-35px me-3">
                                    <img src="{{ asset('storage/' . (Auth::user()->foto ?? 'fotos/profil.jpg')) }}" alt="User Photo" />
                                </div>
                                <div class="position-relative w-100">
                                    <textarea class="form-control form-control-solid border ps-5" rows="1" name="respon" data-kt-autosize="true" placeholder="...."></textarea>
                                    <!-- Ubah tombol submit menjadi tombol biasa -->
                                    <button type="button" class="btn btn-icon btn-sm btn-color-gray-500 btn-active-color-primary w-25px p-0 position-absolute top-50 end-0 translate-middle-y me-8 d-flex align-items-center btn-submit-balas" data-diskusi-id="{{ $diskusi->id }}">
                                        <i class="ki-duotone ki-check fs-2 ">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        Balas
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--end::Comment form-->
                    </div>
                    <!--end::Card footer-->
                </div>
            @endforeach
        </div>
        <!-- Modal -->
        <div class="modal fade" id="editResponModal" tabindex="-1" aria-labelledby="editResponModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editResponModalLabel">Edit Balasan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formEditRespon" method="POST">
                            @csrf
                            @method('POST')
                            <input type="hidden" name="respon_id" id="editResponId">
                            <div class="mb-3">
                                <label for="editPesan" class="form-label">Pesan</label>
                                <textarea class="form-control" id="editPesan" name="pesan" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var editResponModal = document.getElementById('editResponModal');
        var formEditRespon = document.getElementById('formEditRespon');
        var updateResponRoute = "{{ route('mahasiswa.kelas_saya.diskusi.update', ['kelas' => $kelas->id, 'materi' => $materi->id, 'respon' => ':respon']) }}";
        var modalInstance = null;

        function getCsrfToken() {
            var tokenElement = document.querySelector('meta[name="csrf-token"]');
            if (tokenElement) {
                return tokenElement.getAttribute('content');
            }
            console.error('CSRF token not found. Make sure you have the csrf-token meta tag in your layout.');
            return null;
        }

        editResponModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var responId = button.getAttribute('data-id');
            var pesan = button.getAttribute('data-pesan');

            var modal = this;
            modal.querySelector('#editResponId').value = responId;
            modal.querySelector('#editPesan').value = pesan;

            var actionUrl = updateResponRoute.replace(':respon', responId);
            formEditRespon.setAttribute('action', actionUrl);

            console.log('Modal opened. Action URL:', actionUrl);

            // Store the modal instance
            modalInstance = bootstrap.Modal.getInstance(modal);
        });

        formEditRespon.addEventListener('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var actionUrl = this.getAttribute('action');

            console.log('Form submitted. Sending request to:', actionUrl);

            var csrfToken = getCsrfToken();
            if (!csrfToken) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'CSRF token tidak ditemukan. Silakan muat ulang halaman dan coba lagi.'
                });
                return;
            }

            fetch(actionUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                console.log('Response status:', response.status);
                return response.json();
            })
            .then(data => {
                console.log('Response data:', data);
                if (data.success) {
                    // Close the modal
                    if (modalInstance) {
                        modalInstance.hide();
                    }

                    // Show success message
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil!',
                        text: data.message,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload();
                        }
                    });
                } else {
                    var errorMessage = data.message || 'Terjadi kesalahan saat memproses permintaan.';
                    if (data.errors) {
                        errorMessage = Object.values(data.errors).join('<br>');
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        html: errorMessage
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'Terjadi kesalahan saat memproses permintaan.'
                });
            });
        });
    });

    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('kt_forms_widget_1_form');
        var quill = new Quill('#kt_forms_widget_1_editor', {
            modules: {
                toolbar: '#kt_forms_widget_1_editor_toolbar'
            },
            placeholder: 'Apa yang anda fikirkan ?',
            theme: 'snow'
        });

        form.onsubmit = function(e) {
            e.preventDefault();

            // Populate hidden form field with editor contents
            var content = document.querySelector('#quill_content');
            content.value = quill.root.innerHTML;

            // Get the title
            var title = document.querySelector('input[name="judul"]').value;

            // Show confirmation dialog
            Swal.fire({
                title: 'Konfirmasi',
                text: "Apakah Anda yakin ingin mengirim diskusi ini?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Kirim!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    submitForm();
                }
            });
        };

        function submitForm() {
            // Use fetch API to submit the form
            fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken()
                }
            })
            .then(response => {
                return response.json();
            })
            .then(data => {
                // Cek apakah ada kesalahan validasi
                if (data.errors) {
                    let errorMessages = '';
                    Object.keys(data.errors).forEach(function (key) {
                        errorMessages += data.errors[key].join('<br>') + '<br>';
                    });

                    Swal.fire(
                        'Error Validasi!',
                        errorMessages,
                        'error'
                    );
                } else if (data.success) {
                    // Jika tidak ada kesalahan validasi, cek success
                    Swal.fire(
                        'Berhasil!',
                        data.message,
                        'success'
                    ).then(() => {
                        location.reload(); // Reload halaman setelah sukses
                    });
                } else {
                    // Jika ada pesan error lain dari server selain validasi
                    Swal.fire(
                        'Error!',
                        data.message || 'Terjadi kesalahan saat mengirim diskusi.',
                        'error'
                    );
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire(
                    'Error!',
                    error.message || 'Terjadi kesalahan saat mengirim diskusi.',
                    'error'
                );
            });
        }

        var formBalas = document.querySelectorAll('form[action*="diskusi.balas"]');

        var submitButtons = document.querySelectorAll('.btn-submit-balas');

        submitButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var diskusiId = this.getAttribute('data-diskusi-id');
                var form = document.getElementById('formBalas-' + diskusiId);

                // Konfirmasi sebelum mengirim balasan
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah Anda yakin ingin mengirim balasan ini?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Kirim!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika dikonfirmasi, jalankan pengiriman form manual
                        submitReplyForm(form);
                    }
                });
            });
        });

        function submitReplyForm(form) {
            fetch(form.action, {
                method: 'POST',
                body: new FormData(form),
                headers: {
                    'X-CSRF-TOKEN': getCsrfToken()
                }
            })
            .then(response => {
                return response.json();
            })
            .then(data => {
                // Cek apakah ada kesalahan validasi
                if (data.errors) {
                    let errorMessages = '';
                    Object.keys(data.errors).forEach(function (key) {
                        errorMessages += data.errors[key].join('<br>') + '<br>';
                    });

                    Swal.fire(
                        'Error Validasi!',
                        errorMessages,
                        'error'
                    );
                } else if (data.success) {
                    // Jika sukses
                    Swal.fire(
                        'Berhasil!',
                        data.message,
                        'success'
                    ).then(() => {
                        location.reload(); // Reload halaman setelah sukses
                    });
                } else {
                    // Jika ada pesan error lain
                    Swal.fire(
                        'Error!',
                        data.message || 'Terjadi kesalahan saat mengirim balasan.',
                        'error'
                    );
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire(
                    'Error!',
                    error.message || 'Terjadi kesalahan saat mengirim balasan.',
                    'error'
                );
            });
        }

        function getCsrfToken() {
            var tokenMeta = document.querySelector('meta[name="csrf-token"]');
            if (tokenMeta) {
                return tokenMeta.getAttribute('content');
            } else {
                console.error('CSRF token meta tag not found');
                return null;
            }
        }
    });
</script>
@endpush
