<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanMengajar extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        //satu pengalaman mengajar bisa ditulis hanya satu user
        return $this->belongsTo(User::class, 'user_id');
    }
}
