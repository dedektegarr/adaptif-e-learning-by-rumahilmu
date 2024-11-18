@extends('layouts.admin')
@section('subTitle','Mahasiswa Mengambil Kelas')
@section('page','Mahasiswa Mengambil Kelas')
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
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"> Aktivitas Mahasiswa ({{ $mahasiswa->nama_lengkap }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div style="overflow-x: visible; width: 100%;">
                            <a href="{{ route('kelas.mahasiswa',[$kelas->id]) }}" class="btn btn-warning btn-sm btn-flat" style="margin-bottom: 10px !important;"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                            <table class="table table-striped table-bordered" style="width: 100%; table-layout: fixed;">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">No</th>
                                        <th style="width: 15%;">Description</th>
                                        <th style="width: 12%;">Subject Type</th>
                                        <th style="width: 8%;">Subject</th>
                                        <th style="width: 10%;">Event</th>
                                        <th style="width: 35%;">Properties</th>
                                        <th style="width: 15%;">Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datas as $index => $aktivitas)
                                        <tr>
                                            <td>{{ $index+1 }}</td>
                                            <td style="word-wrap: break-word;">{{ $aktivitas->description }}</td>
                                            <td style="word-wrap: break-word;">{{ $aktivitas->subject_type }}</td>
                                            <td style="word-wrap: break-word;">{{ $aktivitas->subject_id }}</td>
                                            <td style="word-wrap: break-word;">{{ $aktivitas->event }}</td>
                                            <td style="word-wrap: break-word; white-space: pre-wrap;">{{ $aktivitas->properties }}</td>
                                            <td style="word-wrap: break-word;">
                                                {{ \Carbon\Carbon::parse($aktivitas->created_at)->isoFormat('dddd, D MMMM Y HH:mm') }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $datas->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
