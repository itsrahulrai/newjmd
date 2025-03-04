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
                        <form
                            action="{{ isset($category) ? route('admin.category.update', $category->id) : route('admin.category.store') }}"
                            method="post">
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
@endsection


@push('script')
    
@endpush
