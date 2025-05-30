<x-layout>
    <x-card-wrapper class="container my-5 p-5">
        <h3 class="mb-5">Blog Create Form</h3>
        <form action="" method="POST">
        @csrf

            <!-- Title -->
            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <!-- Slug -->
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>

            <!-- Intro -->
            <div class="mb-3">
                <label for="intro" class="form-label">Intro</label>
                <textarea name="intro" id="intro" rows="2" class="form-control" required></textarea>
            </div>

            <!-- Body -->
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea name="body" id="body" rows="6" class="form-control" required></textarea>
            </div>

            <!-- Category -->
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select name="category" id="category" class="form-select" required>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </x-card-wrapper>

</x-layout>