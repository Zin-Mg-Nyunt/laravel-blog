@props(['comment'])
<div class="d-flex mb-4">
  <img src="https://i.pravatar.cc/50?img=1" class="rounded-circle me-3" alt="User" width="50" height="50">
  <div>
    <h6 class="mb-1">{{$comment->author->name}} <small class="text-muted">• {{$comment->created_at->diffForHumans()}}</small></h6>
    <p class="mb-1">{{$comment->body}}</p>
  </div>
</div>
  