<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankSoalPembahasan extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the kelas that owns the BankSoalPembahasan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    /**
     * Get all of the jawabans for the BankSoalPembahasan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jawabans(): HasMany
    {
        return $this->hasMany(JawabanKuisMateri::class, 'bank_soal_pembahasan_id', 'id');
    }

    public function uts()
    {
        return $this->belongsToMany(Uts::class, 'uts_soals', 'bank_soal_pembahasan_id', 'uts_id')
                    ->withTimestamps()
                    ->withPivot('created_at', 'updated_at', 'deleted_at');
    }
}
