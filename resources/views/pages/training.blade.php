@extends('layouts.app')

@section('title','Training Center')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Training Center</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach($trainings as $t)
            <div class="bg-white p-4 rounded shadow">
                @if($t->image)
                    <img src="{{ asset('storage/'.$t->image) }}" alt="" class="w-full h-40 object-cover rounded mb-3">
                @endif
                <h3 class="font-bold text-lg">{{ $t->title }}</h3>
                <p class="text-sm text-gray-600">{{ Str::limit($t->description, 120) }}</p>
                <a href="#" class="inline-block mt-3 text-sm text-brand-pink font-semibold">Lihat Detail</a>
            </div>
        @endforeach
    </div>

    <div class="mt-6">{{ $trainings->links() }}</div>
</div>
@endsection
