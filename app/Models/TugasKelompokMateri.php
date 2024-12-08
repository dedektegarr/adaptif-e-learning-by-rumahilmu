<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TugasKelompokMateri extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the materis that owns the TugasKelompokMateri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materi(): BelongsTo
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'id');
    }

    public function rubrikPenilaians()
    {
        return $this->belongsToMany(RubrikPenilaian::class, 'rubrik_penilaian_tugas_kelompoks', 'tugas_kelompok_materi_id', 'rubrik_penilaian_id')
            ->whereNull('rubrik_penilaian_tugas_kelompoks.deleted_at')
            ->using(RubrikPenilaianTugasKelompok::class); // Menggunakan model pivot
    }

    public function pengumpulanTugas()
    {
        return $this->hasMany(PengumpulanTugasKelompok::class, 'tugas_kelompok_id', 'id');
    }
}
