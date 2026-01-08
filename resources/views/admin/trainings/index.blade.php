@extends('layouts.app')

@section('title','Admin - Trainings')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Trainings</h1>
        <a href="{{ route('admin.trainings.create') }}" class="bg-brand-pink text-white px-4 py-2 rounded">Tambah</a>
    </div>

    <table class="w-full bg-white rounded shadow overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">#</th>
                <th class="p-3 text-left">Title</th>
                <th class="p-3 text-left">Price</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trainings as $t)
                    <tr class="border-t">
                        <td class="p-3">{{ $t->id }}</td>
                        <td class="p-3">{{ $t->title }}</td>
                        <td class="p-3">{{ $t->price }}</td>
                        <td class="p-3 text-center">
                            <a href="{{ route('admin.trainings.edit', $t) }}" class="text-blue-600 mr-2">Edit</a>
                            <form action="{{ route('admin.trainings.destroy', $t) }}" method="post" class="inline">@csrf @method('delete')<button class="text-red-600">Hapus</button></form>
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>

    <div class="mt-4">{{ $trainings->links() }}</div>
</div>
@endsection
