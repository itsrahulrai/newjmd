<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="@route('admin.dashboard')">
            <img src="{{asset($web->logolight)}}" style="width: 100px; height: 60px;"
                class="header-brand-img desktop-logo" alt="logo">
            <img src="{{asset($web->logolight)}}" style="width: 100px; height: 60px;"
                class="header-brand-img toggle-logo" alt="logo">
            <img src="{{asset($web->logolight)}}" style="width: 100px; height: 60px;"
                class="header-brand-img light-logo" alt="logo">
            <img src="{{asset($web->logolight)}}" style="width: 100px; height: 60px;"
                class="header-brand-img light-logo1" alt="logo">
        </a><!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li>
            <h3>Main</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="@route('admin.dashboard')"><i
                    class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.category.index')}}"><i
                    class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Categories</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{route('admin.category.index')}}" class="slide-item">All Categories</a></li>
                <li><a href="{{route('admin.subcategory.index')}}" class="slide-item"> Sub Categories</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.product.index')}}"><i
                    class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Product</span></a>
        </li>
          <!-- <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.galleries.index')}}"><i
                    class="side-menu__icon fe fe-image"></i><span class="side-menu__label">Galleries </span></a>
        </li> -->
       
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.blogs.index') }}"><i
                    class="side-menu__icon fe fe-book"></i><span class="side-menu__label">Blogs</span></a>
        </li>
        <!-- <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{ route('admin.slider.index') }}"><i
                    class="side-menu__icon fe fe-sliders"></i><span class="side-menu__label">Sliders</span></a>
        </li> -->
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.testimonials.index')}}"><i
                    class="side-menu__icon fe fe-message-circle"></i><span class="side-menu__label">Testimonials </span></a>
        </li>
        
       
        <!-- <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.pages.index')}}"><i
                    class="side-menu__icon fe fe-file-text"></i><span class="side-menu__label">Pages</span></a>
        </li> -->
       
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.enquiry.index')}}"><i
                    class="side-menu__icon fe fe-phone"></i><span class="side-menu__label">Enquiry</span></a>
        </li>

        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="{{route('admin.settings.index')}}"><i
                    class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Settings</span></a>
        </li>

        {{-- <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i
                    class="side-menu__icon fe fe-command"></i><span class="side-menu__label">Icons</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="icons.html" class="slide-item"> Font Awesome</a></li>
                <li><a href="icons2.html" class="slide-item"> Material Design Icons</a></li>
                <li><a href="icons3.html" class="slide-item"> Simple Line Icons</a></li>
                <li><a href="icons4.html" class="slide-item"> Feather Icons</a></li>
                <li><a href="icons5.html" class="slide-item"> Ionic Icons</a></li>
                <li><a href="icons6.html" class="slide-item"> Flag Icons</a></li>
                <li><a href="icons7.html" class="slide-item"> pe7 Icons</a></li>
                <li><a href="icons8.html" class="slide-item"> Themify Icons</a></li>
                <li><a href="icons9.html" class="slide-item">Typicons Icons</a></li>
                <li><a href="icons10.html" class="slide-item">Weather Icons</a></li>
            </ul>
        </li>
        <li>
            <h3>Pages</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i
                    class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">Pages</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="profile.html" class="slide-item"> Profile</a></li>
                <li><a href="editprofile.html" class="slide-item"> Edit Profile</a></li>
                <li><a href="email.html" class="slide-item"> Mail-Inbox</a></li>
                <li><a href="emailservices.html" class="slide-item"> Mail-Compose</a></li>
                <li><a href="gallery.html" class="slide-item"> Gallery</a></li>
                <li><a href="about.html" class="slide-item"> About Company</a></li>
                <li><a href="services.html" class="slide-item"> Services</a></li>
                <li><a href="faq.html" class="slide-item"> FAQS</a></li>
                <li><a href="terms.html" class="slide-item"> Terms</a></li>
                <li><a href="invoice.html" class="slide-item"> Invoice</a></li>
                <li><a href="pricing.html" class="slide-item"> Pricing Tables</a></li>
                <li><a href="blog.html" class="slide-item"> Blog</a></li>
                <li><a href="emptypage.html" class="slide-item"> Empty Page</a></li>
                <li><a href="construction.html" class="slide-item"> Under Construction</a></li>
            </ul>
        </li>
        <li>
            <h3>E-Commerce</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i
                    class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">E-Commerce</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="shop.html" class="slide-item"> Shop</a></li>
                <li><a href="shop-description.html" class="slide-item">Product Details</a></li>
                <li><a href="cart.html" class="slide-item"> Shopping Cart</a></li>
                <li><a href="wishlist.html" class="slide-item"> Wishlist</a></li>
                <li><a href="checkout.html" class="slide-item"> Checkout</a></li>
            </ul>
        </li>
        <li>
            <h3>Custom & Error Pages</h3>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i
                    class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Custom Pages</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="login.html" class="slide-item"> Login</a></li>
                <li><a href="register.html" class="slide-item"> Register</a></li>
                <li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
                <li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#"><i
                    class="side-menu__icon fe fe-info"></i><span class="side-menu__label">Error Pages</span><i
                    class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="error400.html" class="slide-item"> 400</a></li>
                <li><a href="error401.html" class="slide-item"> 401</a></li>
                <li><a href="error403.html" class="slide-item"> 403</a></li>
                <li><a href="error404.html" class="slide-item"> 404</a></li>
                <li><a href="error500.html" class="slide-item"> 500</a></li>
                <li><a href="error503.html" class="slide-item"> 503</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-bs-toggle="slide" href="#">
                <i class="side-menu__icon fe fe-sliders"></i>
                <span class="side-menu__label">Submenus</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="#" class="slide-item">Level-1</a></li>
                <li class="sub-slide">
                    <a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="#"><span
                            class="sub-side-menu__label">Level-2</span><i class="sub-angle fa fa-angle-right"></i></a>
                    <ul class="sub-slide-menu">
                        <li><a class="sub-slide-item" href="#">Level-2.1</a></li>
                        <li><a class="sub-slide-item" href="#">Level-2.2</a></li>
                        <li class="sub-slide2">
                            <a class="sub-side-menu__item2" href="#" data-bs-toggle="sub-slide2"><span
                                    class="sub-side-menu__label2">Level-2.3</span><i
                                    class="sub-angle2 fa fa-angle-right"></i></a>
                            <ul class="sub-slide-menu2">
                                <li><a href="#" class="sub-slide-item2">Level-2.3.1</a></li>
                                <li><a href="#" class="sub-slide-item2">Level-2.3.2</a></li>
                                <li><a href="#" class="sub-slide-item2">Level-2.3.3</a></li>
                            </ul>
                        </li>
                        <li><a class="sub-slide-item" href="#">Level-2.4</a></li>
                        <li><a class="sub-slide-item" href="#">Level-2.5</a></li>
                    </ul>
                </li>
            </ul>
        </li> --}}
    </ul>
</aside>
