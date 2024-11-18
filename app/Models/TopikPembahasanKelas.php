<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TopikPembahasanKelas extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the kelas that owns the TopikPembahasanKelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    /**
     * Get all of the subCpmks for the TopikPembahasanKelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCpmks(): HasMany
    {
        return $this->hasMany(SubCpmk::class, 'topik_pembahasan_id', 'id');
    }

    public function materis(): HasMany
    {
        return $this->hasMany(Materi::class, 'topik_pembahasan_id', 'id');
    }
}
