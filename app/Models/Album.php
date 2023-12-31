<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = ['album_name', 'photo_name'];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}


