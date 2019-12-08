@if ($paginator->hasPages())
    <div class="row mt-5">
        <div class="col text-center d-flex justify-content-center">
            <div class="block-27">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li class="disabled"  aria-label="@lang('pagination.previous')">
                            <a href="#" tabindex="-1" aria-disabled="true">&lt;</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ $paginator->previousPageUrl() }}"  aria-label="@lang('pagination.previous')" tabindex="-1"
                                aria-disabled="true">&lt;</a>
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
                                    <li class="active">
                                        <a href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li>
                            <a href="{{ $paginator->nextPageUrl() }}"
                                tabindex="-1" aria-disabled="true">&gt;</a>
                        </li>
                    @else
                        <li class="disabled">
                            <a class="disabled" href="#" tabindex="-1" aria-disabled="true">&gt;</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
