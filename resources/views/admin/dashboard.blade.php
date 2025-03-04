@extends('admin.layouts.master')
@section('title')
Dashboard
@endsection
@push('style')
    
@endpush
@section('content')
    <div class="side-app">


        <!-- PAGE-HEADER -->
        <div class="breadcrumb-6">
            <ol class="breadcrumb1 mb-0">
                <li class="breadcrumb-item1 active"><i class="fa fa-home me-1 text-transparant" aria-hidden="true"></i>Home
                </li>
                <li class="breadcrumb-item1 active text-muted">Dashboard</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Categories</h6>
                                        <h3 class="mb-2 number-font">{{ $categories}}</h3>
                                        <p class="text-muted mb-0">
                                            
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="counter-icon bg-primary-gradient box-shadow-primary brround ms-auto">
                                            <i class="fe fe-layers text-white mb-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Product</h6>
                                        <h3 class="mb-2 number-font">{{ $product}}</h3>
                                        <p class="text-muted mb-0">
                                           
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="counter-icon bg-danger-gradient box-shadow-danger brround  ms-auto">
                                            <i class="fe fe-package text-white mb-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Enquiry</h6>
                                        <h3 class="mb-2 number-font">00</h3>
                                        <p class="text-muted mb-0">
                                            
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div
                                            class="counter-icon bg-secondary-gradient box-shadow-secondary brround ms-auto">
                                            <i class="fe fe-message-circle text-white mb-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xl-3">
                        <div class="card overflow-hidden">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <h6 class="">Testimonials</h6>
                                        <h3 class="mb-2 number-font">{{ $testimonails}}</h3>
                                        <p class="text-muted mb-0">
                                            
                                        </p>
                                    </div>
                                    <div class="col col-auto">
                                        <div class="counter-icon bg-success-gradient box-shadow-success brround  ms-auto">
                                            <i class="fe fe-briefcase text-white mb-5 "></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ROW-1 END -->






    </div>
@endsection
