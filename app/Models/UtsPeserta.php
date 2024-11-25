<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsPeserta extends Pivot
{
    use HasFactory;

    protected $table = 'uts_pesertas'; // Nama table pivot

    protected $fillable = [
        'mahasiswa_id',
        'uts_sesi_id',
    ];

    /**
     * Get the utsSesi that owns the UtsPeserta
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function utsSesi(): BelongsTo
    {
        return $this->belongsTo(UtsSesi::class, 'uts_sesi_id', 'id');
    }
}
