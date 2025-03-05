@extends('front.layouts.app')
@section('title')
Blogs - JMD
@endsection
@section('content')
  <!-- page-title -->
  <div class="page-title" style="background-image: url({{asset('front/images/section/page-title.jpg')}});">
            <div class="container-full">
                <div class="row">
                    <div class="col-12">
                        <h3 class="heading text-center">Blogs</h3>
                        <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                            <li>
                                <a class="link" href="{{route('home')}}">Home</a>
                            </li>
                            <li>
                                <i class="icon-arrRight"></i>
                            </li>
                            <li>
                                <a class="link" href="#">Blogs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page-title -->

        <!-- blog-grid -->
        <div class="main-content-page">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="tf-grid-layout md-col-3">
                            <div class="wg-blog style-1 hover-image">
                                <div class="image">
                                    <img class="lazyload" data-src="{{asset('front/images/blog/blog-grid-1.jpg')}}" src="{{asset('front/images/blog/blog-grid-1.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-calendar"></i>
                                            </div>
                                            <p class="text-caption-1">February 28, 2024</p>
                                        </div>
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-user"></i>
                                            </div>
                                            <p class="text-caption-1">by <a class="link" href="#">JMD</a></p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="title fw-5">
                                            <a class="link" href="{{route('blogs.details')}}">How Technology is Transforming the Industry</a>
                                        </h6>
                                        <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="wg-blog style-1 hover-image">
                                <div class="image">
                                    <img class="lazyload" data-src="{{asset('front/images/blog/blog-grid-2.jpg')}}" src="{{asset('front/images/blog/blog-grid-2.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-calendar"></i>
                                            </div>
                                            <p class="text-caption-1">February 28, 2024</p>
                                        </div>
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-user"></i>
                                            </div>
                                            <p class="text-caption-1">by <a class="link" href="#">JMD</a></p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="title fw-5">
                                            <a class="link" href="{{route('blogs.details')}}">The Future of Fashion How Technology Transforms the Industry</a>
                                        </h6>
                                        <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="wg-blog style-1 hover-image">
                                <div class="image">
                                    <img class="lazyload" data-src="{{asset('front/images/blog/blog-grid-2.jpg')}}" src="{{asset('front/images/blog/blog-grid-2.jpg')}}" alt="">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-calendar"></i>
                                            </div>
                                            <p class="text-caption-1">February 28, 2024</p>
                                        </div>
                                        <div class="meta-item gap-8">
                                            <div class="icon">
                                                <i class="icon-user"></i>
                                            </div>
                                            <p class="text-caption-1">by <a class="link" href="#">JMD</a></p>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="title fw-5">
                                            <a class="link" href="{{route('blogs.details')}}    ">The Future of Fashion How Technology Transforms the Industry</a>
                                        </h6>
                                        <div class="body-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed vulputate massa.</div>
                                    </div>
                                </div>
                            </div>


                            <ul class="wg-pagination justify-content-center">
                                <li><a href="#" class="pagination-item text-button">1</a></li>
                                <li class="active">
                                    <div class="pagination-item text-button">2</div>
                                </li>
                                <li><a href="#" class="pagination-item text-button">3</a></li>
                                <li><a href="#" class="pagination-item text-button"><i class="icon-arrRight"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /blog-grid -->
@endsection
