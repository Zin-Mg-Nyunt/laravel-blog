@extends('layout')
@section('title')
    <title>
        {{$blog->title}}
    </title>
@endsection
@section('content')    
<div class="blog-detail-container">
    <a href="/">&larr; Back to all blogs</a>
    <h2>
        {{$blog->title}}
    </h2>
    <p>
        {!!$blog->body!!}
    </p>
</div>
@endsection
