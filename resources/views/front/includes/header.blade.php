<!-- Top Bar-->
<div class="tf-topbar style-2 type-space-lg topbar-fullwidth-2 bg-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 d-none d-xl-block">
                <div class="tf-cur">
                    <div class="tf-currencies d-flex align-items-center">
                        <i class="fa-solid fa-phone me-2 text-white"></i>
                        <span class="text-white">+1 234 567 890</span> <!-- Replace with your actual number -->
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-12 text-center">
                <div dir="ltr" class="swiper tf-sw-top_bar" data-preview="1" data-space="0" data-loop="true"
                    data-speed="1000" data-auto-play="true" data-delay="2000">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p
                                class="top-bar-text text-line-clamp-1 text-btn-uppercase fw-semibold letter-1 text-white">
                                Free shipping on all orders over <span class="text-primary">$20.00</span></p>
                        </div>
                        <div class="swiper-slide">
                            <p
                                class="top-bar-text text-line-clamp-1 text-btn-uppercase fw-semibold letter-1 text-white">
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
                <a href="{{ route('home') }}" class="logo-header">
                    <img src="{{ asset('front/images/logo/logo.png') }}" alt="logo" class="img-fluid mt-2 mb-2"
                        style="max-width: 0px; height: auto;">
                </a>

            </div>
            <!-- <div class="col-xl-6 d-none d-xl-block">
                        <nav class="box-navigation text-center">
                            <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                                <li class="menu-item active">
                                    <a href="{{ route('home') }}" class="item-link">Home</a>

                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('about') }}" class="item-link">About us</a>
                                </li>
                                <li class="menu-item position-relative">
                                    <a href="#" class="item-link">Categories<i class="icon icon-arrow-down"></i></a>
                                    <div class="sub-menu submenu-default">
                                        <ul class="menu-list">
                                            <li><a href="blog-default.html" class="menu-link-text">Blog Default</a></li>
                                            <li><a href="blog-list.html" class="menu-link-text">Blog List</a></li>
                                            <li><a href="blog-grid.html" class="menu-link-text">Blog Grid</a></li>
                                            <li><a href="blog-detail.html" class="menu-link-text">Blog Detail 1</a></li>
                                            <li><a href="blog-detail-02.html" class="menu-link-text">Blog Detail 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                                <li class="menu-item position-relative">
                                    <a href="{{ route('blogs') }}" class="item-link">Blogs</a>
                                </li>
                                <li class="menu-item"><a href="{{ route('contact') }}" class="item-link">Contact us</a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->


            <div class="col-xl-6 d-none d-xl-block">
                <nav class="box-navigation text-center">
                    <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                        <li class="menu-item active">
                            <a href="{{ route('home') }}" class="item-link">Home</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('about') }}" class="item-link">About us</a>
                        </li>

                        <!-- Categories with Subcategories -->
                        <li class="menu-item position-relative">
                            <a href="#" class="item-link">Categories <i class="icon icon-arrow-down"></i></a>
                            <div class="sub-menu submenu-default">
                                <ul class="menu-list">
                                    @foreach ($categories as $category)
                                    <li class="menu-item position-relative">
                                        <a href="{{ route('products', ['category_id' => $category->id]) }}" class="menu-link-text">{{ $category->name }} <i class="icon icon-arrow-right"></i></a>

                                        <!-- Subcategories -->
                                        @if ($category->children->count() > 0)
                                        <ul class="sub-menu sub-menu-right">
                                            @foreach ($category->children as $subcategory)
                                            <li><a href="{{ route('products', ['subcategory_id' => $subcategory->id]) }}" class="menu-link-text">{{ $subcategory->name }}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </li>


                        <li class="menu-item position-relative">
                            <a href="{{ route('blogs') }}" class="item-link">Blogs</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('contact') }}" class="item-link">Contact us</a>
                        </li>
                    </ul>
                </nav>
            </div>


            <div class="col-xl-3 col-md-4 col-5 d-flex justify-content-end align-items-center">
                <a href="#" class="btn btn-danger d-flex align-items-center me-3 fw-bold"
                    data-bs-toggle="modal" data-bs-target="#callbackModal" style="cursor: pointer;">
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

<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white fw-bold" id="callbackModalLabel">
                    <i class="fa-solid fa-phone me-2 text-white"></i> Request a Call Back
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('enquiry.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="fname"
                                placeholder="First Name*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="lname"
                                placeholder="Last Name*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Email*"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Phone*" 
                                name="phone" id="phone" required pattern="[0-9]{10}"
                                title="Phone number must be exactly 10 digits" maxlength="10">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="state" placeholder="State*"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="district"
                                placeholder="District*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="city" placeholder="City*"
                                required>
                        </div>
                        <div class="col-md-6">
                            <input type="tel" class="form-control" placeholder="PinCode*" 
                                name="pincode" id="pincode" required pattern="[0-9]{6}"
                                title="PinCode must be exactly 6 digits" maxlength="6">
                        </div>
                        <div class="col-12">
                            <select name="option" class="form-select" required>
                                <option selected disabled>--Please choose an option--</option>
                                <option value="Electrician">Electrician</option>
                                <option value="Consumers">Consumers</option>
                                <option value="Distribution">Distribution</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="4" name="message" 
                                placeholder="Message*" required></textarea>
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
