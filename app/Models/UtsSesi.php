<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class UtsSesi extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the uts that owns the UtsSesi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    protected $table = 'uts_sesis';

    public function uts(): BelongsTo
    {
        return $this->belongsTo(Uts::class, 'uts_id', 'id');
    }

    public function mahasiswas()
    {
        return $this->belongsToMany(User::class, 'uts_pesertas', 'uts_sesi_id', 'mahasiswa_id')
                    ->withTimestamps(); // Jika ada timestamps
    }
}
