<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Blog extends Model
{
    use HasFactory;

    protected $with=['category','author'];

    public function category(){
        return $this->belongsTo(Category::class); //Category::class this syntx is for namespace
    }

    public function author(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function scopeFilter($query,$filter){
        $query->when($filter['search']??false,function($query,$search){
            $query->where(function($query) use($search){
                $query->where('title','LIKE','%'.$search.'%')
                ->orWhere('body','LIKE','%'.$search.'%');
            });
        });
        $query->when($filter['category']??false,function($query,$slug){
            $query->whereHas('category',function($query) use($slug){
                $query->where('slug',$slug);
            });
        });
        $query->when($filter['author']??false,function($query,$userName){
            $query->whereHas('author',function($query) use($userName){
                $query->where('userName',$userName);
            });
        });
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function subscribers(){
        return $this->belongsToMany(User::class);
    }

    public function unSubscirbe(){
        $this->subscribers()->detach(Auth::user()->id);
    }

    public function subscribe(){
        $this->subscribers()->attach(Auth::user()->id);
    }
}
