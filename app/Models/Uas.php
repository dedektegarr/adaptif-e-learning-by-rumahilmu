<?php

namespace App\Models;

use App\Models\Kelas;
use App\Models\BankSoalPembahasan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Uas extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the kelas that owns the UAS
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function kelas(): BelongsTo
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }

    public function bankSoalPembahasans()
    {
        return $this->belongsToMany(BankSoalPembahasan::class, 'uas_soals', 'uas_id', 'bank_soal_pembahasan_id')
            ->withTimestamps()
            ->withPivot('created_at', 'updated_at', 'deleted_at');
    }
}
