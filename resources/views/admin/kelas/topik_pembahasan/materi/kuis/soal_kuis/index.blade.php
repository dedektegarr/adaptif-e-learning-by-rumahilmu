@extends('layouts.admin')
@section('subTitle','Kuis Materi')
@section('materi','Kuis Materi')
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
                <h3 class="box-title"> Kuis Materi ({{ $data->materi->topikPembahasanKelas->kelas->nama_kelas }}), Topik ({{ $data->materi->topikPembahasanKelas->nama_topik }}), Materi ({{ $data->nama_materi }})</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <form action="{{ route('kelas.topikPembahasan.materi.kuis.post',[$data->materi->topikPembahasanKelas->kelas->id,$data->materi->topikPembahasanKelas->id, $data->id]) }}" method="POST" class="form" enctype="multipart/form-data">
                        @csrf @method('POST')
                        <!-- Select Pilihan Cara -->
                        <div class="form-group col-md-12">
                            <label for="cara">Apakah Anda Ingin Memilih Soal Per Kelas?</label>
                            <select name="cara" id="cara" class="form-control">
                                <option disabled selected>-- Silahkan pilih jawaban --</option>
                                <option value="tidak">Tidak</option>
                                <option value="ya">Ya</option>
                            </select>
                        </div>

                        <!-- Section Tidak -->
                        <div id="section-tidak" style="display: none;" class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="jenis">Pilih Jenis Soal</label>
                                        <select name="jenis" id="jenis" class="form-control">
                                            <option disabled selected>-- Pilih jenis soal --</option>
                                            @foreach ($jenis as $item)
                                                <option value="{{ $item->fileReviewType }}">{{ $item->fileReviewType }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bank_soal_pembahasan_id">Pilih Soal</label>
                                        <select name="bank_soal_pembahasan_id" id="bank_soal_pembahasan_id" class="form-control">
                                            <option disabled selected>-- Pilih soal --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="review">Detail Soal</label>
                                <textarea name="review" class="form-control" id="review" cols="30" rows="4" disabled></textarea>
                            </div>
                        </div>

                        <!-- Section Ya -->
                        <div id="section-ya" style="display: none;" class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kelas_id">Pilih Kelas</label>
                                        <select name="kelas_id" id="kelas_id" class="form-control">
                                            <option disabled selected>-- Pilih kelas --</option>
                                            @foreach ($kelas as $kelas)
                                                <option value="{{ $kelas->id }}">{{ $kelas->nama_kelas }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="topik_pembahasan_id">Pilih Topik Pembahasan</label>
                                        <select name="topik_pembahasan_id" id="topik_pembahasan_id" class="form-control">
                                            <option disabled selected>-- Pilih topik --</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="materi_id">Pilih Materi Pembahasan</label>
                                        <select name="materi_id" id="materi_id" class="form-control">
                                            <option disabled selected>-- Pilih materi --</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="kuis_id">Pilih Kuis Yang Diinginkan</label>
                                        <select name="kuis_id" id="kuis_id" class="form-control">
                                            <option disabled selected>-- Pilih kuis --</option>
                                            <option value="pretest">Pre Test</option>
                                            <option value="posttest">Post Test</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Buttons -->
                        <div class="col-md-12 text-center">
                            <a href="{{ route('kelas.topikPembahasan.materi.kuis',[$data->materi->topikPembahasanKelas->kelas->id, $data->materi->topikPembahasanKelas->id, $data->materi->id]) }}" class="btn btn-warning btn-sm btn-flat"><i class="fa fa-arrow-left"></i>&nbsp; Kembali</a>
                            <button type="reset" name="reset" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-refresh"></i>&nbsp;Ulangi</button>
                            <button type="submit" class="btn btn-primary btn-sm btn-flat btnSubmit"><i class="fa fa-check-circle"></i>&nbsp;Simpan</button>
                            <hr style="width:20% !important; margin:10px auto; opacity: 0.2;">
                        </div>
                    </form>

                    <div class="col-md-12 table-responsive">
                        <a href=""></a>
                        <table class="table table-striped table-bordered table-hover" id="table" style="width:100%;">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Soal Kuis</th>
                                    <th>Level Berfikir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data->pertanyaans as $index => $pertanyaan)
                                    <tr>
                                        <td>{{ $index+1 }}</td>
                                        <td>{!! $pertanyaan->bankSoalPembahasan->pertanyaan !!}</td>
                                        <td>{!! $pertanyaan->bankSoalPembahasan->level_berfikir !!}</td>
                                        <td class="action-buttons">
                                            <a onclick="editKuis({{ $data->materi->topikPembahasanKelas->kelas->id }}, {{ $data->materi->topikPembahasanKelas->id }}, {{ $data->id }}, {{ $pertanyaan->id }})" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-edit"></i>&nbsp; Edit</a>
                                            <form action="{{ route('kelas.topikPembahasan.materi.kuis.delete',[$data->materi->topikPembahasanKelas->kelas->id, $data->materi->topikPembahasanKelas->id, $data->id, $pertanyaan->id]) }}" method="POST" style="margin: 0;">
                                                {{ csrf_field() }} {{ method_field("DELETE") }}
                                                <button type="submit" class="btn btn-danger btn-sm btn-flat show_confirm"><i class="fa fa-trash"></i>&nbsp; Hapus</button>
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
    </div>
</div>
@endsection
@include('admin/validasi')
@include('admin/kelas/topik_pembahasan/materi/kuis/soal_kuis.modal_edit')
@push('scripts')
    <script>
        $(document).ready(function() {
            // Initialize Select2 for better dropdowns
            $('#jenis, #bank_soal_pembahasan_id, #kelas_id, #topik_pembahasan_id, #materi_id, #kuis_id').select2({
                width: '100%' // Memastikan lebar Select2 penuh
            });

            // Show and hide sections based on the 'cara' selection
            $('#cara').on('change', function() {
                var selectedValue = $(this).val();
                if (selectedValue === 'tidak') {
                    $('#section-tidak').show();
                    $('#section-ya').hide();
                } else {
                    $('#section-ya').show();
                    $('#section-tidak').hide();
                }
            });

            // Load questions based on the selected 'jenis'
            $('#jenis').on('change', function() {
                var jenis = $(this).val();
                $.ajax({
                    url: "/teacher/materi/quizquestion/" + jenis + "/cari_jenis",
                    type: "GET",
                    success: function(data) {
                        var options = '<option disabled selected>-- Pilih soal --</option>';
                        data.forEach(function(item) {
                            options += '<option value="' + item.id + '">' + item.question + '</option>';
                        });
                        $('#bank_soal_pembahasan_id').html(options).trigger('change');
                    },
                    error: function() {
                        alert("Gagal memuat data soal");
                    }
                });
            });

            // Load topics based on the selected class
            $('#kelas_id').on('change', function() {
                var kelas_id = $(this).val();
                $.ajax({
                    url: "{{ route('cariTopik') }}",
                    type: "GET",
                    data: { kelas_id: kelas_id },
                    success: function(data) {
                        var options = '<option disabled selected>-- Pilih topik --</option>';
                        data.forEach(function(item) {
                            options += '<option value="' + item.id + '">' + item.nama_topik + '</option>';
                        });
                        $('#topik_pembahasan_id').html(options).trigger('change');
                    },
                    error: function() {
                        alert("Gagal memuat topik");
                    }
                });
            });

            $('#topik_pembahasan_id').on('change', function() {
                var topik_pembahasan_id = $(this).val();
                $.ajax({
                    url: "{{ route('cariMateri') }}",
                    type: "GET",
                    data: { topik_pembahasan_id: topik_pembahasan_id },
                    success: function(data) {
                        var options = '<option disabled selected>-- Pilih materi --</option>';
                        // Fungsi untuk mengubah level berfikir dari angka menjadi teks
                        function convertLevel(level) {
                            switch (level) {
                                case '0': return 'Dasar';
                                case '1': return 'Menengah';
                                case '2': return 'Tinggi';
                                default: return 'Tidak Diketahui'; // Jika level tidak sesuai dengan nilai yang diharapkan
                            }
                        }

                        data.forEach(function(item) {
                            console.log(item.critical_status);
                            var levelText = convertLevel(item.critical_status);
                            options += '<option value="' + item.id + '">' + item.nama_materi + ' (' + levelText + ')' + '</option>';
                        });

                        $('#materi_id').html(options).trigger('change');
                    },
                    error: function() {
                        alert("Gagal memuat materi");
                    }
                });
            });

            function editKuis(kelas_id, topik_pembahasan_id, materi_id, kuis_id) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                let url = "{{ url('manajemen_kelas') }}/" + kelas_id + '/topik_pembahasan_kelas/' + topik_pembahasan_id + '/manajemen_materi/' + materi_id + '/kuis/' + kuis_id + '/edit';
                $.ajax({
                    url: url,
                    type: 'GET',
                    success: function(data) {
                        $('#modalEdit').modal('show');
                        $('#kuis_id_edit').val(data.id);

                        let waktuMulai = moment(data.waktu_mulai).format('MM/DD/YYYY hh:mm A');
                        let waktuSelesai = moment(data.waktu_selesai).format('MM/DD/YYYY hh:mm A');
                        let jadwal = `${waktuMulai} - ${waktuSelesai}`;
                        $('#jadwal_edit').val(jadwal);

                        // Generate options for jenis_kuis
                        let jenisKuisOptions = '';
                        if (!data.pretestExists || data.jenis_kuis === 'pretest') {
                            jenisKuisOptions += `<option value="pretest" ${data.jenis_kuis === 'pretest' ? 'selected' : ''}>Pre Test</option>`;
                        }
                        if (!data.posttestExists || data.jenis_kuis === 'posttest') {
                            jenisKuisOptions += `<option value="posttest" ${data.jenis_kuis === 'posttest' ? 'selected' : ''}>Post Test</option>`;
                        }
                        $('#jenis_kuis_edit').html(jenisKuisOptions);
                    },
                    error: function() {
                        $('#gagal').show(100);
                    }
                });

                return false;
            }

            $('.show_confirm').click(function(event) {
                var form =  $(this).closest("form");
                event.preventDefault();
                swal({
                    title: `Apakah Anda Yakin?`,
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


