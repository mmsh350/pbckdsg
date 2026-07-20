@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" style="display: flex; justify-content: center; gap: 0.5rem; margin-top: 3rem; margin-bottom: 2rem;">
        
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid #e2e8f0; border-radius: 4px; color: #94a3b8; cursor: not-allowed; font-size: 0.9rem; background: white;">
                &lt;
            </span>
        @else
            <button wire:click="previousPage" wire:loading.attr="disabled" rel="prev" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid #cbd5e1; border-radius: 4px; color: #334155; cursor: pointer; font-size: 0.9rem; background: white; transition: all 0.2s;" onmouseover="this.style.borderColor='#94a3b8'" onmouseout="this.style.borderColor='#cbd5e1'">
                &lt;
            </button>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; color: #64748b; font-size: 0.9rem;">
                    {{ $element }}
                </span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid #3b82f6; border-radius: 4px; color: #2563eb; font-weight: 600; font-size: 0.9rem; background: #eff6ff;">
                            {{ $page }}
                        </span>
                    @else
                        <button wire:click="gotoPage({{ $page }})" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid #cbd5e1; border-radius: 4px; color: #334155; cursor: pointer; font-size: 0.9rem; background: white; transition: all 0.2s;" onmouseover="this.style.borderColor='#94a3b8'" onmouseout="this.style.borderColor='#cbd5e1'">
                            {{ $page }}
                        </button>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <button wire:click="nextPage" wire:loading.attr="disabled" rel="next" style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid #cbd5e1; border-radius: 4px; color: #334155; cursor: pointer; font-size: 0.9rem; background: white; transition: all 0.2s;" onmouseover="this.style.borderColor='#94a3b8'" onmouseout="this.style.borderColor='#cbd5e1'">
                &gt;
            </button>
        @else
            <span style="display: flex; align-items: center; justify-content: center; width: 36px; height: 36px; border: 1px solid #e2e8f0; border-radius: 4px; color: #94a3b8; cursor: not-allowed; font-size: 0.9rem; background: white;">
                &gt;
            </span>
        @endif
    </nav>
@endif
