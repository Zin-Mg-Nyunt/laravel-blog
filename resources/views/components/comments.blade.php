<!-- Bootstrap 5 Comment Card Wrapper -->
<div class="container my-5">
    <h4 class="mb-4" style="cursor: pointer;">🗨️ Comments (3)</h4>
    <div class="card shadow-sm border-0">
      <div class="card-body">
        @foreach (range(1,3) as $item)  
          <x-single-comment/>
        @endforeach
      </div>
    </div>
</div>