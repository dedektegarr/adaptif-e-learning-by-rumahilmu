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
                            <!--begin::Card-->
                            <div class="card pt-4 mb-1 mb-xl-4">
                                <!--begin::Card header-->
                                <div class="card-header border-0">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2 class="fw-bold">Capaian Lulusan</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <a href="{{ route('mahasiswa.kelas.ambil_kelas',[$kelas->id]) }}" class="btn btn-sm btn-flex btn-light-primary">
                                        <i class="ki-duotone ki-pencil fs-3">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>Ambil Kelas</a>
                                    </div>
                                    <!--end::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->

                                <div class="card-body pt-0">
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <b>Gagal : </b> {{ $errors->first() }}
                                        </div>
                                    @endif
                                    @foreach ($kelas->capaianLulusans as $cpl)
                                        <div class="fw-bold fs-4">{{ $cpl->capaian_lulusan }}
                                        <div class="fs-6 fw-normal text-muted mt-3">{!! $cpl->keterangan !!}</div>
                                    </div>
                                    @endforeach
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card-->
                        </div>
                    </div>
                    <!--begin::Card-->
                    <div class="card pt-2 mb-6 mb-xl-9">
                        <!--begin::Card head-->
                        <div class="card-header card-header-stretch">
                            <!--begin::Title-->
                            <div class="card-title d-flex align-items-center">
                                <i class="ki-duotone ki-menu fs-1 text-primary me-3 lh-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                                <h3 class="fw-bold m-0 text-gray-800">Topik dan Materi Pembelajaran</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar m-0">
                                <!--begin::Tab nav-->
                                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 pe-2">
                                            @foreach ($kelas->mahasiswas->take(10) as $mahasiswa)
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" title="{{ $mahasiswa->nama_lengkap }}">
                                                    <img src="{{ $mahasiswa->foto ? asset('storage/' . $mahasiswa->foto) : asset('storage/fotos/profil.jpg') }}" alt="{{ $mahasiswa->nama_lengkap }}" />
                                                </div>
                                            @endforeach

                                            @if ($kelas->mahasiswas->count() > 10)
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="d-flex justify-content-center align-items-center w-100 h-100 bg-light text-dark fw-bold" data-bs-toggle="tooltip" title="Dan {{ $kelas->mahasiswas->count() - 10 }} lainnya">
                                                        &nbsp;<i class="fa fa-info-circle"></i>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <!--end::Users-->
                                    </li>
                                </ul>
                                <!--end::Tab nav-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card head-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                    <!--begin::Timeline-->
                                    <div class="timeline timeline-border-dashed">
                                        @foreach ($kelas->topikPembahasanKelas as $loopIndex => $topik)
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <!-- Menampilkan angka berurutan sebagai ikon -->
                                                <span class="fs-5 text-gray-500">{{ $loopIndex + 1 }}</span>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">{{ $topik->nama_topik }}</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">{!! $topik->cpmk !!}</div>
                                                        <!--end::Info-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                @foreach ($topik->materis as $materi)
                                                    <!--begin::Timeline details-->
                                                    <div class="overflow-auto pb-1">
                                                        <!--begin::Record-->
                                                        <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-1 mb-2">
                                                            <!--begin::Title-->
                                                            <a href="" class="fs-6 text-gray-900 text-hover-primary w-375px min-w-200px">{{ $materi->nama_materi }}</a>
                                                            <!--end::Title-->

                                                            <!--begin::Progress-->
                                                            <div class="min-w-125px pe-2">
                                                                @if ($materi->critical_status == 0)
                                                                    <span class="badge badge-light-warning">Tingkat {{ ucfirst('dasar') }}</span>
                                                                @elseif ($materi->critical_status == 1)
                                                                    <span class="badge badge-light-success">Tingkat {{ ucfirst('menengah') }}</span>
                                                                @elseif ($materi->critical_status == 2)
                                                                    <span class="badge badge-light-danger">Tingkat {{ ucfirst('lanjut') }}</span>
                                                                @endif
                                                            </div>
                                                            <!--end::Progress-->
                                                        </div>
                                                        <!--end::Record-->
                                                    </div>
                                                    <!--end::Timeline details-->
                                                @endforeach
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    @endforeach
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Tab panel-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end:::Tab pane-->
            </div>
            <!--end:::Tab content-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Layout-->

    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Berhasil!',
                    text: '{{ session("success") }}',
                    icon: 'success',
                    confirmButtonText: 'Tutup',
                    customClass: {
                        confirmButton: "btn btn-primary"
                    }
                });
            });
        </script>
    @endif

@endsection
