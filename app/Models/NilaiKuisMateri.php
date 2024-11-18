<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class NilaiKuisMateri extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the kuisMateri that owns the NilaiKuisMateri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kuisMateri(): BelongsTo
    {
        return $this->belongsTo(KuisMateri::class, 'kuis_materi_id', 'id');
    }
}
