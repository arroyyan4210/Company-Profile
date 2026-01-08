@extends('layouts.app')

@section('title','Kisah Sukses')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Kisah Sukses</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($stories as $s)
            <div class="bg-white p-4 rounded shadow">
                @if($s->image)
                    <img src="{{ asset('storage/'.$s->image) }}" alt="" class="w-full h-40 object-cover rounded mb-3">
                @endif
                <h3 class="font-bold text-lg">{{ $s->name }}</h3>
                <p class="text-sm text-gray-600">{{ Str::limit($s->story, 120) }}</p>
                <a href="#" class="inline-block mt-3 text-sm text-brand-pink font-semibold">Baca Selengkapnya</a>
            </div>
        @endforeach
    </div>

    <div class="mt-6">{{ $stories->links() }}</div>
</div>
@endsection
