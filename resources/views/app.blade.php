<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="HandheldFriendly" content="true"> -->
	<!-- For Resposive Device -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
    <!-- For Window Tab Color -->
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#061948">
    <!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#061948">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
	<title>Charles-Business-Consulting HTML Template</title>
    <!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon.png">

    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- responsive style sheet -->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <!-- <link rel="shortcut icon" href="{{ url('favicon.ico') }}"> -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('after_scripts')

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->

</head>
<body>
    <div class="main-page-wrapper">

<!--[if lt IE 10]>
<p class="browserupgrade">
    You are using an <strong>outdated</strong> browser.
    Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</p>
<![endif]-->

        <!-- ===================================================
            Loading Transition
        ==================================================== -->
        <div id="loader-wrapper">
            <div id="loader"></div>
        </div>

        @include('header')

        <!-- .content -->
        @yield('content')
        <!-- end .content -->

        @include('footer')

        <!-- Scroll Top Button -->
	    <button class="scroll-top tran3s">
			<i class="fa fa-angle-up" aria-hidden="true"></i>
		</button>

        <!-- Optional JavaScript _____________________________  -->

		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<!-- jQuery -->
		<script src="{{ asset('vendor/jquery.2.2.3.min.js') }}"></script>
		<!-- Popper js -->
		<script src="{{ asset('vendor/popper.js/popper.min.js') }}"></script>
		<!-- Bootstrap JS -->
		<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<!-- Camera Slider -->
		<script src="{{ asset('vendor/Camera-master/scripts/jquery.mobile.customized.min.js') }}"></script>
		<script src="{{ asset('vendor/Camera-master/scripts/jquery.easing.1.3.js') }}"></script>
		<script src="{{ asset('vendor/Camera-master/scripts/camera.min.js') }}"></script>
		<!-- menu  -->
		<script src="{{ asset('vendor/menu/src/js/jquery.slimmenu.js') }}"></script>
		<!-- WOW js -->
		<script src="{{ asset('vendor/WOW-master/dist/wow.min.js') }}"></script>
		<!-- owl.carousel -->
		<script src="{{ asset('vendor/owl-carousel/owl.carousel.min.js') }}"></script>
		<!-- js count to -->
		<script src="{{ asset('vendor/jquery.appear.js') }}"></script>
		<script src="{{ asset('vendor/jquery.countTo.js') }}"></script>
		<!-- Fancybox -->
		<script src="{{ asset('vendor/fancybox/dist/jquery.fancybox.min.js') }}"></script>

        @if (!empty(Route::current()->parameters['view']) && Route::current()->parameters['view'] === 'contact')
            <!-- Validation -->
            <script type="text/javascript" src="{{ asset('vendor/contact-form/validate.js') }}"></script>
            <script type="text/javascript" src="{{ asset('vendor/contact-form/jquery.form.js') }}"></script>
            <!-- Google map js -->
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjQLCCbRKFhsr8BY78g2PQ0_bTyrm_YXU"></script>
            <script src="{{ asset('vendor/sanzzy-map/dist/snazzy-info-window.min.js') }}"></script>
            <script src="{{ asset('js/map-script.js') }}"></script>
        @endif
        
		<!-- Theme js -->
		<script src="{{ asset('js/theme.js') }}"></script>

    </div>

</body>

</html>
