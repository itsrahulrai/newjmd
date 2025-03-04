@extends('admin.layouts.master')
@section('title')
    Gallery
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
                <li class="breadcrumb-item1 active text-muted">Gallery</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">{{ isset($gallery) ? 'Gallery Update' : 'Gallery Create' }}</h3>

                    </div>


                    <div class="card-body">
                        <form
                            action="{{ isset($gallery) ? route('admin.galleries.update', $gallery->id) : route('admin.galleries.store') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (isset($gallery))
                                @method('PUT')
                            @endif
                            <div class="row">
                                <!-- Gallery Category Selection -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Category <span class="text-red">*</span></label>
                                      <select class="form-control" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    @if (isset($gallery) && $category->id == $gallery->category_id) selected @endif>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Gallery Name Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="title" placeholder="Name"
                                            value="{{ isset($gallery) ? $gallery->title : old('title') }}">
                                    </div>
                                </div>

                                <!-- Thumbnail Upload -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Thumbnail <span class="text-red">*</span></label>
                                        <input type="file" class="form-control" name="thumbnail">
                                        <!-- Display existing thumbnail if available -->
                                        @isset($gallery->thumbnail)
                                            <div class="mt-3">
                                                <img src="{{ asset($gallery->thumbnail) }}" alt="Thumbnail"
                                                    class="img-thumbnail" style="width: 150px; height: auto;">
                                            </div>
                                        @endisset
                                    </div>
                                </div>

                                <!-- Multiple Images Upload -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Upload Images (Multiple) <span
                                                class="text-red">*</span></label>
                                        <input type="file" class="form-control" name="image_path[]" multiple>

                                        <!-- Display existing images if available -->
                                        @isset($gallery->images)
                                            @if ($gallery->images->count())
                                                <div class="existing-images mt-3">
                                                    @foreach ($gallery->images as $image)
                                                        <div class="existing-image mb-3"
                                                            style="display: inline-block; margin-right: 10px; text-align: center;">
                                                            <img src="{{ asset($image->image_path) }}" alt="Image"
                                                                class="img-thumbnail"
                                                                style="width: 100px; height: 100px; object-fit: cover;">
                                                            <div class="delete-footer" style="margin-top: 10px;">
                                                                 <a href="{{ route('admin.images.destroy', $image->id) }}"
                                                                        class="btn btn-danger btn-square delete-item  br-50 m-1"
                                                                        data-bs-toggle="tooltip" title=""
                                                                        data-bs-original-title="Delete"><i class="fe fe-trash fs-13"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        @endisset
                                    </div>
                                </div>


                                <!-- JavaScript to handle image deletion -->

                                <!-- Submit and Cancel Buttons -->
                                <div class="card-footer text-end mx-3">
                                    <button type="submit" class="btn btn-primary me-2">
                                        <i class="fe fe-check-circle"></i>
                                        {{ isset($plan) ? 'Update' : 'Submit' }}
                                    </button>
                                    <a href="#" class="btn btn-outline-danger">
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
    <!-- JavaScript to handle image deletion -->
    {{-- <script>
    function deleteImage(imageId) {
        if (confirm('Are you sure you want to delete this image?')) {
        $.ajax({
            url: '{{ route("admin.images.destroy", ":id") }}'.replace(':id', imageId),
            method: 'DELETE',
            success: () => Swal.fire('Success', 'Image deleted successfully', 'success'),
            error: () => Swal.fire('Error', 'Failed to delete Image .', 'error')
        });
        }
    }
</script> --}}
@endpush
