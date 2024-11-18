<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenilaianKelompokDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the penilaianKelompok that owns the PenilaianKelompokDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penilaianKelompok(): BelongsTo
    {
        return $this->belongsTo(PenilaianKelompok::class, 'penilaian_kelompok_id', 'id');
    }
}
