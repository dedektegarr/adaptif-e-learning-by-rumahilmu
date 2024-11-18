@extends('mahasiswa/dashboard_template')

@section('dashboardProfile')
    <!--begin::details View-->
    <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Informasi Detail</h3>
            </div>
            <!--end::Card title-->
            <!--begin::Action-->
            <a href="account/settings.html" class="btn btn-sm btn-primary align-self-center">Edit Profil</a>
            <!--end::Action-->
        </div>
        <!--begin::Card header-->
        <!--begin::Card body-->
        <div class="card-body p-9">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Nama Lengkap</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">@yield('userName')</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Email</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 fv-row">
                    <span class="fw-semibold text-gray-800 fs-6">{{ Auth::user()->email != null? Auth::user()->email : '-' }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">NPM</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2">{{ Auth::user()->username }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Jenis Kelamin</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{ Auth::user()->jenis_kelamin == "L" ? 'Laki-Laki' : 'Perempuan' }}</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Jalur Masuk</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800" style="text-transform: uppercase !important;">{{ Auth::user()->jalur_masuk }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Rata-Rata Nilai Ujian</label>
                <!--end::Label-->
                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{ Auth::user()->rata_ujian }}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Asal Sekolah</label>
                <!--begin::Label-->
                <!--begin::Label-->
                <div class="col-lg-8">
                    <span class="fw-semibold fs-6 text-gray-800">{{ Auth::user()->asal_sekolah != null ? Auth::user()->asal_sekolah : '-' }}</span>
                </div>
                <!--begin::Label-->
            </div>
            <!--end::Input group-->
            <!--begin::Input group-->
            <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Asal Provinsi SMA</label>
                <!--begin::Label-->
                <!--begin::Label-->
                <div class="col-lg-8">
                    <span class="fw-semibold fs-6 text-gray-800">{{ Auth::user()->asal_provinsi_sma != null ? Auth::user()->asal_provinsi_sma : '-' }}</span>
                </div>
                <!--begin::Label-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::details View-->
@endsection
