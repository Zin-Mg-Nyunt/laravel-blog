<!-- navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Creative Coder</a>
      <div class="d-flex">
        <a href="/#blogs" class="nav-link">Blogs</a>
        @guest
          <a href="/register" class="nav-link">Register</a>
          <a href="/login" class="nav-link">Login</a>
        @else
        {{-- using can directive --}}
          @can('admin')
            <a href="/admin/blogs" class="nav-link">Dashboard</a>
          @endcan
          <img src="{{Auth::user()->avatar}}" class="rounded rounded-circle" style="width:40px; height:40px; cursor:pointer;" alt="">
          <a class="nav-link">Welcome {{auth()->user()->name}}</a>
          <form action="/logout" method="POST">
            @csrf
            <button class="btn btn-link text-decoration-none">Logout</button>
          </form>
        @endguest
        <a href="#subscribe" class="nav-link">Subscribe</a>
      </div>
    </div>
</nav>