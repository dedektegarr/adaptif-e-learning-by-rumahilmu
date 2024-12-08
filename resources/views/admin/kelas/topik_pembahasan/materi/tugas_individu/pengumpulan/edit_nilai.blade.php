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

                    <strong><i class="fa fa-external-link"></i>&nbsp; Dokumen Pengumpulan Tugas</strong>
                    @if ($tugas->file_tugas !== null && $tugas->fileTugas !== '')
                        <div style="margin-left: 12px !important; margin-top:10px !important;">
                            <a class="btn btn-primary btn-sm" href="{{ asset(checkStoragePath($tugas->file_tugas)) }}"
                                target="_blank">
                                <i style="margin-right: 3px" class="fa fa-pencil"></i>
                                Lihat Tugas
                            </a>
                        </div>
                    @else
                        <p class="text-muted" style="margin:10px 0px 0px 12px !important">
                            File tidak tersedia
                        </p>
                    @endif

                    <hr style="margin: 15px !important;">

                    <strong><i class="fa fa-user"></i>&nbsp; Nama Lengkap</strong>
                    <p class="text-muted" style="margin:10px 0px 0px 12px !important">
                        {{ $tugas->mahasiswa->nama_lengkap }}
                    </p>

                    <hr style="margin: 15px !important;">

                    <strong><i class="fa fa-clock-o"></i> Waktu Pengumpulan</strong>

                    <p class="text-muted" style="margin:10px 0px 0px 12px !important">
                        {{ Carbon\Carbon::parse($tugas->created_at)->isoFormat('D MMMM Y') }}
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
                    <h3 class="box-title"><i class="fa fa-info-circle"></i>&nbsp;Penilaian Tugas Individu</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form
                        action="{{ route('kelas.topikPembahasan.materi.tugasIndividu.penilaian.update', [$kelas->id, $topikPembahasan->id, $materi->id, $tugasIndividu->id, $tugas->id]) }}"
                        method="POST">
                        {{ csrf_field() }} {{ method_field('PATCH') }}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-warning">
                                    Silahkan Inputkan Perubahan Nilai Tugas Mahasiswa
                                    <b>{{ $tugas->mahasiswa->nama_lengkap }}</b>
                                    <br>
                                </div>
                                <table class="table table-hover table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Rubrik Penilaian</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nilai_detail as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $item->rubrikPenilaian->rubrik_penilaian }}</td>
                                                <td class="text-center">{{ $item->nilai }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2" class="text-bold text-center">Jumlah Nilai</td>
                                            <td class="text-bold text-center">{{ $tugas->nilai }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="text-bold text-center">Nilai Akhir</td>
                                            <td class="text-bold text-center">{{ $tugas->rata_rata }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-12">
                                <table class="table table-hover" id="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kriteria Penilaian</th>
                                            <th>Item Penilaian</th>
                                            <th style="min-width:100px !important;">Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($rubrikPenilaian as $rubrik)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $rubrik->rubrik_penilaian }}</td>
                                                <td>
                                                    <ol style="padding-left: 12px !important;">
                                                        @foreach ($rubrik->indikatorPenilaians as $indikator)
                                                            <li>{{ $indikator->keterangan }} (Tingkat :
                                                                {{ $indikator->nama_indikator }}, Skor :
                                                                {{ $indikator->skor_indikator }})</li>
                                                        @endforeach
                                                    </ol>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="id" value="{{ $tugas->id }}">
                                                    <input type="hidden" name="mahasiswa_id"
                                                        value="{{ $tugas->mahasiswa_id }}">
                                                    <select name="rubrik{{ $rubrik->id }}" id=""
                                                        class="form-control" required>
                                                        <option disabled selected value="">-- pilih nilai --</option>
                                                        @foreach ($rubrik->indikatorPenilaians as $indikator)
                                                            <option value="{{ $indikator->skor_indikator }}">
                                                                {{ $indikator->nama_indikator }} (Skor :
                                                                {{ $indikator->skor_indikator }})</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <hr style="width: 50%" class="mt-0">
                            <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i
                                    class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                            <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                    class="fa fa-check-circle"></i>&nbsp;Simpan Nilai</button>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
@endsection
