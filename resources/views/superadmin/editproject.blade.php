@extends('layouts.empty')

@section('container')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="max-w-8xl mx-auto mt-10 p-10 bg-white rounded-lg shadow-md">

@include('alert.flashhmessage')
    <h1 class="text-2xl font-semibold mb-4">Edit : <span class="text-purple-600">Project</span></h1>

    <form action="{{ route('superadmin.updateProject', $project->id_project) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-4 mt-10 flex space-x-4">
            <div class="w-1/3">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="judul">Nama Project</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="judul" id="judul" value="{{ $project->judul }}" required>
            </div>
            <div class="w-1/3">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="project_type">Type Project</label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       name="project_type" id="project_type" value="{{ $project->project_type }}" readonly required>
            </div>                
        </div>

        <div class="mb-2 flex justify-between items-center">
            <h3 class="text-lg font-semibold">Links</h3>
            <button type="button" onclick="toggleForm('linkForm')" class="bg-purple-500 text-white px-4 py-2 rounded">Tambah Link</button>
        </div>

        @foreach ($project->tautan as $link)
            <div class="flex items-center mb-2 space-x-4">
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-nama-link">Nama Link</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tautan[{{ $link->id_link }}][nama_link]" type="text" value="{{ $link->nama_link }}">
                </div>
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-link">Link</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="tautan[{{ $link->id_link }}][link]" type="text" value="{{ $link->link }}">
                </div>
                <div class="flex items-center space-x-2">
                    <a href="{{ $link->link }}" target="_blank" class="text-blue-500">Lihat Link</a>
                </div>
                <button type="button" onclick="showDeleteModal('link', {{ $link->id_link }}, '{{ $link->nama_link }}')" class="text-red-500">
                    <i class="fas fa-trash-alt"></i>
                </button>                
            </div>
        @endforeach

        <div id="linkForm" class="mb-4" style="display: none;">
            <div class="flex space-x-4">
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama-link">Nama Link</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="new_link[0][nama_link]" type="text">
                </div>
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="link">Link</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="new_link[0][link]" type="text">
                </div>
            </div>
        </div>

        <div class="mt-8 mb-2 flex justify-between items-center">
            <h3 class="text-lg font-semibold">Dokumen</h3>
            <button type="button" onclick="toggleForm('dokumenForm')" class="bg-purple-500 text-white px-4 py-2 rounded">Tambah Doc</button>
        </div>

        @foreach ($project->dokument as $dokumen)
            <div class="flex items-center mb-2 space-x-4">
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-nama-dokumen">Nama Dokumen</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="dokument[{{ $dokumen->id_doc }}][nama_dokumen]" type="text" value="{{ $dokumen->nama_dokumen }}">
                </div>
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="edit-dokumen">Dokumen</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="dokument[{{ $dokumen->id_doc }}][dokumen]" type="file">
                    <p class="text-gray-600 text-sm mt-1">PDF (Max 2 MB)</p>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ asset('storage/' . $dokumen->dokumen) }}" target="_blank" class="text-blue-500">Lihat Dokumen</a>
                    <button type="button" onclick="showDeleteModal('dokumen', {{ $dokumen->id_doc }}, '{{ $dokumen->nama_dokumen }}')" class="text-red-500 ml-4">
                        <i class="fas fa-trash-alt"></i>
                    </button>                    
                </div>
            </div>
        @endforeach

        <div id="dokumenForm" class="mb-4" style="display: none;">
            <div class="flex space-x-4">
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="nama-dokumen">Nama Dokumen</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="new_dokumen[0][nama_dokumen]" type="text">
                </div>
                <div class="w-1/3">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dokumen">Dokumen</label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="new_dokumen[0][dokumen]" type="file">
                    <p class="text-gray-600 text-sm mt-1">PDF (Max 2 MB)</p>
                </div>
            </div>
        </div>

        @include('button.buttonsubmit')

    </form>
</div>
<!-- Modal -->
<div id="confirmDeleteModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
    <div class="bg-white rounded-3xl shadow-lg p-6 w-80 relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-center w-full">Hapus link</h2>
            <button id="close-btn" class="absolute right-4 text-gray-400 hover:text-gray-600 bg-gray-200 rounded-full p-2 w-8 h-8 flex items-center justify-center" onclick="closeModal()">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <p id="confirmDeleteText" class="text-gray-600 mb-6 text-center">Apakah anda yakin ingin <span class="font-semibold text-black">menghapus</span> yang anda pilih?</p>
        <div class="flex justify-center space-x-6">
            <button id="cancelDeleteBtn" class="text-gray-600 font-semibold hover:text-gray-800" onclick="closeModal()">Tidak</button>
            <button id="deleteConfirmBtn" class="bg-gradient-to-r from-blue-300 via-blue-400 to-blue-500 text-white font-semibold py-2 px-8 rounded-full shadow-lg hover:from-blue-400 hover:via-blue-500 hover:to-blue-600">
                Hapus
            </button>
        </div>
    </div>
</div>

<script src="{{ asset("js/timeoutflash.js") }}"></script>

<script>
// Function to show modal with correct message and actions
function showDeleteModal(itemType, itemId, itemName) {
    const modal = document.getElementById('confirmDeleteModal');
    const confirmDeleteText = document.getElementById('confirmDeleteText');
    const deleteConfirmBtn = document.getElementById('deleteConfirmBtn');
    
    // Set confirmation message based on item type and name
    if (itemType === 'link') {
        confirmDeleteText.textContent = `Apakah anda yakin ingin menghapus link "${itemName}"?`;
    } else if (itemType === 'dokumen') {
        confirmDeleteText.textContent = `Apakah anda yakin ingin menghapus dokumen "${itemName}"?`;
    }

    // Show the modal
    modal.classList.remove('hidden');

    // Delete action when "Hapus" is clicked
    deleteConfirmBtn.onclick = function() {
        if (itemType === 'link') {
            deleteLink(itemId); // Call delete link function
        } else if (itemType === 'dokumen') {
            deleteDoc(itemId); // Call delete document function
        }
        modal.classList.add('hidden'); // Close modal after delete
    };
}

// Function to close modal
function closeModal() {
    const modal = document.getElementById('confirmDeleteModal');
    modal.classList.add('hidden');
}

// Function to delete a link
function deleteLink(id_link) {
    fetch(`/superadmin/link/delete/${id_link}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    }).then(response => {
        if (response.ok) {
            location.href = location.href; // Reload the page to reflect changes, flash message should appear now
        }
    });
}

// Function to delete a document
function deleteDoc(id_doc) {
    fetch(`/superadmin/dokumen/delete/${id_doc}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
    }).then(response => {
        if (response.ok) {
            location.href = location.href; // Reload the page to reflect changes, flash message should appear now
        }
    });
}

// Function to toggle visibility of add form
function toggleForm(formId) {
    const form = document.getElementById(formId);
    form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';
}
</script>

@endsection
