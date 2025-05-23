@props(['blog','randomBlogs'])
<x-layout>
    <x-single-blog :blog="$blog"/>
    <x-comment-form :blog="$blog"/>
    <x-comments :comments="$blog->comments" :blog="$blog"/>
    <x-subscribe/>
    <x-blogsYouMayLike :blogs="$randomBlogs"/>
</x-layout>