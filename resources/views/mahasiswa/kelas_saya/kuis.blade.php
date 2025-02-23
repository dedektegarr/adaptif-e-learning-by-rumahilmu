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
                            <img src="{{ asset('storage/' . $materi->topikPembahasanKelas->kelas->pengampu->foto) }}"
                                alt="foto profil" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#"
                            class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1 text-center">{{ $materi->topikPembahasanKelas->kelas->pengampu->nama_lengkap }}</a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <a href="#"
                            class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{ $materi->topikPembahasanKelas->kelas->pengampu->username }}</a>
                        <!--end::Email-->
                    </div>
                    <!--end::Summary-->
                    <!--begin::Details toggle-->
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bold">Detail Kelas</div>
                        <!--begin::Badge-->
                        <div class="badge badge-light-info d-inline">{{ $materi->topikPembahasanKelas->kelas->nama_kelas }}
                        </div>
                        <!--begin::Badge-->
                    </div>
                    <!--end::Details toggle-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--begin::Details content-->
                    <div class="pb-5 fs-6">
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Kode Kelas</div>
                        <div class="text-gray-600">{{ $materi->topikPembahasanKelas->kelas->kode_kelas }}</div>
                        <!--begin::Details item-->
                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Jenis Kelas</div>
                        <div class="text-gray-600" style="text-transform: capitalize !important;">
                            Kelas {{ $materi->topikPembahasanKelas->kelas->jenis_kelas }}
                        </div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Tanggal Mulai</div>
                        <div class="text-gray-600">
                            {{ \Carbon\Carbon::parse($materi->topikPembahasanKelas->kelas->waktu_mulai)->translatedFormat('l, d F Y') }}
                        </div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Tanggal Selesai</div>
                        <div class="text-gray-600">
                            {{ \Carbon\Carbon::parse($materi->topikPembahasanKelas->kelas->waktu_selesai)->translatedFormat('l, d F Y') }}
                        </div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Tahun</div>
                        <div class="text-gray-600">
                            {{ $materi->topikPembahasanKelas->kelas->tahun }}
                        </div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Semester</div>
                        <div class="text-gray-600">
                            Semester {{ $materi->topikPembahasanKelas->kelas->semester }}
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
                        href="#kt_ecommerce_customer_overview">Kelas
                        {{ $materi->topikPembahasanKelas->kelas->nama_kelas }}</a>
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
                                        <h3 class="fw-bold m-0 text-gray-800">Soal Kuisioner Materi :
                                            {{ $materi->nama_materi }}</h3>
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Card head-->
                                <!--begin::Card body-->
                                <div class="card-body">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <b>Gagal : </b> {{ $errors->first() }}
                                        </div>
                                    @endif
                                    <form
                                        action="{{ route('mahasiswa.kelas_saya.simpan_kuis', [$materi->topikPembahasanKelas->kelas->id, $materi->id]) }}"
                                        method="POST">
                                        @csrf
                                        @method('POST')
                                        <div class="tab-content">
                                            <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active"
                                                role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                                <div class="timeline timeline-border-dashed">
                                                    @foreach ($kuis as $index => $pertanyaanKuis)
                                                        <div class="form-check" style="padding-left: 0px !important;">
                                                            <div class="timeline-item mb-4">
                                                                <div class="timeline-line"></div>
                                                                <div class="timeline-icon">
                                                                    <span
                                                                        class="fs-5 text-white d-flex align-items-center justify-content-center"
                                                                        style="background-color: #6c5ce7; width: 30px; height: 30px; border-radius: 50%;">
                                                                        {{ $index + 1 }}
                                                                    </span>
                                                                </div>
                                                                <div class="timeline-content ms-4">
                                                                    <div class="d-flex align-items-center">
                                                                        <div class="fs-5 fw-semibold mb-2">
                                                                            {!! $pertanyaanKuis->bankSoalPembahasan->pertanyaan !!}
                                                                        </div>
                                                                    </div>
                                                                    <div class="overflow-auto mt-3">
                                                                        <div class="d-flex flex-column align-items-start">
                                                                            @foreach ($pertanyaanKuis->bankSoalPembahasan->jawabans as $jawaban)
                                                                                <label
                                                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-1 mb-2 w-100">
                                                                                    <div
                                                                                        class="d-flex align-items-center me-2">
                                                                                        <div
                                                                                            class="form-check form-check-custom form-check-solid form-check-primary me-2">
                                                                                            <input type="hidden"
                                                                                                name="kuis_{{ $index }}"
                                                                                                value="{{ $pertanyaanKuis->bankSoalPembahasan->id }}">
                                                                                            <input class="form-check-input"
                                                                                                type="radio"
                                                                                                name="jawaban_{{ $index }}"
                                                                                                value="{{ $jawaban->id }}"
                                                                                                {{ old('jawaban_' . $index) == $jawaban->id ? 'checked' : '' }}
                                                                                                style="transform: scale(0.6);" />
                                                                                        </div>
                                                                                        <div class="fs-7">
                                                                                            {!! $jawaban->jawaban !!}
                                                                                        </div>
                                                                                    </div>
                                                                                </label>
                                                                            @endforeach
                                                                        </div>
                                                                        <div class="fv-row mb-7">
                                                                            <label class="fs-6 fw-semibold form-label mt-3">
                                                                                <span>Alasan</span>
                                                                                <span class="ms-1"
                                                                                    data-bs-toggle="tooltip"
                                                                                    title="Masukan alasan anda memilih jawaban! (optional).">
                                                                                    <i
                                                                                        class="ki-duotone ki-information fs-7">
                                                                                        <span class="path1"></span>
                                                                                        <span class="path2"></span>
                                                                                        <span class="path3"></span>
                                                                                    </i>
                                                                                </span>
                                                                            </label>
                                                                            <textarea class="form-control form-control-solid" name="alasan_{{ $index }}"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align: left;padding: 15px;">
                                            <button type="submit" id="submitKuis" class="btn btn-primary mt-3">Simpan
                                                Jawaban</button>
                                        </div>
                                    </form>
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
        document.getElementById('submitKuis').addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah pengiriman form secara langsung

            Swal.fire({
                title: 'Apakah Anda yakin ingin menyimpan jawaban?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, simpan',
                cancelButtonText: 'Tidak, batal simpan!',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika tombol hijau diklik, submit form
                    e.target.closest('form').submit();
                }
            });
        });

        // Jika ada error pada server, tampilkan pesan error dengan SweetAlert
        @if ($errors->any())
            var errorMessages = [];
            @foreach ($errors->all() as $error)
                errorMessages.push("{!! $error !!}");
            @endforeach

            Swal.fire({
                title: 'Oops...',
                html: errorMessages.join('<br>'),
                icon: 'error',
                confirmButtonText: 'Tutup',
                customClass: {
                    confirmButton: "btn btn-danger"
                }
            });
        @endif

        // Jika pengiriman sukses, tampilkan pesan sukses dengan SweetAlert
        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Tutup',
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        @endif
    </script>
@endpush
