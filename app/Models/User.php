<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Activitylog\Models\Activity;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public function getProfileCompletionPercentage()
    {
        $fields = [
            'nama_lengkap',
            'username',
            'email',
            'jenis_kelamin',
            'jalur_masuk',
            'rata_ujian',
            'asal_sekolah',
            'asal_provinsi_sma',
            'foto'
        ];

        $filledFields = 0;

        foreach ($fields as $field) {
            if (!empty($this->$field)) {
                $filledFields++;
            }
        }

        return round(($filledFields / count($fields)) * 100);
    }

    public function utsSesis()
    {
        return $this->belongsToMany(UtsSesi::class, 'uts_pesertas', 'mahasiswa_id', 'uts_sesi_id')
            ->withTimestamps(); // Jika ada timestamps
    }

    public function mengampu(): HasMany
    {
        return $this->hasMany(Kelas::class, 'pengampu_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_mahasiswas', 'mahasiswa_id', 'kelas_id')
            ->using(KelasMahasiswa::class);
    }

    public function materis()
    {
        return $this->belongsToMany(Materi::class, 'kelas_mahasiswas')
            ->withPivot('id', 'critical_status', 'sumber_materi')
            ->withTimestamps()
            ->using(KelasMahasiswaDetail::class); // menggunakan custom pivot model
    }

    public function nilaiKuisMateris()
    {
        return $this->hasMany(NilaiKuisMateri::class, "mahasiswa_id");
    }

    public function tugasIndividus()
    {
        return $this->hasMany(PengumpulanTugasIndividu::class, "mahasiswa_id");
    }

    public function tugasKelompokDetail()
    {
        return $this->hasMany(PengumpulanTugasKelompokDetail::class, "mahasiswa_id");
    }
    public function penilaianKelompok()
    {
        return $this->hasMany(PenilaianKelompok::class, "mahasiswa_id");
    }
    public function utsNilai()
    {
        return $this->hasMany(UtsNilai::class, "mahasiswa_id");
    }
    public function uasNilai()
    {
        return $this->hasMany(UasNilai::class, "mahasiswa_id");
    }

    /**
     * Get all of the kelasMahasiswa for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kelasMahasiswa(): HasMany
    {
        return $this->hasMany(KelasMahasiswa::class, 'mahasiswa_id', 'id');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get all of the avtivities for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class, 'causer_id', 'id');
    }
}
