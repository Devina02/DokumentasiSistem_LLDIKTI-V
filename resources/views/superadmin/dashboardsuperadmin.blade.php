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

    <h2 class="text-lg font-bold mb-4">Aktivitas Admin</h2>
    @if(isset($trackingRecords) && $trackingRecords->isNotEmpty())
        <div class="bg-white p-2 rounded-lg ">
            <table class="w-full bg-white rounded-lg table-fixed">
                <thead>
                    <tr class="text-left text-gray-500">
                        <th class="p-4 w-12">No.</th> 
                        <th class="p-4 w-32">Akun</th> 
                        <th class="p-4 w-40">Aksi</th> 
                        <th class="p-4">Detail</th> 
                        <th class="p-4 w-56">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trackingRecords as $index => $record)
                        <tr class="border-t">
                            <td class="p-4 w-12">{{ $trackingRecords->firstItem() + $loop->index }}</td>
                            <td class="p-4 w-32 truncate">{{ $record->user->username ?? '-' }}</td>
                            <td class="p-4 w-40 truncate">{{ $record->aksi }}</td>
                            <td class="p-4">{{ $record->detail ?? '-' }}</td>
                            <td class="p-4 w-56">{{ \Carbon\Carbon::parse($record->created_at)->format('d M Y H:i:s') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            
            
            <!-- Navigasi Pagination -->
            <div class="mt-2">
                {{ $trackingRecords->links() }}
            </div>
        </div>
    @else
        <div class="bg-white p-6 rounded-lg mb-6">
            <p class="text-gray-500">Tidak ada data aktivitas.</p>
        </div>
    @endif
@endsection