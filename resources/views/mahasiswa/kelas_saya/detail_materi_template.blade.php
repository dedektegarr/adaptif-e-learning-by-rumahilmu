@extends('mahasiswa.dashboard_template')
@section('username')
    {{ Auth::user()->username }}
@endsection
@section('userName')
    {{ Auth::user()->nama_lengkap }}
@endsection
@section('userEmail')
    {{ Auth::user()->email }}
@endsection
@section('dashboardProfile')
    <!--begin::Content-->
        <!--begin::FAQ card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-10">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 me-lg-20">
                        <!--begin::Catigories-->
                        <div class="mb-15">
                            <h4 class="text-gray-900 mb-7">Menu Materi</h4>
                            <!--begin::Menu-->
                            <div class="menu menu-rounded menu-column menu-title-gray-700 menu-state-title-primary menu-active-bg-light-primary fw-semibold">
                                <!--begin::Item-->
                                <div class="menu-item mb-1">
                                    <!--begin::Link-->
                                    <a href="{{ route('mahasiswa.kelas_saya.detail_materi',[$kelas->id, $materi->id]) }}" class="menu-link py-3 {{ Request::routeIs('mahasiswa.kelas_saya.detail_materi') ? 'active' : '' }}"><i class="fas fa-book me-2"></i>Materi</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <div class="menu-item mb-1">
                                    <!--begin::Link-->
                                    <a href="{{ route('mahasiswa.kelas_saya.tugas_kelompok',[$kelas->id, $materi->id]) }}" class="menu-link py-3 {{ Request::routeIs('mahasiswa.kelas_saya.tugas_kelompok') ? 'active' : '' }}"><i class="fas fa-users me-2"></i>Tugas Kelompok</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Item-->

                                <!--end::Item-->
                                <div class="menu-item mb-1">
                                    <!--begin::Link-->
                                    <a href="{{ route('mahasiswa.kelas_saya.tugas_individu',[$kelas->id, $materi->id]) }}" class="menu-link py-3 {{ Request::routeIs('mahasiswa.kelas_saya.tugas_individu') ? 'active' : '' }}"><i class="fas fa-user me-2"></i>Tugas Individu</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Item-->
                                <div class="menu-item mb-1">
                                    <!--begin::Link-->
                                    <a href="https://www.jdoodle.com/online-java-compiler" target="_blank" class="menu-link py-3"><i class="fas fa-pencil-alt me-2"></i> Latihan</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Item-->
                                <div class="menu-item mb-1">
                                    <!--begin::Link-->
                                    <a href="{{ route('mahasiswa.kelas_saya.materi_pengayaan',[$kelas->id, $materi->id]) }}" class="menu-link py-3 {{ Request::routeIs('mahasiswa.kelas_saya.materi_pengayaan') ? 'active' : '' }}"><i class="fas fa-lightbulb me-2"></i> Materi Pengayaan</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Item-->
                                <div class="menu-item mb-1">
                                    <!--begin::Link-->
                                    <a href="{{ route('mahasiswa.kelas_saya.diskusi',[$kelas->id, $materi->id]) }}" class="menu-link py-3 {{ Request::routeIs('mahasiswa.kelas_saya.diskusi') ? 'active' : '' }}"><i class="fas fa-comments me-2"></i> Forum Diskusi</a>
                                    <!--end::Link-->
                                </div>
                                <div class="menu-item mb-1">
                                    <!--begin::Link-->
                                    <a href="{{ route('mahasiswa.kelas_saya.post_test',[$kelas->id, $materi->id]) }}" class="menu-link py-3 {{ Request::routeIs('mahasiswa.kelas_saya.post_test') ? 'active' : '' }}"><i class="fas fa-question-circle me-2"></i> Kuis Post Test</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Item-->
                            </div>
                            <!--end::Menu-->
                        </div>
                        <!--end::Catigories-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    @yield('contentMateri')
                    <!--end::Content-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::FAQ card-->
    <!--end::Content-->
@endsection
