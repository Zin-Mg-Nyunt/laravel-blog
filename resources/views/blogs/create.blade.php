<x-admin-layout>
    <x-card-wrapper class="container my-5 p-5">
        <h3 class="mb-5">Blog Create Form</h3>
        <form action="" method="POST" enctype="multipart/form-data">
        @csrf

            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="intro"/>
            <x-form.textarea name="body" rows=8/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.input-wrapper name="category">
                <select name="category_id" id="category" class="form-select" required>
                    @foreach ($categories as $category)
                        <option {{$category->id==old('category_id')? 'selected':''}} value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                <x-error name="category_id" />
            </x-form.input-wrapper>

            <!-- Submit -->
            <button type="submit" class="btn btn-primary">Create Blog</button>
        </form>
    </x-card-wrapper>

</x-admin-layout>