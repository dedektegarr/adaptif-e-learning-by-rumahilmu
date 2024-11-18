<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasKuisioner extends Pivot
{
    use SoftDeletes;

    protected $table = 'kelas_kuisioner';

    protected $fillable = [
        'kelas_id',
        'bank_kuisioner_id',
        'deleted_at'
    ];
}
