<?php

use App\Http\Controllers\BlogController;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('/', [BlogController::class,'index']);

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

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);