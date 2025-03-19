@extends('front.layouts.app')
@section('title')
Blogs - JMD
@endsection
@push('style')

@endpush
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

                  @foreach($blogs->take(3) as $blog)
    <div class="blog-card"
        style="border-radius: 10px; overflow: hidden; box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.08); background: #fff; padding: 12px; margin-bottom: 15px; display: flex; flex-direction: column; border: 1px solid #ddd; height: 100%;">

        <!-- Blog Image -->
        <div class="blog-image" style="border-radius: 8px; overflow: hidden; height: 200px;">
            <a href="{{ route('blogs.details', $blog->slug) }}">
                <img class="lazyload" data-src="{{ asset($blog->thumbnail) }}" 
                     src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->name }}"
                     style="width: 100%; height: 100%; object-fit: cover;">
            </a>
        </div>

        <!-- Blog Content -->
        <div class="blog-content" style="padding: 12px; flex-grow: 1; display: flex; flex-direction: column;">
            <!-- Meta Info -->
            <div class="meta" style="display: flex; justify-content: space-between; font-size: 12px; color: #777; margin-bottom: 6px;">
                <div class="meta-item" style="display: flex; align-items: center; gap: 3px;">
                    <i class="icon-calendar" style="color: #dc3545;"></i>
                    <span>{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y') }}</span>
                </div>
                <div class="meta-item" style="display: flex; align-items: center; gap: 3px;">
                    <i class="icon-user" style="color: #dc3545;"></i>
                    <span>by <a href="#" style="font-weight: 500; color: #dc3545;">JMD</a></span>
                </div>
            </div>

            <!-- Blog Title -->
            <h5 class="title" style="font-size: 16px; font-weight: 600; color: #333; margin-bottom: 4px;">
                <a href="{{ route('blogs.details', $blog->slug) }}" style="color: #333; text-decoration: none;">
                    {{ $blog->name }}
                </a>
            </h5>

            <!-- Blog Description -->
            <p class="body-text" style="font-size: 13px; color: #555; margin: 6px 0; height: 45px; overflow: hidden;">
                {!! Str::limit(strip_tags($blog->content), 75) !!}
            </p>

            <!-- Read More Button -->
            <a href="{{ route('blogs.details', $blog->slug) }}"
                style="display: inline-block; padding: 6px 12px; background: #dc3545; color: white; text-decoration: none; border-radius: 5px; font-size: 12px; text-align: center; margin-top: auto;">
                Read More
            </a>
        </div>
    </div>
@endforeach


                    <!-- Pagination -->
                    @if ($blogs->hasPages())
                    <ul class="wg-pagination justify-content-center">
                        <!-- Previous Page -->
                        @if ($blogs->onFirstPage())
                        <li class="disabled">
                            <div class="pagination-item text-button"><i class="icon-arrLeft"></i></div>
                        </li>
                        @else
                        <li>
                            <a href="{{ $blogs->previousPageUrl() }}" class="pagination-item text-button">
                                <i class="icon-arrLeft"></i>
                            </a>
                        </li>
                        @endif

                        <!-- Page Numbers -->
                        @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                        @if ($page == $blogs->currentPage())
                        <li class="active">
                            <div class="pagination-item text-button">{{ $page }}</div>
                        </li>
                        @else
                        <li>
                            <a href="{{ $url }}" class="pagination-item text-button">{{ $page }}</a>
                        </li>
                        @endif
                        @endforeach

                        <!-- Next Page -->
                        @if ($blogs->hasMorePages())
                        <li>
                            <a href="{{ $blogs->nextPageUrl() }}" class="pagination-item text-button">
                                <i class="icon-arrRight"></i>
                            </a>
                        </li>
                        @else
                        <li class="disabled">
                            <div class="pagination-item text-button"><i class="icon-arrRight"></i></div>
                        </li>
                        @endif
                    </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<!-- /blog-grid -->
@endsection