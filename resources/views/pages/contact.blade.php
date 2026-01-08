@extends('layouts.app')

@section('title','Kontak Kami')

@section('content')
<div class="container mx-auto px-4 py-8 max-w-2xl">
    <h1 class="text-3xl font-bold mb-4">Kontak Kami</h1>

    <form action="{{ route('contact.store') }}" method="post">
        @csrf
        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Nama</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2" required>
            @error('name')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2" required>
            @error('email')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <div class="mb-4">
            <label class="block text-sm font-semibold mb-1">Pesan</label>
            <textarea name="message" class="w-full border rounded px-3 py-2" rows="6" required>{{ old('message') }}</textarea>
            @error('message')<div class="text-red-600 text-sm">{{ $message }}</div>@enderror
        </div>
        <button class="bg-brand-pink text-white px-6 py-2 rounded">Kirim</button>
    </form>
</div>
@endsection
