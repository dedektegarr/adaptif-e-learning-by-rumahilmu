<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class BankCapaianLulusanKelas extends Pivot
{
    use SoftDeletes;

    protected $table = 'bank_capaian_lulusan_kelas';

    protected $fillable = [
        'kelas_id',
        'bank_capaian_lulusan_id',
        'deleted_at',
        'created_at',
        'updated_at',
    ];
}
