@extends('layouts.dashboardmahasiswa')
@section('username')
    {{ Auth::user()->username }}
@endsection
@section('userName')
    {{ Auth::user()->nama_lengkap }}
@endsection
@section('userEmail')
    {{ Auth::user()->email }}
@endsection
@section('content')
    <!--begin::Layout-->
    <div class="d-flex flex-column flex-xl-row">
        <!--begin::Sidebar-->
        <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
            <!--begin::Card-->
            <div class="card mb-5 mb-xl-8">
                <!--begin::Card body-->
                <div class="card-body pt-15">
                    <!--begin::Summary-->
                    <div class="d-flex flex-center flex-column mb-5">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-150px symbol-circle mb-7">
                            <img src="{{ asset($kelas->pengampu->foto ? 'storage/' . $kelas->pengampu->foto : 'storage/fotos/endina.jpeg') }}"
                                alt="foto profil" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#"
                            class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1 text-center">{{ $kelas->pengampu->nama_lengkap }}</a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <a href="#"
                            class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{ $kelas->pengampu->username }}</a>
                        <!--end::Email-->
                    </div>
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold">Detail Kelas</div>
                        <!--begin::Badge-->
                        <div class="badge badge-light-info d-inline">{{ $kelas->nama_kelas }}</div>
                        <!--begin::Badge-->
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--begin::Details content-->
                    <div class="pb-5 fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Kode Kelas</div>
                        <div class="text-gray-600">{{ $kelas->kode_kelas }}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Jenis Kelas</div>
                        <div class="text-gray-600" style="text-transform: capitalize !important;">
                            Kelas {{ $kelas->jenis_kelas }}
                        </div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Tanggal Mulai</div>
                        <div class="text-gray-600">
                            {{ \Carbon\Carbon::parse($kelas->waktu_mulai)->translatedFormat('l, d F Y') }}</div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Tanggal Selesai</div>
                        <div class="text-gray-600">
                            {{ \Carbon\Carbon::parse($kelas->waktu_selesai)->translatedFormat('l, d F Y') }}</div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Tahun</div>
                        <div class="text-gray-600">
                            {{ $kelas->tahun }}
                        </div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Semester</div>
                        <div class="text-gray-600">
                            Semester {{ $kelas->semester }}
                        </div>
                        <!--begin::Details item-->
                    </div>
                    <!--end::Details content-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Sidebar-->
        <!--begin::Content-->
        <div class="flex-lg-row-fluid ms-lg-15">
            <!--begin:::Tabs-->
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                <!--begin:::Tab item-->
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_ecommerce_customer_overview">Capaian Lulusan, Topik dan Materi</a>
                </li>
                <!--end:::Tab item-->
            </ul>
            <!--end:::Tabs-->
            <!--begin:::Tab content-->
            <div class="tab-content" id="myTabContent">
                <!--begin:::Tab pane-->
                <div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
                    <div class="row row-cols-1 row-cols-md-1 mb-6 mb-xl-9">
                        <div class="col">
                            <!--begin::Timeline-->
                            <div class="card">
                                <!--begin::Card head-->
                                <div class="card-header card-header-stretch">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex align-items-center">
                                        <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                            <span class="path6"></span>
                                        </i>
                                        <h3 class="fw-bold m-0 text-gray-800">Ujian Akhir Semester :
                                            {{ $kelas->nama_kelas }}</h3>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!-- Add this new div for the countdown -->
                                <div class="card-body">
                                    <div id="countdown"
                                        class="alert alert-primary d-flex align-items-center p-5 mb-10 mx-1">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                        <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3"
                                                    d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <div class="d-flex flex-column">
                                            <h4 class="mb-1 text-primary">Waktu Tersisa</h4>
                                            <span id="countdown-timer" class="fs-4">Menghitung...</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Card head-->
                                <!--begin::Card body-->
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <b>Gagal : </b> {{ $errors->first() }}
                                        </div>
                                    @endif
                                    <div id="form-container" style="display: none;">
                                        <form id="kuisionerForm"
                                            action="{{ route('mahasiswa.kelas_saya.uas_post', [$kelas->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('POST')
                                            <div class="tab-content">

                                                <!--begin::Tab panel-->
                                                <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active"
                                                    role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                                    <!--begin::Timeline-->
                                                    <div class="timeline timeline-border-dashed">
                                                        @foreach ($peserta->uasSesi->uas->bankSoalPembahasans as $loopIndex => $soal)
                                                            <div class="timeline-item mb-4">
                                                                <div class="timeline-line"></div>
                                                                <!--end::Timeline line-->
                                                                <!--begin::Timeline icon-->
                                                                <div class="timeline-icon">
                                                                    <span
                                                                        class="fs-5 text-white d-flex align-items-center justify-content-center"
                                                                        style="background-color: #6c5ce7; width: 30px; height: 30px; border-radius: 50%;">
                                                                        {{ $loopIndex + 1 }}
                                                                    </span>
                                                                </div>
                                                                <!-- ... (bagian lain dari struktur soal) ... -->
                                                                <div class="timeline-content ms-4">
                                                                    <div class="fs-5 fw-semibold mb-2">
                                                                        {!! $soal->pertanyaan !!}
                                                                    </div>
                                                                    <div class="overflow-auto mt-3">
                                                                        <div class="d-flex flex-column align-items-start">
                                                                            @foreach ($soal->jawabans as $jawaban)
                                                                                <label
                                                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-1 mb-2 w-100">
                                                                                    <div
                                                                                        class="d-flex align-items-center me-2">
                                                                                        <div
                                                                                            class="form-check form-check-custom form-check-solid form-check-primary me-2">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                name="jawaban_{{ $loopIndex }}"
                                                                                                value="{{ $jawaban->id }}"
                                                                                                {{ old('jawaban_' . $loopIndex) == $jawaban->id ? 'checked' : '' }}
                                                                                                style="transform: scale(0.6);" />
                                                                                        </div>
                                                                                        <div class="fs-7">
                                                                                            {!! Str::replace(['â€œ', 'â€', 'â€˜', 'â€™'], ['"', '"', "'", "'"], $jawaban->jawaban) !!}
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            @endforeach
                                                                        </div>
                                                                        <div class="fv-row mb-7">
                                                                            <label
                                                                                class="fs-6 fw-semibold form-label mt-3">
                                                                                <span>Alasan</span>
                                                                            </label>
                                                                            <textarea class="form-control form-control-solid" name="alasan_{{ $loopIndex }}"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        <div class="card-footer" style="text-align: left;padding: 15px;">
                                                            <button type="submit" class="btn btn-primary mt-3">Simpan
                                                                Jawaban</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Timeline-->
                        </div>
                    </div>

                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->
