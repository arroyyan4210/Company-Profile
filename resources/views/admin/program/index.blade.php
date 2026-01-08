@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Program</h1>
        <a href="{{ route('admin.program.create') }}" class="bg-brand-pink text-white px-4 py-2 rounded">Tambah Program</a>
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
            @foreach($programs as $p)
                <tr class="border-t">
                    <td class="p-3">{{ $p->id }}</td>
                    <td class="p-3">{{ $p->name }}</td>
                    <td class="p-3 text-center">
                        <a href="{{ route('admin.program.edit', $p) }}" class="text-blue-600 mr-2">Edit</a>
                        <form action="{{ route('admin.program.destroy', $p) }}" method="post" class="inline">@csrf @method('delete')<button class="text-red-600">Hapus</button></form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
