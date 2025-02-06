<div x-show="showErrors" class="fixed inset-0 flex items-center justify-center z-50">
    <!-- Overlay -->
    <div class="fixed inset-0 bg-black opacity-50" x-on:click="showErrors = false"></div>
    
    <!-- Modal Container -->
    <div class="bg-white rounded-lg p-6 z-10 w-11/12 md:w-1/3 shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Terjadi Kesalahan</h2>
            <button class="text-gray-600 hover:text-gray-800" x-on:click="showErrors = false">&times;</button>
        </div>
        <ul class="list-disc list-inside text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        <div class="mt-4 text-right">
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600" x-on:click="showErrors = false">
                Tutup
            </button>
        </div>
    </div>
</div>
<!-- End Modal Error -->