<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Blog $blog){
        request()->validate([
            'comment-body'=>'required'
        ]);
        $blog->comments()->create([
            'body'=>request('comment-body'),
            'user_id'=>Auth::user()->id
        ]);
        return back();
    }
}
