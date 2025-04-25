<x-layout>
    <x-slot name="title">
        <title>All Blogs</title>
    </x-slot>
    <div class="blog-list">
        @foreach ($blogs as $blog) 
            <div class="blog-card">
                <h2>
                    <a href="/blogs/{{$blog->id}}">
                        {{$blog->title}}
                    </a>
                </h2>
                <p>
                    posted at - {{$blog->date}}
                </p>
                <p>
                    {{$blog->intro}}
                </p>
            </div>
        @endforeach
    </div>
</x-layout>