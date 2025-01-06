<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload: Link</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 flex items-center justify-center min-h-screen">
    <!-- Modal Container -->
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <!-- Modal Content -->
        <div class="bg-white rounded-lg shadow-lg w-96 p-6">
            <!-- Modal Header -->
            <div class="mb-4">
                <h2 class="text-xl font-semibold text-gray-700 text-center">UPLOAD : LINK</h2>
            </div>
            <!-- Image -->
            <div class="flex justify-center mb-4">
                <img src="{{ asset('image/link.png') }}" alt="Link Icon" class="w-30 h-30">
            </div>
            <!-- Modal Form -->
            <form>
                <div class="mb-4">
                    <label for="nama-link" class="block text-gray-700 font-medium">Nama Link</label>
                    <input type="text" id="nama-link" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Masukkan nama link" />
                </div>
                <div class="mb-6">
                    <label for="link" class="block text-gray-700 font-medium">Link</label>
                    <input type="text" id="link" class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Masukkan link..." />
                </div>
                <!-- Buttons -->
                <div class="flex justify-center space-x-4">
                    <button type="button" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">Batal</button>
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
