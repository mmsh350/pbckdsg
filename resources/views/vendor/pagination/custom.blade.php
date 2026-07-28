@if ($paginator->hasPages())
    <div class="custom-pagination-wrapper">
        <!-- Pagination Info Text -->
        <div class="pagination-info">
            Showing <span class="font-bold">{{ $paginator->firstItem() }}</span> to <span class="font-bold">{{ $paginator->lastItem() }}</span> of <span class="font-bold">{{ $paginator->total() }}</span> results
        </div>

        <!-- Pagination Controls Nav -->
        <nav class="custom-pagination" aria-label="Pagination Navigation">
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                        <span class="page-link nav-btn" aria-hidden="true">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                            <span class="btn-text">Previous</span>
                        </span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link nav-btn" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="15 18 9 12 15 6"></polyline></svg>
                            <span class="btn-text">Previous</span>
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true">
                            <span class="page-link dots">{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item">
                        <a class="page-link nav-btn" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                            <span class="btn-text">Next</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <span class="page-link nav-btn" aria-hidden="true">
                            <span class="btn-text">Next</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="9 18 15 12 9 6"></polyline></svg>
                        </span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>

    <style>
    .custom-pagination-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 1.25rem;
        margin-top: 3.5rem;
        width: 100%;
    }

    .pagination-info {
        font-size: 0.875rem;
        color: #64748B;
        font-weight: 500;
    }

    .pagination-info .font-bold {
        font-weight: 700;
        color: #0F172A;
    }

    .custom-pagination .pagination {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.5rem;
        padding-left: 0;
        margin: 0;
        list-style: none;
    }

    .custom-pagination .page-item {
        margin: 0;
    }

    .custom-pagination .page-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        min-width: 42px;
        height: 42px;
        padding: 0 0.75rem;
        font-size: 0.9375rem;
        font-weight: 700;
        color: #041F56;
        background-color: #FFFFFF;
        border: 1px solid #E2E8F0;
        border-radius: 10px;
        text-decoration: none;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        transition: all 0.25 ease-in-out;
        cursor: pointer;
    }

    .custom-pagination .page-link.nav-btn {
        gap: 0.5rem;
        padding: 0 1.125rem;
    }

    .custom-pagination .page-link.dots {
        border: none;
        background: transparent;
        color: #94A3B8;
        box-shadow: none;
        cursor: default;
    }

    .custom-pagination .page-link:hover:not(.dots) {
        color: #FFFFFF;
        background-color: #FF5A1F;
        border-color: #FF5A1F;
        transform: translateY(-2px);
        box-shadow: 0 6px 14px rgba(255, 90, 31, 0.3);
    }

    .custom-pagination .page-item.active .page-link {
        color: #FFFFFF;
        background: linear-gradient(135deg, #041F56 0%, #0B3485 100%);
        border-color: #041F56;
        box-shadow: 0 6px 16px rgba(4, 31, 86, 0.25);
    }

    .custom-pagination .page-item.disabled .page-link {
        color: #CBD5E1;
        background-color: #F8FAFC;
        border-color: #E2E8F0;
        box-shadow: none;
        cursor: not-allowed;
        transform: none;
        opacity: 0.7;
    }

    @media (max-width: 576px) {
        .custom-pagination .page-link.nav-btn .btn-text {
            display: none;
        }
        .custom-pagination .page-link.nav-btn {
            padding: 0;
            width: 42px;
        }
    }
    </style>
@endif
