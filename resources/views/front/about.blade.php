@extends('front.layouts.app')
@section('title')
About - JMD
@endsection
@section('content')
<!-- page-title -->
<div class="page-title" style="background-image: url({{asset('front/images/section/page-title.jpg')}});">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h3 class="heading text-center">About</h3>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li>
                        <a class="link" href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <i class="icon-arrRight"></i>
                    </li>
                    <li>
                        <a class="link" href="#">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /page-title -->

<!-- about-us -->
<section class="flat-spacing about-us-main pb_0 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="about-us-features wow fadeInLeft">
                    <img class="lazyload" data-src="{{asset('front/images/banner/banner-baby.jpg')}}" src="{{asset('front/images/banner/banner-baby.jpg')}}" alt="image-team">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-us-content">
                    <h3 class="title wow fadeInUp">Modave – Offering rare and beautiful items worldwide</h3>
                    <div class="widget-tabs style-3">
                        <ul class="widget-menu-tab wow fadeInUp">
                            <li class="item-title active">
                                <span class="inner text-button">Introduction</span>
                            </li>
                            <li class="item-title">
                                <span class="inner text-button">Our Vision</span>
                            </li>
                            <li class="item-title">
                                <span class="inner text-button">What Sets Us Apart</span>
                            </li>
                            <li class="item-title">
                                <span class="inner text-button">Our Commitment</span>
                            </li>
                        </ul>
                        <div class="widget-content-tab wow fadeInUp">
                            <div class="widget-content-inner active">
                                <p>Welcome to Modave Store, your premier destination for fashion-forward clothing and accessories. We pride ourselves on offering a curated selection of rare and beautiful items sourced both locally and globally. Our mission is to bring you the latest trends and timeless styles, ensuring every piece reflects quality and elegance. Discover the perfect addition to your wardrobe at Modave Store.</p>
                            </div>
                            <div class="widget-content-inner">
                                <p>Welcome to Modave Store, your premier destination for fashion-forward clothing and accessories. We pride ourselves on offering a curated selection of rare and beautiful items sourced both locally and globally. Our mission is to bring you the latest trends and timeless styles, ensuring every piece reflects quality and elegance. Discover the perfect addition to your wardrobe at Modave Store.</p>
                            </div>
                            <div class="widget-content-inner">
                                <p>Welcome to Modave Store, your premier destination for fashion-forward clothing and accessories. We pride ourselves on offering a curated selection of rare and beautiful items sourced both locally and globally. Our mission is to bring you the latest trends and timeless styles, ensuring every piece reflects quality and elegance. Discover the perfect addition to your wardrobe at Modave Store.</p>
                            </div>
                            <div class="widget-content-inner">
                                <p>Welcome to Modave Store, your premier destination for fashion-forward clothing and accessories. We pride ourselves on offering a curated selection of rare and beautiful items sourced both locally and globally. Our mission is to bring you the latest trends and timeless styles, ensuring every piece reflects quality and elegance. Discover the perfect addition to your wardrobe at Modave Store.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#" class="tf-btn btn-fill wow fadeInUp"><span class="text text-button">Read More</span></a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /about-us -->


@endsection
