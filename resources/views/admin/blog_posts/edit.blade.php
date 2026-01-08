@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-6">
  <h1 class="text-xl font-bold mb-6">Edit Blog Post</h1>

  <form method="POST" action="{{ route('admin.blog_posts.update', $post) }}" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Judul</label>
      <input name="title" value="{{ old('title', $post->title) }}" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Slug</label>
      <input name="slug" value="{{ old('slug', $post->slug) }}" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Excerpt</label>
      <textarea name="excerpt" class="w-full p-2 border rounded" rows="2">{{ old('excerpt', $post->excerpt) }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Content</label>
      <textarea name="content" class="w-full p-2 border rounded" rows="6">{{ old('content', $post->content) }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Gambar</label>
      @if($post->image)
        <div class="mb-2"><img src="{{ asset('storage/'.$post->image) }}" class="w-48 h-auto rounded" alt=""></div>
      @endif
      <input type="file" name="image" accept="image/*">
    </div>

    <button class="bg-brand-yellow px-6 py-2 rounded">Update</button>
  </form>
</div>
@endsection
