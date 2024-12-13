<li class="header">MENU UTAMA</li>
<li class="{{ set_active('dashboard') }}">
    <a href="{{ route('dashboard') }}">
        <i class="fa fa-television"></i>
        <span>Dashboard</span>
    </a>
</li>

@if (Auth::user()->role == 'dosen')
    <li
        class="{{ set_active([
            'kelas',
            'kelas.detail',
            'kelas.topikPembahasan',
            'kelas.mahasiswa',
            'kelas.mahasiswa.aktivitas',
            'kelas.mahasiswa.riwayatBelajar',
            'kelas.capaianLulusan',
            'kelas.kuisioner',
            'kelas.kuisionerKelompok',
            'kelas.create',
            'kelas.topikPembahasan.subCpmk',
            'kelas.topikPembahasan.materi',
            'kelas.topikPembahasan.materi.detail',
            'kelas.topikPembahasan.materi.tugasKelompok',
            'kelas.topikPembahasan.materi.tugasIndividu',
            'kelas.topikPembahasan.materi.kuis',
            'kelas.topikPembahasan.materi.soalKuis',
            'kelas.topikPembahasan.materi.tugasIndividu',
            'kelas.topikPembahasan.materi.tugasIndividu.post',
            'kelas.materi.tugasIndividu.materi.tugasIndividu.edit',
            'kelas.topikPembahasan.materi.tugasIndividu.update',
            'kelas.topikPembahasan.materi.tugasIndividu.delete',
            'kelas.topikPembahasan.materi.tugasIndividu.tambahRubrikPenilaian',
            'kelas.topikPembahasan.materi.tugasIndividu.penilaian',
            'kelas.topikPembahasan.materi.tugasIndividu.penilaian.detail',
            'kelas.topikPembahasan.materi.tugasIndividu.penilaian.post',
            'kelas.topikPembahasan.materi.tugasIndividu.penilaian.edit',
            'kelas.topikPembahasan.materi.tugasIndividu.penilaian.update',
            'kelas.topikPembahasan.materi.tugasKelompok',
            'kelas.topikPembahasan.materi.tugasKelompok.post',
            'kelas.materi.tugasKelompok.materi.tugasKelompok.edit',
            'kelas.topikPembahasan.materi.tugasKelompok.update',
            'kelas.topikPembahasan.materi.tugasKelompok.delete',
            'kelas.topikPembahasan.materi.tugasKelompok.tambahRubrikPenilaian',
            'kelas.topikPembahasan.materi.tugasKelompok.penilaian',
            'kelas.topikPembahasan.materi.tugasKelompok.penilaian.detail',
            'kelas.topikPembahasan.materi.tugasKelompok.penilaian.post',
            'kelas.topikPembahasan.materi.tugasKelompok.penilaian.hasil',
            'kelas.topikPembahasan.materi.tugasKelompok.penilaian.edit',
            'kelas.topikPembahasan.materi.tugasKelompok.penilaian.update',
        ]) }}">
        <a href="{{ route('kelas') }}">
            <i class="fa fa-book"></i>
            <span>Manajemen Kelas</span>
        </a>
    </li>
    <li
        class="treeview {{ set_active([
            'dosen.uts',
            'dosen.uts.add',
            'dosen.uts.post',
            'dosen.uts.edit',
            'dosen.uts.update',
            'dosen.uts.delete',
            'dosen.uts.soal',
            'dosen.uts.soal.post',
            'dosen.uts.soal.delete',
            'dosen.uts.sesi',
            'dosen.uts.sesi.post',
            'dosen.uts.sesi.delete',
            'dosen.uts.sesi.peserta',
            'dosen.uts.sesi.peserta.post',
            'dosen.uts.sesi.peserta.delete',
            'dosen.uas',
            'dosen.uas.add',
            'dosen.uas.post',
            'dosen.uas.edit',
            'dosen.uas.update',
            'dosen.uas.delete',
            'dosen.uas.soal',
            'dosen.uas.soal.post',
            'dosen.uas.soal.delete',
            'dosen.uas.sesi',
            'dosen.uas.sesi.post',
            'dosen.uas.sesi.delete',
            'dosen.uas.sesi.peserta',
            'dosen.uas.sesi.peserta.post',
            'dosen.uas.sesi.peserta.delete',
        ]) }}">
        <a href="#">
            <i class="fa fa-pencil"></i> <span>Manajemen Ujian</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu " style="padding-left:25px;">
            <li
                class="{{ set_active([
                    'dosen.uts',
                    'dosen.uts.add',
                    'dosen.uts.post',
                    'dosen.uts.edit',
                    'dosen.uts.update',
                    'dosen.uts.delete',
                    'dosen.uts.soal',
                    'dosen.uts.soal.post',
                    'dosen.uts.soal.delete',
                    'dosen.uts.sesi',
                    'dosen.uts.sesi.post',
                    'dosen.uts.sesi.delete',
                    'dosen.uts.sesi.peserta',
                    'dosen.uts.sesi.peserta.post',
                    'dosen.uts.sesi.peserta.delete',
                ]) }}">
                <a href="{{ route('dosen.uts') }}"><i class="fa fa-circle-o"></i>&nbsp;Ujian Tengah Semester</a>
            </li>
            <li
                class="{{ set_active([
                    'dosen.uas',
                    'dosen.uas.add',
                    'dosen.uas.post',
                    'dosen.uas.edit',
                    'dosen.uas.update',
                    'dosen.uas.delete',
                    'dosen.uas.soal',
                    'dosen.uas.soal.post',
                    'dosen.uas.soal.delete',
                    'dosen.uas.sesi',
                    'dosen.uas.sesi.post',
                    'dosen.uas.sesi.delete',
                    'dosen.uas.sesi.peserta',
                    'dosen.uas.sesi.peserta.post',
                    'dosen.uas.sesi.peserta.delete',
                ]) }}">
                <a href="{{ route('dosen.uas') }}"><i class="fa fa-circle-o"></i>&nbsp;Ujian Akhir Semester</a>
            </li>
        </ul>
    </li>

    <li
        class="treeview {{ set_active(['jenisKuisioner', 'jenisKuisioner.edit', 'bankKuisioner', 'bankKuisioner.edit']) }}">
        <a href="#">
            <i class="fa fa-quote-left"></i> <span>Evaluasi Pembelajaran</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu " style="padding-left:25px;">
            <li class="{{ set_active(['jenisKuisioner', 'jenisKuisioner.edit']) }}"><a
                    href="{{ route('jenisKuisioner') }}"><i class="fa fa-circle-o"></i>&nbsp;Jenis Kuisioner</a></li>
            <li class="{{ set_active(['bankKuisioner', 'bankKuisioner.edit']) }}"><a
                    href="{{ route('bankKuisioner') }}"><i class="fa fa-circle-o"></i>&nbsp;Bank Kuisioner</a></li>
        </ul>
    </li>
    <li
        class="treeview {{ set_active(['rubrikPenilaian', 'indikatorPenilaian', 'penilaianKelompok', 'soalKuis', 'soalKuis.detail', 'soalKuis.jawaban']) }}">
        <a href="#">
            <i class="fa fa-question-circle"></i> <span>Bank Soal & Penilaian</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu " style="padding-left:25px;">
            <li class="{{ set_active(['soalKuis', 'soalKuis.detail', 'soalKuis.jawaban']) }}"><a
                    href="{{ route('soalKuis') }}"><i class="fa fa-circle-o"></i>&nbsp;Soal Kuis</a></li>
            <li class="{{ set_active(['rubrikPenilaian']) }}"><a href="{{ route('rubrikPenilaian') }}"><i
                        class="fa fa-circle-o"></i>&nbsp;Rubrik Penilaian</a></li>
            <li class="{{ set_active(['indikatorPenilaian']) }}"><a href="{{ route('indikatorPenilaian') }}"><i
                        class="fa fa-circle-o"></i>&nbsp;Indikator Penilaian</a></li>
            <li class="{{ set_active(['penilaianKelompok']) }}"><a href="{{ route('penilaianKelompok') }}"><i
                        class="fa fa-circle-o"></i>&nbsp;Penilaian Kelompok</a></li>
        </ul>
    </li>

    <li class="{{ set_active(['dosen.rekap', 'dosen.rekap.edit']) }}">
        <a href="{{ route('dosen.rekap') }}">
            <i class="fa fa-check"></i>
            <span>Rekapitulasi Nilai</span>
        </a>
    </li>
    <li class="{{ set_active(['bankCapaianLulusan', 'bankCapaianLulusan.edit']) }}">
        <a href="{{ route('bankCapaianLulusan') }}">
            <i class="fa fa-briefcase"></i>
            <span>Bank Capaian Lulusan</span>
        </a>
    </li>
