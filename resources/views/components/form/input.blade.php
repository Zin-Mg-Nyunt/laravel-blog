@props(['name','type'=>'text','value'=>''])
<x-form.input-wrapper :name="$name">
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" class="form-control" value="{{old('name',$value)}}" required>
    <x-error name="{{$name}}" />
</x-form.input-wrapper>