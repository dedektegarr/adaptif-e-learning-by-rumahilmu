@extends('mahasiswa/dashboard_template')

@section('dashboardProfile')
    <div class="card">
        <!--begin::Body-->
        <div class="card-body p-5 p-lg-10">
            <!--begin::Section-->
            <div class="mb-17">
                <!--begin::Content-->
                <div class="d-flex flex-stack mb-5">
                    <!--begin::Title-->
                    <h3 class="text-gray-900">Kelas Saya</h3>
                    <!--end::Title-->
                </div>
                <!--end::Content-->
                <!--begin::Separator-->
                <div class="separator separator-dashed mb-9"></div>
                <!--end::Separator-->
                <!--begin::Row-->
                <div class="row g-10">
                    @foreach ($daftarKelasSaya->kelas as $kelas)
                        <!--begin::Col-->
                        <div class="col-md-4">
                            <!--begin::Hot sales post-->
                            <div class="card-xl-stretch me-md-6">
                                <!--begin::Overlay-->
                                <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                                    href="{{ $kelas->thumbnail ? asset('storage/' . $kelas->thumbnail) : asset('assets/img/no-image.png') }}">
                                    <!--begin::Image-->
                                    <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                                        style="background-image:url('{{ $kelas->thumbnail ? asset('storage/' . $kelas->thumbnail) : asset('assets/img/no-image.png') }}')">
                                    </div>
                                    <!--end::Image-->
                                    <!--begin::Action-->
                                    <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                                        <i class="ki-duotone ki-eye fs-2x text-white">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <!--end::Action-->
                                </a>
                                <!--end::Overlay-->
                                <!--begin::Body-->
                                <div class="mt-5">
                                    <!--begin::Title-->
                                    <a href="#"
                                        class="fs-4 text-gray-900 fw-bold text-hover-primary text-gray-900 lh-base">{{ $kelas->nama_kelas }}</a>
                                    <!--end::Title-->
                                    <!--begin::Text-->
                                    <div class="fw-semibold fs-5 text-gray-600 text-gray-900 mt-3">Dosen Pengampu :
                                        {{ $kelas->pengampu->nama_lengkap }}</div>
                                    <div class="fw-semibold fs- text-gray-400 text-gray-700 mt-2">
                                        Jadwal Kelas :
                                        {{ \Carbon\Carbon::parse($kelas->waktu_mulai)->translatedFormat('d F Y') }} -
                                        {{ \Carbon\Carbon::parse($kelas->waktu_selesai)->translatedFormat('d F Y') }}
                                    </div>

                                    <div class="fw-semibold fs- text-gray-400 text-gray-700 mt-2">
                                        Kode Kelas : {{ $kelas->kode_kelas }}
                                    </div>
                                    <!--end::Text-->
                                    <!--begin::Text-->
                                    <div class="fs-6 fw-bold mt-5 d-flex flex-stack">
                                        <!--begin::Label-->
                                        <span class="badge border border-dashed fs-2 fw-bold text-gray-900 p-2">
                                            <span class="fs-6 fw-semibold text-gray-500"
                                                style="text-transform: uppercase">Kelas :
                                                {{ $kelas->jenis_kelas }}</span></span>
                                        <!--end::Label-->
                                        <!--begin::Action-->
                                        @php
                                            $now = now();
                                            $start = Carbon\Carbon::parse($kelas->waktu_mulai);
                                            $end = Carbon\Carbon::parse($kelas->waktu_selesai);
                                        @endphp
                                        @if ($now->between($start, $end))
                                            <a href="{{ route('mahasiswa.kelas_saya.detail_kelas', [$kelas->id]) }}"
                                                class="btn btn-sm btn-primary">Detail Kelas</a>
                                        @endif
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Hot sales post-->
                        </div>
                        <!--end::Col-->
                    @endforeach

                </div>
                <!--end::Row-->
            </div>
            <!--end::Section-->
        </div>
        <!--end::Body-->
    </div>
@endsection

@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
