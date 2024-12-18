<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasMahasiswa extends Pivot
{
    use HasFactory, SoftDeletes;

    protected $table = 'kelas_mahasiswas';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public function details()
    {
        return $this->hasMany(KelasMahasiswaDetail::class, 'kelas_mahasiswa_id');
    }

    public function mahasiswa()
    {
        return $this->belongsTo(User::class, 'mahasiswa_id', 'id');
    }
}
