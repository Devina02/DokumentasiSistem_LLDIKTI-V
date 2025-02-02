<div id="confirmDeleteModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="modal-overlay fixed inset-0 bg-black opacity-50"></div>
    <div class="bg-white rounded-3xl shadow-lg p-6 w-80 relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-center w-full">Hapus Item</h2>
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