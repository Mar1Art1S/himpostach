@if ($paginator->hasPages())
<nav aria-label="Page navigation" class="inline-flex shadow-sm ">
    <ul class="flex flex-row pagination">
        @if ($paginator->onFirstPage())
        <li
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-l hover:bg-gray-50">
            <span class="page-link">&lt;</span>
        </li>
        @else
        <li
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&lt;</a>
        </li>
        @endif

        @foreach ($elements as $element)
        @if (is_string($element))
        <li
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r hover:bg-gray-50">
            <span class="page-link">{{ $element }}</span>
        </li>
        @endif

        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50 active">
            <span class="page-link">{{ $page }}</span>
        </li>
        @else
        <li
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">
            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <li
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r hover:bg-gray-50">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&gt;</a>
        </li>
        @else
        <li
            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r hover:bg-gray-50">
            <span class="page-link">&gt;</span>
        </li>
        @endif
    </ul>
</nav>
@endif
{{-- <nav class="inline-flex shadow-sm">
    <a href="#"
        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-l hover:bg-gray-50">Попередня</a>
    <a href="#"
        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">1</a>
    <a href="#"
        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">2</a>
    <a href="#"
        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">3</a>
    <a href="#"
        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">...</a>
    <a href="#"
        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border-t border-b border-gray-300 hover:bg-gray-50">10</a>
    <a href="#"
        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-r hover:bg-gray-50">Наступна</a>
</nav> --}}