@extends('layouts.admin')
@section('subTitle', 'Penilaian Tugas Kelompok')
@section('materi', 'Penilaian Tugas Kelompok')
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
        <div class="col-md-12" id="informasi2">
            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;Hasil Penilaian Tugas Kelompok
                        {{ $tugas->kelompok }}</h3>

                    <div class="pull-right">
                        <a href="{{ route('kelas.topikPembahasan.materi.tugasKelompok.penilaian.edit', [$kelas->id, $topikPembahasan->id, $materi->id, $tugasKelompok->id, $tugas->id]) }}"
                            class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Ubah
                            Nilai</a>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-striped table-hover">
                        <tr>
                            <td style="vertical-align : middle;text-align:center; font-weight:bold; width:20% !important"
                                rowspan="4">Nama Anggota :</td>
                        </tr>

                        @foreach ($detail_tugas as $anggota)
                            <tr>
                                <td style="font-weight: bold">{{ $anggota->mahasiswa->nama_lengkap }}</td>
                            </tr>
                        @endforeach
                    </table>
                    <br>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kriteria Penilaian</th>
                                <th>Hasil</th>
                                <th style="min-width:100px !important;">Skor</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_nilai as $index => $nilai)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $nilai->rubrikPenilaian->rubrik_penilaian }}</td>
                                    <td>
                                        {{ $nilai->rubrikPenilaian->indikatorPenilaians->where('skor_indikator', $nilai->nilai)->first()->nama_indikator ?? '-' }}

                                    </td>
                                    <td class="text-center">{{ $nilai->nilai }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-bold text-center">Jumlah Nilai</td>
                                <td class="text-bold text-center">{{ $detail_nilai->sum('nilai') }}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-bold text-center">Nilai Akhir</td>
                                <td class="text-bold text-center">{{ $detail_nilai->avg('nilai') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
