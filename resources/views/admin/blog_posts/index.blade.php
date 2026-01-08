@extends('layouts.app')

@section('title','Admin - Blog')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Blog Posts</h1>
        <a href="{{ route('admin.blog_posts.create') }}" class="bg-brand-pink text-white px-4 py-2 rounded">Tambah</a>
    </div>

    <table class="w-full bg-white rounded shadow overflow-hidden">
        <thead class="bg-gray-100">
            <tr>
                <th class="p-3 text-left">#</th>
                <th class="p-3 text-left">Title</th>
                <th class="p-3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $p)
                <tr class="border-t">
                    <td class="p-3">{{ $p->id }}</td>
                    <td class="p-3">{{ $p->title }}</td>
                    <td class="p-3 text-center">
                        <a href="{{ route('admin.blog_posts.edit', $p) }}" class="text-blue-600 mr-2">Edit</a>
                        <form action="{{ route('admin.blog_posts.destroy', $p) }}" method="post" class="inline">@csrf @method('delete')<button class="text-red-600">Hapus</button></form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">{{ $posts->links() }}</div>
</div>
@endsection
