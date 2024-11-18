@extends('mahasiswa/kelas_saya.detail_materi_template')
@section('contentMateri')
<div class="flex-lg-row-fluid">
    <!--begin::Extended content-->
    <div class="mb-13">
        <!--begin::Content-->
        <div class="mb-15">
            <!--begin::Title-->
            <h4 class="fs-2x text-gray-800 w-bolder mb-6">Materi</h4>
            <!--end::Title-->
            <div class="my-1 me-5">
                <!-- begin::Download-->
                <a target="_blank" href="{{ asset($materi->file_materi) }}" download class="text-white btn btn-success btn-sm my-1">
                    Download Materi
                </a>
                <!-- end::Download-->
            </div>
            <!--begin::Text-->
            <p class="fw-semibold fs-4 text-gray-600 mb-2">
                {!! $materi->isi_materi !!}
            </p>
            <!--end::Text-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Extended content-->
    <div class="mb-17">
        <!--begin::Content-->
        <div class="d-flex flex-stack mb-5">
            <!--begin::Title-->
            <h3 class="text-gray-900">Video Materi</h3>
            <!--end::Title-->
        </div>
        <!--end::Content-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mb-9"></div>
        <!--end::Separator-->

        <!--begin::Video Container-->
        <div class="d-flex justify-content-between">
            @php
                $isYoutube = false;
                if ($materi->url_materi != null && $materi->url_materi != "") {
                    $isYoutube = strpos($materi->url_materi, 'youtube.com') !== false || strpos($materi->url_materi, 'youtu.be') !== false;
                    if ($isYoutube) {
                        parse_str(parse_url($materi->url_materi, PHP_URL_QUERY), $my_array_of_vars);
                        $url = "https://www.youtube.com/embed/".$my_array_of_vars['v'];
                    }
                }
            @endphp
            @if ($isYoutube)
                <iframe style="width: 49%;" src="{{ $url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @elseif ($materi->url_materi != null && $materi->url_materi != "")
                <div style="width: 49%;">
                    <a href="{{ $materi->url_materi }}" target="_blank" class="btn btn-bg-light btn-active-color-primary btn-sm d-flex align-items-center justify-content-center" style="width: 100%; height: 100%;">
                        <i class="bi bi-file-earmark-text me-2"></i> Lihat Materi
                    </a>
                </div>
            @endif

            @php
                $isYoutube2 = false;
                if ($materi->url_kedua_materi != null && $materi->url_kedua_materi != "") {
                    $isYoutube2 = strpos($materi->url_kedua_materi, 'youtube.com') !== false || strpos($materi->url_kedua_materi, 'youtu.be') !== false;
                    if ($isYoutube2) {
                        parse_str(parse_url($materi->url_kedua_materi, PHP_URL_QUERY), $my_array_of_vars2);
                        $url2 = "https://www.youtube.com/embed/".$my_array_of_vars2['v'];
                    }
                }
            @endphp
            @if ($isYoutube2)
                <iframe style="width: 49%;" src="{{ $url2 }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @elseif ($materi->url_kedua_materi != null && $materi->url_kedua_materi != "")
                <div style="width: 49%;">
                    <a href="{{ $materi->url_kedua_materi }}" target="_blank" class="btn btn-bg-light btn-active-color-primary btn-sm d-flex align-items-center justify-content-center" style="width: 100%; height: 100%;">
                        <i class="bi bi-file-earmark-text me-2"></i> Lihat Materi
                    </a>
                </div>
            @endif
        </div>
        <!--end::Video Container-->
    </div>
</div>
@endsection

@push('scripts')
    <script>
        // Jika pengiriman sukses, tampilkan pesan sukses dengan SweetAlert
        @if (session('success'))
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ session("success") }}',
                icon: 'success',
                confirmButtonText: 'Tutup',
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        @endif
    </script>
@endpush
