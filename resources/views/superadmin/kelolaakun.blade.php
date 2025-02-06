@extends('layouts.empty')

@section('container')
    <div class="flex-1 p-8" x-data="{ showErrors: {{ $errors->any() ? 'true' : 'false' }} }">
        <h1 class="text-2xl font-bold mb-4">Kelola Akun</h1>
        <!-- Modal Error -->
        @include('alert.modalerror')

        <!-- Form Tambah Akun -->
        <div class="flex items-center space-x-4 mb-14">
            <form action="{{ route('superadmin.kelolaakun.store') }}" method="POST" class="flex items-center space-x-4 w-full">
                @csrf
                <input name="username" class="py-2 px-4 w-2/3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600" 
                    placeholder="Username" type="text" required />
                <input name="password" class="py-2 px-4 w-2/3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600" 
                    placeholder="Password" type="password" required />
                @include('button.tambahakun')
            </form>
        </div>

        <!-- Flash Messages (misal: success message) -->
        @include('alert.flashhmessage')

        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-semibold">Daftar akun</h2>
            <div class="flex items-center space-x-4">
                <form action="{{ route('superadmin.kelolaakun.index') }}" method="GET" class="relative flex items-center space-x-4 w-full">
                    <input name="search" class="p-2 pl-12 border border-gray-300 rounded-lg" placeholder="Search akun" type="text" value="{{ request('search') }}"/>
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>
                    <button type="submit" class="text-white px-4 py-2 rounded-lg bg-gradient-to-r from-blue-500 to-blue-700 text-white hover:shadow-lg transition">Search</button>
                </form>                
            </div>
        </div>

        <div class="space-y-4">
            @foreach ($users as $user)
                <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center">
                    <div class="flex items-center">
                        @include('alert.modaleditakun', ['user' => $user])
                        @include('alert.alerthapusakun', ['user' => $user])
                        @include('button.editakun', ['user' => $user])
                        @include('button.hapusakun', ['user' => $user])
                        <div class="w-12 h-12 mr-4 ml-4 rounded-lg overflow-hidden">
                            <img src="{{ asset('image/verified.png') }}" alt="Profile" class="w-full h-full object-cover" />
                        </div>
                        <div>
                            <h3 class="font-semibold">{{ $user->username }}</h3>
                            <p class="text-gray-600">{{ $user->role }}</p>
                        </div>
                    </div>

                    <div class="text-right">
                        <p class="font-semibold">Last active :</p>
                        <p class="text-gray-400">
                            {{ $user->last_active ? $user->last_active->diffForHumans() : 'N/A' }}
                        </p>
                    </div>
                </div>
            @endforeach
            <div class="mt-4">
                {{ $users->links() }}
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="{{ asset('js/modaledithapusakun.js') }}"></script>
    <script src="{{ asset("js/timeoutflash.js") }}"></script>
@endsection
