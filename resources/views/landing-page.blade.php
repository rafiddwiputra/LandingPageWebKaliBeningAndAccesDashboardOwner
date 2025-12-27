@extends('layouts.app')
@section('title', 'Landing Page KaliBening')
@section('content')

<section class="pt-0">

    <!-- Header Teks Box -->
    <div class="bg-primary py-4 px-6 text-center shadow-sm">
        <p class="text-white font-semibold text-sm md:text-base tracking-[0.3em]">
            DESTINASI PEMANCINGAN &amp; NONGKRONG
        </p>
    </div>

    <!-- Header Untuk Navigation -->
    <div class="bg-white mt-0 relative" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between py-3 md:py-5">

                <!-- Logo -->
                <div class="flex items-center gap-3">
                    <img
                        src="{{ asset('images/logo.png') }}"
                        alt="Logo Pemancingan Kali Bening"
                        class="w-10 h-10 md:w-12 md:h-12 rounded-full object-contain"/>

                    <!-- Tulisan Samping Kanan Logo -->
                    <div class="leading-tight">
                        <p class="font-bold text-base md:text-lg">PEMANCINGAN</p>
                        <p class="font-bold text-base md:text-lg text-primary">KALI BENING</p>
                    </div>
                </div>

                <!-- Navigation Menu (Desktop) -->
                <nav class="hidden md:flex gap-8 text-xl">
                    <a href="#" class="nav-link">Beranda</a>
                    <a href="#" class="nav-link">Fasilitas</a>
                    <a href="#" class="nav-link">Menu</a>
                    <a href="#" class="nav-link">Galeri</a>
                    <a href="#" class="nav-link">Kontak</a>
                </nav>

                <!-- Aksi Tombol (Desktop) -->
                <a href="#"
                   class="hidden md:inline-flex items-center gap-2
                          bg-white border border-primary text-primary
                          px-6 py-2 rounded-full font-semibold
                          shadow-sm
                          transition-all duration-300
                          hover:bg-primary hover:text-white hover:shadow-lg
                          hover:-translate-y-0.5
                          focus:outline-none focus:ring-4 focus:ring-primary/30
                          active:scale-95">
                    DASHBOARD OWNER
                </a>

                <!-- TAMPILAN PADA DEVICE MOBILE -->
                <button
                    @click="open = !open"
                    class="md:hidden p-2 rounded-lg text-gray-700 hover:bg-gray-100 active:scale-95 transition"
                    aria-label="Toggle Menu">
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-7 w-7"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

            </div>
        </div>

        <!-- TAMPILAN JIKA MENGGUNAKAN DEVICE MOBILE -->
        <div
            x-show="open"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-2 scale-95"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            @click.outside="open = false"
            class="absolute right-4 top-16 z-50 md:hidden">

            <nav class="w-64 flex flex-col gap-4 px-6 py-6 bg-white rounded-2xl shadow-xl">
                <a href="#" class="nav-link">Beranda</a>
                <a href="#" class="nav-link">Fasilitas</a>
                <a href="#" class="nav-link">Menu</a>
                <a href="#" class="nav-link">Galeri</a>
                <a href="#" class="nav-link">Kontak</a>

                <a href="#"
                   class="mt-2 text-center bg-primary text-white px-3 py-3 rounded-full font-semibold shadow active:scale-95 transition">
                    DASHBOARD OWNER
                </a>
            </nav>
        </div>
    </div>

    <!-- BAGIAN HERO SECTION -->

    <section class="relative w-full h-[75vh] md:h-[90vh] overflow-hidden">

    <!-- Bagian Gambar -->
     <img src="{{asset('images/Foto_Utama..webp')}}" alt="Pemancingan Kali Bening"
     class="absolute inset-0 w-full h-full object-cover">

     <!-- Overlay -->
      <div class="absolute inset-0 bg-black/25"></div>

      <!-- Teks di atas gambar -->
       <div class="relative z-10 h-full flex items-center">
         <div class="w-full px-6 md:px-16 lg:px-24">
            <div class="max-w-2xl">
            <!-- bagian jam buka -->
             <span class="inline-block mb-4 px-5 py-2 rounded-full
             bg-white/90 text-primary text-sm font-semibold">
            BUKA SETIAP HARI | JAM 08.00 - 23.00 WIB
         </span>

         <!-- Heading -->
          <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-w-2xl">
            Satu Tempat <br>
            Untuk Memancing <br>
            dan Berkumpul Bersama
          </h1>

          <!-- Deskripsi -->
           <p class="mt-5 text-white/90 max-w-xl text-base md:text-lg">
            Pemancingan Kali Bening menyediakan area pemancingan yang nyaman dengan suasana yang tenang, dilengkapi tampat berkumpul serta berbagai pilihan
            makanan dan minuman untuk menemani waktu bersantai Anda.
           </p>

           <!-- TOMBOL -->
           <div class="mt-8 flex gap-4">
            <a href="#fasilitas" class="btn-primary">
               Lihat Fasilitas
            </a>

            <a href="#menu" class="btn-secondary">
               Lihat Menu
            </a>
         </div>
            

         </div>
       </div>
       </div>
    </section>
   
    <!-- Bagian konten 2 -->
    <section class="stats-section">
    <div class="stats-card">

        <div class="stat-item fade-up">
            <span class="stat-circle">
                <span class="count" data-target="4">0</span>+
            </span>
            <p class="stat-title">KOLAM PANCING</p>
        </div>

        <div class="stat-item fade-up">
            <span class="stat-circle">
                <span class="count" data-target="20">0</span>+
            </span>
            <p class="stat-title">ANEKA MAKANAN</p>
        </div>

        <div class="stat-item fade-up">
            <span class="stat-circle">
                <span class="count" data-target="20">0</span>+
            </span>
            <p class="stat-title">MENU PENDAMPING</p>
        </div>

        <div class="stat-item fade-up">
            <span class="stat-circle">
                <span class="count" data-target="1">0</span>
            </span>
            <p class="stat-title">KIOS PEMANCING</p>
        </div>

    </div>
