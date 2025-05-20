<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    public function getNameAttribute($value){
        return ucwords($value);
    }
}
