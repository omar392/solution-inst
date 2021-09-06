<header class="header-area p-relative">

    <div class="top-header top-header-style-three">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <ul class="top-header-contact-info">
                        <li>
                            {{__('web.call')}}: 
                            <a href="tel:502464674">{{$setting->phone}}</a>
                        </li>
                    </ul>

                    <div class="top-header-social">
                        <span>{{__('web.follow')}}:</span>
                        <a href="{{$setting->facebook}}" target="_blank"><i class='bx bxl-facebook'></i></a>
                        <a href="{{$setting->twitter}}" target="_blank"><i class='bx bxl-twitter'></i></a>
                        <a href="{{$setting->linkedin}}" target="_blank"><i class='bx bxl-linkedin'></i></a>
                        <a href="{{$setting->instagram}}" target="_blank"><i class='bx bxl-instagram'></i></a>
                        <a href="{{$setting->snapchat}}" target="_blank"><i class='bx bxl-snapchat'></i></a>
                        <a href="{{$setting->youtube}}" target="_blank"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Start Navbar Area -->
    <div class="navbar-area navbar-style-three">
        <div class="raque-responsive-nav">
            <div class="container">
                <div class="raque-responsive-menu">
                    <div class="logo">
                        <a href="{{route('website')}}">
                            <img src="{{asset('frontend/assets/img/logo164_45.png')}}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="raque-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('website')}}">
                        <img src="{{asset('frontend/assets/img/logo164_45.png')}}" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{route('website')}}" class="nav-link active">{{__('web.home')}}</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Courses</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Blog</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Shop <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="shop-grid.html" class="nav-link">Shop Grid</a></li>

                                    <li class="nav-item"><a href="shop-grid-fullwidth.html" class="nav-link">Shop Grid FullWidth</a></li>

                                    <li class="nav-item"><a href="single-product.html" class="nav-link">Products Details</a></li>
                                    
                                    <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>

                                    <li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                        <div class="others-option">
                            <div class="dropdown language-switcher d-inline-block">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if($localeCode == LaravelLocalization::getCurrentLocale())
                        @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="nav-link">
                                @if (app()->getLocale() == 'ar')
                                <img src="{{asset('frontend/assets/img/us-flag.jpg')}}"  style="width: 40px;height: 20px;">
                                <span>English</span>
                                @else
                                <img src="{{ asset('frontend/assets/img/ksa.png') }}" style="width: 40px;height: 20px;">
                                <span style="font-family: cairo;" >العربية</span>
                                @endif
                            </a>
                        @endif
                        @endforeach
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Start Sticky Navbar Area -->
    <div class="navbar-area navbar-style-three header-sticky">
        <div class="raque-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="{{route('website')}}">
                        <img src="{{asset('frontend/assets/img/logo164_45.png')}}" alt="logo">
                    </a>

                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a href="{{route('website')}}" class="nav-link">{{__('web.home')}}</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Pages <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#" class="nav-link">About <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="about-style-1.html" class="nav-link">About Style 1</a></li>

                                            <li class="nav-item"><a href="about-style-2.html" class="nav-link">About Style 2</a></li>

                                            <li class="nav-item"><a href="about-style-3.html" class="nav-link">About Style 3</a></li>

                                            <li class="nav-item"><a href="about-style-4.html" class="nav-link">About Style 4</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item"><a href="#" class="nav-link">Instructor <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="team-1.html" class="nav-link">Instructor Style 1</a></li>
    
                                            <li class="nav-item"><a href="team-2.html" class="nav-link">Instructor Style 2</a></li>

                                            <li class="nav-item"><a href="team-3.html" class="nav-link">Instructor Style 3</a></li>

                                            <li class="nav-item"><a href="single-instructor.html" class="nav-link">Instructor Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="gallery.html" class="nav-link">Gallery</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">Events <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="events.html" class="nav-link">Events</a></li>

                                            <li class="nav-item"><a href="single-events.html" class="nav-link">Events Details</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing</a></li>

                                    <li class="nav-item"><a href="feedback.html" class="nav-link">Feedback</a></li>

                                    <li class="nav-item"><a href="partner.html" class="nav-link">Partner</a></li>

                                    <li class="nav-item"><a href="login.html" class="nav-link">Log In</a></li>

                                    <li class="nav-item"><a href="register.html" class="nav-link">Register</a></li>

                                    <li class="nav-item"><a href="faqs.html" class="nav-link">FAQ's</a></li>

                                    <li class="nav-item"><a href="error-404.html" class="nav-link">404 Error</a></li>

                                    <li class="nav-item"><a href="coming-soon.html" class="nav-link">Comign Soon</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Courses <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="#" class="nav-link">Courses Category <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="courses-category-style-1.html" class="nav-link">Category Style 1</a></li>

                                            <li class="nav-item"><a href="courses-category-style-2.html" class="nav-link">Category Style 2</a></li>

                                            <li class="nav-item"><a href="courses-category-style-3.html" class="nav-link">Category Style 3</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="courses-list.html" class="nav-link">Courses List</a></li>

                                    <li class="nav-item"><a href="#" class="nav-link">Courses Grid Style 1 <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="courses-2-columns-style-1.html" class="nav-link">2 Columns</a></li>

                                            <li class="nav-item"><a href="courses-3-columns-style-1.html" class="nav-link">3 Columns</a></li>

                                            <li class="nav-item"><a href="courses-4-columns-style-1.html" class="nav-link">4 Columns Full Width</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="#" class="nav-link">Courses Grid Style 2 <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="courses-2-columns-style-2.html" class="nav-link">2 Columns</a></li>

                                            <li class="nav-item"><a href="courses-3-columns-style-2.html" class="nav-link">3 Columns</a></li>

                                            <li class="nav-item"><a href="courses-4-columns-style-2.html" class="nav-link">4 Columns Full Width</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="#" class="nav-link">Courses Grid Style 3 <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="courses-2-columns-style-3.html" class="nav-link">2 Columns</a></li>

                                            <li class="nav-item"><a href="courses-3-columns-style-3.html" class="nav-link">3 Columns</a></li>

                                            <li class="nav-item"><a href="courses-4-columns-style-3.html" class="nav-link">4 Columns Full Width</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="#" class="nav-link">Courses Details <i class='bx bx-chevron-right'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="single-courses.html" class="nav-link">Courses Details 1</a></li>

                                            <li class="nav-item"><a href="single-courses-2.html" class="nav-link">Courses Details 2</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li class="nav-item"><a href="my-account.html" class="nav-link">My Account</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Blog <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog-style-1.html" class="nav-link">Blog Grid</a></li>

                                    <li class="nav-item"><a href="blog-style-2.html" class="nav-link">Blog Right Sidebar</a></li>

                                    <li class="nav-item"><a href="blog-style-3.html" class="nav-link">Blog Grid Full Width</a></li>

                                    <li class="nav-item"><a href="single-blog.html" class="nav-link">Blog Details</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link">Shop <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="shop-grid.html" class="nav-link">Shop Grid</a></li>

                                    <li class="nav-item"><a href="shop-grid-fullwidth.html" class="nav-link">Shop Grid FullWidth</a></li>

                                    <li class="nav-item"><a href="single-product.html" class="nav-link">Products Details</a></li>
                                    
                                    <li class="nav-item"><a href="cart.html" class="nav-link">Cart</a></li>

                                    <li class="nav-item"><a href="checkout.html" class="nav-link">Checkout</a></li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>

                        <div class="others-option">
                            <div class="dropdown language-switcher d-inline-block">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if($localeCode == LaravelLocalization::getCurrentLocale())
                        @elseif($url = LaravelLocalization::getLocalizedURL($localeCode))
                            <a href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="nav-link">
                                @if (app()->getLocale() == 'ar')
                                <img src="{{asset('frontend/assets/img/us-flag.jpg')}}"  style="width: 40px;height: 20px;">
                                <span>English</span>
                                @else
                                <img src="{{ asset('frontend/assets/img/ksa.png') }}" style="width: 40px;height: 20px;">
                                <span style="font-family: cairo;" >العربية</span>
                                @endif
                            </a>
                        @endif
                        @endforeach
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Sticky Navbar Area -->
    
</header>