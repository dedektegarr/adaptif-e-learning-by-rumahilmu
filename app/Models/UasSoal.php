<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UasSoal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'uas_soals'; // Nama table pivot

    protected $fillable = [
        'uas_id',
        'bank_soal_pembahasan_id',
    ];

    /**
     * Get the uas that owns the UasSoal
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uas(): BelongsTo
    {
        return $this->belongsTo(Uas::class, 'uas_id', 'id');
    }

    public function bankSoalPembahasan(): BelongsTo
    {
        return $this->belongsTo(BankSoalPembahasan::class, 'bank_soal_pembahasan_id', 'id');
    }
}
