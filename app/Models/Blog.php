<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    // protected $fillable = ['title','intro','body','slug'];
    protected $guarded=['id'];
}
