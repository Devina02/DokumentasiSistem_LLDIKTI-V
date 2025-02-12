<div id="errorModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <!-- Overlay -->
    <div class="fixed inset-0 bg-black opacity-50" id="overlay" onclick="closeModal()"></div>
    
    <!-- Modal Container -->
    <div class="bg-white rounded-lg p-6 z-20 w-11/12 md:w-1/3 shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Terjadi Kesalahan</h2>
            <button class="text-gray-600 hover:text-gray-800" id="closeButton" onclick="closeModal()">×</button>
        </div>
        <ul class="list-disc list-inside text-red-600" id="errorList">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>

<script>
    // Fungsi untuk membuka modal jika ada error
    function showModal() {
        document.getElementById('errorModal').classList.remove('hidden');
    }

    // Fungsi untuk menutup modal
    function closeModal() {
        document.getElementById('errorModal').classList.add('hidden');
    }

    // Mengecek jika ada error dari server dan menampilkan modal
    window.onload = function() {
        // Mengecek apakah ada error, jika ya tampilkan modal
        if ({{ $errors->any() ? 'true' : 'false' }}) {
            showModal();
        }
    };

    // Pastikan tombol "×" menutup modal saat diklik
    document.getElementById('closeButton').addEventListener('click', closeModal);
</script>
