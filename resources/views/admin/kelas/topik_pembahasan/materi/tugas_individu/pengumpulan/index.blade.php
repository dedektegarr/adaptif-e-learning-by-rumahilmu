@extends('layouts.admin')
@section('subTitle', 'Penilaian Tugas Individu')
@section('materi', 'Penilaian Tugas Individu')
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
        <div class="col-md-3" id="informasi1">
            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;Informasi Tugas</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    {{-- <strong><i class="fa fa-user"></i>&nbsp; Plagiasi Tugas</strong>
                    <div style="margin-left: 12px !important; margin-top:10px !important;">
                        <livewire:preprocess-text-button codeId="{{ $grades[0]->codeId }}" label="Preprocess Dokumen" />
                        <livewire:check-similarity-button codeId="{{ $grades[0]->codeId }}"
                            label="Cek Plagiasi Semua Tugas" />
                    </div>

                    <hr style="margin: 15px !important;"> --}}

                    <strong><i class="fa fa-external-link"></i>&nbsp; Dokumen Tugas</strong>
                    @if ($tugasIndividu->file_tugas !== null && $tugasIndividu->fileTugas !== '')
                        <div style="margin-left: 12px !important; margin-top:10px !important;">
                            <a class="btn btn-primary btn-sm"
                                href="{{ asset(checkStoragePath($tugasIndividu->file_tugas)) }}" target="_blank">
                                <i style="margin-right: 3px" class="fa fa-pencil"></i>
                                Lihat Soal
                            </a>
                        </div>
                    @else
                        <p class="text-muted" style="margin:10px 0px 0px 12px !important">
                            File tidak tersedia
                        </p>
                    @endif

                    <hr style="margin: 15px !important;">

                    <strong><i class="fa fa-user"></i>&nbsp; Waktu Mulai</strong>
                    <p class="text-muted" style="margin:10px 0px 0px 12px !important">
                        {{ Carbon\Carbon::parse($tugasIndividu->waktu_mulai)->isoFormat('D MMMM Y') }}
                    </p>

                    <hr style="margin: 15px !important;">

                    <strong><i class="fa fa-clock-o"></i> Waktu Selesai</strong>

                    <p class="text-muted" style="margin:10px 0px 0px 12px !important">
                        {{ Carbon\Carbon::parse($tugasIndividu->waktu_selesai)->isoFormat('D MMMM Y') }}
                    </p>

                    <hr style="margin: 15px !important;">
                    <strong><i class="fa fa-clock-o"></i> Pengumpulan Tugas</strong>
                    <p class="text-muted" style="margin:10px 0px 0px 12px !important">
                        @if ($tugasIndividu->status_upload == '0')
                            <label for="" class="label label-warning">tidak boleh upload
                                lewat waktu</label>
                        @else
                            <label for="" class="label label-warning">Boleh upload lewat
                                waktu</label>
                        @endif
                    </p>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-9" id="informasi2">
            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;Pengumpulan Tugas Individu Mahasiswa
                        ({{ $tugasIndividu->materi->nama_materi }})</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div style="margin-bottom: 1em; display:flex; align-items:center; gap:.6rem">
                        <livewire:preprocess-button :daftarTugas="$pengumpulanTugas" label="Preprocess Semua Tugas" />
                        <livewire:check-similarity-button :daftarTugas="$pengumpulanTugas" label="Periksa Plagiasi" />
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>File Tugas</th>
                                {{-- <th>Rerata Tingkat Plagiasi</th> --}}
                                <th>Waktu Pengumpulan</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @forelse ($pengumpulanTugas as $tugas)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $tugas->mahasiswa->nama_lengkap }}</td>
                                    <td>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ asset(checkStoragePath($tugas->file_tugas)) }}" target="_blank">
                                            <i style="margin-right: 3px" class="fa fa-file"></i>
                                            Lihat Tugas
                                        </a>
                                    </td>
                                    {{-- <td>
                                        {{ number_format($tugas->similarityResults->max('similarity_score') * 100, 0) }}%
                                    </td> --}}
                                    <td>
                                        {{ Carbon\Carbon::parse($tugas->created_at)->isoFormat('D MMMM Y') }}
                                    </td>
                                    <td>
                                        @if ($tugas->nilai == null || $tugas->nilai == '')
                                            <a href="{{ route('kelas.topikPembahasan.materi.tugasIndividu.penilaian.detail', [$kelas->id, $topikPembahasan->id, $materi->id, $tugasIndividu->id, $tugas->id]) }}"
                                                class="btn btn-success btn-sm btn-flat"><i
                                                    class="fa fa-star"></i>&nbsp;Input Nilai</a>
                                        @else
                                            <a href="{{ route('kelas.topikPembahasan.materi.tugasIndividu.penilaian.edit', [$kelas->id, $topikPembahasan->id, $materi->id, $tugasIndividu->id, $tugas->id]) }}"
                                                class="btn btn-warning btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp;
                                                Edit Nilai</a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Belum ada mahasiswa mengumpulkan tugas individu
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
