<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UasPeserta extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'uas_pesertas'; // Nama table pivot

    protected $fillable = [
        'mahasiswa_id',
        'uas_sesi_id',
    ];

    /**
     * Get the uasSesi that owns the UasPeserta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uasSesi(): BelongsTo
    {
        return $this->belongsTo(UasSesi::class, 'uas_sesi_id', 'id');
    }
}
