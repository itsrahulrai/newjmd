@extends('front.layouts.app')
@section('title')
Product - JMD
@endsection
@push('style')
<style>
    .loader-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 200px;
    }

    .ring {
        --f: 1;
        width: 13em;
        height: 13em;
        transform: scale(var(--f));
        opacity: var(--f);
        background: radial-gradient(circle at 20% 20%, rgba(0, 0, 0, 0.1) calc((10% - 2px)), transparent calc((10% - 1px))), 
                    radial-gradient(circle at 50% 10%, black calc((10% - 2px)), transparent calc((10% - 1px))), 
                    radial-gradient(circle at 80% 20%, rgba(0, 0, 0, 0.1) calc((10% - 2px)), transparent calc((10% - 1px))), 
                    radial-gradient(circle at 90%, black calc((10% - 2px)), transparent calc((10% - 1px))), 
                    radial-gradient(circle at 80% 80%, rgba(0, 0, 0, 0.1) calc((10% - 2px)), transparent calc((10% - 1px))), 
                    radial-gradient(circle at 50% 90%, black calc((10% - 2px)), transparent calc((10% - 1px))), 
                    radial-gradient(circle at 20% 80%, rgba(0, 0, 0, 0.1) calc((10% - 2px)), transparent calc((10% - 1px))), 
                    radial-gradient(circle at 10%, black calc((10% - 2px)), transparent calc((10% - 1px)));
        animation: rotation 2s cubic-bezier(0.68, -0.55, 0.265, 1.55) infinite;
    }

    .ring > .ring {
        --f: 0.6;
    }

    @keyframes rotation {
        to {
            transform: scale(var(--f)) rotate(1turn);
        }
    }
</style>
@endpush
@section('content')

<!-- page-title -->
<div class="page-title" style="background-image: url({{asset('front/images/section/page-title.jpg')}});">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h3 class="heading text-center">Women</h3>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li>
                        <a class="link" href="{{route('home')}}">Homepage</a>
                    </li>
                    <li>
                        <i class="icon-arrRight"></i>
                    </li>
                    <li>
                        Women
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /page-title -->
<!-- Section product -->
<section class="flat-spacing">
    <div class="container">
        <div class="wrapper-control-shop">
            <div class="meta-filter-shop">
                <div id="product-count-grid" class="count-text"></div>
                <div id="product-count-list" class="count-text"></div>
                <div id="applied-filters"></div>
                <button id="remove-all" class="remove-all-filters text-btn-uppercase" style="display: none;">REMOVE ALL <i class="icon icon-close"></i></button>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="sidebar-filter canvas-filter left">
                        <div class="canvas-wrapper">
                            <div class="canvas-header d-flex d-xl-none">
                                <h5>Filters</h5>
                                <span class="icon-close close-filter"></span>
                            </div>
                            <div class="canvas-body">
                                <div class="widget-facet facet-categories">
                                    <h6 class="facet-title">Categories</h6>
                                    <ul class="nav nav-pills flex-column custom-nav">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="javascript:void(0);" onclick="fetchProducts()">
                                                <i class="fas fa-globe me-2"></i> All Products
                                            </a>
                                        </li>
                                        @foreach ($categories as $category)
                                        <li class="nav-item">
                                            <a class="nav-link" href="javascript:void(0);" onclick="fetchProducts('{{ $category->id }}')">
                                                <i class="{{ $category->icon ?? 'fas fa-bolt' }} me-2"></i> {{ $category->name }}
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-9">
                    <div id="product-list">
                        @include('front.partials.products-list')
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- /Section product -->
@endsection

@push('script')
<script>
    function fetchProducts(categoryId = '') {
        // Show loader
        $('#product-list').html('<div class="loader-container"><div class="ring"><div class="ring"><div class="ring"><div class="ring"></div></div></div></div></div></div>');

        $.ajax({
            url: "{{ route('products') }}",
            type: "GET",
            data: {
                category_id: categoryId
            },
            success: function(data) {
                $('#product-list').html(data);
            }
        });
    }
</script>




@endpush