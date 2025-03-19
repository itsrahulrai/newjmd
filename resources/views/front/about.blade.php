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
                    <img class="lazyload" data-src="{{asset('front/images/banner/about.jpg')}}" src="{{asset('front/images/banner/banner-baby.jpg')}}" alt="image-team">
                </div>
            </div>
            <div class="col-md-6">
                <div class="about-us-content">
                    <h3 class="title wow fadeInUp">JMD – Powering Innovation, Enhancing Life</h3>
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
                            <!-- Introduction -->
                            <div class="widget-content-inner active">
                                <p>Welcome to **JMD Electronics**, your trusted destination for high-quality electrical solutions. We specialize in **Distribution Boards, MCBs & RCCBs, Switches & Accessories, Switchgears, Wires & Cables, and Door Bells**. With a commitment to innovation and safety, we provide products that enhance both residential and commercial electrical systems. At JMD, we believe in powering your world with efficiency, reliability, and cutting-edge technology.</p>
                            </div>
                            <!-- Our Vision -->
                            <div class="widget-content-inner">
                                <p>At **JMD Electronics**, our vision is to become a global leader in the electrical industry by delivering **high-performance, energy-efficient, and innovative solutions**. We strive to **enhance everyday living and business operations** with safe and durable electrical products. Our goal is to empower customers with **state-of-the-art technology** that makes electrical systems smarter and more sustainable.</p>
                            </div>
                            <!-- What Sets Us Apart -->
                            <div class="widget-content-inner">
                                <p>What makes **JMD Electronics** stand out is our **unwavering commitment to quality, customer satisfaction, and innovation**. Our products undergo **rigorous quality checks** to ensure safety and efficiency. With a **customer-first approach**, we offer **competitive pricing, exceptional after-sales support, and cutting-edge designs** that set new benchmarks in the industry. We focus on providing **modern and reliable electrical solutions** that cater to homes, businesses, and industries.</p>
                            </div>
                            <!-- Our Commitment -->
                            <div class="widget-content-inner">
                                <p>At **JMD Electronics**, we are dedicated to **delivering excellence in electrical solutions**. Our commitment extends beyond just selling products – we **ensure safety, reliability, and innovation** in everything we offer. We continuously invest in **research and development**, ensuring our customers receive the **latest technology** with the **best performance and longevity**. With **JMD, you are not just buying a product; you are investing in quality and trust.**</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- /about-us -->


@endsection