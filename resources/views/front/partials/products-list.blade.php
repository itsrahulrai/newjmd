<div class="row">
    @foreach ($products as $product)
    <div class="col-12 col-sm-6 col-lg-4 mb-4">
        <div class="product-card">
            <div class="product-image">
                <img src="{{ $product->image ? asset($product->image) : asset('assets/admin/images/dummyproductimage.png') }}"
                    alt="Product Image" class="img-fluid">
            </div>
            <h3 class="product-title">
                <a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a>
            </h3>
            <p class="product-description">{!! Str::limit($product->shortdesc, 100) !!}</p>
            <a href="{{ route('product.details', $product->slug) }}" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
        </div>
    </div>
    @endforeach
</div>

<!-- Custom Pagination -->
@if ($products->hasPages())
<div class="pagination-wrapper text-center">
    <ul class="wg-pagination justify-content-center">
        {{-- Previous Page Link --}}
        @if ($products->onFirstPage())
            <li class="disabled">
                <div class="pagination-item text-button"><i class="icon-arrLeft"></i></div>
            </li>
        @else
            <li>
                <a href="{{ $products->previousPageUrl() }}" class="pagination-item text-button">
                    <i class="icon-arrLeft"></i>
                </a>
            </li>
        @endif

        {{-- Page Numbers --}}
        @foreach (range(1, $products->lastPage()) as $page)
            @if ($page == $products->currentPage())
                <li class="active">
                    <div class="pagination-item text-button">{{ $page }}</div>
                </li>
            @else
                <li>
                    <a href="{{ $products->url($page) }}" class="pagination-item text-button">{{ $page }}</a>
                </li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($products->hasMorePages())
            <li>
                <a href="{{ $products->nextPageUrl() }}" class="pagination-item text-button">
                    <i class="icon-arrRight"></i>
                </a>
            </li>
        @else
            <li class="disabled">
                <div class="pagination-item text-button"><i class="icon-arrRight"></i></div>
            </li>
        @endif
    </ul>
</div>
@endif
    