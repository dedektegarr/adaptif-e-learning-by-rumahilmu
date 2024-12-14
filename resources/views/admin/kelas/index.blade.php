@extends('layouts.admin')
@section('subTitle', 'Manajemen Kelas')
@section('page', 'Manajemen Kelas')
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
                    <h3 class="box-title">Manajemen Data Kelas</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 10px !important;">
                            <a href="{{ route('kelas.create') }}" class="btn btn-primary btn-sm btn-flat"><i
                                    class="fa fa-plus"></i>&nbsp; Tambah</a>
                        </div>
                        <div class="col-md-12 table-responsive">
                            <table class="table table-striped table-bordered" id="table" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kelas</th>
                                        <th style="text-align: center">Thumbnail</th>
                                        <th style="text-align: center">Pembahasan</th>
                                        <th style="text-align:center;">Jumlah Mahasiswa</th>
                                        <th style="text-align:center;">Capaian Lulusan</th>
                                        <th style="text-align:center;">Kuisioner</th>
                                        <th style="text-align:center;">Kuisioner Kelompok</th>
                                        <th style="width: 8% !important;">Detail</th>
                                        <th style="width: 8% !important;">Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($kelas as $index => $kelas)
                                        <tr>
                                            <td> {{ $index + 1 }} </td>
                                            <td>
                                                <p href="" style="text-transform: uppercase">{{ $kelas->nama_kelas }}
                                                    <a style="text-transform: capitalize">({{ $kelas->jenis_kelas }})</a>
                                                </p>
                                                <hr style="margin:5px 0px; opacity: 0.2;">
                                                <small class="label label-success" style="font-size: 10px !important;">Kode
                                                    Kelas : {{ $kelas->kode_kelas }}</small>
                                                <small class="label label-warning"
                                                    style="font-size: 10px !important;">Jadwal :
                                                    {{ Carbon\Carbon::parse($kelas->waktu_mulai)->isoFormat('D MMMM Y') }} -
                                                    {{ Carbon\Carbon::parse($kelas->waktu_selesai)->isoFormat('D MMMM Y') }}</small>
                                                <small class="label label-primary"
                                                    style="font-size: 10px !important;">Semester
                                                    {{ $kelas->semester == 2 ? 'Genap' : 'Ganjil ' . $kelas->tahun }}</small>
                                            </td>

                                            <td style="text-align: center">
                                                @if ($kelas->thumbnail != null)
                                                    <img src="{{ asset('storage/' . $kelas->thumbnail) }}"
                                                        alt="Thumbnail Kelas" style="width:150px !important;">
                                                @else
                                                    <a style="color:red;"><i>-</i></a>
                                                @endif
                                            </td>
                                            <td style="text-align: center">
                                                {{ $kelas->topik_pembahasan_kelas_count }} Topik
                                            </td>
                                            <td style="text-align:center;">
                                                {{ $kelas->mahasiswas_count }} Mahasiswa
                                            </td>

                                            <td style="text-align:center;">
                                                {{ $kelas->capaian_lulusans_count }} Data
                                            </td>
                                            <td style="text-align:center;">
                                                {{ $kelas->kuisioners_count }} Kuisioner
                                            </td>

                                            <td style="text-align:center;">
                                                {{ $kelas->kuisioner_penilaian_kelompoks_count }} Kuisioner
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-success btn-flat">Detail</button>
                                                    <button type="button" class="btn btn-success dropdown-toggle btn-flat"
                                                        data-toggle="dropdown">
                                                        <span class="caret"></span>
                                                        <span class="sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li style="padding: 0px 10px !important;"><a
                                                                href="{{ route('kelas.detail', [$kelas->id]) }}">Semua
                                                                Detail</a></li>
                                                        <li class="divider"></li>
                                                        <li style="padding: 0px 10px !important;"><a
                                                                href="{{ route('kelas.topikPembahasan', [$kelas->id]) }}">Detail
                                                                Topik Pembahasan</a></li>
                                                        <li style="padding: 0px 10px !important;"><a
                                                                href="{{ route('kelas.mahasiswa', [$kelas->id]) }}">Detail
                                                                Mahasiswa</a></li>
                                                        <li style="padding: 0px 10px !important;"><a
                                                                href="{{ route('kelas.capaianLulusan', [$kelas->id]) }}">Detail
                                                                Capaian Lulusan</a></li>
                                                        <li style="padding: 0px 10px !important;"><a
                                                                href="{{ route('kelas.kuisioner', [$kelas->id]) }}">Detail
                                                                Kuisioner</a></li>
                                                        <li style="padding: 0px 10px !important;"><a
                                                                href="{{ route('kelas.kuisionerKelompok', [$kelas->id]) }}">Detail
                                                                Kuisioner Kelompok</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td>
                                                @php
                                                    $now = now();
                                                    $start = Carbon\Carbon::parse($kelas->waktu_mulai);
                                                    $end = Carbon\Carbon::parse($kelas->waktu_selesai);
                                                @endphp

                                                @if ($now->between($start, $end))
                                                    <span class="label label-success">Sedang Aktif</span>
                                                @elseif ($now > $end)
                                                    <span class="label label-danger">Selesai</span>
                                                @else
                                                    <span class="label label-info">Akan Datang</span>
                                                @endif
                                            </td>
                                            <td class="button-container">
                                                <a href="{{ route('kelas.edit', [$kelas->id]) }}"
                                                    class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp;
                                                    Edit</a>
                                                <form action="{{ route('kelas.delete', [$kelas->id]) }}" method="POST"
                                                    class="form">
                                                    {{ csrf_field() }} {{ method_field('DELETE') }}
                                                    <button type="submit"
                                                        class="btn btn-danger btn-sm btn-flat show_confirm"><i
                                                            class="fa fa-trash"></i>&nbsp; Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </section>
        @endsection
        @include('admin/validasi')
        @push('scripts')
            <script>
                $(document).ready(function() {
                    $('.show_confirm').click(function(event) {
                        event.preventDefault();
                        var form = $(this).closest("form");

                        swal({
                                title: "Apakah Anda Yakin?",
                                text: "Harap untuk memeriksa kembali sebelum menghapus data.",
                                icon: "warning",
                                buttons: true,
                                dangerMode: true,
                            })
                            .then((willDelete) => {
                                if (willDelete) {
                                    form.submit();
                                }
                            });
                    });
                });
            </script>
        @endpush
