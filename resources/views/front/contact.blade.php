@extends('front.layouts.app')
@section('title')
Contact - JMD
@endsection
@section('content')
<div class="page-title" style="background-image: url({{asset('front/images/section/page-title.jpg')}});">
    <div class="container-full">
        <div class="row">
            <div class="col-12">
                <h3 class="heading text-center">Contact</h3>
                <ul class="breadcrumbs d-flex align-items-center justify-content-center">
                    <li>
                        <a class="link" href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <i class="icon-arrRight"></i>
                    </li>
                    <li>
                        <a class="link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- /page-title -->

<!-- contact-us -->
<section class="flat-spacing">
    <div class="container">
        <div class="contact-us-content">
            <div class="left">
                <h4>Get In Touch</h4>
                <form action="{{ route('enquiry.store') }}" method="post" class="form-leave-comment">
                    @csrf
                    <div class="container">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control border border-secondary" placeholder="First Name*" name="fname" value="{{ old('fname') }}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border border-secondary" placeholder="Last Name*" name="lname" value="{{ old('lname') }}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border border-secondary" placeholder="Email*" name="email" value="{{ old('email') }}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border border-secondary" placeholder="Phone*" name="phone" value="{{ old('phone') }}" required pattern="[0-9]{10}" title="Phone number must be exactly 10 digits" maxlength="10">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border border-secondary" placeholder="State*" name="state" value="{{ old('state') }}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border border-secondary" placeholder="District*" name="district" value="{{ old('district') }}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border border-secondary" placeholder="City*" name="city" value="{{ old('city') }}" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border border-secondary" placeholder="PinCode*" name="pincode" value="{{ old('pincode') }}" required pattern="[0-9]{6}" title="PinCode must be exactly 6 digits" maxlength="6">
                            </div>
                            <div class="col-md-12">
                                <select name="option" class="form-select border border-secondary" required>
                                    <option selected disabled>--Please choose an option--</option>
                                    <option value="Electrician" {{ old('option') == 'Electrician' ? 'selected' : '' }}>Electrician</option>
                                    <option value="Consumers" {{ old('option') == 'Consumers' ? 'selected' : '' }}>Consumers</option>
                                    <option value="Distribution" {{ old('option') == 'Distribution' ? 'selected' : '' }}>Distribution</option>
                                    <option value="Others" {{ old('option') == 'Others' ? 'selected' : '' }}>Others</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <textarea name="message" class="form-control border border-secondary" rows="4" placeholder="Your Message*" required>{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div class="button-submit send-wrap">
                                <button class="btn btn-danger btn-lg" type="submit">
                                    <span class="text text-button">Send message</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <div class="right">
                <h4>Information</h4>
                <div class="mb_20">
                    <div class="text-title mb_8">Phone:</div>
                    <p class="text-secondary">{{$web->phone}}</p>
                </div>
                <div class="mb_20">
                    <div class="text-title mb_8">Email:</div>
                    <p class="text-secondary">{{$web->email}}</p>
                </div>
                <div class="mb_20">
                    <div class="text-title mb_8">Address:</div>
                    <p class="text-secondary">{{$web->address}}</p>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- /contact-us -->

@endsection