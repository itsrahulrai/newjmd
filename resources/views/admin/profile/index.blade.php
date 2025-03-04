@extends('admin.layouts.master')
@section('title')
    Profile
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
                <li class="breadcrumb-item1 active text-muted">Profile</li>
            </ol>
        </div>
        <!-- PAGE-HEADER END -->
        <!-- ROW-1 OPEN -->
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Profile Update</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.profile.update') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <!-- Name Field -->
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Name <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                            value="{{Auth::user()->name}}">
                                    </div>
                                </div>
                                 <!-- Phone Field -->
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Phone <span class="text-red">*</span></label>
                                        <input type="text" class="form-control" name="mobile" placeholder="Phone"
                                            value="{{Auth::user()->mobile}}">
                                    </div>
                                </div>
                                  <!-- Email Field -->
                                <div class="col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label class="form-label">Email <span class="text-red">*</span></label>
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            value="{{Auth::user()->email}}">
                                    </div>
                                </div>

                                <!-- Submit and Cancel Buttons -->
                                <div class="card-footer text-end mx-3">
                                    <button type="submit" class="btn btn-primary me-2">
                                        <i class="fe fe-check-circle"></i>
                                        Update
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

            <div class="col-xl-12 col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h3 class="card-title">Update Password</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.user.profile.update.password') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Current Password  Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Current Password <span class="text-red">*</span></label>
                                        <input type="password" class="form-control" name="current_password" placeholder="Current Password"
                                            >
                                    </div>
                                </div>
                                 <!--  Password  Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Password <span class="text-red">*</span></label>
                                        <input type="password" class="form-control" name="password" placeholder="Password"
                                            >
                                    </div>
                                </div>
                                 <!--  Password Confirmation  Field -->
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Password Confirmation<span class="text-red">*</span></label>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirmation"
                                            >
                                    </div>
                                </div>
                                <!-- Submit and Cancel Buttons -->
                                <div class="card-footer text-end mx-3">
                                    <button type="submit" class="btn btn-primary me-2">
                                        <i class="fe fe-check-circle"></i>
                                        Update
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
            $('#content1').richText();

        });
    </script>
@endpush
