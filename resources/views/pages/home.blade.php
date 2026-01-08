@extends('layouts.app')

@section('content')

<!-- SECTION INTRO -->
<section class="py-16 md:py-20 max-w-7xl mx-auto px-6">
  <div class="flex flex-col md:flex-row items-start justify-between gap-8 md:gap-10">
    <div class="md:w-1/3">
      <div class="w-6 h-6 bg-red-600 rounded-full mb-4 shadow-sm"></div>
      <h2 class="text-3xl md:text-4xl font-bold text-brand-pink leading-tight">
        Jepang Menanti<br />Anda
      </h2>
    </div>
    <div class="md:w-2/3">
      <p class="text-gray-500 leading-relaxed mb-6 font-medium text-sm md:text-base">
        Pilihan universitas dan sekolah bahasa terbaik menanti. Kami bekerja sama
        dengan lembaga pendidikan resmi yang terdaftar, memberikan jaminan kualitas
        dan legalitas.
      </p>
      <button class="bg-brand-yellow px-8 py-3 rounded-full font-bold text-sm">
        Selengkapnya >
      </button>
    </div>
  </div>
</section>

<!-- SECTION PROGRAM -->
<section class="py-16">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-12 md:mb-16">
      <h2 class="text-2xl md:text-3xl font-bold text-brand-pink mb-3">
        Pilihan Program Masa Depan
      </h2>
      <p class="text-gray-500 text-sm font-medium">
        Kami menyediakan profesionalitas serta studi gelar atau bahasa.
      </p>
    </div>

    <!-- 🔥 DINAMIS DARI DATABASE -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8">
      @forelse ($programs as $program)
        <div class="group bg-white rounded-2xl shadow-soft hover:shadow-xl transition-all duration-300 overflow-hidden">
          <div class="h-48 overflow-hidden">
            <img
              src="{{ asset($program->image) }}"
              alt="{{ $program->name }}"
              class="w-full h-full object-cover group-hover:scale-110 transition duration-500"
            />
          </div>

          <div class="p-6">
            <h3 class="font-bold text-gray-800 text-lg mb-4 leading-snug">
              {{ $program->name }}
            </h3>

            <p class="text-xs font-medium text-gray-500 leading-relaxed">
              {{ $program->description }}
            </p>
          </div>
        </div>
      @empty
        <div class="col-span-4 text-center text-gray-400">
          Program belum tersedia
        </div>
      @endforelse
    </div>

    <div class="text-center mt-12">
      <button class="bg-brand-yellow px-10 py-3 rounded-full font-bold text-sm">
        Lihat Semua Program >
      </button>
    </div>
  </div>
</section>

@endsection
