@extends('admin.layouts.master')
@section('title')
Sub Category
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
            <li class="breadcrumb-item1 active text-muted">Sub Category</li>
        </ol>
    </div>
    <!-- PAGE-HEADER END -->
    <!-- ROW-1 OPEN -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
        <div class="card mt-3">
        <div class="card-header">
            <h3 class="card-title">{{ isset($subcategory) ? 'Update Subcategory' : 'Create Subcategory' }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ isset($subcategory) ? route('admin.subcategory.update', $subcategory->id) : route('admin.subcategory.store') }}" method="post">
                @csrf
                @if (isset($subcategory))
                    @method('PUT')
                @endif

                <div class="row">
                    <div class="col-sm-12 col-md-12">
                        <!-- Category Dropdown -->
                        <div class="form-group">
                            <label class="form-label">Category <span class="text-red">*</span></label>
                            <select class="form-control" name="parent_id" required>
                                <option value="">-- Select Category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" 
                                        {{ isset($subcategory) && $subcategory->parent_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('parent_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Name Input -->
                        <div class="form-group">
                            <label class="form-label">Subcategory Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Subcategory Name"
                                value="{{ isset($subcategory) ? $subcategory->name : old('name') }}" required>
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer text-end mx-3">
                        <button type="submit" class="btn btn-dark me-2">
                            <i class="fe fe-check-circle"></i>
                            {{ isset($subcategory) ? 'Update' : 'Submit' }}
                        </button>
                        <a href="{{ route('admin.subcategory.index') }}" class="btn btn-outline-danger">
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