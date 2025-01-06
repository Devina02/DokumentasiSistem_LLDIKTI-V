<body class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-4xl">
            <div class="flex justify-between items-center mb-4">
                <h1 class="text-lg font-bold text-gray-700">
                    UPLOAD : DOKUMEN
                </h1>
            </div>
            <div class="flex">
                <div
                    class="w-1/2 p-4 border-dashed border-2 border-blue-200 rounded-lg flex flex-col items-center justify-center bg-blue-50">
                    <img alt="Ilustrasi proses unggah dokumen" class="mb-4" height="200" src="{{ asset('image/fileupload.png') }}" width="200" />
                    <p class="text-gray-500">
                        Drop your files here, or
                        <a class="text-blue-500" href="#" role="button">
                            Browse
                        </a>
                    </p>
                </div>
                <div class="w-1/2 pl-4 flex flex-col justify-between">
                    <div class="mb-4 mt-10">
                        <label class="block text-gray-700 font-bold mb-2" for="document-name-input">
                            Nama Dokumen
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="document-name-input" type="text" placeholder="Masukkan nama dokumen" />
                    </div>
                    <div class="space-y-4 mb-16">
                        <div class="flex items-center justify-between p-2 bg-gray-100 rounded-lg hover:bg-gray-200">
                            <div class="flex items-center">
                                <img alt="Ikon dokumen" class="mr-2" height="30" src="{{ asset('image/doc.png') }}" width="30" />
                                <div>
                                    <p class="text-gray-700">
                                        Struktur database.pdf
                                    </p>
                                </div>
                            </div>
                            <button class="text-red-500 hover:text-red-700" aria-label="Hapus dokumen">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="flex justify-center space-x-4">
                        <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                            Batal
                        </button>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
