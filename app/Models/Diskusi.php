<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diskusi extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    /**
     * Get all of the diskusiRespons for the Diskusi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    /**
     * Get the materi that owns the Diskusi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function materi(): BelongsTo
    {
        return $this->belongsTo(Materi::class, 'materi_id', 'id');
    }

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }

    public function diskusiRespons(): HasMany
    {
        return $this->hasMany(DiskusiRespon::class, 'diskusi_id', 'id');
    }
}
