<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class RubrikPenilaianTugasIndividu extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'rubrik_penilaian_tugas_individus';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'tugas_individu_materi_id',
        'rubrik_penilaian_id',
    ];

    public function tugasIndividuMateri()
    {
        return $this->belongsTo(TugasIndividuMateri::class, 'tugas_individu_materi_id');
    }

    public function rubrikPenilaian()
    {
        return $this->belongsTo(RubrikPenilaian::class, 'rubrik_penilaian_id');
    }
}
