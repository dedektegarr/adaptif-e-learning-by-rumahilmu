@extends('mahasiswa/kelas_saya.detail_materi_template')

@section('contentMateri')
<div class="container-fluid">
    @foreach ($pengayaans as $pengayaan)
        <div class="card card-custom mb-5">
            <!--begin::Card header-->
            <div class="card-header bg-tosca text-white position-relative" style="border-radius: 15px 15px 0 0; background-color: #20c997 !important;">
                <!--begin::Card title-->
                <div class="card-title">
                    <h2 class="text-white">{{ $pengayaan->judul }}</h2>
                </div>
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-4 pb-5" style="background-color: #f0f4f7; border-radius: 0 0 15px 15px;">
                {!! $pengayaan->isi_materi !!}
            </div>
            <!--end::Card body-->
        </div>
    @endforeach
</div>
@endsection

@push('styles')
<style>
    .card-custom {
        border: none;
        border-radius: 15px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card-custom:hover {
        transform: translateY(-10px); /* Lift effect on hover */
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
    }

    .card-header {
        padding: 20px;
        background-color: #20c997 !important; /* Warna tosca dengan !important */
        border-radius: 15px 15px 0 0; /* Rounded top corners */
        position: relative;
        overflow: hidden;
    }

    .card-title h2 {
        font-weight: 600;
        font-size: 24px;
        margin: 0;
        color: white; /* Teks putih agar terlihat jelas */
    }

    .card-body {
        padding: 20px;
        background-color: #f0f4f7; /* Light background for contrast */
        border-radius: 0 0 15px 15px; /* Rounded bottom corners */
        font-size: 16px;
        line-height: 1.7;
    }


</style>
@endpush
