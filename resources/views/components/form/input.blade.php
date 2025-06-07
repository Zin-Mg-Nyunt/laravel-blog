@props(['name','type'=>'text'])
<x-form.input-wrapper :name="$name">
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" value="{{old('name')}}" required>
    <x-error name="{{$name}}" />
</x-form.input-wrapper>