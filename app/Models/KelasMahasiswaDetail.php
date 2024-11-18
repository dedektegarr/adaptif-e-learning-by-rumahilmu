<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelasMahasiswaDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'kelas_mahasiswa_details';

    protected $fillable = [
        'kelas_mahasiswa_id',
        'kelas_id',
        'topik_id',
        'materi_id',
        'mahasiswa_id',
        'critical_status',
        'sumber_materi',
    ];

    public function kelasMahasiswa()
    {
        return $this->belongsTo(KelasMahasiswa::class, 'kelas_mahasiswa_id');
    }
}
