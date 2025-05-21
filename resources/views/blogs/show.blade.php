@props(['blog','randomBlogs'])
<x-layout>
    <!-- single blog section -->
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
            </div>
            <p class="lh-md text-start mt-3">
                {{$blog->body}}
            </p>
        </div>
        </div>
    </div>
    <section>
        <div class="container my-5">
            <x-card-wrapper class="p-4">
                <h5 class="mb-3">Leave a Comment</h5>
                
                <form>
                    <div class="d-flex align-items-start mb-3">
                    <img src="https://via.placeholder.com/50" alt="User Avatar" class="rounded-circle me-3" width="50" height="50">
                    
                    <div class="flex-grow-1">
                        <textarea class="form-control" rows="4" placeholder="Write your comment here..."></textarea>
                    </div>
                    </div>
                    
                    <div class="text-end">
                    <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>
                </form>
            </x-card-wrapper>
        </div>
    </section>
    <x-comments :comments="$blog->comments"/>
    <x-subscribe/>
    <x-blogsYouMayLike :blogs="$randomBlogs"/>
</x-layout>