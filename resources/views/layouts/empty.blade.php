<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $title ?? 'Default Title' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/adminn.css') }}">
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('partials.sidebar')
        @include('partials.logout')

        <script src="{{ asset('js/logout.js') }}"></script>

        <!-- Main Content -->
        <div class="flex-1 p-8 ml-64">
          
            <!-- Content Container -->
            <div class="mb-8">
                @yield('container') <!-- Konten utama halaman -->
            </div>
        </div>

        <!-- Overlay dan Notifikasi Card -->
        <div class="overlay" id="overlay">
           @include('partials.logout')
        </div>
    </div>

    <script src="{{ asset('js/logout.js') }}"></script>
</body>

</html>
