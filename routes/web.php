<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs');
});
Route::get('/blogs/{blog}',function($slug){
    $path = __DIR__."/../resources/blogs/$slug.html"; // file path
    if (!file_exists($path)) {
        abort(404);
    }
    $blog=cache()->remember('blogs.$slug', now()->addMinutes(2), function () use($path) {
        var_dump('first time');
        return file_get_contents($path);
    });
    return view('blog',[
        "blog"=>$blog
    ]);
})->where('blog','[A-z\d\-_]+');