@extends('admin.layouts.master')
@section('title')
Category
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
            <li class="breadcrumb-item1 active text-muted">Category</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">{{ isset($category) ? 'Category Update' : 'Category Create' }}</h3>

                </div>


                <div class="card-body">
                    <form action="{{ isset($category) ? route('admin.category.update', $category->id) : route('admin.category.store') }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        @if (isset($category))
                        @method('PUT')
                        @endif
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Name <span class="text-red">*</span></label>
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                        value="{{ isset($category) ? $category->name : old('name') }}">
                                    @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Image Upload -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image">
                                    @if (isset($category) && $category->image)
                                    <img src="{{ asset($category->image) }}" class="mt-2" width="100">
                                    @endif
                                    @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Category Icon</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="icon" id="icon-input"
                                            placeholder="Select an icon" value="{{ isset($category) ? $category->icon : old('icon') }}" readonly>
                                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#iconModal">
                                            <i class="fas fa-icons"></i>
                                        </button>
                                    </div>
                                    <span class="mt-2 d-inline-block">
                                        <i id="icon-preview" class="{{ isset($category) ? $category->icon : 'fas fa-icons' }}" style="font-size: 24px;"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="card-footer text-end mx-3">
                                <button type="submit" class="btn btn-dark me-2">
                                    <i class="fe fe-check-circle"></i>
                                    {{ isset($category) ? 'Update' : 'Submit' }}
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

<!-- Icon Selection Modal -->
<div class="modal fade" id="iconModal" tabindex="-1" aria-labelledby="iconModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="iconModalLabel">Select an Icon</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    @php
                    $icons = [
                    'fas fa-bolt', 'fas fa-toggle-on', 'fas fa-th-large', 'fas fa-plug',
                    'fas fa-cogs', 'fas fa-lightbulb', 'fas fa-wrench', 'fas fa-tools',
                    'fas fa-power-off', 'fas fa-battery-full', 'fas fa-solar-panel'
                    ];
                    @endphp
                    @foreach ($icons as $icon)
                    <div class="col-md-3 text-center mb-3">
                        <button class="btn btn-outline-primary icon-select-btn" data-icon="{{ $icon }}">
                            <i class="{{ $icon }}" style="font-size: 24px;"></i>
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection


@push('script')
<script>
    document.querySelectorAll('.icon-select-btn').forEach(button => {
        button.addEventListener('click', function() {
            let selectedIcon = this.getAttribute('data-icon');
            document.getElementById("icon-input").value = selectedIcon;
            document.getElementById("icon-preview").className = selectedIcon;
            new bootstrap.Modal(document.getElementById('iconModal')).hide();
        });
    });
</script>


@endpush