@extends('layouts.main')

@section('container')

@include('alert.flashhmessage')

<div>
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-xl font-semibold">Daftar Project</h1>
        
        <form method="GET" action="{{ route('project.index') }}" class="flex items-center space-x-4">
            <label for="sort_field" class="text-gray-700 mr-2">Sort by:</label>
            <select name="sort_field" class="block appearance-none w-auto bg-white border border-gray-300 text-gray-700 py-2 px-4 pr-8 rounded-lg shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500" onchange="this.form.submit()">
                <option value="created_at" {{ request('sort_field') == 'created_at' ? 'selected' : '' }}>Tanggal Dibuat</option>
                <option value="judul" {{ request('sort_field') == 'judul' ? 'selected' : '' }}>Judul</option>
            </select>
        </form>
        
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="project-list mb-6">
        @foreach ($projects as $Project)
        <a href="{{ route('project.detail', ['id' => $Project->id_project]) }}"
           class="bg-white p-6 rounded-3xl shadow-md transform transition-transform duration-300 hover:scale-105"
           style="background-color: {{ $Project->color }}; display: block;" id="project-{{ $Project->id_project }}">
            <div class="flex justify-between items-center mb-6">
                <div class="flex flex-col">
                    <span class="text-gray-600 text-sm">Created</span>
                    <span class="text-gray-600 text-sm"> {{ \Carbon\Carbon::parse($Project->created_at)->format('d M, Y') }}</span>
                </div>
                @include('button.editdeleteproject')
            </div>

            <div class="text-center">
                <h3 class="text-lg font-bold mb-2 ">{{ $Project->judul }}</h3>
                <p class="text-gray-600 mb-6">{{ $Project->project_type }}</p>
            </div>
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-600 text-sm">Updated at :</span>
                <span class="text-gray-600 text-sm"> {{ \Carbon\Carbon::parse($Project->updated_at)->format('d M, Y') }}</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2 mb-4">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 50%"></div>
            </div>
        </a>
        @endforeach
    </div>

    @include('alert.alerthapusproject')

    <div class="mt-4 mb-6">
        {{ $projects->appends(request()->query())->links() }}
    </div>
</div>

<script src="{{ asset('js/hapusproject.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection
