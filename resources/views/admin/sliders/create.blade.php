@extends('admin.layouts.master')
@section('title')
    Sliders
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
                <li class="breadcrumb-item1 active text-muted">Sliders</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">{{ isset($slider) ? 'Sliders Update' : 'Sliders Create' }}</h3>

                    </div>


                    <div class="card-body">
                        <form
                            action="{{ isset($slider) ? route('admin.slider.update', $slider->id) : route('admin.slider.store') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (isset($slider))
                                @method('PUT')
                            @endif
                            <div class="row">
                               
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Image 1</label>
                                        <input type="file" class="form-control" name="image1">
                                         @isset($slider->image1)
                                            <div class="mt-3">
                                                <img src="{{ asset($slider->image1) }}" alt="Image1"
                                                    class="img-thumbnail" style="width: 150px; height: auto;">
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Image 2</label>
                                        <input type="file" class="form-control" name="image2">
                                         @isset($slider->image1)
                                            <div class="mt-3">
                                                <img src="{{ asset($slider->image2) }}" alt="Image2"
                                                    class="img-thumbnail" style="width: 150px; height: auto;">
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Image 3</label>
                                        <input type="file" class="form-control" name="image3">
                                          @isset($slider->image3)
                                            <div class="mt-3">
                                                <img src="{{ asset($slider->image3) }}" alt="Image3"
                                                    class="img-thumbnail" style="width: 150px; height: auto;">
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Image 4</label>
                                        <input type="file" class="form-control" name="image4">
                                         @isset($slider->image4)
                                            <div class="mt-3">
                                                <img src="{{ asset($slider->image4) }}" alt="Image4"
                                                    class="img-thumbnail" style="width: 150px; height: auto;">
                                            </div>
                                        @endisset
                                    </div>
                                </div>
                                 <!-- Title Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title 1<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="title1" placeholder="Slider Title 1"
                                            value="{{ isset($slider) ? $slider->title1 : old('title1') }}">
                                    </div>
                                </div>
                                 <!-- Title Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title 2<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="title2" placeholder="Slider Title 2"
                                            value="{{ isset($slider) ? $slider->title2 : old('title2') }}">
                                    </div>
                                </div>
                                 <!-- Title Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title 3<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="title3" placeholder="Slider Title 3"
                                            value="{{ isset($slider) ? $slider->title3 : old('title3') }}">
                                    </div>
                                </div>
                                 <!-- Title Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Title 4<span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="title4" placeholder="Slider Title 4"
                                            value="{{ isset($slider) ? $slider->title4 : old('title4') }}">
                                    </div>
                                </div>


                                <!-- Submit and Cancel Buttons -->
                                <div class="card-footer text-end mx-3">
                                    <button type="submit" class="btn btn-primary me-2">
                                        <i class="fe fe-check-circle"></i>
                                        {{ isset($slider) ? 'Update' : 'Submit' }}
                                    </button>
                                    <a href="" class="btn btn-outline-danger">
                                        <i class="fe fe-x-circle"></i> Cancel
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>




                </div>

            </div>

        </div><!-- COL-END -->
        <!-- ROW-1 CLOSED -->
    </div>
@endsection


@push('script')
    <script>
        $(document).ready(function() {
            // Initialize WYSIWYG editor for the 'Description' textareas
            $('.content1').richText();
            $('#content2').richText();
        });
    </script>
@endpush
