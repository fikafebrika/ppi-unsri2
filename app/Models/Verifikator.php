<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;


class Verifikator extends Model implements Authenticatable
{
    use HasFactory, Notifiable, AuthenticableTrait;

    public function getAuthIdentifierName()
    {
        return 'id'; // Nama kolom yang merupakan primary key dari model
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password; // Nama kolom yang menyimpan password
    }


    protected $guarded = ['id'];

    public function verifikasi()
    {
        return $this->hasMany(Verifikasi::class);
    }
}
