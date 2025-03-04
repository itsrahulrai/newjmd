        <!-- Top Bar-->
        <div class="tf-topbar style-2 type-space-lg topbar-fullwidth-2 bg-main">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 d-none d-xl-block">
                        <div class="tf-cur">
                            <div class="tf-currencies d-flex align-items-center">
                                <i class="fa-solid fa-phone me-2 text-white"></i>
                                <span class="text-white fw-bold">+1 234 567 890</span> <!-- Replace with your actual number -->
                            </div>
                        </div>


                    </div>
                    <div class="col-xl-6 col-12 text-center">
                        <div dir="ltr" class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true" data-speed="1000" data-auto-play="true" data-delay="2000">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <p class="top-bar-text text-line-clamp-1 text-btn-uppercase fw-semibold letter-1 text-white">
                                        Free shipping on all orders over <span class="text-primary">$20.00</span></p>
                                </div>
                                <div class="swiper-slide">
                                    <p class="top-bar-text text-line-clamp-1 text-btn-uppercase fw-semibold letter-1 text-white">
                                        Midseason Sale: 20% Off - Auto Applied at Checkout - Limited Time Only.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 d-none d-xl-block">
                        <ul class="tf-social-icon style-fill style-fill-2 justify-content-end">
                            <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                            <li><a href="#" class="social-twiter"><i class="icon icon-x"></i></a></li>
                            <li><a href="#" class="social-instagram"><i class="icon icon-instagram"></i></a></li>
                            <li><a href="#" class="social-tiktok"><i class="icon icon-tiktok"></i></a></li>
                            <li><a href="#" class="social-amazon"><i class="icon icon-amazon"></i></a></li>
                            <li><a href="#" class="social-pinterest"><i class="icon icon-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Top Bar -->
     <header id="header" class="header-default sticky">
            <div class="container">
                <div class="row wrapper-header align-items-center">
                    <div class="col-md-4 col-3 d-xl-none">
                        <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                            <i class="icon icon-categories"></i>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-4 col-4">
                        <a href="index.html" class="logo-header">
                            <img src="{{asset($web->logolight)}}" alt="logo" class="img-fluid mt-2 mb-2" style="max-width: 100px; height: auto;">
                        </a>

                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                                <li class="menu-item active">
                                    <a href="#" class="item-link">Home</a>

                                </li>
                                <li class="menu-item">
                                    <a href="{{route('about')}}" class="item-link">About us</a>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Products<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li><a href="{{route('products')}}" class="menu-link-text">Bulb Holder</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">Bus Bar</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">Change Overs</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">Door Bell</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">Distribution Boxes</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">Electrical Accessories</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">MCB Manufacturer</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">Rewirable Switch Fuse Unit</a></li>
                                            <li><a href="{{route('products')}}" class="menu-link-text">Wire & Cables</a></li>
                                        </ul>

                                    </div>
                                </li>

                                <li class="menu-item position-relative">
                                    <a href="{{route('blogs')}}" class="item-link">Blogs</a>
                                </li>
                                <li class="menu-item"><a href="{{route('contact')}}" class="item-link">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-xl-3 col-md-4 col-5 d-flex justify-content-end align-items-center">
                        <a href="#" class="btn btn-danger d-flex align-items-center me-3 fw-bold" data-bs-toggle="modal" data-bs-target="#callbackModal" style="cursor: pointer;">
                            <i class="fas fa-box-open me-2"></i>Enquiry
                        </a>
                    </div>
                </div>
            </div>
    </header>

    <style>
        @media (max-width: 576px) {
    .btn-danger {
        font-size: 14px;
        padding: 11px 14px;
        width: 154%;
    }
}

    </style>



<!-- Modal -->
<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white fw-bold" id="callbackModalLabel">    <i class="fa-solid fa-phone me-2 text-white"></i>  Request a Call Back</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="fname" placeholder="First Name*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" placeholder="Email*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" name="phone" placeholder="Phone*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="state" placeholder="State*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="district" placeholder="District*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" placeholder="City*" required>
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="pincode" placeholder="Pincode*" required>
                            </div>
                            <div class="col-12">
                                <select name="option" class="form-select" required>
                                    <option selected disabled>--Please choose an option--</option>
                                    <option value="1">Option 1</option>
                                    <option value="2">Option 2</option>
                                    <option value="3">Option 3</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                            </div>
                            
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-dark w-100">SUBMIT</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
