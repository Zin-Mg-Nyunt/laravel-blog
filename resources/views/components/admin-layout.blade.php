<x-layout>
    @if (session('success'))
        <div class="alert alert-success text-center">{{session('success')}}</div>
    @endif
    <div class="container">
        <div class="row my-5">
            <div class="col-md-2 mt-5">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/admin/blogs">
                            Dashboard
                        </a>
                    </li>
                    <li class="list-group-item">
                        <a href="/admin/blogs/create">
                            Create Blog
                        </a>
                    </li>

                </ul>
            </div>
            <div class="col-md-10">
                {{$slot}}
            </div>
        </div>
    </div>
</x-layout>