<form method="GET" action="{{ url('search') }}" class="relative w-1/3 mb-6">
    <input 
        class="w-full p-3 pl-10 rounded-full bg-gray-200 focus:outline-none" 
        placeholder="Cari berdasarkan nama project" 
        type="text" 
        name="search" 
        value="{{ request('search') }}" 
    />
    <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
</form>
