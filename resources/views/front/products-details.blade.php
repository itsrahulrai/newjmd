@extends('front.layouts.app')
@section('title')
Product Details - JMD
@endsection
@push('style')
 <style>
     
        .product-image {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .thumbnail-container {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }
        .thumbnail img {
            width: 60px;
            height: 60px;
            border-radius: 5px;
            cursor: pointer;
            border: 2px solid transparent;
        }
        .thumbnail img:hover,
        .thumbnail img.active {
            border: 2px solid #007bff;
        }
        .product-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-top: 25px;
        }
        .product-price {
            font-size: 1.2rem;
            color: #28a745;
            font-weight: bold;
        }
        .product-table {
            width: 100%;
        }
        .product-table th,
        .product-table td {
            padding: 8px;
            border: 1px solid #ddd;
        }
       
    </style>
    <style>
    .image-container {
        overflow: hidden;
        border-radius: 8px;
    }

    .product-image {
        transition: transform 0.3s ease-in-out;
    }

    .product-image:hover {
        transform: scale(1.1);
    }
    tr{
        border: 1px solid #e9e9e9;
    }
      td{
        border: 1px solid #e9e9e9;
    }
</style>
@endpush
@section('content')
<!-- page-title -->
<div class="page-title" style="background-image: url({{asset('front/images/section/page-title.jpg')}});">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h3 class="heading text-center">{{$product->name}}</h3>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li>
                        <a class="link" href="{{route('home')}}">Homepage</a>
                    </li>
                    <li>
                        <i class="icon-arrRight"></i>
                    </li>
                    <li>
                        {{$product->name}}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /page-title -->

<!-- Product_Main -->


<div class="container my-5 border p-4 rounded">
    <div class="row">
        
        <!-- Product Images -->
       <div class="col-md-5">
    <div class="border p-3 rounded overflow-hidden">
        <div class="image-container">
            <img src="{{ $product->image ? asset($product->image) : asset('assets/admin/images/dummyproductimage.png') }}" 
                 alt="Main Product Image" 
                 class="product-image w-100 rounded">
        </div>
    </div>
</div>



        <!-- Product Info -->
        <div class="col-md-7">
            <div class="product-container">
                <h2 class="product-title">{{$product->name  }}</h2>
                <!--<a href="#" class="text-danger"><i class="fa fa-file-pdf"></i> Product Brochure</a>-->
                  <p class="mt-3 text-muted">
                       {!! $product->shortdesc !!}
                    </p>
                <table class="product-table mt-3">
                    <p class="mt-3 text-muted">
                        {!! $product->desc !!}
                    </p>
                    </table>

              <div class="text-start">
                    <button data-bs-toggle="modal" data-bs-target="#callbackModal" data-product-id="{{ $product->id }}" 
                        class="btn btn-danger w-50 mt-3 fw-bold">
                        <i class="fas fa-phone me-2"></i> Request a Callback
                    </button>
                </div>


            </div>
        </div>

    </div>
</div>



<!-- /Product_Main -->
@endsection