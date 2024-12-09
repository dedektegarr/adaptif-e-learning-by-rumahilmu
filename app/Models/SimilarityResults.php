<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimilarityResults extends Model
{
    use HasFactory;

    public function pengumpulanTugas()
    {
        return $this->belongsTo(PengumpulanTugasIndividu::class, 'pengumpulan_tugas_id');
    }

    public function comparedPengumpulanTugas()
    {
        return $this->belongsTo(PengumpulanTugasIndividu::class, 'compared_pengumpulan_tugas_id');
    }
}
