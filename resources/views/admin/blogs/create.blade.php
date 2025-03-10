@extends('admin.layouts.master')
@section('title')
    Blogs
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
                <li class="breadcrumb-item1 active text-muted">Blogs</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">{{ isset($blog) ? 'Blogs Update' : 'Blogs Create' }}</h3>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (isset($blog))
                                @method('PUT')
                            @endif

                            <div class="row">
                                <!-- Name Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Name <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            value="{{ old('name', $blog->name ?? '') }}">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Category <span class="text-red">*</span></label>
                                        <select class="form-control" name="category_id">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ (isset($blog) && $blog->category_id == $category->id) || old('category_id') == $category->id ? 'selected' : '' }}>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- Thumbnail Field -->
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Thumbnail</label>
                                        <input type="file" class="form-control" name="thumbnail">
                                        @isset($blog->thumbnail)
                                            <div class="mt-3">
                                                <img src="{{ asset($blog->thumbnail) }}" alt="Thumbnail" class="img-thumbnail"
                                                    style="width: 150px; height: auto;">
                                            </div>
                                        @endisset

                                    </div>
                                </div>
                               
                                <!-- Content Field -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Content <span class="text-red">*</span></label>
                                        <textarea class="form-control" name="content" id="content22" rows="5" placeholder="Content">{{ old('content', $blog->content ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Meta Title Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title"
                                            placeholder="Meta Title"
                                            value="{{ old('meta_title', $blog->meta_title ?? '') }}">
                                    </div>
                                </div>

                                <!-- Meta Description Field -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" name="meta_description" rows="3" placeholder="Meta Description">{{ old('meta_description', $blog->meta_description ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Meta Keywords Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" class="form-control" name="meta_keywords"
                                            placeholder="Meta Keywords (comma-separated)"
                                            value="{{ old('meta_keywords', $blog->meta_keywords ?? '') }}">
                                    </div>
                                </div>

                                <!-- OG Title Field for Social Media -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">OG Title (for Social Media)</label>
                                        <input type="text" class="form-control" name="og_title"
                                            placeholder="OG Title" value="{{ old('og_title', $blog->og_title ?? '') }}">
                                    </div>
                                </div>

                                <!-- OG Description Field for Social Media -->
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label">OG Description (for Social Media)</label>
                                        <textarea class="form-control" name="og_description" rows="3" placeholder="OG Description">{{ old('og_description', $blog->og_description ?? '') }}</textarea>
                                    </div>
                                </div>

                                <!-- Submit and Cancel Buttons -->
                                <div class="card-footer text-end mx-3">
                                    <button type="submit" class="btn btn-dark me-2">
                                        <i class="fe fe-check-circle"></i>
                                        {{ isset($blog) ? 'Update' : 'Submit' }}
                                    </button>
                                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-outline-danger">
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

@endpush
