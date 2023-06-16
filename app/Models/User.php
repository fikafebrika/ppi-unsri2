<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    public function sluggable(): array
    {
        return [
            'username' => [
                'source' => 'name'
            ]
        ];
    }

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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pendidikan_formal()
    {
        //satu user bisa mempunya banyak pendidikan formal
        return $this->hasMany(PendidikanFormal::class);
    }

    public function organisasi()
    {
        //satu user bisa mempunya banyak organisasi
        return $this->hasMany(Organisasi::class);
    }

    public function penghargaan()
    {
        //satu user bisa mempunya banyak penghargaan
        return $this->hasMany(TandaPenghargaan::class);
    }

    public function pelatihan()
    {
        //satu user bisa mempunyai banyak pelatihan
        return $this->hasMany(Pelatihan::class);
    }

    public function sertifikat()
    {
        //satu user bisa mempunyai banyak sertifikat
        return $this->hasMany(Sertifikat::class);
    }

    public function referensi()
    {
        //satu user bisa mempunyai banyak referensi
        return $this->hasMany(Referensit::class);
    }

    public function pengertian()
    {
        return $this->hasMany(Pengertian::class);
    }

    public function kualifikasiProfesional()
    {
        return $this->hasMany(KualifikasiProfesional::class);
    }

    public function pengalamanMengajar()
    {
        return $this->hasMany(PengalamanMengajar::class);
    }
}
