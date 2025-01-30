@extends('layouts.mainuser')

@section('container')
    <!-- Main Content -->
    <div class="bg-white p-10 rounded-lg shadow-md flex items-center justify-between mb-10 mx-auto"
        style="max-width: calc(100% - 4rem);">
        <div class="flex items-center space-x-8">
            <img alt="Illustration" class="w-auto h-auto max-w-full max-h-64" src="{{ asset('image/dashadm.png') }}" />
            <div>
                <h1 class="text-4xl font-semibold">
                    Halo,
                    <span class="text-blue-500">
                        Admin!
                    </span>
                </h1>
                <p class="text-gray-500 mt-5">
                    Welcome back! Semua informasi proyek, dokumen, dan link tersedia di sini.
                </p>
            </div>
        </div>
    </div>

    <div class="mb-6 mx-auto" style="max-width: calc(100% - 4rem);">
        <h2 class="text-xl font-semibold mb-6">
            Dashboard Admin
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-6 mx-auto" style="max-width: calc(100% - 4rem);">
            <!-- Project Card -->
            <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-4 rounded-lg flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex flex-col items-start mb-4">
                    <i class="fas fa-folder text-blue-100 text-2xl mb-2"></i>
                    <p class="text-blue-100">Project</p>
                    <p class="text-xl font-bold text-white">{{ $totalProjects }} Project</p>
                </div>
                <div class="bg-gray-200 h-2 rounded-full mb-4 mt-4">
                    <div class="bg-blue-500 h-2 rounded-full" style="width: {{ ($totalProjects / 1000) * 100 }}%;"></div>
                </div>
                <p class="text-blue-100 text-sm mt-4">Total Project: {{ $totalProjects }}</p>
            </div>

            <!-- Dokumen Card -->
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded-lg flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex flex-col items-start mb-4">
                    <i class="fas fa-folder text-pink-100 text-2xl mb-2"></i>
                    <p class="text-pink-100">Dokumen</p>
                    <p class="text-xl font-bold text-white">{{ $totalDocuments }} Dokumen</p>
                </div>
                <div class="bg-gray-200 h-2 rounded-full mb-4 mt-4">
                    <div class="bg-pink-500 h-2 rounded-full" style="width: {{ ($totalDocuments / 1000) * 100 }}%;"></div>
                </div>
                <p class="text-pink-100 text-sm mt-4">Total Dokumen: {{ $totalDocuments }}</p>
            </div>

            <!-- Link Card -->
            <div class="bg-gradient-to-r from-purple-500 to-indigo-600 p-4 rounded-lg flex flex-col transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <div class="flex flex-col items-start mb-4">
                    <i class="fas fa-folder text-indigo-100 text-2xl mb-2"></i>
                    <p class="text-indigo-100">Link</p>
                    <p class="text-xl font-bold text-white">{{ $totalLinks }} Link</p>
                </div>
                <div class="bg-gray-200 h-2 rounded-full mb-4 mt-4">
                    <div class="bg-indigo-500 h-2 rounded-full" style="width: {{ ($totalLinks / 1000) * 100 }}%;"></div>
                </div>
                <p class="text-indigo-100 text-sm mt-4">Total Link: {{ $totalLinks }}</p>
            </div>
        </div>
    </div>
@endsection
