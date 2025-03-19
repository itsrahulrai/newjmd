<!-- Top Bar-->
<div class="tf-topbar style-2 type-space-lg topbar-fullwidth-2 bg-main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-3 d-none d-xl-block">
                <div class="tf-cur">
                    <div class="tf-currencies d-flex align-items-center">
                        <i class="fa-solid fa-phone me-2 text-white"></i>
                        <span class="text-white">91+ {{$web->phone}}</span> <!-- Replace with your actual number -->
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
                                Experience the excellence of JMD – Quality you can trust!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 d-none d-xl-block">
                <ul class="tf-social-icon style-fill style-fill-2 justify-content-end">
                    <li><a href="{{$socials->facebook}}" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                    <li><a href="{{$socials->twitter}}" class="social-twiter"><i class="icon icon-x"></i></a></li>
                    <li><a href="{{$socials->instagram }}" class="social-instagram"><i class="icon icon-instagram"></i></a></li>
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
            <a href="{{route('home')}}">
                <img src="{{asset($web->logolight)}}" alt="logo" class="img-fluid mt-2 mb-2" style="max-width: 100px; height: auto;">
            </a>
            </div>
            <div class="col-xl-6 d-none d-xl-block">
              <nav class="box-navigation text-center">
    <ul class="box-nav-ul d-flex align-items-center justify-content-center">
        <li class="menu-item {{ request()->routeIs('home') ? 'active' : '' }}">
            <a href="{{ route('home') }}" class="item-link">Home</a>
        </li>
        <li class="menu-item {{ request()->routeIs('about') ? 'active' : '' }}">
            <a href="{{ route('about') }}" class="item-link">About us</a>
        </li>

        <!-- Categories with Subcategories -->
        @php
            // Check if the current route belongs to a category or subcategory
            $isCategoryPage = request()->routeIs('products') && isset($category);
        @endphp

        <li class="menu-item position-relative {{ $isCategoryPage ? 'active' : '' }}">
            <a href="#" class="item-link" style="text-decoration: none; font-weight: bold;">
                Categories <i class="icon icon-arrow-down"></i>
            </a>
            <div class="sub-menu submenu-default" 
                style="position: absolute; left: 0; top: 100%; background: #fff; padding: 10px; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); border-radius: 5px; display: none; min-width: 274px;">
                <ul class="menu-list" style="list-style: none; padding: 0; margin: 0;">
                    @foreach ($categories as $categoryItem)
                        @php
                            // Check if this category or any of its subcategories is active
                            $isActiveCategory = isset($category) && ($category->id == $categoryItem->id || $category->parent_id == $categoryItem->id);
                        @endphp

                        <li class="menu-item position-relative {{ $isActiveCategory ? 'active' : '' }}"
                            style="position: relative; padding: 5px 10px; display: flex; justify-content: space-between; align-items: center;">
                            
                            <a href="{{ route('products', ['slug' => $categoryItem->slug]) }}" 
                                class="menu-link-text"
                                style="text-decoration: none; color: #333; font-weight: 500;">
                                {{ $categoryItem->name }} <i class="icon icon-arrow-right"></i>
                            </a>

                            <!-- Subcategories -->
                            @if ($categoryItem->children->count() > 0)
                                <ul class="sub-menu sub-menu-right" 
                                    style="position: absolute; left: 100%; top: 0; background: #fff; padding: 10px; box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2); border-radius: 5px; display: none; min-width: 268px;">
                                    
                                    @foreach ($categoryItem->children as $subcategory)
                                        <li class="{{ isset($category) && $category->id == $subcategory->id ? 'active' : '' }}" 
                                            style="padding: 5px 10px;">
                                            <a href="{{ route('products', ['slug' => $subcategory->slug]) }}" 
                                                class="menu-link-text"
                                                style="text-decoration: none; color: #333; font-weight: 500;">
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

        <li class="menu-item {{ request()->routeIs('blogs') ? 'active' : '' }}">
            <a href="{{ route('blogs') }}" class="item-link">Blogs</a>
        </li>
        <li class="menu-item {{ request()->routeIs('contact') ? 'active' : '' }}">
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

<script>
    document.querySelectorAll('.menu-item.position-relative').forEach(item => {
        item.addEventListener('mouseenter', () => {
            let submenu = item.querySelector('.sub-menu');
            if (submenu) submenu.style.display = 'block';
        });
        item.addEventListener('mouseleave', () => {
            let submenu = item.querySelector('.sub-menu');
            if (submenu) submenu.style.display = 'none';
        });
    });
</script>

<!-- Modal -->

<!-- <div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel"
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
</div> -->


<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 12px; overflow: hidden; box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);">
            <!-- Modal Header -->
            <div class="modal-header" style="background: linear-gradient(90deg, #C82333, #DC3545); color: white; border-bottom: none; padding: 18px;">
                <h5 class="modal-title fw-bold" id="callbackModalLabel">
                    <i class="fa-solid fa-phone me-2"></i> Request a Call Back
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="filter: invert(1);"></button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body" style="background: #f8f9fa; padding: 25px;">
                <form action="{{ route('enquiry.store') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                         <!-- Hidden Product ID -->
                      <!-- Hidden Product ID -->
                    <input type="hidden" name="product_id" id="product_id">

                        <!-- First Name -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="fname" value="{{ old('fname') }}" placeholder="First Name*" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- Last Name -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="lname" value="{{ old('lname') }}" placeholder="Last Name*" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- Email -->
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email*" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- Phone -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone" value="{{ old('fname') }}" placeholder="Phone*" required pattern="[0-9]{10}"
                                title="Phone number must be exactly 10 digits" maxlength="10"
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- State -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="state" value="{{ old('state') }}" placeholder="State*" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- District -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="district" value="{{ old('district') }}" placeholder="District*" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- City -->
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="city" value="{{ old('city') }}" placeholder="City*" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- PinCode -->
                        <div class="col-md-6">
                            <input type="tel" class="form-control" name="pincode" value="{{ old('pincode') }}" placeholder="PinCode*" required pattern="[0-9]{6}"
                                title="PinCode must be exactly 6 digits" maxlength="6"
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                        </div>
                        <!-- Dropdown -->
                        <div class="col-12">
                            <select name="option" class="form-select" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">
                                <option selected disabled>--Please choose an option--</option>
                                <option value="Electrician" {{ old('option') == 'Electrician' ? 'selected' : '' }}>Electrician</option>
                                <option value="Consumers" {{ old('option') == 'Consumers' ? 'selected' : '' }}>Consumers</option>
                                <option value="Distribution" {{ old('option') == 'Distribution' ? 'selected' : '' }}>Distribution</option>
                                <option value="Others" {{ old('option') == 'Others' ? 'selected' : '' }}>Others</option>
                            
                            </select>
                        </div>
                        <!-- Message -->
                        <div class="col-12">
                            <textarea class="form-control" rows="4" name="message" placeholder="Message" required
                                style="background-color: white; border: 1px solid #ddd; border-radius: 6px; padding: 12px; box-shadow: inset 0px 1px 3px rgba(0,0,0,0.1); transition: all 0.3s;">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                @endif
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-danger w-100"
                            style="padding: 14px; font-weight: bold; border-radius: 6px; font-size: 16px; transition: 0.3s;">
                            SUBMIT
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var callbackModal = document.getElementById('callbackModal');

        callbackModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget; // Button that triggered the modal
            var productId = button.getAttribute('data-product-id'); // Extract product ID

            // Set product ID inside the hidden input field
            document.getElementById('product_id').value = productId;
        });
    });
</script>
