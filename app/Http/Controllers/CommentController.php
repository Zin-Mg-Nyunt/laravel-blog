<?php

namespace App\Http\Controllers;

use App\Mail\SubscriberMail;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    public function store(Blog $blog){
        request()->validate([
            'comment-body'=>'required'
        ]);
        // comments store
        $blog->comments()->create([
            'body'=>request('comment-body'),
            'user_id'=>Auth::user()->id
        ]);
        // mail send
        $subscribers=$blog->subscribers->filter(fn ($subscriber)=>$subscriber->id!=Auth::user()->id);
        $commenter=Auth::user();
        $comment=User::find(Auth::user()->id)->comments()->latest()->first();
        $subscribers->each(fn($subscriber)=>Mail::to($subscriber->email)->queue(new SubscriberMail($blog,$commenter,$comment)));
        return back();
    }
}
