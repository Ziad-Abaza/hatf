@if ($paginator->hasPages())
    <nav class="my-4" aria-label="Page navigation">
        <ul class="pagination justify-content-center custom-pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link custom-page-link">&lt;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link custom-page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">&lt;</span>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link custom-page-link">{{ $element }}</span></li>
                @endif

                {{-- Array of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link custom-page-link active-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link custom-page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link custom-page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">&gt;</span>
                    </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link custom-page-link">&gt;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
