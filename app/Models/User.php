<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function blogs(){
        return $this->hasMany(Blog::class);
    }

    // accessors method
    public function getNameAttribute($value){
        return ucwords($value);
    }

    // mutators method
    public function setPasswordAttribute($value){
        $this->attributes['password']=bcrypt($value);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    // many to many relationship
    public function subscribedBlogs(){
        return $this->belongsToMany(Blog::class);
    }

    public function isSubscribe($blog){
        return Auth::user()->subscribedBlogs && Auth::user()->subscribedBlogs->contains('id',$blog->id);
    }
}
