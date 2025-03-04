@extends('admin.layouts.master')
@section('title')
     Product
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
                <li class="breadcrumb-item1 active text-muted">Product</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
            <div class="card mt-3">
    <div class="card-header">
        <h3 class="card-title">{{ isset($product) ? 'Product Update' : 'Product Create' }}</h3>
    </div>

    <div class="card-body">
        <form action="{{ isset($product) ? route('admin.product.update', $product->id) : route('admin.product.store') }}" 
              method="post" enctype="multipart/form-data">
            @csrf
            @if (isset($product))
                @method('PUT')
            @endif

            <div class="row">
                <!-- Category Dropdown -->
                <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Category <span class="text-red">*</span></label>
                    <select class="form-control" name="category_id" id="categorySelect" required>
                        <option value="">-- Select Category --</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                                {{ isset($product) && $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                </div>

                <!-- Subcategory Dropdown -->
                <div class="col-md-6">
                <div class="form-group">
                    <label class="form-label">Subcategory <span class="text-red">*</span></label>
                    <select class="form-control" name="subcategory_id" id="subcategorySelect" required>
                        <option value="">-- Select Subcategory --</option>
                    </select>
                </div>
                </div>

                <!-- Name -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Product Name <span class="text-red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Product Name"
                               value="{{ isset($product) ? $product->name : old('name') }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Short Description -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Short Description</label>
                        <textarea class="form-control" name="shortdesc" id="content22" placeholder="Short Description">{{ isset($product) ? $product->shortdesc : old('shortdesc') }}</textarea>
                        @error('shortdesc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="desc" id="content23" placeholder="Description">{{ isset($product) ? $product->desc : old('desc') }}</textarea>
                        @error('desc')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Image Upload -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Product Image</label>
                        <input type="file" class="form-control" name="image">
                        @if (isset($product) && $product->image)
                            <img src="{{ asset($product->image) }}" class="mt-2" width="100">
                        @endif
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <!-- Submit & Cancel Buttons -->
                <div class="card-footer text-end mx-3">
                    <button type="submit" class="btn btn-dark me-2">
                        <i class="fe fe-check-circle"></i>
                        {{ isset($product) ? 'Update' : 'Submit' }}
                    </button>
                    <a href="{{ route('admin.product.index') }}" class="btn btn-outline-danger">
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
    $(document).ready(function () {
        let categorySelect = $('#categorySelect');
        let subcategorySelect = $('#subcategorySelect');
        let selectedSubcategory = "{{ isset($product) ? $product->subcategory_id : '' }}";

        function fetchSubcategories(categoryId, selectedSubcategory) {
            if (!categoryId) {
                subcategorySelect.html('<option value="">-- Select Subcategory --</option>');
                return;
            }

            $.ajax({
                url: "{{ route('admin.product.getSubcategories') }}",
                type: "GET",
                data: { category_id: categoryId },
                success: function (data) {
                    subcategorySelect.html('<option value="">-- Select Subcategory --</option>');
                    $.each(data, function (key, value) {
                        let selected = selectedSubcategory == value.id ? 'selected' : '';
                        subcategorySelect.append('<option value="' + value.id + '" ' + selected + '>' + value.name + '</option>');
                    });
                }
            });
        }

        // Fetch subcategories when category changes
        categorySelect.on('change', function () {
            fetchSubcategories($(this).val(), '');
        });

        // Fetch subcategories on page load if editing
        if (categorySelect.val()) {
            fetchSubcategories(categorySelect.val(), selectedSubcategory);
        }
    });
</script>

@endpush
