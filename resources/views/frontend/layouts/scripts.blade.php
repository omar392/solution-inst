<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/mixitup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/parallax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.appear.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/odometer.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/particles.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/meanmenu.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/viewer.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?5505';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"",
      "borderRadius":"100",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"20",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"معهد صناع الحلول",
      "brandSubTitle":"يصلك الرد خلال اليوم",
      "brandImg":"https://scontent.fcai21-1.fna.fbcdn.net/v/t1.6435-9/184784401_2930576567262289_2335544341578323342_n.jpg?_nc_cat=107&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=BVLPwnGQhRQAX_6Rp0F&_nc_oc=AQmb4Y2d0dIWx202uMtRNGw4CPJTp5KD6i9R2Se71HNNxN-uRDfQxXc8hnVHQSiuBM8&_nc_ht=scontent.fcai21-1.fna&oh=dde01fe250ea24b9d5c472f3dfe28706&oe=60CC15CF",
      "welcomeText":"أهلا بك \n كيف يمكننى مساعدتك؟",
      "messageText":"كنت أود الاستفسار عن ",
      "backgroundColor":"#0a5f54",
      "ctaText":"إبدأ المحادثة",
      "borderRadius":"30",
      "autoShow":false,
      "phoneNumber":"01063938132"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>