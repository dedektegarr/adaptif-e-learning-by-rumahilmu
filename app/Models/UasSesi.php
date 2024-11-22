<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class UasSesi extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get the uas that owns the UasSesi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    protected $table = 'uas_sesis';

    public function uas(): BelongsTo
    {
        return $this->belongsTo(Uas::class, 'uas_id', 'id');
    }

    public function mahasiswas()
    {
        return $this->belongsToMany(User::class, 'uas_pesertas', 'uas_sesi_id', 'mahasiswa_id')
            ->withTimestamps(); // Jika ada timestamps
    }
}
