<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengertian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        //satu Pengertian bisa ditulis hanya satu user
        return $this->belongsTo(User::class, 'user_id');
    }
}
