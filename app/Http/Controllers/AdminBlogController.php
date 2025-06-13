<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminBlogController extends Controller
{
    //
    public function index(){
        return view('admin.blogs.index',[
            "blogs"=>Blog::latest()->paginate(3),
        ]);
    }
    public function create(){
        return view('admin.blogs.create',[
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
    public function destroy(Blog $blog){
        $blog->delete();
        return back();
    }
    public function edit(Blog $blog){
        return view('admin.blogs.edit',[
            'blog'=>$blog,
            'categories'=>Category::all()
        ]);
    }
}
