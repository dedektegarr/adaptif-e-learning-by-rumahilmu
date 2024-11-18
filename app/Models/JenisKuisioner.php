<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisKuisioner extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get all of the bankKuisioners for the JenisKuisioner
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bankKuisioners(): HasMany
    {
        return $this->hasMany(BankKuisioner::class, 'jenis_kuisioner_id', 'id');
    }
}
