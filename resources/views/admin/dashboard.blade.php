@extends('layouts.admin')
@section('subTitle', 'Dashboard')
@section('page', 'Dashboard')
@section('login_as')
    Selamat Datang,
@endsection
@section('user-login2')
    {{ Auth::user()->nama_lengkap }}
@endsection
@section('sidebar')
    @include('layouts.partials.sidebar')
@endsection
@section('content')

    <div class="row">
        <div class="col-md-12">
            <section class="panel" style="margin-bottom:20px;">
                <header class="bg-primary"
                    style="color: #ffffff;background-color: #3c8dbc;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
                    <i class="fa fa-home"></i>&nbsp;Dashboard
                </header>
                <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
                    <div class="row" style="margin-right:-15px; margin-left:-15px;">
                        <div class="col-md-12">Selamat datang
                            <strong style="text-transform: capitalize">
                                {{ Auth::user()->nama_lengkap }}
                            </strong>
                            di halaman Dashboard Dosen <b> Adaptif E-Learning System</b>
                            <br>
                            <b><i>Jangan lupa untuk logout jika sudah menggunakan aplikasi</i></b>
                        </div>
                    </div>
                </div>
            </section>

            <section class="panel">
                <header class="panel-heading"
                    style="color: #ffffff;background-color: #3c8dbc;border-color: #fff000;border-image: none;border-style: solid solid none;border-width: 4px 0px 0;border-radius: 0;font-size: 14px;font-weight: 700;padding: 15px;">
                    <i class="fa fa-bar-chart"></i>&nbsp;Informasi Aplikasi
                </header>
                <div class="panel-body" style="border-top: 1px solid #eee; padding:15px; background:white;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="callout callout-danger">
                                <h4 style="text-transform: uppercase">Mohon Perhatian</h4>
                                <p>
                                    Saat ini tidak ada periode remunerasi yang aktif, semua rubrik dosen dinonaktifkan dan
                                    dosen tidak dapat menginputkan rubrik kinerja ke aplikasi!
                                    <br>
                                    Untuk mengaktifkan periode remunerasi, silahkan <a href=""
                                        style="font-weight: bold; font-style:italic;">klik disini</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-aqua" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahMahasiswa }}</h3>
                                    <p>Jumlah Siswa Terdaftar</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-red" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahKelas }}</h3>
                                    <p>Jumlah Kelas</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-yellow" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahBankSoal }}</h3>
                                    <p>Jumlah Bank Soal</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-wpforms"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-green" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahMahasiswaAktif }}</h3>
                                    <p>Jumlah Siswa Aktif</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-excel-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-aqua" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahMateri }}</h3>
                                    <p>Jumlah Materi</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-red" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahRubrikPenilaian }}</h3>
                                    <p>Jumlah Rubrik Penilaian</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-pdf-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-yellow" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahKuisioner }}</h3>
                                    <p>Jumlah Verifikator</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-wpforms"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xs-12 col-md-3" style="padding-bottom:10px !important;">
                            <div class="small-box bg-green" style="margin-bottom:0px;">
                                <div class="inner">
                                    <h3>{{ $jumlahJenisKuisioner }}</h3>
                                    <p>Jumlah User Role</p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-file-excel-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
