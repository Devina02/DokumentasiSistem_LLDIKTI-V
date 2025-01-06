@extends('layouts.mainuser')

@section('container')
    <!-- Main Content -->
    <div class="bg-white p-10 rounded-lg shadow-md flex items-center justify-between mb-12 mx-auto"
        style="max-width: calc(100% - 4rem);">
        <div class="flex items-center space-x-8">
            <img alt="Illustration" class="w-auto h-auto max-w-full max-h-64" src="{{ asset('image/dashuser.png') }}" />
            <div>
                <h1 class="text-4xl font-semibold">
                    Haloo,
                    <span class="text-blue-500">
                        Dulur Limo!
                    </span>
                </h1>
                <p class="text-gray-500 mt-5">
                    Welcome Back!!! Semua dokumentasi proyek tersedia untuk diakses dan diunduh kapan saja.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-6 mx-auto" style="max-width: calc(100% - 4rem);">
        <h2 class="text-xl font-semibold mb-6">
            Dokumentasi Project
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 mx-auto" style="max-width: calc(100% - 4rem);">
            <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-4 rounded-lg flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex flex-col items-start mb-4">
                    <i class="fas fa-folder text-blue-100 text-2xl mb-2"></i>
                    <p class="text-blue-100">Project</p>
                    <p class="text-xl font-bold text-white">640 project</p>
                </div>
                <div class="bg-gray-200 h-2 rounded-full mb-4 mt-4">
                    <div class="bg-blue-500 h-2 rounded-full" style="width: 50%;"></div>
                </div>
                <p class="text-blue-100 text-sm mt-4">Total Project: 10</p>
            </div>
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded-lg flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex flex-col items-start mb-4">
                    <i class="fas fa-folder text-pink-100 text-2xl mb-2"></i>
                    <p class="text-pink-100">Dokumen</p>
                    <p class="text-xl font-bold text-white">1250 Doc</p>
                </div>
                <div class="bg-gray-200 h-2 rounded-full mb-4 mt-4">
                    <div class="bg-pink-500 h-2 rounded-full" style="width: 50%;"></div>
                </div>
                <p class="text-pink-100 text-sm mt-4">Total Dokumen: 10</p>
            </div>
            <div class="bg-gradient-to-r from-purple-500 to-indigo-600 p-4 rounded-lg flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex flex-col items-start mb-4">
                    <i class="fas fa-folder text-indigo-100 text-2xl mb-2"></i>
                    <p class="text-indigo-100">Link</p>
                    <p class="text-xl font-bold text-white">870 Link</p>
                </div>
                <div class="bg-gray-200 h-2 rounded-full mb-4 mt-4">
                    <div class="bg-indigo-500 h-2 rounded-full" style="width: 50%;"></div>
                </div>
                <p class="text-indigo-100 text-sm mt-4">Total Link: 10</p>
            </div>
        </div>
        
    </div>
@endsection
