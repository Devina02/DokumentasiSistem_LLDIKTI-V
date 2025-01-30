@extends('layouts.empty')

@section('container')

<div class="flex-1 p-6 bg-white rounded-xl">
    <div class="w-full max-w-4xl">
        <div class="flex justify-between items-center mb-20">
            <h1 class="text-2xl font-bold text-gray-800">
                Upload :
                <span class="text-purple-500">Project</span>
            </h1>
        </div>

        @include('alert.flashhmessage')
    
        <form action="{{ url('/upload-doc') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <label class="block text-gray-700">Nama Project</label>
                    <input class="w-full border-b border-gray-300 focus:outline-none focus:border-purple-500 rounded-xl" type="text" name="judul" value="{{ old('judul') }}"/>
                </div>
                <div>
                    <label class="block text-gray-700">Type Project</label>
                    <div class="flex items-center mt-2">
                        <input class="mr-2" id="mobile" name="project_type" type="radio" value="Mobile" {{ old('project_type') == 'Mobile' ? 'checked' : '' }} />
                        <label class="mr-4 text-gray-700" for="mobile">Mobile</label>
                        <input class="mr-2" id="website" name="project_type" type="radio" value="Website" {{ old('project_type') == 'Website' ? 'checked' : '' }} />
                        <label class="text-gray-700" for="website">Website</label>
                    </div>
                </div>
                @include('button.buttonaddlinkdoc')  
            </div>

            <div id="link-section" class="grid grid-cols-1 gap-8 mb-8">
                <div class="hidden link-template grid grid-cols-2 gap-8 mb-8">
                    <div>
                        <label class="block text-gray-700">Nama Link</label><input class="w-full border-b border-gray-300 focus:outline-none focus:border-purple-500 rounded-xl" type="text" name="links[][nama_link]" />
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="w-full">
                            <label class="block text-gray-700">Link</label><input class="w-full border-b border-gray-300 focus:outline-none focus:border-purple-500 rounded-xl" type="text" name="links[][link]" />
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-red-500 hover:text-red-700 delete-btn" type="button">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="docs-section" class="grid grid-cols-1 gap-8 mb-8">
                <div class="hidden docs-template grid grid-cols-2 gap-8 mb-8">
                    <div>
                        <label class="block text-gray-700">Nama Dokumen</label>
                        <input class="w-full border-b border-gray-300 focus:outline-none focus:border-purple-500 rounded-xl" 
                               type="text" name="dokumen[][nama_doc]" />
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="w-full">
                            <label class="block text-gray-700">Dokumen</label>
                            <input class="w-full border-b border-gray-300 focus:outline-none focus:border-purple-500" 
                                   type="file" name="dokumen[][document]" />
                            <p class="text-sm text-gray-500 mt-1">PDF (Max 2 MB)</p>
                        </div>
                        <div class="flex space-x-2">
                            <button class="text-red-500 hover:text-red-700 delete-btn" type="button">
                                <i class="fa fa-trash"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @include('button.buttonsubmit')          
        </form>
    </div>
</div>
@error('judul')
    <div class="text-red-500">{{ $message }}</div>
@enderror


<!-- Modal -->
@include('alert.modalhapusitem')

<script src="{{ asset("js/adddoc.js") }}"></script>
<script src="{{ asset("js/addlink.js") }}"></script>
<script src="{{ asset("js/modalkonfirm.js") }}"></script>
<script src="{{ asset("js/timeoutflash.js") }}"></script>
<script src="{{ asset("js/deletelabel.js") }}"></script>
<script>let itemToDelete = null;</script>
@endsection
