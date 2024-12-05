<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TugasIndividuMateri extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function materi(): BelongsTo
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'id');
    }

    public function rubrikPenilaians()
    {
        return $this->belongsToMany(RubrikPenilaian::class, 'rubrik_penilaian_tugas_individus', 'tugas_individu_id', 'rubrik_penilaian_id')
            ->using(RubrikPenilaianTugasIndividu::class); // Menggunakan model pivot
    }

    public function pengumpulanTugasIndividus()
    {
        return $this->hasMany(PengumpulanTugasIndividu::class, 'tugas_individu_id', 'id');
    }
}
