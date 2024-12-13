@extends('layouts.admin')
@section('subTitle', 'Rekapitulasi Nilai')
@section('page', 'Rekapitulasi Nilai')
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
                    <h3 class="box-title"><i class="fa fa-book"></i>&nbsp;Table Rekapitulasi Nilai</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <form action="{{ route('dosen.rekap.filter') }}" method="POST">
                                    {{ csrf_field() }} {{ method_field('POST') }}
                                    <div class="form-group col-md-12">
                                        <label for="">Pilih Kelas Terlebih Dahulu</label>
                                        <select name="kelas_id" class="form-control" id="">
                                            <option disabled selected>Pilih Kelas</option>
                                            @foreach ($kelas as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-sm btn-flat"><i
                                                class="fa fa-search"></i>&nbsp; Filter</button>
                                        @if (isset($_POST['kelas_id']))
                                            <a id="export" class="btn btn-success btn-sm btn-flat"><i
                                                    class="fa fa-file-excel-o"></i>&nbsp;Export Excel</a>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Berhasil :</strong>{{ $message }}
                                </div>
                            @elseif ($message = Session::get('error'))
                                <div class="alert alert-danger alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>Gagal :</strong>{{ $message }}
                                </div>
                            @else
                            @endif
                        </div>
                        <div class="col-md-12 table-responsive">
                            @if (isset($_POST['course_id']))
                                <table class="table table-striped table-bordered" id="table" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">No</th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Nama
                                                Mahasiswa</th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">NPM</th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Pre Test
                                            </th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Post Test
                                            </th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Jumlah
                                            </th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Rata-Rata
                                            </th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Rata-Rata
                                                Tugas Individu</th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Rata-Rata
                                                Tugas Kelompok</th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">Rata-Rata
                                                Kinerja Kelompok</th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">UTS</th>
                                            <th style="vertical-align : middle;text-align:center;" rowspan="2">UAS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($mahasiswas as $index => $mahasiswa)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $mahasiswa->firstName . ' ' . $mahasiswa->lastName }}</td>
                                                <td>{{ $mahasiswa->username }}</td>
                                                <td style="text-align:center">
                                                    {{ number_format($pre->jumlah != null ? $pre->jumlah : 0, 2) }}</td>
                                                <td style="text-align:center">
                                                    {{ number_format($post->jumlah != null ? $post->jumlah : 0, 2) }}</td>
                                                <td style="text-align:center">
                                                    {{ number_format($post->jumlah + $pre->jumlah, 2) }}</td>
                                                <td style="text-align:center">
                                                    {{ number_format(($post->jumlah + $pre->jumlah) / 2, 2) }}</td>
                                                <td style="text-align:center">
                                                    @if ($jml_individu->jumlah != null)
                                                        {{ number_format($jml_individu->jumlah / count($jml_individu2), 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td style="text-align:center">
                                                    @if ($jml_kelompok->jumlah != null)
                                                        {{ number_format($jml_kelompok->jumlah / count($jml_kelompok2), 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td style="text-align:center">
                                                    @if ($kinerja->rata != null)
                                                        {{ number_format($kinerja->rata / count($kinerja2), 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($uts->grade != null)
                                                        {{ number_format(($uts->grade / count($uts2)) * 100) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td></td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="8"><a style="color:red">data saat ini kosong</a></td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
