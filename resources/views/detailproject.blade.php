@extends('layouts.empty')


@section('container')
    <!-- Main Content -->
    <div class="flex-1 p-10 ml-30">
        <div class="text-center">
            <h1 class="text-6xl font-bold">SENGKUNI</h1>
            <p class="text-gray-600">website</p>
        </div>

        <!-- First Table -->
        <div class="mt-8 bg-white shadow-md rounded-lg overflow-hidden mb-8">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-3 px-4 border-b text-left">NO</th>
                        <th class="py-3 px-4 border-b text-left">LINK</th>
                        <th class="py-3 px-4 border-b text-left">UPDATE</th>
                        <th class="py-3 px-4 border-b text-left">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">1</td>
                        <td class="py-3 px-4 border-b">Link github</td>
                        <td class="py-3 px-4 border-b">3 November 2024</td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex space-x-2">
                                <a href="#"
                                    class="bg-pink-700 hover:bg-pink-800 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-link mr-1"></i> Link
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">2</td>
                        <td class="py-3 px-4 border-b">Link github</td>
                        <td class="py-3 px-4 border-b">1 November 2024</td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex space-x-2">
                                <a href="#"
                                    class="bg-pink-700 hover:bg-pink-800 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-link mr-1"></i> Link
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Second Table -->
        <div class="mt-8 bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="py-3 px-4 border-b text-left">NO</th>
                        <th class="py-3 px-4 border-b text-left">DOKUMEN</th>
                        <th class="py-3 px-4 border-b text-left">UPDATE</th>
                        <th class="py-3 px-4 border-b text-left">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">1</td>
                        <td class="py-3 px-4 border-b">Data analysys</td>
                        <td class="py-3 px-4 border-b">15 Desember 2024</td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex space-x-2">
                                <button
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-eye mr-1"></i> Lihat
                                </button>
                                <button
                                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">2</td>
                        <td class="py-3 px-4 border-b">Handbook User</td>
                        <td class="py-3 px-4 border-b">15 Desember 2024</td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex space-x-2">
                                <button
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-eye mr-1"></i> Lihat
                                </button>
                                <button
                                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="py-3 px-4 border-b">3</td>
                        <td class="py-3 px-4 border-b">Handbook Super Admin</td>
                        <td class="py-3 px-4 border-b">15 Desember 2024</td>
                        <td class="py-3 px-4 border-b">
                            <div class="flex space-x-2">
                                <button
                                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-eye mr-1"></i> Lihat
                                </button>
                                <button
                                    class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-1 px-2 rounded-full flex items-center">
                                    <i class="fas fa-download mr-1"></i> Unduh
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
