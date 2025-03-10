@extends('front.layouts.app')
@section('title')
Blogs Details - JMD
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
                        <a class="link" href="index.html">Home</a>
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

<!-- blog-detail -->
<section class="flat-spacing">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-lg-30">
                <!-- Blog Details Section -->
                <div class="blog-detail-wrap page-single-2">
                    <div class="inner">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset($blog->thumbnail) }}" src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->name }}">
                        </div>
                        <div class="heading">
                            <h3 class="fw-5">{{ $blog->name }}</h3>
                            <div class="meta">
                                <div class="meta-item gap-8">
                                    <div class="icon">
                                        <i class="icon-calendar"></i>
                                    </div>
                                    <p class="body-text-1">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</p>
                                </div>
                                <div class="meta-item gap-8">
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                    <p class="body-text-1">by <a class="link" href="#">JMD</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <p class="body-text-1 mb_12">{!! $blog->content !!}</p>
                        </div>
                        <hr>
                    </div>
                </div>



            </div>
            <div class="col-lg-4">
                <div class="sidebar maxw-360">

                    <!-- Latest Posts Sidebar -->
                    <div class="sidebar-item sidebar-relatest-post">
                        <h5 class="sidebar-heading related-post fw-bold">Latest Posts</h5>
                        <div>
                            @foreach($latestBlogs as $latestBlog)
                            <div class="relatest-post-item style-row hover-image">
                                <div class="image">
                                    <img class="lazyload" data-src="{{ asset($latestBlog->thumbnail) }}" src="{{ asset($latestBlog->thumbnail) }}" alt="{{ $latestBlog->name }}">
                                </div>
                                <div class="content">
                                    <div class="meta">
                                        <div class="meta-item gap-8">
                                            <p class="text-caption-1">{{ \Carbon\Carbon::parse($latestBlog->created_at)->format('F d, Y') }}</p>
                                        </div>
                                        <div class="meta-item gap-8">
                                            <p class="text-caption-1">by <a class="link" href="#">JMD</a></p>
                                        </div>
                                    </div>
                                    <div class="title text-title">
                                        <a class="link" href="{{ route('blogs.details', $latestBlog->slug) }}">{{ $latestBlog->name }}</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /blog-detail -->

@endsection