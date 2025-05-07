<div class="dropdown">
    <button 
      class="btn btn-outline-primary dropdown-toggle" 
      type="button" 
      data-bs-toggle="dropdown" 
      aria-expanded="false"
    >
      {{isset($currentCategory)?$currentCategory->name:'Filter by category'}}
    </button>
    <ul class="dropdown-menu">
      <li>
        <a 
            class="dropdown-item" 
            href="/"
          >
            all
          </a>
      </li>
      @foreach ($categories as $category)
        <li>
          <a 
            class="dropdown-item" 
            href="/?category={{$category->slug}}{{request('search')?'&search='.request('search'):''}}{{request('author')?'&author='.request('author'):''}}"
          >
            {{$category->name}}
          </a>
        </li>
      @endforeach
    </ul>
</div>