<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BankKuisioner extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the jenisKuisioner that owns the BankKuisioner
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function jenisKuisioner(): BelongsTo
    {
        return $this->belongsTo(JenisKuisioner::class, 'jenis_kuisioner_id', 'id');
    }
}
