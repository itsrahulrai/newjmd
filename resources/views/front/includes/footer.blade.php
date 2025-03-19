<!-- Banner countdown -->
<img class="lazyload" data-src="{{ asset('front/images/banner/img-countdown1.png') }}"
                            src="{{ asset('front/images/banner/img-countdown1.png') }}"
    alt="banner">
        <!-- /Banner countdown -->

  <footer id="footer" class="footer">
        <div class="footer-wrap">
            <div class="footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-infor">
                                <div class="footer-logo">
                                        <a href="{{route('home')}}">
                                            <img src="{{asset($web->logolight)}}" alt="logo" class="img-fluid mt-2 mb-2" style="max-width: 100px; height: auto;">
                                        </a>
                                </div>
                                <div class="footer-address">
                                    <p>{{$web->address}}</p>
                                    <!-- <a href="contact.html" class="tf-btn-default fw-6">GET DIRECTION<i class="icon-arrowUpRight"></i></a> -->
                                </div>
                                <ul class="footer-info">
                                    <li>
                                        <i class="icon-mail"></i>
                                        <p>{{$web->email}}</p>
                                    </li>
                                    <li>
                                        <i class="icon-phone"></i>
                                        <p>{{$web->phone}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-menu">
                                <div class="footer-col-block">
                                    <div class="footer-heading text-button footer-heading-mobile">
                                        Infomation
                                    </div>
                                    <div class="tf-collapse-content">
                                        <ul class="footer-menu-list">
                                            <li class="text-caption-1">
                                                <a href="{{route('home')}}" class="footer-menu_item">Home</a>
                                            </li>
                                            <li class="text-caption-1">
                                                <a href="{{route('about')}}" class="footer-menu_item">About Us</a>
                                            </li>
                                            <li class="text-caption-1">
                                                <a href="{{route('products')}}" class="footer-menu_item">Products</a>
                                            </li>
                                            <li class="text-caption-1">
                                                <a href="{{route('blogs')}}" class="footer-menu_item">Blogs</a>
                                            </li>
                                            <li class="text-caption-1">
                                                <a href="{{route('contact')}}" class="footer-menu_item">Contact</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer-col-block">
                                    <div class="footer-heading text-button footer-heading-mobile">
                                        Categories
                                    </div>
                                    <div class="tf-collapse-content">
                                        <ul class="footer-menu-list">
                                            @foreach ($categories as $category)
                                            <li class="text-caption-1">
                                                <a href="{{ route('products', ['slug' => $category->slug]) }}" class="footer-menu_item">{{ $category->name }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-col-block">
                                <div class="footer-heading text-button footer-heading-mobile">
                                    Newletter
                                </div>
                                <div class="tf-collapse-content">
                                    <div class="footer-newsletter">
                                    <p class="text-caption-1">Subscribe to our newsletter and stay updated with our latest offers and news!</p>
                                        <div class="sib-form">
                                            <div id="sib-form-container" class="sib-form-container">
                                                <div id="sib-container" class="sib-container--large sib-container--vertical">
                                                    <form id="sib-form" method="POST" class="form-newsletter">
                                                        <div>
                                                            <div class="sib-form-block">
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="sib-form-block">
                                                                <div class="sib-text-form-block">
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="sib-input sib-form-block">
                                                                <div class="form__entry entry_block">
                                                                    <div class="form__label-row ">
                                                                        <label class="entry__label" for="EMAIL">
                                                                        </label>
                                                                        <div class="entry__field">
                                                                            <input class="input radius-60 border border-secondary" type="text" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="Enter your e-mail..." data-required="true" required="">
                                                                        </div>
                                                                    </div>
                                                                    <label class="entry__error entry__error--primary"></label>
                                                                    <label class="entry__specification">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="sib-optin sib-form-block">
                                                                <div class="form__entry entry_mcq">
                                                                    <div class="form__label-row ">
                                                                        <div class="entry__choice">
                                                                            <label>
                                                                                <input type="checkbox" class="input_replaced" value="1" id="OPT_IN" name="OPT_IN">
                                                                                <span class="checkbox checkbox_tick_positive"></span>
                                                                                <span>
                                                                                    <p></p>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <label class="entry__error entry__error--primary">
                                                                    </label>
                                                                    <label class="entry__specification">
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tf-cart-checkbox">
                                            <div class="tf-checkbox-wrapp">
                                                <input class="" type="checkbox" id="footer-Form_agree" name="agree_checkbox">
                                                <div>
                                                    <i class="icon-check"></i>
                                                </div>
                                            </div>
                                            <!-- <label class="text-caption-1" for="footer-Form_agree">
                                                By clicking subcribe, you agree to the <a class="fw-6 link" href="term-of-use.html">Terms of Service</a> and <a class="fw-6 link" href="#">Privacy Policy</a>.
                                            </label> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-bottom-wrap d-flex justify-content-center py-3" style="background: #f8f9fa; border-top: 1px solid #221E1F;">
                                <p class="text-caption-1 text-center fw-bold mb-0" style="color: #221E1F; font-size: 16px;">
                                    © <?php echo date('Y'); ?> JMD. All Rights Reserved. |
                                    <span style="color: #221E1F; font-weight: 600;">Designed by Hover Business Services LLP</span>
                                </p>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>
    </div>


    <!-- mobile menu -->
    <div class="offcanvas offcanvas-start canvas-mb" id="mobileMenu">
        <span class="icon-close icon-close-popup" data-bs-dismiss="offcanvas" aria-label="Close"></span>
        <div class="mb-canvas-content">
            <div class="mb-body">
                <div class="mb-content-top">
                    <form class="form-search">
                        <fieldset class="text">
                            <input type="text" placeholder="What are you looking for?" class="" name="text" tabindex="0" value="" aria-required="true" required="">
                        </fieldset>
                        <button class="" type="submit">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M20.9984 20.9999L16.6484 16.6499" stroke="#181818" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </form>
                    <ul class="nav-ul-mb" id="wrapper-menu-navigation">
                        <li class="nav-mb-item active">
                            <a href="{{ route('home') }}" class="collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-one">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-mb-item active">
                            <a href="{{ route('home') }}">
                                <span>About us</span>
                            </a>
                        </li>

                            <li class="nav-mb-item">
                            <a href="#dropdown-menu-three" class="collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-three">
                                <span>Categories</span>
                                <span class="btn-open-sub" style="transition: 0.3s;">+</span>
                            </a>


                            <div id="dropdown-menu-three" class="collapse">
                                <ul class="sub-nav-menu" style="list-style: none; padding: 0; margin: 0;">

                                    @foreach ($categories as $category)
                                    <li style="padding: 8px 12px;">
                                        <a href="{{ route('products', ['slug' => $category->slug]) }}"
                                            class="menu-link-text"
                                            style="text-decoration: none; color: #333; font-weight: 500;">
                                            {{ $category->name }}
                                        </a>

                                        <!-- Subcategories -->
                                        @if ($category->children->count() > 0)
                                        <a href="#sub-menu-{{ $category->id }}" class="collapsed" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="sub-menu-{{ $category->id }}"
                                            style="float: right; font-size: 16px; color: #666; text-decoration: none;">
                                            +
                                        </a>

                                        <ul class="sub-sub-nav-menu collapse" id="sub-menu-{{ $category->id }}"
                                            style="list-style: none; padding-left: 15px; margin-top: 5px;">
                                            @foreach ($category->children as $subcategory)
                                            <li style="padding: 6px 10px;">
                                                <a href="{{ route('products', ['slug' => $subcategory->slug]) }}"
                                                    class="menu-link-text"
                                                    style="text-decoration: none; color: #666; font-weight: 400;">
                                                    {{ $subcategory->name }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </li>

                        <li class="nav-mb-item">
                            <a href="{{ route('blogs') }}" class="collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                                <span>Blogs</span>
                            </a>
                        </li>
                        <li class="nav-mb-item">
                            <a href="{{ route('contact') }}" class="collapsed mb-menu-link" data-bs-toggle="collapse" aria-expanded="true" aria-controls="dropdown-menu-four">
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- /mobile menu -->