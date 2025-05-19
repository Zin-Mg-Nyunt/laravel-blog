<!-- Bootstrap 5 Comment Card Wrapper -->
@props(['comments'])
<div class="container my-5">
    <h4 class="mb-4" style="cursor: pointer;">🗨️ Comments (3)</h4>
    <div class="card shadow-sm border-0">
      <div class="card-body">
        @foreach ($comments as $comment)  
          <x-single-comment :comment="$comment"/>
        @endforeach
      </div>
    </div>
</div>