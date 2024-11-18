<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndikatorPenilaian extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the rubrikPenilaian that owns the IndikatorPenilaian
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rubrikPenilaian(): BelongsTo
    {
        return $this->belongsTo(RubrikPenilaian::class, 'rubrik_penilaian_id', 'id');
    }
}
