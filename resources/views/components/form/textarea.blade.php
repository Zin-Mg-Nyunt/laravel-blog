@props(['name','value'=>''])
<x-form.input-wrapper :name="$name">
    <textarea name="{{$name}}" id="{{$name}}" rows="10" class="form-control editor" required>
        {!!old($name,$value)!!}
    </textarea>
    <x-error name="{{$name}}" />
</x-form.input-wrapper>