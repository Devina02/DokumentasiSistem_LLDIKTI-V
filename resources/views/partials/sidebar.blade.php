<div class="w-64 bg-white p-10 rounded-r-3xl shadow-lg fixed h-full overflow-y-auto">
    <!-- Header Sidebar -->
    <div class="flex items-center mb-20">
        <div class="bg-blue-500 p-4 rounded-full">
            <i class="fas fa-cloud text-white"></i>
        </div>
        <span class="ml-3 text-xl font-semibold">LLDocs</span>
    </div>

    <!-- Navigation Menu -->
    <ul class="space-y-10">
        <!-- Dashboard Link -->
        @if(Auth::user()->role == 'superadmin')
        <li>
            <a class="flex items-center {{ request()->is('superadmin/dashboardsuperadmin') ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500' }}" href="{{ route('superadmin.dashboard') }}">
                <i class="fas fa-tachometer-alt sidebar-icon mr-3 {{ request()->is('superadmin/dashboardsuperadmin') ? 'text-blue-500' : '' }}"></i>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>
        @elseif(Auth::user()->role == 'admin')
        <li>
            <a class="flex items-center {{ request()->is('admin/dashboardadmin') ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500' }}" href="{{ route('admin.dashboard') }}">
                <i class="fas fa-tachometer-alt sidebar-icon mr-3 {{ request()->is('admin/dashboardadmin') ? 'text-blue-500' : '' }}"></i>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>
        @endif
        
        <!-- Documents Link -->
        @if(Auth::user()->role == 'superadmin')
        <li>
            <a class="flex items-center {{ request()->is('superadmin/dokumensuperadmin') ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500' }}" href="{{ route('superadmin.dokumen') }}">
                <i class="fas fa-file-alt sidebar-icon mr-3 {{ request()->is('superadmin/dokumensuperadmin') ? 'text-blue-500' : '' }}"></i>
                <span class="sidebar-text">Documents</span>
            </a>
        </li>
        @elseif(Auth::user()->role == 'admin')
        <li>
            <a class="flex items-center {{ request()->is('admin/dokumenadmin') ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500' }}" href="{{ route('admin.dokumen') }}">
                <i class="fas fa-file-alt sidebar-icon mr-3 {{ request()->is('admin/dokumenadmin') ? 'text-blue-500' : '' }}"></i>
                <span class="sidebar-text">Documents</span>
            </a>
        </li>
        @endif

        <!-- Logout Link -->
        <li>
            <button class="flex items-center text-gray-600 hover:text-blue-500" id="logoutButton">
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
