<div class="w-64 bg-white p-10 rounded-r-3xl shadow-lg fixed h-full overflow-y-auto">
    <!-- Header Sidebar -->
    <div class="flex items-center mb-20 mt-10">
        <div class="bg-blue-500 p-4 rounded-full">
            <i class="fas fa-cloud text-white"></i>
        </div>
        <span class="ml-3 text-xl font-semibold">LLDocs</span>
    </div>

    <!-- Navigation Menu -->
    <ul class="space-y-10">
        <!-- Dashboard Link -->
        <li>
            <a href="{{ route(Auth::user()->role . '.dashboard') }}"
               class="flex items-center px-4 py-2 rounded-lg transition duration-200
               {{ request()->routeIs(Auth::user()->role . '.dashboard') ? 'bg-pink-100 text-purple-500 font-semibold shadow-md' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-500' }}">
                <i class="fas fa-tachometer-alt sidebar-icon mr-3
                   {{ request()->routeIs(Auth::user()->role . '.dashboard') ? 'text-purple-500' : '' }}"></i>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>

        <!-- Documents Link -->
        <li>
            <a href="{{ route(Auth::user()->role . '.dokumen') }}"
               class="flex items-center px-4 py-2 rounded-lg transition duration-200
               {{ request()->routeIs(Auth::user()->role . '.dokumen') ? 'bg-pink-100 text-purple-500 font-semibold shadow-md' : 'text-gray-600 hover:bg-blue-50 hover:text-blue-500' }}">
                <i class="fas fa-file-alt sidebar-icon mr-3
                   {{ request()->routeIs(Auth::user()->role . '.dokumen') ? 'text-purple-500' : '' }}"></i>
                <span class="sidebar-text">Dokumentasi</span>
            </a>
        </li>

        <!-- Logout Link -->
        <li>
            <button id="logoutButton"
                    class="flex items-center px-4 py-2 rounded-lg transition duration-200 text-gray-600 hover:bg-blue-50 hover:text-blue-500">
                <i class="fas fa-sign-out-alt sidebar-icon mr-3"></i>
                <span class="sidebar-text">Logout</span>
            </button>
        </li>
    </ul>

    <!-- Footer Image -->
    <div class="mt-40">
        <img alt="Folders" height="100" src="{{ asset('image/folders.png') }}" width="160" />
    </div>
</div>