@endsection

@push('scripts')
    <script>
        let isTimeUp = false;
        let isBeforeStartTime = false;

        function startCountdown(startTime, endTime) {
            const form = document.getElementById('kuisionerForm'); // Form elemen yang benar
            const countdownElement = document.getElementById('countdown-timer');
            const countdownContainer = document.getElementById('countdown');
            const formContainer = document.getElementById('form-container'); // Form container untuk disembunyikan
            const countdownTitle = countdownContainer.querySelector('h4'); // Judul countdown

            function updateCountdown() {
                const now = new Date().getTime();
                const timeLeftToStart = startTime - now;
                const timeLeftToEnd = endTime - now;

                // Fase 1: Sebelum waktu ujian dimulai
                if (timeLeftToStart > 0) {
                    isBeforeStartTime = true;
                    const hours = Math.floor((timeLeftToStart % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeftToStart % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeLeftToStart % (1000 * 60)) / 1000);
                    countdownElement.innerHTML = `Ujian dimulai dalam ${hours}j ${minutes}m ${seconds}d`;

                    // Sembunyikan form sebelum waktu ujian dimulai
                    formContainer.style.display = 'block';

                    // Ubah alert menjadi merah untuk menandakan belum waktunya
                    countdownContainer.classList.remove('alert-primary', 'alert-success');
                    countdownContainer.classList.add('alert-danger');
                    countdownTitle.innerHTML = 'Waktu Belum Tercapai';
                    countdownTitle.classList.add('text-danger');
                    countdownTitle.classList.remove('text-primary', 'text-success');

                    setTimeout(updateCountdown, 1000);
                }
                // Fase 2: Saat ujian berlangsung
                else if (timeLeftToEnd > 0) {
                    isBeforeStartTime = false;
                    const hours = Math.floor((timeLeftToEnd % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    const minutes = Math.floor((timeLeftToEnd % (1000 * 60 * 60)) / (1000 * 60));
                    const seconds = Math.floor((timeLeftToEnd % (1000 * 60)) / 1000);

                    countdownElement.innerHTML = `Sisa waktu: ${hours}j ${minutes}m ${seconds}d`;

                    // Tampilkan form jika ujian sedang berlangsung
                    formContainer.style.display = 'block';

                    // Ubah alert menjadi hijau untuk menandakan waktu ujian
                    countdownContainer.classList.remove('alert-danger');
                    countdownContainer.classList.add('alert-primary');
                    countdownTitle.innerHTML = 'Waktu Tersisa';
                    countdownTitle.classList.remove('text-danger');
                    countdownTitle.classList.add('text-primary');

                    setTimeout(updateCountdown, 1000);
                }
                // Fase 3: Jika waktu ujian habis
                else {
                    isTimeUp = true;
                    countdownElement.innerHTML = "Waktu Ujian Telah Berakhir!";
                    countdownContainer.classList.remove('alert-primary');
                    countdownContainer.classList.add('alert-danger');
                    formContainer.style.display = 'block';

                    makeAllInputsReadonly();
                    // Show time-up alert and submit form
                    showTimeUpAlert();
                }
            }

            updateCountdown();
        }

        function makeAllInputsReadonly() {
            const form = document.getElementById('kuisionerForm');
            const inputs = form.querySelectorAll('input, textarea');
            inputs.forEach(input => {
                if (input.type === 'radio') {
                    // Untuk radio button, kita gunakan event listener untuk mencegah perubahan
                    input.addEventListener('click', function(e) {
                        e.preventDefault();
                        return false;
                    });
                } else {
                    input.readOnly = true;
                }
            });

            // Nonaktifkan tombol submit
            const submitButton = form.querySelector('button[type="submit"]');
            if (submitButton) {
                submitButton.disabled = true;
            }
        }

        document.getElementById('kuisionerForm').addEventListener('submit', function(event) {
            event.preventDefault();

            if (isTimeUp) {
                submitForm(true);
            } else {
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda tidak akan bisa mengubah jawaban setelah ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Simpan!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        submitForm(false);
                    }
                });
            }
        });

        function submitForm(isTimeUpSubmission = false) {
            const form = document.getElementById('kuisionerForm');
            let formData;

            if (isTimeUpSubmission) {
                // Jika waktu habis, kumpulkan data secara manual
                formData = new FormData();
                const inputs = form.querySelectorAll('input[type="radio"]:checked, textarea');
                inputs.forEach(input => {
                    formData.append(input.name, input.value);
                });
                formData.append('is_time_up', 'true');
            } else {
                formData = new FormData(form);
            }

            // Log semua data yang dikirim (untuk debugging)
            for (let pair of formData.entries()) {
                console.log(pair[0] + ': ' + pair[1]);
            }

            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(response => {
                if (!response.ok) {
                    return response.json().then(err => {
                        throw err;
                    });
                }
                return response.json();
            }).then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Berhasil!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        if (data.redirect_url) {
                            window.location.href = data.redirect_url;
                        }
                    });
                } else {
                    throw new Error(data.message || 'Terjadi kesalahan.');
                }
            }).catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Gagal!',
                    text: error.message || 'Terjadi kesalahan.',
                    icon: 'error'
                });
            });
        }

        function showTimeUpAlert() {

            Swal.fire({
                title: 'Waktu Habis!',
                text: 'Waktu untuk mengerjakan UAS telah habis. Jawaban Anda akan disimpan.',
                icon: 'warning',
                showCancelButton: false,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                showConfirmButton: true,
                timerProgressBar: true,
                confirmButtonText: 'OK',
            }).then((result) => {
                if (result.isConfirmed) {
                    submitForm(true);
                }
            });
        }

        // Mengubah waktu dari server ke JavaScript Date object
        const startTimeStr = "{{ $peserta->uasSesi->tanggal_dilaksanakan }} {{ $peserta->uasSesi->waktu_mulai }}";
        const endTimeStr = "{{ $peserta->uasSesi->tanggal_dilaksanakan }} {{ $peserta->uasSesi->waktu_selesai }}";
        const startTime = new Date(startTimeStr.replace(/-/g, '/')).getTime();
        const endTime = new Date(endTimeStr.replace(/-/g, '/')).getTime();

        // Mulai countdown
        startCountdown(startTime, endTime);
    </script>
@endpush