@endif

@if (Auth::user()->role == 'administrator')
    <li class="header">MANAJEMEN USER</li>

    {{-- MENU ADMINISTRATOR --}}
    <li
        class="{{ set_active([
            'administrator.administrator',
            'administrator.administrator.add',
            'administrator.administrator.post',
            'administrator.administrator.edit',
            'administrator.administrator.update',
            'administrator.administrator.delete',
            'administrator.ubah_password',
        ]) }}">
        <a href="{{ route('administrator.administrator') }}">
            <i class="fa fa-users"></i>
            <span>Administrator</span>
        </a>
    </li>
    <li
        class="{{ set_active([
            'administrator.teacher',
            'administrator.teacher.add',
            'administrator.teacher.post',
            'administrator.teacher.edit',
            'administrator.teacher.update',
            'administrator.teacher.delete',
            'administrator.ubah_password',
        ]) }}">
        <a href="{{ route('administrator.teacher') }}">
            <i class="fa fa-users"></i>
            <span>Dosen</span>
        </a>
    </li>
    <li
        class="{{ set_active([
            'administrator.student',
            'administrator.student.add',
            'administrator.student.post',
            'administrator.student.edit',
            'administrator.student.update',
            'administrator.student.delete',
            'administrator.ubah_password',
        ]) }}">
        <a href="{{ route('administrator.student') }}">
            <i class="fa fa-users"></i>
            <span>Mahasiswa</span>
        </a>
    </li>
@endif
{{-- @if (auth()->user()->hasRole('participant') || auth()->user()->hasRole('presenter') || auth()->user()->hasRole('administrator')) --}}


<!-- Authentication -->
<li>
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out text-danger"></i>
        <span>{{ __('Logout') }}</span>
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
