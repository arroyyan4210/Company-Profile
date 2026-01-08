@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10 px-6">
    <h1 class="text-xl font-bold mb-6">Tambah Program</h1>

    <form method="POST" action="{{ route('admin.program.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Nama</label>
            <input name="name" value="{{ old('name') }}" class="w-full p-2 border rounded" required>
            @error('name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Deskripsi</label>
            <textarea name="description" class="w-full p-2 border rounded" rows="4">{{ old('description') }}</textarea>
            @error('description')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>

        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Gambar</label>
            <input type="file" name="image" accept="image/*">
            @error('image')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>

        <button class="bg-brand-pink text-white px-6 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
