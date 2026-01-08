@extends('layouts.app')

@section('title','Blog')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Blog</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($posts as $post)
            <div class="bg-white p-4 rounded shadow">
                @if($post->image)
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="w-full h-48 object-cover rounded mb-3">
                @endif
                <h3 class="font-bold text-lg">{{ $post->title }}</h3>
                <p class="text-sm text-gray-600">{{ Str::limit($post->excerpt ?? $post->content, 150) }}</p>
                <a href="#" class="inline-block mt-3 text-sm text-brand-pink font-semibold">Baca Selengkapnya</a>
            </div>
        @endforeach
    </div>

    <div class="mt-6">{{ $posts->links() }}</div>
</div>
@endsection
