<style>
    .active-page {
    background-color: #d73040 !important;
    color: white !important;
    border-color: #d73040 !important;
}

</style>
<div class="row">
    @if ($products->isEmpty())
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
        
        <div class="col-12 d-flex justify-content-center">
            <div class="alert alert-danger py-3 px-4 w-50 text-center animate__animated animate__fadeInDown" role="alert" 
                style="border-radius: 10px;
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.2);
    position: relative;
    width: 100%;
    margin-top: 46px;
    background-color: #f9f9f9;
    padding: 50px 20px !important;">
        
                <!-- Animated Error Image (GIF or Lottie) -->
                <div class="animate__animated animate__bounce">
                    <img src="https://i.gifer.com/XOsX.gif" alt="Error" width="80">
                </div>
        
                <strong class="d-block mt-2">Oops! No products found.</strong>
                <p class="mb-0">Currently, there are no products in this category.</p>
            </div>
        </div>
            @else
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
                            
                            <a href="{{ route('product.details', $product->slug) }}" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

@if ($products->hasPages())
    <nav class="mt-4" aria-label="Page navigation">
        <ul class="pagination pagination-dark justify-content-right gap-2"> 
            
            {{-- Previous Page Link --}}
            <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link bg-dark text-light border-secondary px-3 py-2"
                   href="{{ $products->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>

            {{-- Pagination Elements --}}
            @php
                $currentPage = $products->currentPage();
                $lastPage = $products->lastPage();
                $start = max($currentPage - 2, 1);
                $end = min($currentPage + 2, $lastPage);
            @endphp

            {{-- First Page --}}
            @if ($start > 1)
                <li class="page-item">
                    <a class="page-link bg-dark text-light border-secondary px-3 py-2"
                       href="{{ $products->url(1) }}">1</a>
                </li>
                @if ($start > 2)
                    <li class="page-item disabled">
                        <span class="page-link bg-dark text-light border-secondary px-3 py-2">...</span>
                    </li>
                @endif
            @endif

            {{-- Page Numbers --}}
            @for ($page = $start; $page <= $end; $page++)
                <li class="page-item">
                    <a class="page-link px-3 py-2 border-secondary 
                        {{ $page == $currentPage ? 'active-page' : 'bg-dark text-light' }}"
                       href="{{ $products->url($page) }}">
                        {{ $page }}
                    </a>
                </li>
            @endfor

            {{-- Last Page --}}
            @if ($end < $lastPage)
                @if ($end < $lastPage - 1)
                    <li class="page-item disabled">
                        <span class="page-link bg-dark text-light border-secondary px-3 py-2">...</span>
                    </li>
                @endif
                <li class="page-item">
                    <a class="page-link bg-dark text-light border-secondary px-3 py-2"
                       href="{{ $products->url($lastPage) }}">{{ $lastPage }}</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link bg-dark text-light border-secondary px-3 py-2"
                   href="{{ $products->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>

        </ul>
    </nav>
@endif



    