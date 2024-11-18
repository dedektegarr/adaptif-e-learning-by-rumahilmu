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
    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Detail Data Kelas</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered table-hover" style="width:100%;">
                                    <tr>
                                        <th>Nama Kelas</th>
                                        <td> : </td>
                                        <td> {{ $kelas->nama_kelas }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kode Kelas</th>
                                        <td> : </td>
                                        <td> {{ $kelas->kode_kelas }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelas</th>
                                        <td> : </td>
                                        <td style="text-transform: capitalize"> {{ $kelas->jenis_kelas }}</td>
                                    </tr>
                                    <tr>
                                        <th>Waktu</th>
                                        <td> : </td>
                                        <td> {{ $kelas->waktu_mulai->isoFormat('D MMMM Y') }} - {{ $kelas->waktu_selesai->isoFormat('D MMMM Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Semester</th>
                                        <td> : </td>
                                        <td> {{ $kelas->semester == 2 ? 'Genap' : 'Ganjil' }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tahun</th>
                                        <td> : </td>
                                        <td> {{ $kelas->tahun }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Topik</th>
                                        <td> : </td>
                                        <td> {{ $kelas->jumlah_topik }} Topik</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Topik Pembahasan Kelas</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Topik</th>
                                            <th>CPMK</th>
                                            <th>Topik Ke</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas->topikPembahasanKelas as $index => $topikPembahasan)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $topikPembahasan->nama_topik }}</td>
                                                <td>{!! $topikPembahasan->cpmk !!}</td>
                                                <td>{{ $topikPembahasan->topik_ke }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Capaian Lulusan Kelas</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table2" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Capaian Lulusan</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas->capaianLulusans as $index => $capaian_lulusann)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $capaian_lulusann->capaian_lulusan }}</td>
                                                <td>{!! $capaian_lulusann->keterangan !!}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Mahasiswa Mengambil Kelas</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table5" style="width:100%;">
                                    <thead>
                                        <th>No</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Nomor Pokok Mahasiswa</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Email</th>
                                        <th>Asal Provinsi SMA</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas->mahasiswas as $index => $mahasiswa)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>
                                                    {{ $mahasiswa->nama_lengkap }}
                                                    <hr style="margin:5px 0px; opacity: 0.2;">
                                                    <small class="label label-success" style="font-size: 8px !important;"> {{ $mahasiswa->asal_sekolah }}</small>
                                                    <small class="label label-warning" style="font-size: 8px !important;"> : {{ $mahasiswa->jalur_masuk }}</small>
                                                    <small class="label label-primary" style="font-size: 8px !important;">{{ $mahasiswa->rata_ujian }}</small>
                                                </td>
                                                <td>{{ $mahasiswa->username }}</td>
                                                <td>{{ $mahasiswa->jenis_kelamin == "L" ? 'Laki-Laki' : 'Perempuan' }}</td>
                                                <td>{{ $mahasiswa->email }}</td>
                                                <td>{{ $mahasiswa->asal_provinsi_sma }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Kuisioner Kelas</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table3" style="width:100%;">
                                    <thead>
                                        <th>No</th>
                                        <th>Jenis Kuisioner</th>
                                        <th>Pertanyaan</th>
                                        <th>Tipe Kuisioner</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas->kuisioners as $index => $kuisioner)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $kuisioner->jenisKuisioner->jenis_kuisioner }}</td>
                                                <td>{{ $kuisioner->pertanyaan }}</td>
                                                <td>{{ $kuisioner->tipe_kuisioner }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Kuisioner Kelompok</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="table4" style="width:100%;">
                                    <thead>
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($kelas->kuisionerPenilaianKelompoks as $index => $kuisioner)
                                            <tr>
                                                <td>{{ $index+1 }}</td>
                                                <td>{{ $kuisioner->pertanyaan }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
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
