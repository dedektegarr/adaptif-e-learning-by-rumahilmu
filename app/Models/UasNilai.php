<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UasNilai extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the uas that owns the UasNilai
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function uas(): BelongsTo
    {
        return $this->belongsTo(Uas::class, 'uas_id', 'id');
    }

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }

    public function bankSoalPembahasan(): BelongsTo
    {
        return $this->belongsTo(BankSoalPembahasan::class, 'bank_soal_pembahasan_id', 'id');
    }

    public function jawaban(): BelongsTo
    {
        return $this->belongsTo(JawabanKuisMateri::class, 'jawaban_id', 'id');
    }
}
