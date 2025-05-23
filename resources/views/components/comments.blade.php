<!-- Bootstrap 5 Comment Card Wrapper -->
@props(['comments','blog'])
@if ($blog->comments->count())
  <div class="container my-5">
      <h4 class="mb-4" style="cursor: pointer;">🗨️ Comments ({{$comments->count()}})</h4>
      <x-card-wrapper>
        <div class="card-body">
          @foreach ($comments as $comment)  
            <x-single-comment :comment="$comment"/>
          @endforeach
        </div>
      </x-card-wrapper>
  </div>
@endif