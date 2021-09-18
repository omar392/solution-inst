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
    <link href='https://fonts.googleapis.com/css?family=Cairo' rel='stylesheet'>
    <link rel="icon" type="image/png" href="{{asset('frontend/assets/img/logo_braw30_30.png')}}">
    <title> {{__('web.company')}}@yield('pageTitle')</title>

    <meta name="keywords" content="{{$seo->key}}" />
    <meta name="description" content="{{$seo->description}}" />
    
    <meta name="locale" content="en_sa">
    <meta name="og:type" content="website" />
    <meta name="og:site_name" content="{{$seo->site}}" />
    <meta name="og:url" content="" />
  
    <meta name="og:description" content="{{$seo->description}}" />

</head>

<style>
  @if (app()->getLocale() == 'ar')
      body {
        font-family: 'Cairo';
        /* font-size: 18px; */
    }
    @endif

    
    [aria-current] .page-link {
        background-color: #ff1949 !important;
    }

    [rel='prev'], [rel='next'] {
        background-color: #ff1949 !important;
    }

    .pagination > li :not([rel='prev'],[rel='next'],[aria-current] .page-link) {
        background-color: #ff1949 !important;
    }

    #custom-button {
  padding: 10px;
  color: white;
  background-color: #ff1949;
  border: 1px solid #000;
  border-radius: 5px;
  cursor: pointer;
}

#custom-button:hover {
  background-color: #ff1949;
}

#custom-text {
  margin-left: 10px;
  font-family: sans-serif;
  color: #aaa;
}
body {
	font-size: 1rem;
	/* display: flex; */
	min-height: 100vh;
	margin: 0 auto;
	/* justify-content: center; */
	/* align-items: center; */
	flex-direction: column;
	color: rgb(20, 20, 28);
}
.input-preview {
	border-radius: 4px;
	width: 200px;
	height: 200px;
	display: flex;
	justify-content: center;
	align-items: center;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center;
	position: relative;
	transition: ease-in-out 750ms;
}
</style>
