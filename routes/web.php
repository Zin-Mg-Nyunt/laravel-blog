<?php

use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Category;

Route::get('/', function () {
    return view('blogs',[
        "blogs"=>Blog::latest()->get(),
        "categories"=>Category::all()
    ]);
});
Route::get('/categories/{category:slug}',function(Category $category){
    return view('blogs',[
        "blogs"=>$category->blogs,
        "categories"=>Category::all(),
        "currentCategory"=>$category
    ]);
});
Route::get('/authors/{author:userName}',function(Author $author){
    return view('blogs',[
        "blogs"=>$author->blogs,
        "categories"=>Category::all()
    ]);
});
Route::get('/blogs/{blog:slug}',function(Blog $blog){ 
    return view('blog',[
        "blog"=>$blog,
        "randomBlogs"=>Blog::inRandomOrder()->take(3)->get()
    ]);
})->where('blog','[A-z\d\-_]+');