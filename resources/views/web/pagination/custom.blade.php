@if ($paginator->hasPages())
    <nav class="my-4" aria-label="Page navigation">
        <ul class="pagination justify-content-center custom-pagination gap-0 gap-lg-2">
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

<style>
    ul{
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /*gap: 10px;  */
    }
    .page-link {
        position: relative;
        display: block;
        padding: var(--bs-pagination-padding-y) var(--bs-pagination-padding-x);
        font-size: var(--bs-pagination-font-size);
        color: white;
        box-shadow: 0 0 8px -1px black;
        text-decoration: none;
        background-color: #161616;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        border: #66500f 1px solid;
        border-radius: 9px;
        
    }
    .active>.page-link, .page-link.active {
        
        color: #777777;
        background-color: black;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        border: #66500f 1px solid;
        
    }
    
    .page-link:hover {
        
    color: black;
    background-color: var(--bs-pagination-hover-bg);
    border-color: var(--bs-pagination-hover-border-color);
    
    }
</style>
