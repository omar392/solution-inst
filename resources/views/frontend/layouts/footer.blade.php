<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3 style="font-family: cairo;">{{__('web.contact')}}</h3>

                    <ul class="contact-us-link">
                        <li>
                            <i class='bx bx-map'></i>
                            <a href="" target="_blank">{!! $setting->address !!}</a>
                        </li>
                        <li>
                            <i class='bx bx-phone-call'></i>
                            <a>{{$setting->phone}}</a>
                        </li>
                        <li>
                            <i class='bx bx-envelope'></i>
                            <a href="https://{{$setting->email}}">{{$setting->email}}</a>
                        </li>
                    </ul>

                    <ul class="social-link">
                        <li><a href="{{$setting->facebook}}" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="{{$setting->twitter}}" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="{{$setting->instagram}}" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="{{$setting->linkedin}}" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                        <li><a href="{{$setting->snapchat}}" class="d-block" target="_blank"><i class='bx bxl-snapchat'></i></a></li>
                        <li><a href="{{$setting->youtube}}" class="d-block" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3 style="font-family: cairo;">{{__('web.arrival')}}</h3>

                    <ul class="support-link">
                        <li><a href="{{route('aboutus')}}">{{__('web.about')}}</a></li>
                        <li><a href="{{route('fronts.courses')}}">{{__('web.course')}}</a></li>
                        <li><a href="{{route('fronts.employment')}}">{{__('web.employment')}}</a></li>
                        
                        <li><a href="{{route('fronts.employment')}}">{{__('web.employment')}}</a></li>
                        <li><a href="{{route('contactus')}}">{{__('web.contact')}}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3 style="font-family: cairo;">{{__('web.pages')}}</h3>

                    <ul class="useful-link">
                        <li><a href="{{route('advert')}}">{{__('web.advert')}}</a></li>
                        <li><a href="{{route('gallery')}}">{{__('web.gallery')}}</a></li>
                        <li><a href="{{route('blog')}}">{{__('web.blog')}}</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3 style="font-family: cairo;">{{__('web.employment')}}</h3>

                    <div class="newsletter-box">
                        <p style="font-family: cairo;">{{__('web.subs')}}</p>
                        <a href="{{route('fronts.employment.subscribe')}}" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">{{__('web.sub')}}</span><i class="bx bx-paper-plane icon-arrow after"></i></a>                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom-area" dir="ltr">
        <div class="container">
            <div class="logo">
                <a href="{{route('website')}}" class="d-inline-block"><img src="{{asset('frontend/assets/img/logo164_45.png')}}" alt="image"></a>
            </div>
            <p><i class='bx bx-copyright'></i>2021 <a href="#" target="_blank"></a> Programming By <a href="#" target="_blank">Green Way</a> | All rights reserved</p>
        </div>
    </div>
</footer>