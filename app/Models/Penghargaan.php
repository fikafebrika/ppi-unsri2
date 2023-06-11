<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        //satu penghargaan bisa ditulis hanya satu user
        return $this->belongsTo(User::class, 'user_id');
    }
}
