<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
@foreach ($posts as $post)
    
<article class="py-8 max-w-screen-md">
    <a href="/posts/{{ $post['id'] }}" class="hover:underline">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">
            {{ $post['title'] }}
        </h2>
    </a>

    <div class="text-gray-500 text-base">
        <a href="">{{ $post['author'] }}</a> | 23 Oktober 2024
    </div>
    <p>{{ $post['body'] }}</p>
    <a href="/posts/{{ $post['id'] }}" class="font-medium text-blue-500 hover:underline">&laquo; Read more</a>
</article>
@endforeach
    
</x-layout>