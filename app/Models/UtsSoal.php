<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsSoal extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'uts_soals'; // Nama table pivot

    protected $fillable = [
        'uts_id',
        'bank_soal_pembahasan_id',
    ];

    /**
     * Get the uts that owns the UtsSoal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uts(): BelongsTo
    {
        return $this->belongsTo(Uts::class, 'uts_id', 'id');
    }

    public function bankSoalPembahasan(): BelongsTo
    {
        return $this->belongsTo(BankSoalPembahasan::class, 'bank_soal_pembahasan_id', 'id');
    }
}
