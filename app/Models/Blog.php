<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    // protected $fillable = ['title','intro','body','slug'];
    protected $guarded=['id'];
    protected $with=['category','author'];
    public function category(){
        return $this->belongsTo(Category::class); //Category::class this syntx is for namespace
    }
    public function author(){
        return $this->belongsTo(Author::class,'user_id');
    }
}
