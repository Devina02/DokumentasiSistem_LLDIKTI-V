@extends('layouts.empty')

@section('container')

<div class="flex justify-center p-8 bg-white rounded-xl">
    <!-- Main Content -->
    <div class="w-full max-w-8xl">
        
        @include('button.previous')
       
        @include('alert.flashhmessage')

        <div class="text-center mb-6 mt-6">
            <h1 class="text-5xl font-bold text-black-500 mb-4">
                {{ $project->judul }}
            </h1>
            <p class="text-lg text-gray-600">
                Project Type: {{ $project->project_type }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div class="rounded-md p-4">
                <div class="relative rounded-md bg-gradient-to-r from-blue-300 to-pink-200 p-[2px]">
                    <div class="bg-white p-4 rounded-md">
                        <div class="flex items-center space-x-2 mb-4">
                            <i class="fas fa-calendar-alt bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-700"></i>
                            <h2 class="text-xl font-bold text-gray-700">
                                Tanggal Dibuat
                            </h2>
                        </div>
                        <div class="text-base text-gray-600">
                            <p>
                                <span class="font-bold">Tanggal project:</span>
                            </p>
                            <p>
                                <span class="font-medium">{{ \Carbon\Carbon::parse($project->created_at)->format('d M, Y') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tanggal Diperbarui -->
            <div class="rounded-md p-4">
                <div class="relative rounded-md bg-gradient-to-r from-blue-300 to-pink-200 p-[2px]">
                    <div class="bg-white p-4 rounded-md">
                    <div class="flex items-center space-x-2 mb-4">
                        <i class="fas fa-sync-alt bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-700"></i>
                        <h2 class="text-lg font-bold text-gray-700">
                            Tanggal Diperbarui
                        </h2>
                    </div>
                    <div class="text-base text-gray-600">
                        <p>
                            <span class="font-bold">Tanggal Link:</span>
                            <span class="font-medium">
                                {{ optional($tautans->sortByDesc('updated_at')->first())->updated_at ? \Carbon\Carbon::parse($tautans->sortByDesc('updated_at')->first()->updated_at)->format('d M, Y') : '-' }}
                            </span>
                        </p>
                        <p>
                            <span class="font-bold">Tanggal Dokumen:</span>
                            <span class="font-medium">
                                {{ optional($dokuments->sortByDesc('updated_at')->first())->updated_at ? \Carbon\Carbon::parse($dokuments->sortByDesc('updated_at')->first()->updated_at)->format('d M, Y') : '-' }}
                            </span>
                        </p>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Tautan Section -->
        <div class="rounded-md p-4 mb-6">
            <div class="relative rounded-md bg-gradient-to-r from-blue-300 to-pink-200 p-[2px]">
                <!-- Konten di dalam -->
                <div class="bg-white p-4 rounded-md">
                <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                    <div>
                        <h3 class="text-lg font-bold text-black-700 mb-4">Link</h3>
                        @foreach($project->tautan as $loopIndex => $tautan)
                        <div class="text-base text-gray-600 flex space-x-2 mb-4">
                            <p class="w-1/6">
                                <span class="font-bold">No:</span>
                                <span class="font-medium">{{ $loopIndex + 1 }}</span>
                            </p>

                            <p class="w-1/3">
                                <span class="font-bold">Nama Link:</span>
                                <span class="font-medium">{{ $tautan->nama_link }}</span>
                            </p>
                            <p class="w-1/3">
                                <span class="font-bold">Link:</span>
                                <span class="font-medium">
                                    <a href="{{ route('link.open', $tautan->id_link) }}" class="text-blue-500" target="_blank">Lihat Link</a>
                                </span>
                            </p>
                        </div>
                        @endforeach
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Dokumen Section -->
        <div class="rounded-md p-4 mb-6">
            <div class="relative rounded-md bg-gradient-to-r from-blue-300 to-pink-200 p-[2px]">
                <!-- Konten di dalam -->
                <div class="bg-white p-4 rounded-md">
                <h3 class="text-lg font-bold text-black-700 mb-4">Dokumen</h3>
                @foreach($project->dokument as $loopIndex => $dokument)
                <div class="text-base text-gray-600 flex space-x-2 mb-4">
                    <p class="w-1/6">
                        <span class="font-bold">No:</span>
                        <span class="font-medium">{{ $loopIndex + 1 }}</span>
                    </p>
                    <p class="w-1/3">
                        <span class="font-bold">Nama Dokumen:</span>
                        <span class="font-medium">{{ $dokument->nama_dokumen }}</span>
                    </p>
                    <p class="w-1/6">
                        <span class="font-bold">Dokumen:</span>
                        <span class="font-medium">
                            <a href="{{ route('document.view', $dokument->id_doc) }}" class="text-blue-500" target="_blank">Lihat Dokumen</a>
                        </span>
                    </p>
                    <div class="w-2/8 flex items-center">
                        <a href="{{ route('document.download', $dokument->id_doc) }}" class="text-lg" download="{{ $dokument->nama_dokumen }}.pdf">
                            <i class="fas fa-download bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-blue-700"></i>
                        </a>                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</div>
<script src="{{ asset("js/timeoutflash.js") }}"></script>
@endsection
