@props(['blog'])
<div class="container my-5">
    @auth
        <section>
            <x-card-wrapper class="p-4">
                <h5 class="mb-3">Leave a Comment</h5>
                
                <form action="/blogs/{{$blog->slug}}/comments" method="POST">
                    @csrf
                    <div class="d-flex align-items-start mb-3">
                        <img src="{{Auth::user()->avatar}}" alt="User Avatar" class="rounded-circle me-3" width="50" height="50">
                        
                        <div class="flex-grow-1">
                            <textarea name="comment-body" class="form-control" rows="4" placeholder="Write your comment here..."></textarea>
                            @error('comment-body')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>
                </form>
            </x-card-wrapper>
        </section>
    @else
        <p>Please <a href="/login">login</a> (or) <a href="/register">register</a> to participate in this discussion</p>
    @endauth
</div>