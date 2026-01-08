@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-6">
  <h1 class="text-xl font-bold mb-6">Tambah Kisah Sukses</h1>

  <form method="POST" action="{{ route('admin.success_stories.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Nama</label>
      <input name="name" value="{{ old('name') }}" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Judul</label>
      <input name="title" value="{{ old('title') }}" class="w-full p-2 border rounded">
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Kisah</label>
      <textarea name="story" class="w-full p-2 border rounded" rows="5">{{ old('story') }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Gambar</label>
      <input type="file" name="image" accept="image/*">
    </div>

    <button class="bg-brand-pink text-white px-6 py-2 rounded">Simpan</button>
  </form>
</div>
@endsection
