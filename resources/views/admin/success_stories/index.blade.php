@extends('layouts.app')

@section('title','Admin - Kisah Sukses')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Kisah Sukses</h1>
        <a href="{{ route('admin.success_stories.create') }}" class="bg-brand-pink text-white px-4 py-2 rounded">Tambah</a>
    </div>

    <table class="w-full bg-white rounded shadow overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">#</th>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stories as $s)
                <tr class="border-t">
                    <td class="p-3">{{ $s->id }}</td>
                    <td class="p-3">{{ $s->name }}</td>
                    <td class="p-3 text-center">
                        <a href="{{ route('admin.success_stories.edit', $s) }}" class="text-blue-600 mr-2">Edit</a>
                        <form action="{{ route('admin.success_stories.destroy', $s) }}" method="post" class="inline">@csrf @method('delete')<button class="text-red-600">Hapus</button></form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">{{ $stories->links() }}</div>
</div>
@endsection
