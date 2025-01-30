<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
    <div class="bg-white rounded-3xl shadow-lg p-6 w-80 relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-center w-full">Hapus Project</h2>
            <button id="close-btn" class="absolute right-4 text-gray-400 hover:text-gray-600 bg-gray-200 rounded-full p-2 w-8 h-8 flex items-center justify-center">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <!-- Displaying Project Name -->
        <p id="modal-text" class="text-gray-600 mb-6 text-center">Apakah anda yakin ingin  <span class="font-semibold text-black">menghapus</span> <span>project</span>  <span class="font-semibold text-black" id="project-name"></span>?</p>
        <div class="flex justify-center space-x-6">
            <button id="cancel-btn" class="text-gray-600 font-semibold hover:text-gray-800">Tidak</button>
            <button id="confirm-btn" class="bg-gradient-to-r from-blue-300 via-blue-400 to-blue-500 text-white font-semibold py-2 px-8 rounded-full shadow-lg hover:from-blue-400 hover:via-blue-500 hover:to-blue-600">Hapus</button>
        </div>
    </div>
</div>