<nav class="absolute top-0 left-0 w-full z-50 pt-4 px-4 md:pt-6 md:px-12">
  <div class="flex justify-between items-center max-w-7xl mx-auto">
    <div class="text-xl md:text-2xl font-extrabold text-brand-pink tracking-tight">
     <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
    </div>

    <div class="hidden md:flex items-center space-x-6 text-sm font-medium text-gray-600 bg-white/60 backdrop-blur-sm px-6 py-2 rounded-full shadow-sm">
      <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
      <a href="/kisah-sukses" class="nav-link">Kisah Sukses</a>
      <a href="/blog" class="hover:text-brand-pink transition">Blog</a>
      <a href="/kontak" class="hover:text-brand-pink transition">Kontak Kami</a>
    </div>

      <div class="flex items-center space-x-2 md:space-x-3">
      <div class="hidden sm:flex items-center space-x-1 bg-white px-2 py-1 rounded-full shadow-sm">
        <img src="https://flagcdn.com/w40/id.png" class="w-5 h-auto rounded-sm" alt="ID" />
        <span class="text-xs font-bold text-gray-500">ID</span>
        <svg class="w-3 h-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
      </div>

      @guest
        <a href="/login" class="text-sm font-bold text-gray-600 hover:text-brand-pink px-2 md:px-3">Masuk</a>
        <a href="/register" class="bg-brand-pink text-white px-4 py-2 md:px-5 md:py-2 rounded-full text-xs md:text-sm font-bold shadow-lg hover:bg-pink-600 transition">Daftar</a>
      @endguest

      @auth
        <div class="relative">
          <a href="#" class="text-sm font-bold text-gray-600 px-2 md:px-3">{{ auth()->user()->name }}</a>
          <div class="absolute right-0 mt-2 w-48 bg-white border rounded shadow-md py-1 hidden" id="user-menu">
            <a href="/dashboard" class="block px-3 py-2 text-sm hover:bg-gray-100">Dashboard</a>
            <form method="POST" action="/logout">@csrf
              <button type="submit" class="w-full text-left px-3 py-2 text-sm hover:bg-gray-100">Logout</button>
            </form>
          </div>
        </div>
      @endauth
    </div>
  </div>
</nav>

<header class="relative w-full min-h-[800px] md:min-h-[750px] hero-bg flex items-center pt-24 md:pt-20 overflow-hidden">
  <div class="absolute inset-0 w-full h-full z-0 pointer-events-none">
  <img 
  src="{{ asset('assets/img/image6.png') }}" 
  class="w-full h-full object-cover opacity-60" 
  alt="Latar Belakang Jepang" 
/>

    <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 md:via-white/80 to-transparent"></div>
  </div>

  <div class="container max-w-7xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-10 relative z-10 items-center">
    <div class="pt-4 md:pt-10">
      <h1 class="text-4xl md:text-6xl font-extrabold leading-tight text-gray-900 mb-2">
        <span class="relative inline-block">
          <span class="absolute -left-6 top-1/2 transform -translate-y-1/2 w-4 h-4 rounded-full bg-red-500 border-2 border-white"></span>
          Program Resmi
        </span>
        <br />
        <span class="text-brand-pink">Belajar & Kerja</span> di <br />
        Jepang <span class="inline-block w-8 h-8 align-middle ml-2 shadow-sm rounded-full overflow-hidden border border-gray-200"><img src="https://flagcdn.com/w80/jp.png" class="w-full h-full object-cover" /></span>
      </h1>

      <div class="bg-white p-3 rounded-2xl md:rounded-full shadow-soft flex flex-col md:flex-row gap-4 md:gap-2 max-w-lg mt-8 mb-6 border border-gray-100 items-stretch md:items-center">
        <div class="flex-1 px-2 md:px-4 border-b md:border-b-0 md:border-r border-gray-100 pb-2 md:pb-0">
          <label class="block text-xs font-bold text-gray-400 uppercase mb-1 md:mb-0">Kategori</label>
          <select class="w-full bg-transparent text-sm font-bold text-gray-700 outline-none appearance-none cursor-pointer py-1">
            <option>Kampus</option>
            <option>Magang</option>
          </select>
        </div>
        <div class="flex-1 px-2 md:px-4 pb-2 md:pb-0">
          <label class="block text-xs font-bold text-gray-400 uppercase mb-1 md:mb-0">Jenjang</label>
          <select class="w-full bg-transparent text-sm font-bold text-gray-700 outline-none appearance-none cursor-pointer py-1">
            <option>Tingkat</option>
            <option>N5 - N1</option>
          </select>
        </div>
        <button class="bg-brand-pink text-white px-8 py-3 rounded-xl md:rounded-full text-sm font-bold shadow-md hover:bg-pink-600 transition w-full md:w-auto">Terjemahkan</button>
      </div>

      <p class="text-gray-500 mb-8 max-w-md leading-relaxed text-sm font-medium">Raih beasiswa pendidikan dan karier di Jepang dengan mentor yang sudah berpengalaman, jaringan luas, dan sertifikat pelatihan yang terakreditasi.</p>

      <div class="flex flex-col sm:flex-row items-start sm:items-center space-y-4 sm:space-y-0 sm:space-x-4 mb-8">
        <a href="/register" class="bg-brand-pink text-white px-8 py-3 rounded-full font-bold shadow-lg hover:shadow-pink-500/30 transition flex items-center justify-center w-full sm:w-auto">
          Daftar Sekarang <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
        <button class="text-brand-pink font-bold px-6 py-3 rounded-full hover:bg-pink-50 transition flex items-center justify-center w-full sm:w-auto border border-pink-100 sm:border-transparent">
          <div class="w-8 h-8 rounded-full border-2 border-brand-pink flex items-center justify-center mr-2">
            <svg class="w-3 h-3 fill-current" viewBox="0 0 24 24"><path d="M8 5v14l11-7z" /></svg>
          </div>
          Lihat Video
        </button>
      </div>

      <div class="flex items-center space-x-3">
        <div class="flex -space-x-3">
          <img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://i.pravatar.cc/100?img=32" alt="" />
          <img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://i.pravatar.cc/100?img=47" alt="" />
          <img class="w-10 h-10 rounded-full border-2 border-white shadow-sm" src="https://i.pravatar.cc/100?img=12" alt="" />
          <div class="w-10 h-10 rounded-full border-2 border-white bg-gray-100 flex items-center justify-center text-xs font-bold text-gray-500">+1k</div>
        </div>
        <div class="text-sm">
          <span class="text-brand-pink font-bold text-lg">1,200+</span>
          <p class="text-xs text-gray-500 font-medium">siswa telah bergabung & bekerja</p>
        </div>
      </div>
    </div>

    <div class="relative h-full flex items-end justify-center md:justify-end mt-10 md:mt-0">
    <img 
  src="{{ asset('assets/img/image5.png') }}" 
  class="relative z-10 w-[80%] md:w-[90%] object-contain drop-shadow-2xl rounded-b-none mask-image-b" 
  alt="Student" 
/>
</div>
  </div>

  <div class="absolute bottom-0 w-full h-24 bg-gradient-to-t from-white to-transparent z-10"></div>
</header>