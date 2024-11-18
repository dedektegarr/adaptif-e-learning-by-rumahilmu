<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class RubrikPenilaian extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get all of the indikatorPenilaians for the RubrikPenilaian
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function indikatorPenilaians(): HasMany
    {
        return $this->hasMany(IndikatorPenilaian::class, 'rubrik_penilaian_id', 'id');
    }

    public function tugasKelompokMateris()
    {
        return $this->belongsToMany(TugasKelompokMateri::class, 'rubrik_penilaian_tugas_kelompoks', 'rubrik_penilaian_id', 'tugas_kelompok_materi_id')
                    ->using(RubrikPenilaianTugasKelompok::class); // Menggunakan model pivot
    }
}
