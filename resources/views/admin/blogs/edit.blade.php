<x-admin-layout>
    <x-card-wrapper class="container my-5 p-5">
        <h3 class="mb-5 text-center">Blog Edit Form</h3>
        <form action="" method="POST" enctype="multipart/form-data">
        @csrf

            <x-form.input name="title" value="{{$blog->title}}"/>
            <x-form.input name="slug" value="{{$blog->slug}}"/>
            <x-form.input name="intro" value="{{$blog->intro}}"/>
            <x-form.textarea name="body" value="{{$blog->body}}"/>
            <x-form.input name="thumbnail" type="file"/>
            <img src="/storage/{{$blog->thumbnail}}" width="200px" alt="">
            <x-form.input-wrapper name="category">
                <select name="category_id" id="category" class="form-select" required>
                    @foreach ($categories as $category)
                        <option {{$category->id==old('category_id',$blog->category->id)? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-error name="category_id" />
            </x-form.input-wrapper>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </x-card-wrapper>

</x-admin-layout>