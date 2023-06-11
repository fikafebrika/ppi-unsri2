<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    use HasFactory;

    protected $guarded = ['id_organisasi'];


    public function user()
    {
        //satu organisasi bisa ditulis hanya satu user
        return $this->belongsTo(User::class, 'user_id');
    }
}
