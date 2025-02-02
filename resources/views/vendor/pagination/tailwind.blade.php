@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-end">
        {{-- Tombol Previous --}}
        @if ($paginator->onFirstPage())
            <span class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-l-md">
                {!! __('pagination.previous') !!}
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-l-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.previous') !!}
            </a>
        @endif

        {{-- Perhitungan range angka untuk menampilkan 3 angka utama --}}
        @php
            $totalPages = $paginator->lastPage();
            $currentPage = $paginator->currentPage();
            $visible = 2; // jumlah angka utama yang ingin ditampilkan (sesuai contoh kode sebelumnya)
            $half = floor($visible / 2);

            if ($currentPage <= $half + 1) {
                // Jika halaman aktif ada di awal, tampilkan dari halaman 1
                $start = 1;
                $end = min($visible, $totalPages);
            } elseif ($currentPage >= $totalPages - $half) {
                // Jika halaman aktif ada di akhir, tampilkan angka terakhir
                $end = $totalPages;
                $start = max($totalPages - $visible + 1, 1);
            } else {
                // Jika di tengah, tampilkan halaman aktif beserta angka di sekitarnya
                $start = $currentPage - $half;
                $end = $currentPage + $half;
            }
        @endphp

        <span class="relative z-0 inline-flex shadow-sm">
            {{-- Jika range tidak dimulai dari halaman 1, tampilkan link ke halaman 1 dan "..." --}}
            @if ($start > 1)
                <a href="{{ $paginator->url(1) }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    1
                </a>
                @if ($start > 2)
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5">...</span>
                @endif
            @endif

            {{-- Tampilkan angka halaman sesuai range yang telah dihitung --}}
            @for ($page = $start; $page <= $end; $page++)
                @if ($page == $currentPage)
                    <span aria-current="page" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-white bg-purple-500 border border-purple-500 leading-5">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $paginator->url($page) }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            {{-- Jika range tidak mencapai halaman terakhir, tampilkan "..." dan link ke halaman terakhir --}}
            @if ($end < $totalPages)
                @if ($end < $totalPages - 1)
                    <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5">...</span>
                @endif
                <a href="{{ $paginator->url($totalPages) }}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                    {{ $totalPages }}
                </a>
            @endif
        </span>

        {{-- Tombol Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 rounded-r-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                {!! __('pagination.next') !!}
            </a>
        @else
            <span class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5 rounded-r-md">
                {!! __('pagination.next') !!}
            </span>
        @endif
    </nav>
@endif
