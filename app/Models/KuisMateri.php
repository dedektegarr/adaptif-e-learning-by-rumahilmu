<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class KuisMateri extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the materi that owns the KuisMateri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    protected $guarded = [];

    public function materi(): BelongsTo
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'id');
    }

    /**
     * Get all of the comments for the KuisMateri
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pertanyaans(): HasMany
    {
        return $this->hasMany(PertanyaanKuisMateri::class, 'kuis_materi_id', 'id');
    }
}
