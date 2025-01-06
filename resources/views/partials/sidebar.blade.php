<!-- Sidebar -->
<div class="w-64 bg-white p-10 rounded-r-3xl shadow-lg fixed h-full overflow-y-auto">
    <div class="flex items-center mb-20">
        <div class="bg-blue-500 p-4 rounded-full">
            <i class="fas fa-cloud text-white"></i>
        </div>
        <span class="ml-3 text-xl font-semibold">
            LLDocs
        </span>
    </div>
    <ul class="space-y-10">
        <li>
            <a class="flex items-center {{ request()->is('admin/dashboardadmin') ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500' }}" href="/admin/dashboardadmin">
                <i class="fas fa-tachometer-alt sidebar-icon mr-3 {{ request()->is('admin/dashboardadmin') ? 'text-blue-500' : '' }}"></i>
                <span class="sidebar-text">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="flex items-center {{ request()->is('admin/dokumen') ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500' }}" href="/admin/dokumen">
                <i class="fas fa-file-alt sidebar-icon mr-3 {{ request()->is('admin/dokumen') ? 'text-blue-500' : '' }}"></i>
                <span class="sidebar-text">Documents</span>
            </a>
        </li>
        
        
        <li>
            <a class="flex items-center {{ $title === 'logout' ? 'font-bold text-blue-500' : 'text-gray-600 hover:text-blue-500' }}" href="#" id="logout-btn">
                <i class="fas fa-sign-out-alt sidebar-icon mr-3 {{ $title === 'logout' ? 'text-blue-500' : '' }}"></i>
                <span class="sidebar-text">Logout</span>
            </a>
        </li>
    </ul>
    <div class="mt-40">
        <img alt="image" height="100" src="{{ asset('image/folders.png') }}" width="160" />
    </div>
</div>
