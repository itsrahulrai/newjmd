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


                    @foreach($blogs as $blog)
                    <div class="wg-blog style-1 hover-image">
                        <div class="image">
                            <img class="lazyload" data-src="{{ asset($blog->thumbnail) }}" src="{{ asset($blog->thumbnail) }}" alt="{{ $blog->name }}">
                        </div>
                        <div class="content">
                            <div class="meta">
                                <div class="meta-item gap-8">
                                    <div class="icon">
                                        <i class="icon-calendar"></i>
                                    </div>
                                    <p class="text-caption-1">{{ \Carbon\Carbon::parse($blog->created_at)->format('F d, Y') }}</p>
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
                                    <a class="link" href="{{ route('blogs.details', $blog->slug) }}">{{ $blog->name }}</a>
                                </h6>
                                <div class="body-text">{!! Str::limit(strip_tags($blog->content), 150) !!}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                    <ul class="wg-pagination justify-content-center">
                        @if ($blogs->hasPages())
                        <ul class="wg-pagination justify-content-center">
                            {{-- Previous Page Link --}}
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

                            {{-- Page Numbers --}}
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

                            {{-- Next Page Link --}}
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
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- /blog-grid -->
@endsection