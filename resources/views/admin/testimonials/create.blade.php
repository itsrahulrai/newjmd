@extends('admin.layouts.master')
@section('title')
    Testimonials
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
                <li class="breadcrumb-item1 active text-muted">Testimonials</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
               <div class="card mt-3">
    <div class="card-header">
        <h3 class="card-title">{{ isset($testimonial) ? 'Update Testimonial' : 'Create Testimonial' }}</h3>
    </div>
    <div class="card-body">
        <form
            action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial->id) : route('admin.testimonials.store') }}"
            method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($testimonial))
                @method('PUT')
            @endif
            <div class="row">
                 <!-- Image Field -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                         @isset($testimonial->image)
                            <div class="mt-3">
                                <img src="{{ asset($testimonial->image) }}" alt="Thumbnail"
                                    class="img-thumbnail" style="width: 150px; height: auto;">
                             </div>
                        @endisset
                    </div>
                </div>
                <!-- Name Field -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Name"
                               value="{{ isset($testimonial) ? $testimonial->name : old('name') }}">
                    </div>
                </div>

                <!-- Post Field -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Job Title <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="occupation" placeholder="Post (e.g., CEO, Manager)"
                               value="{{ isset($testimonial) ? $testimonial->occupation : old('occupation') }}">
                    </div>
                </div>
                <!-- Content Field -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Content <span class="text-red">*</span></label>
                        <textarea class="form-control" name="content" placeholder="Testimonial Content" rows="5">{{ isset($testimonial) ? e($testimonial->content) : e(old('content')) }}</textarea>
                    </div>
                </div>

                <!-- Submit and Cancel Buttons -->
                <div class="col-md-12 text-end">
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark me-2">
                            <i class="fe fe-check-circle"></i>
                            {{ isset($testimonial) ? 'Update' : 'Submit' }}
                        </button>
                        <a href="{{ route('admin.testimonials.index') }}" class="btn btn-outline-danger">
                            <i class="fe fe-x-circle"></i> Cancel
                        </a>
                    </div>
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
            $('#content1').richText();
        });
    </script>
@endpush
