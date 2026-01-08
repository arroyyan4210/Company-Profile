@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-6">
  <h1 class="text-xl font-bold mb-6">Edit Training</h1>

  <form method="POST" action="{{ route('admin.trainings.update', $training) }}" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Judul</label>
      <input name="title" value="{{ old('title', $training->title) }}" class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Deskripsi</label>
      <textarea name="description" class="w-full p-2 border rounded" rows="4">{{ old('description', $training->description) }}</textarea>
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Harga</label>
      <input name="price" value="{{ old('price', $training->price) }}" class="w-full p-2 border rounded">
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Gambar</label>
      @if($training->image)
        <div class="mb-2"><img src="{{ asset('storage/'.$training->image) }}" class="w-48 h-auto rounded" alt=""></div>
      @endif
      <input type="file" name="image" accept="image/*">
    </div>

    <button class="bg-brand-yellow px-6 py-2 rounded">Update</button>
  </form>
</div>
@endsection
