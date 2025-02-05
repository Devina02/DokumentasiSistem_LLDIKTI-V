@if ($paginator->hasPages())
    <div class="flex items-center justify-end space-x-2">
        {{-- Tombol Previous --}}
        @if ($paginator->onFirstPage())
            <button disabled class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-200 text-purple-500 shadow">
                <i class="fas fa-chevron-left text-xs"></i>
            </button>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-200 text-purple-500 shadow">
                <i class="fas fa-chevron-left text-xs"></i>
            </a>
        @endif

        {{-- Container nomor halaman --}}
        <div class="flex items-center space-x-1 rounded-full p-2 shadow">
            @php
                $currentPage = $paginator->currentPage();
                $lastPage    = $paginator->lastPage();
                // Range halaman di tengah (selain halaman 1 dan terakhir)
                $start = max(2, $currentPage - 1);
                $end   = min($lastPage - 1, $currentPage + 1);
            @endphp

            {{-- Halaman 1 selalu tampil --}}
            @if ($currentPage == 1)
                <span class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-400 text-white text-xs">
                    1
                </span>
            @else
                <a href="{{ $paginator->url(1) }}" class="w-8 h-8 flex items-center justify-center rounded-full text-purple-900 text-xs">
                    1
                </a>
            @endif

            {{-- Tampilkan elipsis jika ada celah antara halaman 1 dan range berikutnya --}}
            @if ($start > 2)
                <span class="w-8 h-8 flex items-center justify-center rounded-full text-purple-500 text-xs">
                    ...
                </span>
            @endif

            {{-- Tampilkan range halaman di tengah --}}
            @for ($page = $start; $page <= $end; $page++)
                @if ($page == $currentPage)
                    <span class="w-8 h-8 flex items-center justify-center rounded-full  bg-purple-400 text-white text-xs">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $paginator->url($page) }}" class="w-8 h-8 flex items-center justify-center rounded-full text-purple-900 text-xs">
                        {{ $page }}
                    </a>
                @endif
            @endfor

            {{-- Tampilkan elipsis jika ada celah antara range tengah dan halaman terakhir --}}
            @if ($end < $lastPage - 1)
                <span class="w-8 h-8 flex items-center justify-center rounded-full text-purple-900 text-xs">
                    ...
                </span>
            @endif

            {{-- Halaman terakhir (jika lebih dari 1) --}}
            @if ($lastPage > 1)
                @if ($currentPage == $lastPage)
                    <span class="w-8 h-8 flex items-center justify-center rounded-full  bg-purple-400 text-white text-xs">
                        {{ $lastPage }}
                    </span>
                @else
                    <a href="{{ $paginator->url($lastPage) }}" class="w-8 h-8 flex items-center justify-center rounded-full text-purple-900 text-xs">
                        {{ $lastPage }}
                    </a>
                @endif
            @endif
        </div>

        {{-- Tombol Next --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-200 text-purple-500 shadow">
                <i class="fas fa-chevron-right text-xs"></i>
            </a>
        @else
            <button disabled class="w-8 h-8 flex items-center justify-center rounded-full bg-purple-200 text-purple-900 shadow">
                <i class="fas fa-chevron-right text-xs"></i>
            </button>
        @endif
    </div>
@endif
