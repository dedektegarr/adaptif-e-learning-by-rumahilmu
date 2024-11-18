<div class="modal fade" id="modalPenilaian" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Penilaian Anggota</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color: red;"></button>
            </div>
            <div class="modal-body">
                <!-- Tambahkan Informasi Nama Mahasiswa -->
                <p class="fw-semibold">Anda Akan Menilai Kinerja <span id="namaMahasiswa" class="fw-bold"></span></p>
                <p>Isi penilaian kinerja teman dengan memilih satu dari jangkauan pilihan:</p>
                <ul>
                    <li>Nilai 1 = sangat tidak berkontribusi</li>
                    <li>Nilai 10 = sangat berkontribusi</li>
                </ul>

                <!-- Form penilaian -->
                <form id="formPenilaian" action="{{ route('mahasiswa.kelas_saya.simpan_penilaian', [$materi->topikPembahasanKelas->kelas->id, $materi->id, $tugas->id]) }}" method="POST">
                    @csrf @method('POST')
                    <input type="hidden" id="tugasId" name="tugas_id">
                    <input type="hidden" id="mahasiswaId" name="mahasiswa_id">
                    <input type="hidden" id="jumlahPertanyaan" name="jumlah_pertanyaan">
                    <input type="hidden" id="kelompok" name="kelompok">

                    <!-- Pengalaman bekerja dalam kelompok -->
                    <div class="mb-3">
                        <label for="pengalaman" class="form-label">Jelaskan Pengalaman bekerja dalam kelompok *</label>
                        <textarea class="form-control" id="pengalaman" name="pengalaman" rows="3"></textarea>
                    </div>

                    <!-- Pertanyaan dari $soals dan Pilihan Nilai 1-10 untuk Setiap Pertanyaan -->
                    @foreach ($soals as $index => $soal)
                        <div class="mb-3">
                            <label class="form-label">{{ $index + 1 }}. {{ $soal->bankPenilaianKelompok->pertanyaan }}</label>
                            <div class="d-flex flex-wrap gap-2">
                                @for ($i = 1; $i <= 10; $i++)
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="nilai_{{ $soal->bankPenilaianKelompok->id }}" value="{{ $i }}">
                                        <label class="form-check-label">{{ $i }}</label>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-sm" id="submitBtn">Simpan Penilaian</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#formPenilaian').on('submit', function (e) {
    e.preventDefault(); // Mencegah form dari submit default

    var formData = $(this).serialize(); // Ambil data form

    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: formData,
        success: function (response) {
            if (response.success) {
                // Jika sukses, tampilkan SweetAlert Sukses
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Penilaian berhasil disimpan! Rata-rata nilai: ' + response.rata_rata,
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        location.reload(); // Reload halaman setelah konfirmasi
                    }
                });
            }
        },
        error: function (xhr) {
            // Jika ada error, tampilkan pesan error di SweetAlert
            var errorMessage = 'Terjadi kesalahan yang tidak diketahui.';

            if (xhr.responseJSON && xhr.responseJSON.error) {
                // Jika ada pesan error dari server
                errorMessage = xhr.responseJSON.error;
            } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                // Jika ada error validasi
                errorMessage = Object.values(xhr.responseJSON.errors).join('<br>');
            }

            Swal.fire({
                title: 'Error!',
                html: errorMessage, // Menampilkan pesan error yang diterima dari server
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });
});

    </script>
@endpush
