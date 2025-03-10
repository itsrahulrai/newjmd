@extends('front.layouts.app')
@section('title')
Home - JMD
@endsection
@push('style')
@endpush
@section('content')
<!-- Banner section start -->
@include('front.includes.slider')

<!-- Banner Section end -->

<section class="flat-spacing">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading font-5 fw-bold">Shop By Categories</h3>
            <p class="subheading text-secondary">Our customers adore our products, and we constantly aim to
                delight them.</p>
        </div>
        <div class="flat-collection-circle">
            <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3" data-mobile="2"
                data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1"
                data-pagination-lg="1">
                <div class="swiper-wrapper">
                    @foreach ($categories as $category)
                    <div class="swiper-slide">
                        <div class="collection-position-2 style-8 hover-img">
                            <a class="img-style">
                                <img class="lazyload"
                                    data-src="{{ asset($category->image ?? 'assets/admin/images/images.jpeg') }}"
                                    src="{{ asset($category->image ?? 'assets/admin/images/images.jpeg') }}"
                                    alt="{{ $category->name }}"
                                    style="width: 150px; height: 280px; object-fit: cover; border-radius: 8px;">
                            </a>

                            <div class="top">
                                <h5 class="font-5 fw-7 mb_4">{{ $category->name }}</h5>
                            </div>
                            <div class="content d-flex justify-content-center">
                                <a href="{{ route('products', ['category_id' => $category->id]) }}" class="btn-style-6 wow fadeInUp text-button">
                                    <span class="text">View More</span>
                                    <i class="icon icon-arrowUpRight"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
            </div>
            <div class="nav-next-recent d-none d-lg-flex nav-sw style-line nav-sw-left space-2"><i
                    class="icon icon-arrLeft"></i></div>
            <div class="nav-prev-recent d-none d-lg-flex nav-sw style-line nav-sw-right space-2"><i
                    class="icon icon-arrRight"></i></div>
        </div>
    </div>
</section>



<!-- Collection -->
<section class="flat-spacing pt-0">
    <div class="container">
        <div dir="ltr" class="swiper tf-sw-collection" data-preview="3" data-tablet="2" data-mobile-sm="1.7"
            data-mobile="1" data-space-lg="45" data-space-md="30" data-space="15" data-pagination="1"
            data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                <!-- Item 1 -->
                <div class="swiper-slide">
                    <div class="collection-default abs-left-center rounded-0 hover-img wow fadeInUp"
                        data-wow-delay="0s">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ asset('front/images/collections/door-bell.webp') }}"
                                src="{{ asset('front/images/collections/door-bell.webp') }}" alt="banner-cls">
                        </a>
                        <div class="content text-start">
                            <div class="box-title">
                                <h4 class="title">
                                    <a href="" class="link">
                                        Door Bell
                                    </a>
                                </h4>
                            </div>
                            <div class="box-btn">
                                <a href="" class="btn-line">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="swiper-slide">
                    <div class="collection-default abs-left-center rounded-0 hover-img wow fadeInUp"
                        data-wow-delay="0s">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ asset('front/images/collections/bulb-holder.webp') }}"
                                src="{{ asset('front/images/collections/bulb-holder.webp') }}" alt="banner-cls">
                        </a>
                        <div class="content text-start">
                            <div class="box-title">
                                <h4 class="title">
                                    <a href="" class="link text-white">
                                        Bulb Holder
                                    </a>
                                </h4>
                            </div>
                            <div class="box-btn">
                                <a href="" class="btn-line style-white">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="swiper-slide">
                    <div class="collection-default abs-left-center rounded-0 hover-img wow fadeInUp"
                        data-wow-delay="0s">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ asset('front/images/collections/bus-bar.webp') }}"
                                src="{{ asset('front/images/collections/bus-bar.webp') }}" alt="banner-cls">
                        </a>
                        <div class="content text-start">
                            <div class="box-title">
                                <h4 class="title">
                                    <a href="" class="link">
                                        Bus Bar
                                    </a>
                                </h4>
                            </div>
                            <div class="box-btn">
                                <a href="" class="btn-line">
                                    Shop Now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-pagination-collection sw-dots type-circle justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Collection -->

