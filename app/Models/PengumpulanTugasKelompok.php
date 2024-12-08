<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengumpulanTugasKelompok extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function pengumpulanTugasDetails()
    {
        return $this->hasMany(PengumpulanTugasKelompokDetail::class, 'pengumpulan_tugas_kelompok_id', 'id');
    }

    public function pengumpulanTugasDetailNilais()
    {
        return $this->hasMany(PengumpulanTugasKelompokDetailNilai::class, 'pengumpulan_tugas_kelompok_id', 'id');
    }

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'ketua_kelompok_id', 'id');
    }

    /**
     * Get the materi that owns the PengumpulanTugasKelompok
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tugasKelompok(): BelongsTo
    {
        return $this->belongsTo(TugasKelompokMateri::class, 'tugas_kelompok_id', 'id');
    }
}
