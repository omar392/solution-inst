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
                            
                            <li class="nav-item"><a href="{{route('website')}}" class="nav-link {{ URL::route('website') === URL::current() ? 'active' : '' }}">{{__('web.home')}}</a>
                            </li>

                            <li class="nav-item"><a href="{{route('aboutus')}}" class="nav-link {{ URL::route('aboutus') === URL::current() ? 'active' : '' }}">{{__('web.about')}}</a>
                            </li>
                            
                            <li class="nav-item"><a href="{{route('fronts.courses')}}" class="nav-link {{ URL::route('fronts.courses') === URL::current() ? 'active' : '' }}">{{__('web.course')}}</a>
                            </li>

                            <li class="nav-item"><a href="{{route('fronts.employment')}}" class="nav-link {{ URL::route('fronts.employment') === URL::current() ? 'active' : '' }}">{{__('web.employment')}}</a>
                            </li>
                            
                            <li class="nav-item"><a href="#" class="nav-link {{ URL::route('blog') === URL::current() ? 'active' : '' }} {{ URL::route('gallery') === URL::current() ? 'active' : '' }} {{ URL::route('advert') === URL::current() ? 'active' : '' }} {{ URL::route('faqs') === URL::current() ? 'active' : '' }} ">{{__('web.pages')}} <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('blog')}}" class="nav-link {{ URL::route('blog') === URL::current() ? 'active' : '' }}">{{__('web.blog')}}</a>
                                    </li>
                                    <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link {{ URL::route('gallery') === URL::current() ? 'active' : '' }}">{{__('web.gallery')}}</a>
                                    </li>
                                    <li class="nav-item"><a href="{{route('advert')}}" class="nav-link {{ URL::route('advert') === URL::current() ? 'active' : '' }}">{{__('web.advert')}}</a>
                                    </li>
                                    <li class="nav-item"><a href="{{route('faqs')}}" class="nav-link {{ URL::route('faqs') === URL::current() ? 'active' : '' }}">{{__('web.faqs')}}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="{{route('contactus')}}" class="nav-link {{ URL::route('contactus') === URL::current() ? 'active' : '' }}">{{__('web.contact')}}</a>
                            </li>

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
                            
                            <li class="nav-item"><a href="{{route('website')}}" class="nav-link {{ URL::route('website') === URL::current() ? 'active' : '' }}">{{__('web.home')}}</a>
                            </li>

                            <li class="nav-item"><a href="{{route('aboutus')}}" class="nav-link {{ URL::route('aboutus') === URL::current() ? 'active' : '' }}">{{__('web.about')}}</a>
                            </li>
                            
                            <li class="nav-item"><a href="{{route('fronts.courses')}}" class="nav-link {{ URL::route('fronts.courses') === URL::current() ? 'active' : '' }}">{{__('web.course')}}</a>
                            </li>

                            <li class="nav-item"><a href="{{route('fronts.employment')}}" class="nav-link {{ URL::route('fronts.employment') === URL::current() ? 'active' : '' }}">{{__('web.employment')}}</a>
                            </li>

                            <li class="nav-item"><a href="#" class="nav-link {{ URL::route('blog') === URL::current() ? 'active' : '' }} {{ URL::route('gallery') === URL::current() ? 'active' : '' }} {{ URL::route('advert') === URL::current() ? 'active' : '' }} {{ URL::route('faqs') === URL::current() ? 'active' : '' }} ">{{__('web.pages')}} <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="{{route('blog')}}" class="nav-link {{ URL::route('blog') === URL::current() ? 'active' : '' }}">{{__('web.blog')}}</a>
                                    </li>
                                    <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link {{ URL::route('gallery') === URL::current() ? 'active' : '' }}">{{__('web.gallery')}}</a>
                                    </li>
                                    <li class="nav-item"><a href="{{route('advert')}}" class="nav-link {{ URL::route('advert') === URL::current() ? 'active' : '' }}">{{__('web.advert')}}</a>
                                    </li>
                                    <li class="nav-item"><a href="{{route('faqs')}}" class="nav-link {{ URL::route('faqs') === URL::current() ? 'active' : '' }}">{{__('web.faqs')}}</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item"><a href="{{route('contactus')}}" class="nav-link {{ URL::route('contactus') === URL::current() ? 'active' : '' }}">{{__('web.contact')}}</a>
                            </li>

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