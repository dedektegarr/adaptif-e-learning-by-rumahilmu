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
                            @if (isset($_POST['kelas_id']))
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
                                        @forelse ($mahasiswas as $index => $mhs)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $mhs->nama_lengkap }}</td>
                                                <td>{{ $mhs->username }}</td>
                                                <td style="text-align:center">
                                                    {{ number_format($mhs->pretest != null ? $mhs->pretest : 0, 2) }}</td>
                                                <td style="text-align:center">
                                                    {{ number_format($mhs->posttest != null ? $mhs->posttest : 0, 2) }}
                                                </td>
                                                <td style="text-align:center">
                                                    {{ number_format($mhs->jumlah_nilai_kuis, 2) }}
                                                </td>
                                                <td style="text-align:center">
                                                    {{ number_format($mhs->jumlah_nilai_kuis / 2, 2) }}</td>
                                                <td style="text-align:center">
                                                    @if ($mhs->tugasIndividu != null)
                                                        {{ number_format($mhs->tugasIndividu, 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td style="text-align:center">
                                                    @if ($mhs->tugasKelompok != null)
                                                        {{ number_format($mhs->tugasKelompok, 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td style="text-align:center">
                                                    @if ($mhs->penilaianKelompok != null)
                                                        {{ number_format($mhs->penilaianKelompok, 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($mhs->uts != null)
                                                        {{ number_format($mhs->uts * 100, 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($mhs->uas != null)
                                                        {{ number_format($mhs->uas * 100, 2) }}
                                                    @else
                                                        0
                                                    @endif
                                                </td>
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
@push('scripts')
    <script src="//cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
    <script>
        $("#export").click(function() {
            $("#table").table2excel();
        });
    </script>
@endpush
