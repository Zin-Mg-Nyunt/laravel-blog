<?php

use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;

Route::get('/', function () {
    return view('blogs',[
        "blogs"=>Blog::all()
    ]);
});
Route::get('/categories/{category:slug}',function(Category $category){
    return view('blogs',[
        "blogs"=>$category->blogs
    ]);
});
Route::get('/authors/{author}',function(Author $author){
    return view('blogs',[
        "blogs"=>$author->blogs
    ]);
});
Route::get('/blogs/{blog:slug}',function(Blog $blog){ 
    return view('blog',[
        "blog"=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');