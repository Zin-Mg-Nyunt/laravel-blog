@props(['blog'])
<!-- blog card -->
<div class="card">
    <img
          src='{{$blog->thumbnail?asset("storage/$blog->thumbnail"):"https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"}}'
          class="card-img-top"
          alt="..."
    />
    <div class="card-body">
          <h3 class="card-title">{{$blog->title}}</h3>
          <p class="fs-6 text-secondary">
            <a href="/?author={{$blog->author->userName}}" class="text-decoration-none">
              {{$blog->author->name}}
            </a>
            <span> - {{$blog->created_at->diffForHumans()}}</span>
          </p>
          <div class="tags my-3">
            <a href="/?category={{$blog->category->slug}}">
              <span class="badge bg-primary">{{$blog->category->name}}</span>
            </a>
          </div>
          <p class="card-text">
            {{$blog->intro}}
          </p>
          <a href="/blogs/{{$blog->slug}}" class="btn btn-primary">Read More</a>
    </div>
</div>
