{{-- <x-layout>
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
                <p>
                    Author - <span>
                        <a href="/authors/{{$blog->author->userName}}">
                            {{$blog->author->name}}
                        </a>
                    </span>
                </p>
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
</x-layout> --}}

<x-layout>
  <x-hero/>
  <x-blogsSection/>
  <x-subscribe/>
</x-layout>
