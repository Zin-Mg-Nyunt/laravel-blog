<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        return view('blogs.index',[
            "blogs"=>Blog::latest()
                            ->filter(request(['search','category','author']))
                            ->paginate(6)
                            ->withQueryString(),
        ]);
    }
    public function show(Blog $blog){ 
        return view('blogs.show',[
            "blog"=>$blog,
            "randomBlogs"=>Blog::inRandomOrder()->take(3)->get()
        ]);
    }
    public function subscription(Blog $blog){
        // if auth user subscribed blog -> unsubscribe
        if (User::find(Auth::user()->id)->isSubscribe($blog)) {
            $blog->unSubscirbe();
        } else {
            $blog->subscribe();
        }
        return back();
    }
}
