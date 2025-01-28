<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Login Page</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <div class="bg-white rounded-lg shadow-lg flex w-full min-h-screen">
        <!-- Left Section -->
        <div class="bg-gradient-to-b from-blue-400 via-blue-500 to-blue-600 text-white p-8 rounded-l-lg flex flex-col justify-center items-center w-1/3">
            <div class="flex items-center mb-8">
                <div class="bg-blue-600 p-4 rounded-full">
                    <i class="fas fa-cloud text-white" style="font-size: 2rem;"></i>
                </div>
                <span class="ml-4 text-2xl font-semibold">LLDocs</span>
            </div>
            <h2 class="text-3xl font-semibold mb-4">Manajemen Dokumentasi</h2>
            <p class="text-center">
                Penyimpanan berbagai dokumentasi sistem yang berkaitan dengan sistem yang ada di lingkungan LLDIKTI V
            </p>
            <img alt="Illustration of login process" class="mt-24" height="200" src="{{ asset('image/login.png') }}" width="300" />
        </div>

        <!-- Right Section -->
        <div class="p-16 w-2/3 flex flex-col justify-center relative">
            <!-- Background Icons -->
            <div class="absolute top-0 right-0 mt-4 mr-4">
                <i class="fas fa-star text-blue-300 text-6xl opacity-50"></i>
            </div>
            <div class="absolute bottom-0 left-0 mb-4 ml-4">
                <i class="fas fa-circle text-blue-300 text-6xl opacity-50"></i>
            </div>

            <!-- Login Form -->
            <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-8 rounded-lg shadow-gradient relative z-10">
                <h2 class="text-3xl font-semibold mb-6 text-white">Welcome back, dulur limo!</h2>
                    @if ($errors->any())
                    <div class="bg-purple-500 text-white p-4 mb-4 rounded-lg">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                <form action="{{ url('/login') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="block text-gray-200">Username</label>
                        <input 
                            class="w-full p-3 rounded-lg mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 bg-white shadow-md" 
                            type="text" name="username" required />
                    </div>
                    <div class="mb-4 relative">
                        <label class="block text-gray-200">Password</label>
                        <input 
                            class="w-full p-3 rounded-lg mt-1 focus:outline-none focus:ring-2 focus:ring-blue-600 bg-white shadow-md" 
                            type="password" name="password" required />
                    </div>
                    <button type="submit" 
                        class="w-full bg-blue-400 text-white p-3 rounded-lg font-semibold hover:bg-blue-500 transition duration-300 shadow-md">
                        Login
                    </button>
                </form>

                <!-- Separator -->
                <div class="flex items-center my-6">
                    <div class="flex-grow border-t border-gray-300"></div>
                    <div class="flex-grow border-t border-gray-300"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
