<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengumpulanTugasKelompokDetailNilai extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the pengumpulanTugasKelompok that owns the PengumpulanTugasKelompokDetailNilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengumpulanTugasKelompokDetail(): BelongsTo
    {
        return $this->belongsTo(PengumpulanTugasKelompokDetail::class, 'pengumpulan_tugas_kelompok_id', 'id');
    }

    public function rubrikPenilaian()
    {
        return $this->belongsTo(RubrikPenilaian::class, 'rubrik_penilaian_id');
    }
}
