@extends('layouts.main')

@section('container')
    <div class="bg-white p-6 rounded-lg mb-6">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-xl font-bold mb-2">
                    Manajemen Dokumentasi Sistem LLDIKTI Wilayah V
                </h2>
                <p class="text-gray-500">
                    Jumlah akun yang memiliki akses :
                    <a class="text-blue-500" href="/superadmin/kelolaakun">
                        {{ $activeAdmins }}
                    </a>
                </p>
            </div>
            @include('button.buttonkelolaakun')
        </div>
    </div>

    <div class="mb-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold">Dokumentasi</h3>
        </div>
        <div class="grid grid-cols-3 gap-8">
            <div class="bg-gradient-to-r from-blue-400 to-blue-600 text-white p-8 rounded-lg transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <p class="font-bold">Total Project</p>
                <p class="text-sm">{{ $totalProjects }} Project</p>
            </div>
            <div class="bg-gradient-to-r from-purple-500 to-pink-500 text-white p-8 rounded-lg transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <p class="font-bold">Total Dokumen</p>
                <p class="text-sm">{{ $totalDocuments }} Dokumen</p>
            </div>
            <div class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white p-8 rounded-lg transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
                <p class="font-bold">Total Link</p>
                <p class="text-sm">{{ $totalLinks }} Link</p>
            </div>
        </div>
    </div>

    <div>
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-lg font-bold">Aktivitas</h3>
        </div>
        <table class="w-full bg-white rounded-lg">
            <thead>
                <tr class="text-left text-gray-500">
                    <th class="p-4">No.</th>
                    <th class="p-4">Akun</th>
                    <th class="p-4">Aksi</th>
                    <th class="p-4">Doc/Link</th>
                    <th class="p-4">Waktu</th>
                </tr>
            </thead>
            {{-- <tbody>
                @foreach ($tracking as $item)
                    <tr class="border-t">
                        <td class="p-4">{{ $item['no'] }}</td>
                        <td class="p-4">{{ $item['akun'] }}</td>
                        <td class="p-4">{{ $item['aksi'] }}</td>
                        <td class="p-4 text-blue-500">{{ $item['dokumen'] }}</td>
                        <td class="p-4">{{ $item['waktu'] }}</td>
                    </tr>
                @endforeach
            </tbody> --}}
        </table>
    </div>
@endsection
