<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class RiwayatFuzzy extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the materiSebelumnya that owns the RiwayatFuzzy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materiSebelumnya(): BelongsTo
    {
        return $this->belongsTo(Materi::class, 'materi_id_sebelumnya', 'id');
    }

    public function materiSetelahnya(): BelongsTo
    {
        return $this->belongsTo(Materi::class, 'materi_id_setelahnya', 'id');
    }

    /**
     * Get the mahasiswa that owns the RiwayatFuzzy
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }
}
