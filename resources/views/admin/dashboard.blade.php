@extends('layouts.app')

@section('title','Dashboard')

@section('content')
<div class="container mx-auto px-4 py-8">
  <h1 class="text-2xl font-bold mb-6">Dashboard Admin</h1>

  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
    <a href="{{ route('admin.program.index') }}" class="block bg-white p-4 rounded shadow text-center">
      <div class="text-sm text-gray-500">Program</div>
      <div class="text-xl font-bold">Kelola Program</div>
    </a>

    <a href="{{ route('admin.trainings.index') }}" class="block bg-white p-4 rounded shadow text-center">
      <div class="text-sm text-gray-500">Training</div>
      <div class="text-xl font-bold">Kelola Training</div>
    </a>

    <a href="{{ route('admin.blog_posts.index') }}" class="block bg-white p-4 rounded shadow text-center">
      <div class="text-sm text-gray-500">Blog</div>
      <div class="text-xl font-bold">Kelola Blog</div>
    </a>

    <a href="{{ route('admin.success_stories.index') }}" class="block bg-white p-4 rounded shadow text-center">
      <div class="text-sm text-gray-500">Kisah Sukses</div>
      <div class="text-xl font-bold">Kelola Kisah</div>
    </a>
  </div>
</div>
@endsection
