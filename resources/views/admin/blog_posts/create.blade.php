@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-10 px-6">
  <h1 class="text-xl font-bold mb-6">Tambah Blog Post</h1>

  <form method="POST" action="{{ route('admin.blog_posts.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Judul</label>
      <input name="title" value="{{ old('title') }}" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Slug</label>
      <input name="slug" value="{{ old('slug') }}" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Excerpt</label>
      <textarea name="excerpt" class="w-full p-2 border rounded" rows="2">{{ old('excerpt') }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Content</label>
      <textarea name="content" class="w-full p-2 border rounded" rows="6">{{ old('content') }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Gambar</label>
      <input type="file" name="image" accept="image/*">
    </div>

    <button class="bg-brand-pink text-white px-6 py-2 rounded">Simpan</button>
  </form>
</div>
@endsection
