<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <meta charset="utf-8">
    <title>Home - JMD</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Themesflat Modave, Multipurpose eCommerce Template">

    <!-- Head link Start -->

    @include('front.includes.head-link')
    <!-- Head link End -->

</head>

<body class="preload-wrapper">


    @include('front.includes.scoller')


    <div id="wrapper">

        <!-- Header -->

        @include('front.includes.header')

        <!-- /Header -->

        <!-- Slider -->

        <!-- /Slider -->

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
                    <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="collection-position-2 style-8 hover-img">
                                    <a class="img-style">
                                        <img class="lazyload" data-src="{{asset('front/images/cat/mcb.png')}}" src="{{asset('front/images/cat/mcb.png')}}" alt="electronic-cls">
                                    </a>
                                    <div class="top">
                                        <h5 class="font-5 fw-7 mb_4">Mcb & Rccb</h5>
                                        <p class="text-secondary">20 Products</p>
                                    </div>
                                    <div class="content d-flex justify-content-center">
                                        <a href="shop-default-grid.html" class="btn-style-6 wow fadeInUp text-button"><span class="text">View
                                                More</span><i class="icon icon-arrowUpRight"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-position-2 style-8 hover-img">
                                    <a class="img-style">
                                        <img class="lazyload" data-src="{{asset('front/images/cat/change-overs.png')}}" src="{{asset('front/images/cat/change-overs.png')}}" alt="electronic-cls">
                                    </a>
                                    <div class="top">
                                        <h5 class="font-5 fw-7 mb_4">Change Overs</h5>
                                        <p class="text-secondary">20 Products</p>
                                    </div>
                                    <div class="content d-flex justify-content-center">
                                        <a href="shop-default-grid.html" class="btn-style-6 wow fadeInUp text-button"><span class="text">View
                                                More</span><i class="icon icon-arrowUpRight"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-position-2 style-8 hover-img">
                                    <a class="img-style">
                                        <img class="lazyload" data-src="{{asset('front/images/cat/door-bell.png')}}" src="{{asset('front/images/cat/door-bell.png')}}" alt="electronic-cls">
                                    </a>
                                    <div class="top">
                                        <h5 class="font-5 fw-7 mb_4">Door Bell</h5>
                                        <p class="text-secondary">20 Products</p>
                                    </div>
                                    <div class="content d-flex justify-content-center">
                                        <a href="shop-default-grid.html" class="btn-style-6 wow fadeInUp text-button"><span class="text">View
                                                More</span><i class="icon icon-arrowUpRight"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="collection-position-2 style-8 hover-img">
                                    <a class="img-style">
                                        <img class="lazyload" data-src="{{asset('front/images/cat/distribution-boxes.png')}}" src="{{asset('front/images/cat/distribution-boxes.png')}}" alt="electronic-cls">
                                    </a>
                                    <div class="top">
                                        <h5 class="font-5 fw-7 mb_4">Distribution Boxes</h5>
                                        <p class="text-secondary">20 Products</p>
                                    </div>
                                    <div class="content d-flex justify-content-center">
                                        <a href="shop-default-grid.html" class="btn-style-6 wow fadeInUp text-button"><span class="text">View
                                                More</span><i class="icon icon-arrowUpRight"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
                    </div>
                    <div class="nav-next-recent d-none d-lg-flex nav-sw style-line nav-sw-left space-2"><i class="icon icon-arrLeft"></i></div>
                    <div class="nav-prev-recent d-none d-lg-flex nav-sw style-line nav-sw-right space-2"><i class="icon icon-arrRight"></i></div>
                </div>
            </div>
        </section>



        <!-- Collection -->
        <section class="flat-spacing pt-0">
            <div class="container">
                <div dir="ltr" class="swiper tf-sw-collection" data-preview="3" data-tablet="2" data-mobile-sm="1.7" data-mobile="1" data-space-lg="45" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                    <div class="swiper-wrapper">
                        <!-- Item 1 -->
                        <div class="swiper-slide">
                            <div class="collection-default abs-left-center rounded-0 hover-img wow fadeInUp" data-wow-delay="0s">
                                <a class="img-style">
                                    <img class="lazyload" data-src="{{asset('front/images/collections/cls-sock-1.jpg')}}" src="{{asset('front/images/collections/cls-sock-1.jpg')}}" alt="banner-cls">
                                </a>
                                <div class="content text-start">
                                    <div class="box-title">
                                        <h4 class="title">
                                            <a href="shop-default-grid.html" class="link">
                                                Sneaker Socks
                                            </a>
                                        </h4>
                                        <p>
                                            Reserved for special occasions
                                        </p>
                                    </div>
                                    <div class="box-btn">
                                        <a href="shop-default-grid.html" class="btn-line">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 2 -->
                        <div class="swiper-slide">
                            <div class="collection-default abs-left-center rounded-0 hover-img wow fadeInUp" data-wow-delay="0s">
                                <a class="img-style">
                                    <img class="lazyload" data-src="{{asset('front/images/collections/cls-sock-2.jpg')}}" src="{{asset('front/images/collections/cls-sock-2.jpg')}}" alt="banner-cls">
                                </a>
                                <div class="content text-start">
                                    <div class="box-title">
                                        <h4 class="title">
                                            <a href="shop-default-grid.html" class="link text-white">
                                                Socks Box
                                            </a>
                                        </h4>
                                        <p class="text-white">
                                            Reserved for special occasions
                                        </p>
                                    </div>
                                    <div class="box-btn">
                                        <a href="shop-default-grid.html" class="btn-line style-white">
                                            Shop Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="swiper-slide">
                            <div class="collection-default abs-left-center rounded-0 hover-img wow fadeInUp" data-wow-delay="0s">
                                <a class="img-style">
                                    <img class="lazyload" data-src="{{asset('front/images/collections/cls-sock-3.jpg')}}" src="{{asset('front/images/collections/cls-sock-3.jpg')}}" alt="banner-cls">
                                </a>
                                <div class="content text-start">
                                    <div class="box-title">
                                        <h4 class="title">
                                            <a href="shop-default-grid.html" class="link">
                                                Decor Socks
                                            </a>
                                        </h4>
                                        <p>
                                            Reserved for special occasions
                                        </p>
                                    </div>
                                    <div class="box-btn">
                                        <a href="shop-default-grid.html" class="btn-line">
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

        <div class="container py-4">
            <h2 class="mb-4">Explore Our Top Products</h2>

            <ul class="nav nav-pills mb-4 custom-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#" onclick="showContent('MCB')" id="nav-MCB"><i class="fas fa-bolt me-2"></i> MCB & RCCB</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('SWITCHES')" id="nav-SWITCHES"><i class="fas fa-toggle-on me-2"></i> Switches & Accessories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('DISTRIBUTION')" id="nav-DISTRIBUTION"><i class="fas fa-th-large me-2"></i> Distribution Boards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('WIRES')" id="nav-WIRES"><i class="fas fa-plug me-2"></i> Wires & Cables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('SWITCHGEARS')" id="nav-SWITCHGEARS"><i class="fas fa-cogs me-2"></i> Switchgears</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="showContent('ELECTRICAL')" id="nav-ELECTRICAL"><i class="fas fa-lightbulb me-2"></i> Electrical Accessories</a>
                </li>
            </ul>
        </div>




        <!-- New In Section -->
        <!-- Content Sections -->

        <div id="MCB" class="row g-4 content-section"">
            <!-- Card 1 -->
                <div class=" col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">GOLD SERIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">DIAMOND SERIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">PLATINUM SERIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 4 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">MODULAR MCB</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 5 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">ISOLATARS</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 6 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">CHANGEOVERS</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 7 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title"> RCCB's</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
    </div>

    <div id="SWITCHES" class="row g-4 content-section d-none">
        <!-- Card 1 -->
        <div class=" col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">MODULAR SWITCHES & ACCESSORIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB, designed for premium protection and durability.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">NON MODULAR SWITCHES & ACCESSORIES</h3>
                <p class="product-description">Add a touch of sophistication to your home with our Elena Switch featuring a cute silver plate design.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">MODULAR COVER PLATES</h3>
                <p class="product-description">Add a touch of sophistication to your home with our Elena Switch featuring a cute silver plate design.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
    </div>

    <div id="DISTRIBUTION" class="row g-4 content-section d-none">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt=" Washing Machine">
                </div>
                <h3 class="product-title">GOLD SERIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt=" Washing Machine">
                </div>
                <h3 class="product-title">DIAMOND SERIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">PLATINUM SERIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">WHITELINE SERIES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">METAL BOXES & JUNCTION BOXES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">SINGLE DOOR DISTRIBUITION BOX</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
    </div>

    <div id="WIRES" class="row g-4 content-section d-none">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">MULTY STRAND WIRES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">FLEXIBLE CABLES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">CABLE T.V. ,CCTV WIRE</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">TELEPHONE WIRE</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">MULTY CORE WIRES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">SERVICE CABLES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
    </div>

    <div id="SWITCHGEARS" class="row g-4 content-section d-none">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">BUSBARS</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">CHANGEOVERS</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">MAIN SWITCHES</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
    </div>

    <div id="ELECTRICAL" class="row g-4 content-section d-none">
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">SUB METERS</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">DOOR BELLS</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">BULB HOLDERS</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{asset('front/images/collections/grid-cls/DP.png')}}" alt="Washing Machine">
                </div>
                <h3 class="product-title">ELECTRICAL PVC TAPE</h3>
                <p class="product-description">Enhance your space with the GOLD SERIES MCB & RCCB.</p>
                <a href="#" class="view-btn">View More <i class="icon icon-arrowUpRight"></i></a>
            </div>
        </div>
    </div>


    <!-- Testimonial -->
    <section class="flat-spacing bg-surface">
        <div class="container">
            <div class="heading-section text-center wow fadeInUp">
                <h3 class="heading">Customer Say!</h3>
                <p class="subheading">Our customers adore our products, and we constantly aim to delight them.</p>
            </div>
            <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item style-2 style-3">
                            <div class="content-top">
                                <div class="box-icon">
                                    <i class="icon icon-quote"></i>
                                </div>
                                <div class="text-title">Variety of Styles!</div>
                                <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and friendly staff. Highly recommended. The quality of the products is exceptional, and the prices are very reasonable!"</p>
                                <div class="box-rate-author">
                                    <div class="box-author">
                                        <div class="text-title author">HBS</div>
                                        <svg class="icon" width="20" height="21" viewbox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
                    <div class="swiper-slide">
                        <div class="testimonial-item style-2 style-3">
                            <div class="content-top">
                                <div class="box-icon">
                                    <i class="icon icon-quote"></i>
                                </div>
                                <div class="text-title">Quality of Clothing!</div>
                                <p class="text-secondary">"I absolutely love this shop! The products are high-quality and the customer service is excellent. I always leave with exactly what I need and a smile on my face."</p>
                                <div class="box-rate-author">
                                    <div class="box-author">
                                        <div class="text-title author">HBS</div>
                                        <svg class="icon" width="20" height="21" viewbox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
                    <div class="swiper-slide">
                        <div class="testimonial-item style-2 style-3">
                            <div class="content-top">
                                <div class="box-icon">
                                    <i class="icon icon-quote"></i>
                                </div>
                                <div class="text-title">Customer Service!</div>
                                <p class="text-secondary">"I love this shop! The products are always top-quality, and the staff is incredibly friendly and helpful. They go out of their way to make sure that I'm satisfied with my purchase.”</p>
                                <div class="box-rate-author">
                                    <div class="box-author">
                                        <div class="text-title author">HBS</div>
                                        <svg class="icon" width="20" height="21" viewbox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
                    <div class="swiper-slide">
                        <div class="testimonial-item style-2 style-3">
                            <div class="content-top">
                                <div class="box-icon">
                                    <i class="icon icon-quote"></i>
                                </div>
                                <div class="text-title">Variety of Styles!</div>
                                <p class="text-secondary">"Fantastic shop! Great selection, fair prices, and friendly staff. Highly recommended. The quality of the products is exceptional, and the prices are very reasonable!"</p>
                                <div class="box-rate-author">
                                    <div class="box-author">
                                        <div class="text-title author">HBS</div>
                                        <svg class="icon" width="20" height="21" viewbox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_15758_14563)">
                                                <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
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
                </div>
                <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center"></div>
            </div>
        </div>
    </section>
    <!-- /Testimonial -->

    <!-- Footer Section Start -->
    @include('front.includes.footer')

    <!-- Footer Sectuin End -->

    </div>

    <!-- Footer Section Start -->
    @include('front.includes.footer-link')

    <!-- Footer Sectuin End -->
</body>

</html>