<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Links of CSS files -->
    @if (app()->getLocale() == 'en')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    @endif
    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.rtl.min.css')}}">
    @endif
    <link rel="stylesheet" href="{{asset('frontend/assets/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/viewer.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    @if (app()->getLocale() == 'ar')
    <link rel="stylesheet" href="{{asset('frontend/assets/css/rtl.css')}}">
    @endif
    <title>صناع الحلول</title>
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/logo_braw30_30.png')}}">
</head>
@if (app()->getLocale() == 'ar')
<style>
      body {
        font-family: 'Cairo';
        /* font-size: 18px; */
    }
</style>
@endif