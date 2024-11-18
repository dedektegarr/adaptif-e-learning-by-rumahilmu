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
                            <img src="{{ asset($kelas->pengampu->foto ? 'storage/' . $kelas->pengampu->foto : 'storage/fotos/endina.jpeg') }}" alt="foto profil" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1 text-center">{{ $kelas->pengampu->nama_lengkap }}</a>
                        <!--end::Name-->
                        <!--begin::Email-->
                        <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{ $kelas->pengampu->username }}</a>
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
                        <div class="text-gray-600">{{ \Carbon\Carbon::parse($kelas->waktu_mulai)->translatedFormat('l, d F Y') }}</div>
                        <!--begin::Details item-->

                        <!--begin::Details item-->
                        <div class="fw-bold mt-5">Tanggal Selesai</div>
                        <div class="text-gray-600">{{ \Carbon\Carbon::parse($kelas->waktu_selesai)->translatedFormat('l, d F Y') }}</div>
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
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_customer_overview">Capaian Lulusan, Topik dan Materi</a>
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
                                        <h3 class="fw-bold m-0 text-gray-800">Formulir Kuisioner Kelas : {{ $kelas->nama_kelas }}</h3>
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
                                    <form id="kuisionerForm" action="{{ route('mahasiswa.kelas.ambil_kelas_post',[$kelas->id]) }}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <!--begin::Tab Content-->
                                        <div class="tab-content">

                                            <!--begin::Tab panel-->
                                            <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                                <!--begin::Timeline-->
                                                <div class="timeline timeline-border-dashed">
                                                    @foreach ($kelas->kuisioners as $loopIndex => $kuisioner)
                                                        <div class="form-check" style="padding-left: 0px !important;">
                                                            <!--begin::Timeline item-->
                                                            <div class="timeline-item mb-4">
                                                                <!--begin::Timeline line-->
                                                                <div class="timeline-line"></div>
                                                                <!--end::Timeline line-->
                                                                <!--begin::Timeline icon-->
                                                                <div class="timeline-icon">
                                                                    <span class="fs-5 text-white d-flex align-items-center justify-content-center"
                                                                        style="background-color: #6c5ce7; width: 30px; height: 30px; border-radius: 50%;">
                                                                        {{ $loopIndex + 1 }}
                                                                    </span>
                                                                </div>
                                                                <!--end::Timeline icon-->
                                                                <!--begin::Timeline content-->
                                                                <div class="timeline-content ms-4">
                                                                    <!--begin::Timeline heading-->
                                                                    <div class="d-flex align-items-center">
                                                                        <!--begin::Title-->
                                                                        <div class="fs-5 fw-semibold mb-2">
                                                                            {{ $kuisioner->pertanyaan }}
                                                                        </div>

                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Timeline heading-->

                                                                    <!--begin::Options-->
                                                                    <div class="overflow-auto mt-3">
                                                                        <!--begin::Wrapper-->
                                                                        <div class="d-flex flex-column align-items-start">
                                                                            @foreach (['Sangat Setuju', 'Setuju', 'Cukup Setuju', 'Cukup Tidak Setuju', 'Tidak Setuju', 'Sangat Tidak Setuju'] as $option)
                                                                                <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-1 mb-2 w-100">
                                                                                    <div class="d-flex align-items-center me-2">
                                                                                        <!--begin::Radio-->
                                                                                        <div class="form-check form-check-custom form-check-solid form-check-primary me-2">
                                                                                            <input class="form-check-input" type="radio" name="kuisioner_{{ $loopIndex }}" value="{{ $option }}" style="transform: scale(0.6);" />
                                                                                        </div>
                                                                                        <!--end::Radio-->
                                                                                        <!--begin::Info-->
                                                                                        <div class="fs-7">
                                                                                            {{ $option }}
                                                                                        </div>
                                                                                        <!--end::Info-->
                                                                                    </div>
                                                                                </label>
                                                                            @endforeach
                                                                        </div>
                                                                        <!--end::Wrapper-->
                                                                    </div>
                                                                    <!--end::Options-->
                                                                </div>
                                                                <!--end::Timeline content-->
                                                            </div>
                                                            <!--end::Timeline item-->
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!--end::Timeline-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab Content-->

                                        <div class="card-footer" style="text-align: left;padding: 15px;">
                                            <button type="submit" class="btn btn-primary mt-3">Simpan Jawaban</button>
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
    document.getElementById('kuisionerForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Mencegah form submit default

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
                const form = event.target;
                const formData = new FormData(form);

                fetch(form.action, {
                    method: form.method,
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    }
                }).then(response => {
                    if (!response.ok) {
                        return response.json().then(err => { throw err; });
                    }
                    return response.json();
                }).then(data => {
                    if (data.redirect_url) {
                        Swal.fire(
                            'Berhasil!',
                            'Jawaban Anda berhasil disimpan.',
                            'success'
                        ).then(() => {
                            // Redirect setelah swal berhasil
                            window.location.href = data.redirect_url;
                        });
                    }
                }).catch(error => {
                    let errorMessages = '';
                    if (error.errors) {
                        const uniqueErrors = new Set();

                        for (const key in error.errors) {
                            if (error.errors.hasOwnProperty(key)) {
                                uniqueErrors.add(error.errors[key].join('<br>'));
                            }
                        }
                        errorMessages = Array.from(uniqueErrors).join('<br>');
                    } else {
                        errorMessages = error.message || 'Terjadi kesalahan.';
                    }

                    Swal.fire({
                        title: 'Gagal!',
                        html: errorMessages,
                        icon: 'error'
                    });
                });
            }
        });
    });

</script>

@endpush
