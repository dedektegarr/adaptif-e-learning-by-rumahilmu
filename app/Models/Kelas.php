<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pengampu(): BelongsTo
    {
        return $this->belongsTo(User::class, 'pengampu_id', 'id');
    }

    public function mahasiswas()
    {
        return $this->belongsToMany(User::class, 'kelas_mahasiswas', 'kelas_id', 'mahasiswa_id')
            ->using(KelasMahasiswa::class)
            ->orderBy("username");
    }

    public function topikPembahasanKelas()
    {
        return $this->hasMany(TopikPembahasanKelas::class);
    }

    public function capaianLulusans(): BelongsToMany
    {
        return $this->belongsToMany(BankCapaianLulusan::class, 'bank_capaian_lulusan_kelas')
            ->using(BankCapaianLulusanKelas::class)
            ->wherePivot('deleted_at', null);
    }

    public function kuisioners()
    {
        return $this->belongsToMany(BankKuisioner::class, 'kelas_kuisioner')
            ->using(KelasKuisioner::class)
            ->wherePivot('deleted_at', null);
    }

    public function kuisionerPenilaianKelompoks()
    {
        return $this->belongsToMany(BankPenilaianKelompok::class, 'kelas_kuisioner_kelompok')
            ->using(KelasKuisionerKelompok::class)
            ->wherePivot('deleted_at', null);
    }

    /**
     * Get all of the bankSoalPembahasans for the Kelas
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bankSoalPembahasans(): HasMany
    {
        return $this->hasMany(BankSoalPembahasan::class, 'kelas_id', 'id');
    }

    protected function casts(): array
    {
        return [
            'waktu_mulai' => 'datetime',
            'waktu_selesai' => 'datetime',
        ];
    }
}
