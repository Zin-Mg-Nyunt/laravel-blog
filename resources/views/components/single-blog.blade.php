@props(['blog'])
<div class="container">
    <div class="row">
    <div class="col-md-6 mx-auto text-center">
        <img
        src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
        class="card-img-top"
        alt="..."
        />
        <h3 class="my-3">{{$blog->title}}</h3>
        <div>
            <div>Author - 
                <a href="/authors/{{$blog->author->userName}}">
                    {{$blog->author->name}}
                </a>
            </div>
            <a href="/categories/{{$blog->category->slug}}">
                <span class="badge bg-primary">{{$blog->category->name}}</span>
            </a>
            <div class="text-secondary">{{$blog->created_at->diffForHumans()}}</div>
            <div class="text-secondary">
                <form action="/blogs/{{$blog->slug}}/subscription" method="POST">
                    @csrf
                    @auth
                        @if (Auth::user()->isSubscribe($blog))
                        <button class="btn btn-danger mt-2">Unsubscribe</button>
                        @else
                        <button class="btn btn-warning mt-2">Subscribe</button>
                        @endif
                    @endauth
                </form>
            </div>
        </div>
        <p class="lh-md text-start mt-3">
            {{$blog->body}}
        </p>
    </div>
    </div>
</div>