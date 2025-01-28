<div id="editModal-{{ $user->id_user }}" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center z-50 hidden">
    <div class="bg-white p-6 rounded-lg shadow-xl w-96 relative">
        <!-- Icon "X" dengan event close -->
        <button class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 text-2xl font-bold" 
                onclick="closeModal('editModal-{{ $user->id_user }}')">&times;</button>
        <h3 class="text-lg font-semibold mb-4">Edit Akun Admin</h3>

        <!-- Alert jika tidak ada perubahan -->
        <div id="alert-no-change-{{ $user->id_user }}" 
             class="hidden mb-4 bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-2 rounded-lg">
            Tidak ada perubahan yang dilakukan.
        </div>

        <form action="{{ route('superadmin.kelolaakun.update', $user->id_user) }}" method="POST" onsubmit="return checkChanges('{{ $user->id_user }}')">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username-{{ $user->id_user }}" name="username" value="{{ $user->username }}" 
                       class="py-2 px-4 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600" required>
                <!-- Hidden input to store the current username -->
                <input type="hidden" id="current-username-{{ $user->id_user }}" value="{{ $user->username }}">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password-{{ $user->id_user }}" name="password" 
                       placeholder="Password baru" class="py-2 px-4 w-full border rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-600">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Update Akun</button>
        </form>
    </div>
</div>
