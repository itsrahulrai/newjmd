@extends('front.layouts.app')
@section('title')
Product Details - JMD
@endsection
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


<!-- Product_Main -->
<section class="flat-spacing">
    <div class="tf-main-product section-image-zoom">
        <div class="container">
        <div class="row align-items-start gx-2">
    <!-- Product Image Section -->
    <div class="col-lg-5 col-md-5 col-12">
        <div class="tf-product-media-wrap thumbs-bottom sticky-md-top">
            <div class="thumbs-slider">
                <div dir="ltr" class="swiper tf-product-media-main" id="gallery-swiper-started">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide d-flex justify-content-center align-items-center overflow-hidden">
                            <img class="img-fluid rounded-4 zoom-effect"
                                src="{{ $product->image ? asset($product->image) : asset('assets/admin/images/dummyproductimage.png') }}"
                                alt="{{ $product->name }}" width="300" height="auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Info Section -->
    <div class="col-lg-7 col-md-7 col-12">
        <div class="tf-product-info-wrap position-relative">
            <div class="tf-product-info-list">
                <div class="">
                    <div class="tf-product-info-name">
                        <h3 class="name">{{ $product->name }}</h3>
                    </div>
                    <div class="tf-product-info-desc">
                        <p>{!! $product->shortdesc !!}</p>
                    </div>
                    <div class="tf-product-info-desc">
                        <p>{!! $product->desc !!}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-start mt-3">
                    <a href="#" class="view-btn d-inline-block px-3 py-2 text-center" data-bs-toggle="modal" data-bs-target="#callbackModal">
                        <i class="fa fa-phone me-2"></i> Request a Callback for Bulk Enquiry
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
    </div>
</section>

<!-- /Product_Main -->
@endsection