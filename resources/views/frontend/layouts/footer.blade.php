<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-footer-widget mb-30">
                    <h3 style="font-family: cairo;">{{__('web.contact')}}</h3>

                    <ul class="contact-us-link">
                        <li>
                            <i class='bx bx-map'></i>
                            <a href="https://www.google.com/maps/place/%D9%85%D8%B9%D9%87%D8%AF+%D8%B5%D9%86%D8%A7%D8%B9+%D8%A7%D9%84%D8%AD%D9%84%D9%88%D9%84+%D9%84%D9%84%D8%AA%D8%AF%D8%B1%D9%8A%D8%A8%E2%80%AD/@24.7978229,46.655851,17z/data=!3m1!4b1!4m5!3m4!1s0x3e2ee3417708846b:0xc9f2ed488eae48b2!8m2!3d24.797818!4d46.6536623" target="_blank">{!! $setting->address !!}</a>
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