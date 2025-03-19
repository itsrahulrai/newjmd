@extends('front.layouts.app')
@section('title')
Product Details - JMD
@endsection
@section('content')
<div class="container d-flex flex-column justify-content-center align-items-center vh-100">
    <div class="text-center">
        <!-- Undraw 404 Illustration -->
        <img src="{{asset('page-not-found_6wni.svg')}}" 
             alt="Page Not Found" 
             class="img-fluid" 
             style="max-width: 400px;">
             
        <h1 class="display-1 fw-bold text-danger mt-3">404</h1>
        <h2 class="text-dark fw-semibold">Oops! Page Not Found</h2>
        <p class="text-muted">Sorry, the page you are looking for doesn’t exist or has been moved.</p>
        
        <a href="{{ url('/') }}" class="btn btn-danger mt-3">
            <i class="fas fa-home me-2"></i>Back to Home
        </a>
    </div>
</div>

@endsection
