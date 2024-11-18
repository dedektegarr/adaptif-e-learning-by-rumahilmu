<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasKuisionerKelompok extends Pivot
{
    use SoftDeletes;

    protected $table = 'kelas_kuisioner_kelompok';

    protected $fillable = [
        'kelas_id',
        'bank_penilaian_kelompok_id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];

    /**
     * Get the bankPenilaianKelompok that owns the KelasKuisionerKelompok
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bankPenilaianKelompok(): BelongsTo
    {
        return $this->belongsTo(BankPenilaianKelompok::class, 'bank_penilaian_kelompok_id', 'id');
    }
}