<section class="flat-spacing" style="background-color: #f7f7f7;">

    <div class="container py-4">
        <h2 class="mb-4">Explore Our Top Products</h2>

        <!-- <ul class="nav nav-pills mb-4 custom-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#" onclick="showContent('MCB')" id="nav-MCB"><i
                        class="fas fa-bolt me-2"></i> MCB & RCCB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('SWITCHES')" id="nav-SWITCHES"><i
                        class="fas fa-toggle-on me-2"></i> Switches & Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('DISTRIBUTION')" id="nav-DISTRIBUTION"><i
                        class="fas fa-th-large me-2"></i> Distribution Boards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('WIRES')" id="nav-WIRES"><i
                        class="fas fa-plug me-2"></i> Wires & Cables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('SWITCHGEARS')" id="nav-SWITCHGEARS"><i
                        class="fas fa-cogs me-2"></i> Switchgears</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="showContent('ELECTRICAL')" id="nav-ELECTRICAL"><i
                        class="fas fa-lightbulb me-2"></i> Electrical Accessories</a>
            </li>
        </ul> -->

        <ul class="nav nav-pills mb-4 custom-nav">
            @foreach ($categories as $key => $category)
            <li class="nav-item">
                <a class="nav-link {{ $loop->first ? 'active' : '' }}" href="javascript:void(0);" onclick="showContent(event, '{{ $category->slug }}')" id="nav-{{ $category->slug }}">
                <i class="{{ $category->icon ?? 'fas fa-bolt' }} me-2"></i> {{ $category->name }}
                </a>
            </li>
            @endforeach
        </ul>


    </div>

    <!-- New In Section -->
    <!-- Content Sections -->

    <div class="container">
        @foreach ($categories as $key => $category)
        <div id="{{ $category->slug }}" class="row g-4 content-section" style="display: {{ $loop->first ? 'flex' : 'none' }};">
            @foreach ($category->products as $product)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset($product->image ?? 'assets/admin/images/dummyproductimage.png') }}" alt="{{ $product->name }}" style="width: 200px; height: auto;">
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
        @endforeach
    </div>


</section>

<!-- /Banner parallax -->
<section class="flat-banner-parallax"
    style="background-image: url('{{ asset('front/images/banner/banner-shop.jpg') }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="fl-content text-center">
                    <div class="title-top">
                        <span class="subtitle text-btn-uppercase text-white wow fadeInUp">sumMer 2024 collection</span>
                        <h3 class="title text-white wow fadeInUp" data-wow-delay="0.1s">Super Sale Up To %50</h3>
                        <p class="text-white wow fadeInUp" data-wow-delay="0.2s">Reserved for special occasions</p>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span
                                class="text">discover Now</span><i class="icon icon-arrowUpRight"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Banner parallax -->


<!-- Iconbox -->
<section class="flat-spacing">
    <div class="container">
        <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2"
            data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
            data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-return"></span></div>
                        <div class="content text-center">
                            <h6>14-Day Returns</h6>
                            <p class="text-secondary">Risk-free shopping with easy returns.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-shipping"></span></div>
                        <div class="content text-center">
                            <h6>Free Shipping</h6>
                            <p class="text-secondary">No extra costs, just the price you see.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-headset"></span></div>
                        <div class="content text-center">
                            <h6>24/7 Support</h6>
                            <p class="text-secondary">24/7 support, always here just for you</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-sealCheck"></span></div>
                        <div class="content text-center">
                            <h6>Member Discounts</h6>
                            <p class="text-secondary">Special prices for our loyal customers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Iconbox -->


<!-- Testimonial -->
<section class="flat-spacing bg-surface">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Customer Say!</h3>
            <p class="subheading">Our customers adore our products, and we constantly aim to delight them.</p>
        </div>
        <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s" 
    data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" 
    data-space-md="30" data-space="15" data-pagination="1" 
    data-pagination-md="1" data-pagination-lg="1">
    
    <div class="swiper-wrapper">
        @foreach($CustomerSay as $testimonial)
            <div class="swiper-slide">
                <div class="testimonial-item style-2 style-3">
                    <div class="content-top">
                        <div class="box-icon">
                            <i class="icon icon-quote"></i>
                        </div>
                        <p class="text-secondary">"{{ $testimonial->content }}"</p>
                        <div class="box-rate-author">
                            <div class="box-author">
                            <div class="text-title author">{{ $testimonial->name }} ({{ $testimonial->occupation }})</div>

                                <svg class="icon" width="20" height="21" viewbox="0 0 20 21"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_15758_14563)">
                                        <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" 
                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                        <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 
                                            14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 
                                            15.1426 5.85786 18.5005 10 18.5005Z" 
                                            stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                        </path>
                                    </g>
                                    <defs>
                                        <clippath id="clip0_15758_14563">
                                            <rect width="20" height="20" fill="white" transform="translate(0 0.684082)"></rect>
                                        </clippath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center"></div>
</div>

    </div>
</section>
<!-- /Testimonial -->
@endsection


@push('script')
<script>
    function showContent(event, category) {
        event.preventDefault(); // Prevents the page from scrolling to the top

        document.querySelectorAll('.content-section').forEach(section => {
            section.style.display = 'none';
        });

        document.getElementById(category).style.display = 'flex';

        document.querySelectorAll('.nav-link').forEach(link => {
            link.classList.remove('active');
        });

        document.getElementById('nav-' + category).classList.add('active');
    }
</script>


@endpush