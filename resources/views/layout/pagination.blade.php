@if ($paginator->hasPages())
    <ul class="pagination pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="disabled"><span>«</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev">«</a></li>
        @endif

        {{-- Page Links --}}
        @if($paginator->currentPage() > $quantity + 1)
            <li class="hidden-xs"><a href="{{ $paginator->url(1) }}">1</a></li>
        @endif
        @if($paginator->currentPage() > $quantity + 2)
            <li class="disabled"><span>...</span></li>
        @endif
        @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - $quantity && $i <= $paginator->currentPage() + $quantity)
                @if ($i == $paginator->currentPage())
                    <li class="active"><span>{{ $i }}</span></li>
                @else
                    <li><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach
        @if($paginator->currentPage() < $paginator->lastPage() - $quantity + 1)
            <li class="disabled"><span>...</span></li>
        @endif
        @if($paginator->currentPage() < $paginator->lastPage() - $quantity)
            <li class="hidden-xs"><a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</a></li>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">»</a></li>
        @else
            <li class="disabled"><span>»</span></li>
        @endif
    </ul>
@endif