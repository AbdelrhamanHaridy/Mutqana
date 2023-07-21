@if ($paginator->hasPages())
    <div class="col-lg-12">
        <div class="pagination-area">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span aria-disabled="true" class="disabled next page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="next page-numbers">
                    <i class="ri-arrow-right-line"></i>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="page-numbers current disabled" aria-current="page">{{ $element }}</span>

                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-numbers current disabled" aria-current="page">{{ $page }}</span>
                        @else
                            <a href="{{ $url }}" class="page-numbers">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="next page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </a>
            @else
                <span aria-disabled="true" class="next page-numbers">
                    <i class="ri-arrow-left-line"></i>
                </span>
            @endif
        </div>
    </div>
@endif
