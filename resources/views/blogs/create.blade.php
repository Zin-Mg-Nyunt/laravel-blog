<x-layout>
    <x-card-wrapper class="container my-5 p-5">
        <h3 class="mb-5">Blog Create Form</h3>
        <form action="" method="POST" enctype="multipart/form-data">
        @csrf

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{old('title')}}" required>
                <x-error name="title" />
            </div>

            <!-- Slug -->
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" value="{{old('slug')}}" required>
                <x-error name="slug" />

            </div>

            <!-- Intro -->
            <div class="mb-3">
                <label for="intro" class="form-label">Intro</label>
                <textarea name="intro" id="intro" rows="2" class="form-control" required>
                    {{old('intro')}}
                </textarea>
                <x-error name="intro" />
            </div>

            <!-- Body -->
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" id="body" rows="6" class="form-control" required>
                    {{old('body')}}
                </textarea>
                <x-error name="body" />
            </div>

            <!-- Thumbnail -->
            <div class="mb-3">
                <label for="thumbnail" class="form-label">Thumbnail</label>
                <input type="file" name="thumbnail" id="thumbnail" class="form-control" required>
                <x-error name="thumbnail" />
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category_id" id="category" class="form-select" required>
                    @foreach ($categories as $category)
                        <option {{$category->id==old('category_id')? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-error name="category_id" />
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </x-card-wrapper>

</x-layout>