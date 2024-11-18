<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengumpulanTugasKelompokDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    /**
     * Get the mahasiswa that owns the PengumpulanTugasKelompokDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }

    /**
     * Get the pengumpulanTugasKelompok that owns the PengumpulanTugasKelompokDetail
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengumpulanTugasKelompok(): BelongsTo
    {
        return $this->belongsTo(PengumpulanTugasKelompok::class, 'pengumpulan_tugas_kelompok_id', 'id');
    }
}
