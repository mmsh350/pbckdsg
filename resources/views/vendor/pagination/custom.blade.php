@if ($paginator->hasPages())
    <nav class="custom-pagination">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
                </li>
            @endif
        </ul>
    </nav>
    
    <style>
    .custom-pagination {
        display: flex;
        justify-content: center;
        margin-top: 2rem;
    }
    .custom-pagination .pagination {
        display: flex;
        padding-left: 0;
        list-style: none;
        gap: 0.5rem;
    }
    .custom-pagination .page-link {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        color: #041F56;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.2s ease-in-out;
    }
    .custom-pagination .page-link:hover {
        z-index: 2;
        color: #fff;
        background-color: #FF5A1F;
        border-color: #FF5A1F;
    }
    .custom-pagination .page-item.active .page-link {
        z-index: 3;
        color: #fff;
        background-color: #041F56;
        border-color: #041F56;
    }
    .custom-pagination .page-item.disabled .page-link {
        color: #94a3b8;
        pointer-events: none;
        background-color: #f8fafc;
        border-color: #e2e8f0;
    }
    </style>
@endif
