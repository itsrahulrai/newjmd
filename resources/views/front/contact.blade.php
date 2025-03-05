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
                <p class="text-secondary-2">Use the form below to get in touch with the sales team</p>
                <form id="" action="" method="post" class="form-leave-comment">
                    <div class="wrap">
                        <div class="cols">
                            <fieldset class="">
                                <input class="" type="text" placeholder="First Name*" name="fname" id="name" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="">
                                <input class="" type="text" placeholder="Last Name*" name="lname" id="lname" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <div class="cols">
                            <fieldset class="">
                                <input class="" type="email" placeholder="Email*" name="email" id="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="">
                                <input class="" type="tel" placeholder="State*" name="state" id="state" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <div class="cols">
                            <fieldset class="">
                                <input class="" type="text" placeholder="District*" name="district" id="district" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="">
                                <input class="" type="email" placeholder="City*" name="city" id="city" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                            <fieldset class="">
                                <input class="" type="email" placeholder="PinCode*" name="pincode" id="email" tabindex="2" value="" aria-required="true" required="">
                            </fieldset>
                        </div>
                        <div class="cols">
                            <fieldset class="">
                                <select name="option" class="form-select" tabindex="2" aria-required="true" required="">
                                    <option selected disabled>--Please choose an option--</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </fieldset>
                        </div>
                        <fieldset class="">
                            <textarea name="message" id="message" rows="4" placeholder="Your Message*" tabindex="2" aria-required="true" required=""></textarea>
                        </fieldset>
                    </div>
                    <div class="button-submit send-wrap">
                        <button class="tf-btn btn-fill" type="submit">
                            <span class="text text-button">Send message</span>
                        </button>
                    </div>
                </form>
            </div>
            <div class="right">
                <h4>Information</h4>
                <div class="mb_20">
                    <div class="text-title mb_8">Phone:</div>
                    <p class="text-secondary">+1 666 234 8</p>
                </div>
                <div class="mb_20">
                    <div class="text-title mb_8">Email:</div>
                    <p class="text-secondary">themesflat@gmail.com</p>
                </div>
                <div class="mb_20">
                    <div class="text-title mb_8">Address:</div>
                    <p class="text-secondary">2163 Phillips Gap Rd, West Jefferson, North Carolina, United States</p>
                </div>
                <div>
                    <div class="text-title mb_8">Open Time:</div>
                    <p class="mb_4 open-time">
                        <span class="text-secondary">Mon - Sat:</span> 7:30am - 8:00pm PST
                    </p>
                    <p class="open-time">
                        <span class="text-secondary">Sunday:</span> 9:00am - 5:00pm PST
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /contact-us -->







@endsection