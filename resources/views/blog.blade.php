<x-layout>
    <x-slot name="title">
        <title>{{$blog->title}}</title>
    </x-slot>
    <div class="blog-detail-container">
        <a href="/">&larr; Back to all blogs</a>
        <h2>
            {{$blog->title}}
        </h2>
        <p>
            {!!$blog->body!!}
        </p>
    </div>
</x-layout>