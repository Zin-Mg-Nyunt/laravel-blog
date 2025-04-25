<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;

Route::get('/', function () {
    return view('blogs',[
        "blogs"=>Blog::all()
    ]);
});
Route::get('/blogs/{blog}',function(Blog $blog){ // Blog::findofFail($id)
    return view('blog',[
        "blog"=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');