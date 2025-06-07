<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

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
    public function create(){
        
        return view('blogs.create',[
            'categories'=>Category::all()
        ]);
    }
    public function store(){
        $formData=request()->validate([
            "title" => ["required"],
            "slug" => ["required",Rule::unique('blogs','slug')],
            "intro" => ["required"],
            "body" => ["required"],
            "thumbnail"=>["required"],
            "category_id" => ["required",Rule::exists('categories','id')]
        ]);
        $path=request()->file('thumbnail')->store('thumbnails');
        $formData['user_id']=Auth::user()->id;
        $formData['thumbnail']=$path;
        Blog::create($formData);
        return redirect('/');
    }
}
