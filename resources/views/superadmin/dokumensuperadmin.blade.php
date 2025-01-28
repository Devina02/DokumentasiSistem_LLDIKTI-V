@extends('layouts.main')

@section('container')
    <div>
        <h1 class="text-2xl font-semibold mb-9">Documents</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Project Card -->
            @foreach ($dokumen as $item)
            <div class="bg-white p-6 rounded-3xl shadow-md transform transition-transform duration-300 hover:scale-105"
                 style="background-color: {{ $item['color'] }};">
                    <!-- tanggal input-->
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-gray-600">
                            {{ $item['input'] }}
                        </span>
                         <!-- dropdown-->
                        <div class="relative">
                            <i class="fas fa-ellipsis-h text-gray-600 cursor-pointer" onclick="toggleDropdown(this)"></i>
                            <div class="absolute right-0 mt-2 w-32 bg-white border rounded-lg shadow-lg hidden">
                                @foreach ($item['dropdownItems'] as $dropdownItem)
                                    <a class="block px-4 py-2 text-gray-800 hover:bg-gray-200"
                                        href="{{ $dropdownItem['link'] }}">
                                        {{ $dropdownItem['label'] }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                         <!-- judul projek-->
                        <h3 class="text-lg font-bold mb-2">
                            <a href="/dokumen/{{ $item['slug'] }}">{{ $item['judul'] }}</a>
                        </h3>
                         <!-- type projek-->
                        <p class="text-gray-600 mb-4">
                            {{ $item['type'] }}
                        </p>
                    </div>
                     <!-- update projek-->
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-gray-600">Updated</span>
                        <span class="text-gray-600">{{ $item['updated'] }}</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 50%"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('js/dropdownproject.js') }}"></script>
@endsection
