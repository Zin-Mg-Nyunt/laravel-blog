<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    <div class="blog-list">
        @foreach ($blogs as $blog) 
            <div class="blog-card">
                <h2>
                    <a href="/blogs/{{$blog->slug}}">
                        {{$blog->title}}
                    </a>
                </h2>
                <span>
                    <a href="/categories/{{$blog->category->slug}}">
                        {{$blog->category->name}}
                    </a>
                </span>
                <p>
                    posted at - {{$blog->created_at->diffForHumans()}}
                </p>
                <p>
                    {{$blog->intro}}
                </p>
            </div>
        @endforeach
        
    </div>
</x-layout>