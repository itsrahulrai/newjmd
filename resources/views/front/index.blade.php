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
            <p class="subheading text-secondary">JMD Electronics offers a comprehensive range of high-quality electrical products designed to ensure safety, <br> efficiency, and innovation in every space.</p>
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
                                    alt="{{ $category->name }}" >
                            </a>

                            <div class="top">
                                <h5 class="font-5 fw-7 mb_4">{{ $category->name }}</h5>
                            </div>
                            <div class="content d-flex justify-content-center">
                                <a href="{{ route('products', ['slug' => $category->slug]) }}" class="btn-style-6 wow fadeInUp text-button">
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
        <h2>Explore Our Top Products</h2>
        <p class="mb-3">JMD Electronics brings you a wide range of high-quality electrical products designed for safety, reliability, and efficiency.</p>

      

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
            
            @if ($category->products->isEmpty())
                <!-- Include Animate.css for animations -->
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
                @php
                    $visibleProducts = $category->products->take(8); // Show only latest 8 products
                    $hasMoreProducts = $category->products->count() > 8; // Check if more than 8 products exist
                @endphp

                @foreach ($visibleProducts as $product)
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="product-card">
                            <div class="product-image">
                                <img src="{{ asset($product->image ?? 'assets/admin/images/dummyproductimage.png') }}" alt="{{ $product->name }}">
                            </div>
                            <h3 class="product-title">
                                <a href="{{ route('product.details', $product->slug) }}">{{ $product->name }}</a>
                            </h3>
                            <a href="{{ route('product.details', $product->slug) }}" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
                        </div>
                    </div>
                @endforeach

                <!-- See More Button -->
                @if ($hasMoreProducts)
                  
                    <div class="content d-flex justify-content-center">
                                <a href="{{ route('products') }}" class="view-btn">See More <i class="icon icon-arrowUpRight"></i></a>

                            </div>
                @endif

            @endif
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
                        <h3 class="title text-light wow fadeInUp" data-wow-delay="0.1s">Exclusive Offers from JMD Electronics – Powering Your Savings!</h3>
                        <span class="subtitle text-light text-btn-uppercase wow fadeInUp">Get ready to upgrade your electrical solutions with exciting offers from JMD Electronics! Whether you're looking for premium distribution boards, high-performance MCBs & RCCBs, modern switches, durable wires & cables, or efficient switchgears</span>
                        <p class="text-light wow fadeInUp" data-wow-delay="0.2s">Flat 20% OFF on selected Switches & Accessories</p>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <a href="{{route('products')}}" class="tf-btn btn-fill btn-dark"><span
                                class="text-light">discover Now</span><i class="icon icon-arrowUpRight text-light"></i></a>
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
                        <div class="icon-box"><i class="fas fa-shield-alt fa-1x text-primary"></i></div>
                        <div class="content text-center">
                            <h6>Extended Warranty</h6>
                            <p class="text-secondary">Enjoy up to 2 years of warranty on select electronics.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><i class="fas fa-certificate fa-1x text-success"></i></div>
                        <div class="content text-center">
                            <h6>100% Genuine Products</h6>
                            <p class="text-secondary">We guarantee original and authentic electronics.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><i class="fas fa-headset fa-1x text-warning"></i></div>
                        <div class="content text-center">
                            <h6>Expert Support</h6>
                            <p class="text-secondary">Our tech experts are available to assist you 24/7.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><i class="fas fa-tools fa-1x"></i></div>
                        <div class="content text-center">
                            <h6>Free Installation</h6>
                            <p class="text-secondary">Get hassle-free installation for major appliances.</p>
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
            <p class="subheading">"JMD – Trusted by Experts, Powered by You!"</p>
        </div>
        <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s"
    data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30"
    data-space-md="30" data-space="15" data-pagination="1"
    data-pagination-md="1" data-pagination-lg="1">

    <div class="swiper-wrapper">
        @foreach($CustomerSay as $testimonial)
            <div class="swiper-slide">
                <div class="testimonial-item style-2">
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

<!-- Blogs -->
<section class="flat-spacing">
    <div class="container">
        <h2 class="text-center" style="font-size: 32px; font-weight: 700; margin-bottom: 40px; color: #222;">
            Latest Blogs
        </h2>
        <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile="1"
            data-space-lg="30" data-space-md="20" data-space="15" data-pagination="1">
          <div class="swiper-wrapper">
    @foreach($blogs->take(4) as $blog)
    <div class="swiper-slide">
        <div class="blog-card"
            style="border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08); background: #fff; display: flex; flex-direction: column; border: 1px solid #ddd; height: 100%; min-height: 400px; max-height: 420px;">

            <!-- Blog Image -->
            <div class="blog-image" style="border-radius: 8px 8px 0 0; overflow: hidden; height: 180px;">
                <a href="{{ route('blogs.details', $blog->slug) }}">
                    <img class="lazyload" data-src="{{ asset($blog->thumbnail) }}" src="{{ asset($blog->thumbnail) }}" 
                         alt="{{ $blog->name }}" style="width: 100%; height: 100%; object-fit: cover;">
                </a>
            </div>

            <!-- Blog Content -->
            <div class="blog-content" style="padding: 12px; display: flex; flex-direction: column; flex-grow: 1;">
                <div>
                    <div class="meta" style="display: flex; justify-content: space-between; font-size: 12px; color: #777; margin-bottom: 3px;">
                        <div class="meta-item" style="display: flex; align-items: center; gap: 3px;">
                            <i class="icon-calendar" style="color: #dc3545;"></i>
                            <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                        </div>
                        <div class="meta-item" style="display: flex; align-items: center; gap: 3px;">
                            <i class="icon-user" style="color: #dc3545;"></i>
                            <span>by <a href="#" style="font-weight: 500; color: #dc3545;">JMD</a></span>
                        </div>
                    </div>

                    <h5 class="title" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 4px;">
                        <a href="{{ route('blogs.details', $blog->slug) }}" style="color: #333; text-decoration: none;">
                            {{ $blog->name }}
                        </a>
                    </h5>

                    <p class="body-text" style="font-size: 13px; color: #555; margin: 6px 0; height: 45px; overflow: hidden;">
                        {!! Str::limit(strip_tags($blog->content), 75) !!}
                    </p>
                </div>

                <a href="{{ route('blogs.details', $blog->slug) }}"
                    style="display: inline-block; padding: 6px 12px; background: #dc3545; color: white; text-decoration: none; border-radius: 5px; font-size: 12px; text-align: center; margin-top: auto;">
                    Read More
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

            <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
        </div>
    </div>
</section>


<!-- Blogs -->

@endsection


@push('script')
<script>
    function showContent(event, category) {
        console.log(category)
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
