<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BankCapaianLulusan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kelas(): BelongsToMany
    {
        return $this->belongsToMany(Kelas::class, 'bank_capaian_lulusan_kelas')
                    ->using(BankCapaianLulusanKelas::class)
                    ->wherePivot('deleted_at', null);
    }
}
