@extends('layouts.admin')
@section('subTitle','Detail Data Kelas')
@section('page','Detail Data Kelas')
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
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Detail Data Materi <b>({{ $materi->nama_materi }})</b></h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12" style="margin-bottom: 10px !important;">
                                <a href="{{ route('kelas.topikPembahasan.materi',[$materi->topikPembahasanKelas->kelas_id, $materi->topik_pembahasan_id]) }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                            </div>
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="width:100%;">
                                    <tr>
                                        <th>Nama Materi</th>
                                        <td> : </td>
                                        <td> {{ $materi->nama_materi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Topik Pembahasan</th>
                                        <td> : </td>
                                        <td> {{ $materi->topikPembahasanKelas->nama_topik }}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama Kelas</th>
                                        <td> : </td>
                                        <td style="text-transform: capitalize"> {{ $materi->topikPembahasanKelas->kelas->nama_kelas }}</td>
                                    </tr>
                                    <tr>
                                        <th>Isi Materi</th>
                                        <td> : </td>
                                        <td style="text-transform: capitalize"> {!! $materi->isi_materi !!}</td>
                                    </tr>
                                    <tr>
                                        <th>File Materi</th>
                                        <td> : </td>
                                        <td>
                                            <a href="{{ asset('storage/' . $materi->file_materi) }}" download>
                                                {{ $materi->file_materi }}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kode Materi Youtube</th>
                                        <td> : </td>
                                        <td style="text-transform: capitalize"> {{ $materi->url_materi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kode Materi Kedua Youtube</th>
                                        <td> : </td>
                                        <td style="text-transform: capitalize"> {{ $materi->url_kedua_materi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Critical Status</th>
                                        <td> : </td>
                                        <td style="text-transform: capitalize">
                                            @if ($materi->critical_status == 0)
                                                Rendah
                                            @elseif($materi->critical_status == 1)
                                                Sedang
                                            @else
                                                Tinggi
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
