@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-6">
  <h1 class="text-xl font-bold mb-6">Edit Kisah Sukses</h1>

  <form method="POST" action="{{ route('admin.success_stories.update', $story) }}" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Nama</label>
      <input name="name" value="{{ old('name', $story->name) }}" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Judul</label>
      <input name="title" value="{{ old('title', $story->title) }}" class="w-full p-2 border rounded">
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Kisah</label>
      <textarea name="story" class="w-full p-2 border rounded" rows="5">{{ old('story', $story->story) }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Gambar</label>
      @if($story->image)
        <div class="mb-2"><img src="{{ asset('storage/'.$story->image) }}" class="w-48 h-auto rounded" alt=""></div>
      @endif
      <input type="file" name="image" accept="image/*">
    </div>

    <button class="bg-brand-yellow px-6 py-2 rounded">Update</button>
  </form>
</div>
@endsection
