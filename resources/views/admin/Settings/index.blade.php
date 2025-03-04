@extends('admin.layouts.master')
@section('title')
    Settings
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
                <li class="breadcrumb-item1 active text-muted">Settings</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-1 OPEN -->
        <div class="row">

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Settings</h3>
                    </div>
                    <div class="card-body p-6">
                        <div class="panel panel-primary">
                            <div class=" tab-menu-heading">
                                <div class="tabs-menu1 ">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab5" class="active me-1" data-bs-toggle="tab">Web</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab" class="me-1">SMTP</a></li>
                                        <li><a href="#tab7" data-bs-toggle="tab" class="me-1">Social</a></li>
                                        <!-- <li><a href="#tab8" data-bs-toggle="tab">Tab 4</a></li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="tab5">
                                       @include('admin.Settings.web')   
                                    </div>
                                    <div class="tab-pane " id="tab6">
                                       @include('admin.Settings.smtp')
                                       
                                    </div>
                                    <div class="tab-pane " id="tab7">
                                       @include('admin.Settings.social')

                                       
                                    </div>
                                    <!-- <div class="tab-pane " id="tab8">
                                        <p>page editors now use Lorem Ipsum as their default model text, and a search for
                                            'lorem ipsum' will uncover many web sites still in their infancy. Various
                                            versions have evolved over the years, sometimes by accident, sometimes on
                                            purpose (injected humour and the like</p>
                                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                            tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At
                                            vero eos et</p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- COL-END -->

        </div>
        <!-- ROW-1 CLOSED -->



    </div>
@endsection

@push('script')
@endpush
