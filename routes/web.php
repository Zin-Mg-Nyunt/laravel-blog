<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs');
});
Route::get('/blogs/{blog}',function($fileName){
    $path = __DIR__."/../public/blogs/$fileName.html"; // file path
    return view('blog',[
        "blog"=>file_get_contents($path)
    ]);
});