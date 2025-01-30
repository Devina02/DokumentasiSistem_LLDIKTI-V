@extends('layouts.mainuser')

@section('container')

    <div>
        <div class="flex justify-between items-center mt-8 mb-7">
            <h1 class="text-2xl font-semibold">Documents</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="project-list">
            <!-- Document Card -->
            @foreach ($projects as $Project)
            <a href="/project/{{ $Project->id_project }}" class="bg-white p-6 rounded-3xl shadow-md transform transition-transform duration-300 hover:scale-105"
                style="background-color: {{ $Project->color }}; display: block;" id="project-{{ $Project->id_project }}">
                <div class="flex justify-between items-center mb-6">
                    <!-- Updated Text and Progress Bar -->
                    <div class="flex flex-col">
                        <span class="text-gray-600 text-lm">
                            {{ \Carbon\Carbon::parse($Project->created_at)->format('d M, Y') }}
                        </span>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-bold mb-2">{{ $Project->judul }}</h3>
                    <p class="text-gray-600 mb-6">{{ $Project->project_type }}</p>
                </div>
                 <!-- Update projek dan progress bar -->
                 <div class="flex items-center justify-between mb-4">
                    <span class="text-gray-600 text-sm">Updated</span>
                    <span class="text-gray-600 text-sm">{{ \Carbon\Carbon::parse($Project->updated_at)->format('d M, Y') }}</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                    <div class="bg-blue-500 h-2 rounded-full" style="width: 50%"></div>
                </div>
                </a>
            @endforeach
        </div>
         <!-- Pagination -->
         <div class=" mt-8 mb-6">
            {{ $projects->links() }}
        </div>
    </div>
    
@endsection
