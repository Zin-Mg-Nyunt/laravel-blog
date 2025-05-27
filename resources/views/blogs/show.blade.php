@props(['blog','randomBlogs'])
<x-layout>
    <x-single-blog :blog="$blog"/>
    <x-comment-form :blog="$blog"/>
    <x-comments :comments="$blog->comments()->latest()->get()" :blog="$blog"/>
    <x-blogsYouMayLike :blogs="$randomBlogs"/>
</x-layout>