@extends('admin.layouts.master')
@section('title')
    Pages
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
                <li class="breadcrumb-item1 active text-muted">Pages</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">{{ isset($page) ? 'Page Update' : 'Page Create' }}</h3>
                    </div>
                    <div class="card-body">
                        <form
                            action="{{ isset($page) ? route('admin.pages.update', $page->id) : route('admin.pages.store') }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            @if (isset($page))
                                @method('PUT')
                            @endif
                            <div class="row">
                                <!-- Title Field -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Title <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="title" placeholder="Title"
                                            value="{{ isset($page) ? $page->title : old('title') }}">
                                    </div>
                                </div>

                                <!-- Content Field -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Content <span class="text-red">*</span></label>
                                        <textarea class="form-control" name="content" id="content24" placeholder="Content" rows="5">{{ isset($page) ? e($page->content) : e(old('content')) }}</textarea>
                                    </div>
                                </div>
                                <!-- Meta Title Field -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title"
                                            placeholder="Meta Title"
                                            value="{{ isset($page) ? $page->meta_title : old('meta_title') }}">
                                    </div>
                                </div>

                                <!-- Meta Keywords Field -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Meta Keywords</label>
                                        <input type="text" class="form-control" name="meta_keywords"
                                            placeholder="Meta Keywords (comma-separated)"
                                            value="{{ isset($page) ? $page->meta_keywords : old('meta_keywords') }}">
                                    </div>
                                </div>

                                <!-- Meta Description Field -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Meta Description</label>
                                        <textarea class="form-control" name="meta_description" placeholder="Meta Description" rows="3">{{ isset($page) ? e($page->meta_description) : e(old('meta_description')) }}</textarea>
                                    </div>
                                </div>

                               
                                <!-- Submit and Cancel Buttons -->
                                <div class="col-md-12 text-end">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-dark me-2">
                                            <i class="fe fe-check-circle"></i>
                                            {{ isset($page) ? 'Update' : 'Submit' }}
                                        </button>
                                        <a href="{{ route('admin.pages.index') }}" class="btn btn-outline-danger">
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


        document.addEventListener('DOMContentLoaded', () => {
            // Add canonical URL input
            const canonicalUrlWrapper = document.querySelector('#canonical-url-wrapper');

            const addCanonicalUrlInput = () => {
                const newInputRow = document.createElement('div');
                newInputRow.classList.add('input-group', 'mb-2', 'canonical-url-row');
                newInputRow.innerHTML = `
            <input type="url" class="form-control" name="canonical_url[]" placeholder="Canonical URL">
            <button type="button" class="btn btn-danger remove-canonical-url ms-2">
                <i class="fe fe-trash"></i>
            </button>
        `;
                canonicalUrlWrapper.appendChild(newInputRow);
            };

            const removeCanonicalUrlInput = (event) => {
                const button = event.target.closest('.remove-canonical-url');
                if (button) {
                    const inputRow = button.closest('.canonical-url-row');
                    inputRow.remove();
                }
            };

            // Event delegation for adding and removing inputs
            canonicalUrlWrapper.addEventListener('click', (event) => {
                if (event.target.closest('.add-canonical-url, .add-canonical-url *')) {
                    addCanonicalUrlInput();
                } else if (event.target.closest('.remove-canonical-url, .remove-canonical-url *')) {
                    removeCanonicalUrlInput(event);
                }
            });
        });
    </script>
@endpush
