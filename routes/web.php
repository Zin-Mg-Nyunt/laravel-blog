<?php

use App\Http\Controllers\BlogController;
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('/', [BlogController::class,'index']);

Route::get('/authors/{author:userName}',function(Author $author){
    return view('blogs',[
        "blogs"=>$author->blogs,
        "categories"=>Category::all()
    ]);
});

Route::get('/blogs/{blog:slug}',[BlogController::class,'show']);