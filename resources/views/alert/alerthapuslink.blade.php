<!DOCTYPE html>
<html lang="id">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="bg-white rounded-3xl shadow-lg p-6 w-80 relative">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-center w-full">Hapus link</h2>
            <button id="close-btn" class="absolute right-4 text-gray-400 hover:text-gray-600 bg-gray-200 rounded-full p-2 w-8 h-8 flex items-center justify-center">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <p class="text-gray-600 mb-6 text-center">Apakah anda yakin ingin <span class="font-semibold text-black">menghapus link </span> yang anda pilih?</p>
        <div class="flex justify-center space-x-6">
            <button class="text-gray-600 font-semibold hover:text-gray-800">Tidak</button>
            <button class="bg-gradient-to-r from-blue-300 via-blue-400 to-blue-500 text-white font-semibold py-2 px-8 rounded-full shadow-lg hover:from-blue-400 hover:via-blue-500 hover:to-blue-600">Hapus</button>
        </div>
    </div>

    <script>
        // Event listener untuk tombol close
        document.getElementById('close-btn').addEventListener('click', function () {
            window.parent.document.getElementById('overlay').style.display = 'none'; // Menutup modal dari parent
        });
    </script>
</body>

</html>
