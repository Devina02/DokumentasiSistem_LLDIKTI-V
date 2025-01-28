<!-- Modal Hapus Akun -->
<div id="deleteModal-{{ $user->id_user }}" class="fixed inset-0 z-50 flex items-center justify-center hidden bg-gray-800 bg-opacity-50">
    <div class="bg-white p-6 rounded-lg shadow-xl w-80 relative">
        <h3 class="text-lg font-semibold mb-4 text-center">Hapus Akun</h3>
        <p class="text-gray-600 mb-6 text-center">
            Apakah anda yakin ingin <span class="font-semibold text-black">menghapus </span> 
            <span>akun</span> 
            <span class="font-semibold text-black" id="username-delete">{{ $user->username }}</span>?
        </p>
        <div class="flex justify-center space-x-6">
            <button onclick="document.getElementById('deleteModal-{{ $user->id_user }}').classList.add('hidden')" 
                    class="text-gray-600 font-semibold hover:text-gray-800">Tidak</button>
            <form action="{{ route('superadmin.kelolaakun.destroy', $user->id_user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" 
                        class="bg-gradient-to-r from-blue-300 via-blue-400 to-blue-500 text-white font-semibold py-2 px-8 rounded-full shadow-lg hover:from-blue-400 hover:via-blue-500 hover:to-blue-600">
                    Hapus
                </button>
            </form>
        </div>
    </div>
</div>
