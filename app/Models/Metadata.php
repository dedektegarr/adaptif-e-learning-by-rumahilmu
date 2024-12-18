<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    use HasFactory;

    protected $guarded = ["id"];

    public function pengumpulanTugas()
    {
        return $this->belongsTo(PengumpulanTugasIndividu::class, 'pengumpulan_tugas_id');
    }
}
