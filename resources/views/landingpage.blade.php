<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LandingPage</title>
    <link 
      rel="stylesheet" 
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset("js/timeoutflash.js") }}"></script>
    <style type="text/tailwindcss">
      button {
        background: linear-gradient(135deg, #4c6ef5, #7b2ff7);
        color: #fff;
        transition: transform 0.3s ease, background-color 0.3s ease;
      }
      button:hover {
        transform: scale(1.05);
      }
      
    </style>
  </head>
  <body>

    <!-- Hero Section -->
    <section class="px-6 py-5 container mx-auto md:flex md:justify-between items-center my-12 space-x-6">
      <div class="md:w-3/6 text-center md:text-left">
        @include('alert.flashhmessage')
        <h4 class="text-xl font-bold">Dokumentasi Sistem</h4>
        <h3 class="text-5xl font-bold mb-5">Manajemen Dokumentasi Sistem</h3>
        <p class="text-gray-500 mb-8"> Lembaga Layanan Pendidikan Tinggi Wilayah V</p>
        <a href="{{ route('home') }}">
          <button class="px-6 py-3 rounded-full font-semibold">Login sekarang</button>
        </a>
      </div>
      <img class="md:w-2/5" src="{{ asset('image/vector1.png') }}" />
    </section>

    <!-- Statistik -->
    <section class="container mx-auto space-x-6 md:flex md:justify-between items-center">
      <img 
        src="{{ asset('image/vector2.png') }}" 
        class="w-3/4 md:w-3/6 mx-auto" 
        alt="" 
      />
      <div class="md:w-3/6 text-center md:text-left">
        <h4 class="text-xl font-bold">Statistic</h4>
        <h3 class="text-3xl font-bold mb-5 leading-tight">Apa yang Dapat Anda Temukan?</h3>
        <p class="text-gray-700">
          Sistem ini menyediakan informasi jumlah dokumentasi sistem yang tersedia, 
          termasuk panduan pengguna, analisis sistem, dan tautan sumber daya lainnya. 
          Semua dikelola untuk meningkatkan efisiensi dan aksesibilitas.
        </p>
      </div>
    </section>

    <!-- Testimoni -->
    <section class="container mx-auto p-10 my-20 text-center">
      <h4 class="text-xl font-bold">Statistik</h4>
      <h3 class="text-3xl font-bold mb-8">Dokumentasi Sistem</h3>
      <div class="md:flex md:justify-between mt-10 space-x-8">
        <!-- Card 1 -->
        <div class="bg-gray-100 text-gray-800 md:w-1/3 rounded-md shadow-lg p-6">
          <img 
            class="w-16 rounded-full mx-auto -mt-8" 
            src="{{ asset('image/project.png') }}" 
            alt="Person 1" 
          />
          <h5 class="font-bold pt-5">Total Proyek</h5>
          <p class="mt-3">Melacak jumlah proyek yang terdaftar dalam sistem ini.</p>
        </div>
        <!-- Card 2 -->
        <div class="hidden md:inline bg-gray-100 text-gray-800 md:w-1/3 rounded-md shadow-lg p-6">
          <img 
            class="w-16 rounded-full mx-auto -mt-8" 
            src="{{ asset('image/document.png') }}" 
            alt="Person 2" 
          />
          <h5 class="font-bold pt-5">Total Dokumen</h5>
          <p class="mt-3">Menampilkan total dokumen yang tersedia untuk diakses.</p>
        </div>
        <!-- Card 3 -->
        <div class="hidden md:inline bg-gray-100 text-gray-800 md:w-1/3 rounded-md shadow-lg p-6">
          <img 
            class="w-16 rounded-full mx-auto -mt-8" 
            src="{{ asset('image/link.png') }}" 
            alt="Person 3" 
          />
          <h5 class="font-bold pt-5">Total Link</h5>
          <p class="mt-3">Menyediakan daftar lengkap tautan sumber daya yang relevan.</p>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-purple-300 to-blue-300 text-black py-10 mx-4 mb-6 rounded-3xl">
      <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center">
        <!-- Logo dan Judul -->
        <div class="flex flex-col items-start mb-6 md:mb-0">
          <div class="flex items-center mb-4">
            <img 
              alt="Logo" 
              class="mr-3" 
              height="50" 
              src="{{ asset('image/logo1.png') }}" 
              width="50" 
            />
            <h1 class="text-xl font-bold">Dokumentasi Sistem lldikti V</h1>
          </div>
        </div>

        <!-- Teks Kementerian Pendidikan -->
        <div class="flex flex-col items-center justify-center mb-6 md:mb-0 mx-4">
          <p class="mb-1 text-center">Kementerian Pendidikan, Kebudayaan,</p>
          <p class="text-center">Riset, dan Teknologi Lembaga Layanan Pendidikan Tinggi Wilayah V</p>
        </div>

        <!-- Alamat dan Kontak -->
        <div class="flex flex-col items-start">
          <p class="flex items-center mb-2">
            <i class="fas fa-map-marker-alt mr-2"></i>
            Jalan Tentara Pelajar Nomor 13 Yogyakarta
          </p>
          <p class="flex items-center mb-2">
            <i class="fas fa-envelope mr-2"></i>
            lldikti5@kemdikbud.go.id
          </p>
          <p class="flex items-center">
            <i class="fas fa-phone mr-2"></i>
            (0274) 513538
          </p>
        </div>
      </div>
    </footer>
  </body>
</html>
