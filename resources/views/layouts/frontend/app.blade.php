<!DOCTYPE HTML>
<html class="no-js">
<head>
  <!-- Basic Page Needs
    ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>CV. Naga Mas Motor | Dealer Motor Honda</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <!-- CSS
    ================================================== -->
  <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('front/css/bootstrap-theme.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('front/vendor/prettyphoto/css/prettyPhoto.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('front/vendor/owl-carousel/css/owl.carousel.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('front/vendor/owl-carousel/css/owl.theme.css') }}" rel="stylesheet" type="text/css">
  <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/ie.css') }}" media="screen" /><![endif]-->
  <link href="{{ asset('front/css/custom.css') }}" rel="stylesheet" type="text/css"><!-- CUSTOM STYLESHEET FOR STYLING -->
  <!-- Color Style -->
  <link href="{{ asset('front/colors/color1.css') }}" rel="stylesheet" type="text/css">
  <!-- SCRIPTS
    ================================================== -->
  <script src="{{ asset('front/js/modernizr.js') }}"></script><!-- Modernizr -->
</head>
<body class="home">
  <!--[if lt IE 7]>
  	<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->
  <div class="body">
    	<!-- Start Site Header -->
    	<div class="site-header-wrapper">
          @include('layouts.frontend.partials._header')
          <!-- End Site Header -->
          <div class="navbar">
              @include('layouts.frontend.partials._navbar')
          </div>
     	</div>
      @if (Route::getCurrentRoute()->getPath() == '/')
        <div class="hero-area">
            @include('layouts.frontend.partials._home-slider')
        </div>
        <!-- Utiity Bar -->
        <div class="utility-bar">
        	 @include('layouts.frontend.partials._utilbar')
        </div>
      @endif
      <!-- Start Body Content -->
    	<div class="main" role="main">
      	@yield('content')
     	</div>
      <!-- End Body Content -->
      <!-- Start site footer -->
      <footer class="site-footer">
         	@include('layouts.frontend.partials._footer')
      </footer>
      <!-- End site footer -->
    	<a id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
  </div>

  <script src="{{ asset('front/js/jquery-2.0.0.min.js') }}"></script> <!-- Jquery Library Call -->
  <script src="{{ asset('front/vendor/prettyphoto/js/prettyphoto.js') }}"></script> <!-- PrettyPhoto Plugin -->
  <script src="{{ asset('front/js/ui-plugins.js') }}"></script> <!-- UI Plugins -->
  <script src="{{ asset('front/js/helper-plugins.js') }}"></script> <!-- Helper Plugins -->
  <script src="{{ asset('front/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script> <!-- Owl Carousel -->
  <script src="{{ asset('front/vendor/password-checker.js') }}"></script> <!-- Password Checker -->
  <script src="{{ asset('front/js/bootstrap.js') }}"></script> <!-- UI -->
  <script src="{{ asset('front/js/init.js') }}"></script> <!-- All Scripts -->
  <script src="{{ asset('front/vendor/flexslider/js/jquery.flexslider.js') }}"></script> <!-- FlexSlider -->
  <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
  @yield('scripts')
</body>
</html>
