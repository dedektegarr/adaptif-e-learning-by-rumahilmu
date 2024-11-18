<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class MateriPengayaan extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the materi that owns the MateriPengayaan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materi(): BelongsTo
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'id');
    }
}
