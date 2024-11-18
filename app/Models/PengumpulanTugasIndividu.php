<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengumpulanTugasIndividu extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function pengumpulanTugasIndividuDetails(){
        return $this->hasMany(PengumpulanTugasIndividuDetail::class, 'pengumpulan_tugas_individu_id','id');
    }

    public function tugasIndividu(): BelongsTo
    {
        return $this->belongsTo(TugasIndividuMateri::class, 'tugas_individu_id', 'id');
    }
}
