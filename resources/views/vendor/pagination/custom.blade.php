@if ($paginator->hasPages())
    <nav aria-label="Page navigation" class="inline-flex shadow-sm">
        <ul class="flex flex-row pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-l hover:bg-gray-50">
                    <span class="page-link">&lt;</span>
                </li>
            @else
                <li class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lt;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                        <span class="page-link">{{ $element }}</span>
                    </li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="px-4 py-2 text-sm font-medium text-white bg-gray-700 border border-gray-300 active">
                                <span class="page-link">{{ $page }}</span>
                            </li>
                        @elseif ($page == 1 || $page == $paginator->lastPage() ||
                                 ($page >= $paginator->currentPage() - 1 && $page <= $paginator->currentPage() + 1))
                            <li class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @elseif ($page == 2 || $page == $paginator->lastPage() - 1)
                            <li class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 hover:bg-gray-50">
                                <span class="page-link">...</span>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r hover:bg-gray-50">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&gt;</a>
                </li>
            @else
                <li class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r hover:bg-gray-50">
                    <span class="page-link">&gt;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
