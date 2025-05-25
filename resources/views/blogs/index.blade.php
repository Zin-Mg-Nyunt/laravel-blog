<x-layout>
  @if (session('success'))
    <div class="alert alert-success text-center">{{session('success')}}</div>
  @endif
  @session('logout')
    <div class="alert alert-success text-center">{{session('logout')}}</div>
  @endsession
  <x-hero/>
  <x-blogsSection 
    :blogs="$blogs"
  />
</x-layout>
