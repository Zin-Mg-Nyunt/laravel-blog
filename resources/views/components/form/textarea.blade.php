@props(['name','rows'=>2])
<x-form.input-wrapper :name="$name">
    <textarea name="{{$name}}" id="{{$name}}" rows="{{$rows}}" class="form-control editor" required>
        {{old("$name")}}
    </textarea>
    <x-error name="{{$name}}" />
</x-form.input-wrapper>