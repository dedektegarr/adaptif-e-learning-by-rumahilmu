<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JawabanKuisMateri extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the bankSoalPembahasan that owns the JawabanKuisMateri
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bankSoalPembahasan(): BelongsTo
    {
        return $this->belongsTo(BankSoalPembahasan::class, 'bank_soal_pembahasan_id', 'id');
    }
}
