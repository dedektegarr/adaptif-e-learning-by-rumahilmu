<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenilaianKelompok extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get all of the penilaianKelompokDetails for the PenilaianKelompok
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topikPembahasanKelas(): BelongsTo
    {
        return $this->belongsTo(TopikPembahasanKelas::class, 'topik_pembahasan_kelas_id', 'id');
    }

    public function penilaianKelompokDetails(): HasMany
    {
        return $this->hasMany(PenilaianKelompokDetail::class, 'penilaian_kelompok_id', 'id');
    }
}
