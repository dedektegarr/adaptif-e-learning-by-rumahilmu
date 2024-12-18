<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengumpulanTugasIndividuDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function rubrikPenilaian()
    {
        return $this->belongsTo(RubrikPenilaian::class, 'rubrik_penilaian_id');
    }

    public function pengumpulanTugasIndividu(): BelongsTo
    {
        return $this->belongsTo(PengumpulanTugasIndividu::class, 'pengumpulan_tugas_individu_id', 'id');
    }
}
