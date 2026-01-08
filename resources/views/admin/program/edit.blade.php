@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-10 px-6">
  <h1 class="text-xl font-bold mb-6">Edit Program</h1>

  <form method="POST" action="{{ route('admin.program.update',$program) }}" enctype="multipart/form-data">
    @csrf @method('PUT')

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Nama</label>
      <input name="name" value="{{ old('name', $program->name) }}" class="w-full p-2 border rounded">
      @error('name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Deskripsi</label>
      <textarea name="description" class="w-full p-2 border rounded" rows="4">{{ old('description', $program->description) }}</textarea>
      @error('description')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </div>

    <div class="mb-4">
      <label class="block text-sm font-semibold mb-1">Gambar</label>
      @if($program->image)
        <div class="mb-2"><img src="{{ asset('storage/'.$program->image) }}" class="w-48 h-auto rounded" alt=""></div>
      @endif
      <input type="file" name="image" accept="image/*">
      @error('image')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
    </div>

    <button class="bg-brand-yellow px-6 py-2 rounded">Update</button>
  </form>
</div>
@endsection