</section>

<!-- Konten 3 -->
<section class="facility-section fade-up">
    <div class="facility-wrapper">

        <!-- Header -->
        <div class="facility-header">
            <h2>Fasilitas Lengkap Untuk<br>Kenikmatan Anda.</h2>

            <!-- Garis -->
             <div class="facility-desc">
               <span class="line"></span>
            <p>
                Setiap detail kami rancang untuk memberikan
                standar pelayanan terbaik bagi setiap pengunjung.
            </p>
            </div>
        </div>

        <!-- GRID CARD -->
        <div class="facility-cards">

            <!-- Card 1 -->
            <div class="facility-card">
                <div class="facility-icon">
                    <img src="{{ asset('images/ikon_areamancing.png') }}" alt="Ikon Kolam">
                </div>
                <h3>Area Memancing Nyaman</h3>
                <p>
                    Area memancing yang nyaman dengan suasana tenang
                    dan pemandangan kolam yang bersih.
                </p>
                <a href="#" class="btn-secondary">Detail Fasilitas</a>
            </div>

            <!-- Card 2 (Utama) -->
            <div class="facility-card primary">
                <div class="facility-icon">
                    <img src="{{ asset('images/ikon_dapur.png') }}" alt="Ikon Dapur">
                </div>
                <h3>Signature Kitchen</h3>
                <p>
                    Menyediakan beragam menu makanan dan minuman
                    untuk menemani waktu bersantai.
                </p>
                <a href="#" class="btn-secondary">Lihat Menu</a>
            </div>

            <!-- Card 3 -->
            <div class="facility-card">
                <div class="facility-icon">
                    <img src="{{ asset('images/ikon_kios.png') }}" alt="Ikon Kios">
                </div>
                <h3>Kios Pemancingan</h3>
                <p>
                    Menyediakan alat pancing, umpan,
                    dan perlengkapan pendukung lainnya.
                </p>
                <a href="#" class="btn-secondary">Lihat Katalog</a>
            </div>

        </div>
    </div>

</section>
</section>
@endsection
