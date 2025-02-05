<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Login Page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #fcfafa 2%, #d9e4f5 50%, #e3d2f3 100%);
    }
  </style>
</head>
<body class="min-h-screen flex items-center justify-center">
  <div class="w-full max-w-7xl mx-auto">
    <main class="flex flex-col lg:flex-row items-center justify-between mt-10">
      <div class="text-center lg:text-left lg:w-1/2">
        <p class="text-gray-600">For dulurlimo.</p>
        <h1 class="text-5xl font-bold mt-6">
          Manajemen <span class="relative inline-block">
            <span class="relative z-10">Dokumentasi</span>
            <span class="relative z-10">Sistem</span>
            <span class="absolute inset-0 bg-rose-100 rounded-full transform -rotate-6 -skew-x-6"></span>
          </span>
        </h1>
        <p class="text-gray-600 mt-6">
          Penyimpanan berbagai dokumentasi sistem yang berkaitan dengan sistem yang ada di lingkungan LLDIKTI V
        </p>
      </div>

      <div class="mt-16 lg:mt-0 lg:w-1/3 bg-white bg-opacity-50 p-10 rounded-3xl shadow-lg">
        <h2 class="text-3xl font-bold mb-16 text-center">Login</h2>
        <!-- Tampilan Error (jika ada) -->
        @if ($errors->any())
          <div class="bg-purple-400 text-white p-4 mb-4 rounded-lg">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        <form action="{{ url('/login') }}" method="POST">
          @csrf
          <div class="mb-8">
            <label class="block text-gray-700">Username</label>
            <input 
              type="text" 
              name="username" 
              placeholder="Masukan username" 
              class="w-full p-2 border rounded-lg mt-2" 
              required />
          </div>
          <div class="mb-10 relative">
            <label class="block text-gray-700">Password</label>
            <input 
              id="password-input"
              type="password" 
              name="password" 
              placeholder="Masukan password" 
              class="w-full p-2 border rounded-lg mt-2" 
              required />
            <i id="togglePassword" class="fas fa-eye absolute right-3 top-10 cursor-pointer"></i>
          </div>
          <button type="submit" class="w-full bg-purple-400 text-white py-3 rounded-lg hover:bg-purple-500">
            Login
          </button>
        </form>
      </div>
    </main>
  </div>

  <!-- Script untuk toggle show/hide password -->
  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password-input');

    togglePassword.addEventListener('click', function () {
     
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>
