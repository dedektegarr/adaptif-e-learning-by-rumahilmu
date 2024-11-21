<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Uts extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the kelas that owns the Uts
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function bankSoalPembahasans()
    {
        return $this->belongsToMany(BankSoalPembahasan::class, 'uts_soals', 'uts_id', 'bank_soal_pembahasan_id')
            ->withTimestamps()
            ->withPivot('created_at', 'updated_at', 'deleted_at');
    }
}
