@extends('layouts.empty')


@section('container')
    <div class="flex-1 p-8">
        <h1 class="text-2xl font-bold mb-4">
            Kelola Akun
        </h1>
        <div class="flex items-center space-x-4 mb-10">
            <input class="py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600"
                placeholder="Username" type="text" />
            <input class="py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600"
                placeholder="Password" type="text" />
            <button
                class="flex items-center py-2 px-4 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-600 bg-gradient-to-r from-blue-500 to-blue-700 text-white">
                Create Akun
            </button>
        </div>
        <p class="text-gray-600 mb-6">
            Daftar akun
        </p>
        <div class="space-y-4">
            <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center">
                <div class="flex items-center">
                    <button class="w-8 h-8 mr-4 bg-red-500 rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="w-12 h-12 mr-4 rounded-lg overflow-hidden">
                        <img src="{{ asset('image/profil.png') }}" alt="Profile" class="w-full h-full object-cover" />
                    </div>

                    <div>
                        <h3 class="font-semibold">karina yoo</h3>
                        <p class="text-gray-600">popopoddrrr</p>
                    </div>
                </div>

                <div class="text-right">
                    <p class="font-semibold">Last active :</p>
                    <p class="text-gray-400">2 days ago</p>
                </div>
            </div>


            <div class="bg-white p-4 shadow flex justify-between items-center border-2 gradient-border">
                <div class="flex items-center">
                    <button class="w-8 h-8 mr-4 bg-red-500 rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="w-12 h-12 mr-4">
                        <img src="{{ asset('image/profil.png') }}" alt="Profile" class="w-full h-full" />
                    </div>
                    <div>
                        <h3 class="font-semibold">ningning huang</h3>
                        <p class="text-gray-600">ityrfgvhuyf</p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="font-semibold">Last active :</p>
                    <p class="text-gray-400">2 days ago</p>
                </div>
            </div>


            <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center">
                <div class="flex items-center">
                    <button class="w-8 h-8 mr-4 bg-red-500 rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="w-12 h-12 mr-4 rounded-lg overflow-hidden">
                        <img src="{{ asset('image/profil.png') }}" alt="Profile" class="w-full h-full object-cover" />
                    </div>
                    <div>
                        <h3 class="font-semibold">
                            gisele uri
                        </h3>
                        <p class="text-gray-600">
                            Gsercgvhb
                        </p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="font-semibold">
                        Last active :
                    </p>
                    <p class="text-gray-400">
                        3 days ago
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow flex justify-between items-center">
                <div class="flex items-center">
                    <button class="w-8 h-8 mr-4 bg-red-500 rounded-full flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="white" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    <div class="w-12 h-12 mr-4 rounded-lg overflow-hidden">
                        <img src="{{ asset('image/profil.png') }}" alt="Profile" class="w-full h-full object-cover" />
                    </div>
                    <div>
                        <h3 class="font-semibold">
                            kim minjeong
                        </h3>
                        <p class="text-gray-600">
                            nkegrydewu
                        </p>
                    </div>
                </div>
                <div class="text-right">
                    <p class="font-semibold">
                        Last active :
                    </p>
                    <p class="text-gray-400">
                        4 days ago
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

    </div>
    </div>
@endsection
