<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmlguru.net/house-rent/index07.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Sep 2022 19:08:59 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Specific Meta
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
	<meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
	<meta name="author" content="">

	<!-- Titles
	================================================== -->
	<title>@yield('title')</title>

	<!-- Favicons
		================================================== -->
	<link rel="shortcut icon" href="{{asset('resources/frontend/assets/images/house-logo.png')}}">
	<link rel="apple-touch-icon" href="{{asset('resources/frontend/assets/images/apple-touch-icon.html')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">

	<!-- Custom Font
	================================================== -->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700" rel="stylesheet">     
    @yield('import-css')
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('resources/frontend/assets/css/colors.css')}}">
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/css/style.css')}}">
	<!-- Modernizr
    @yield('style')
	================================================== -->
	<script src="{{asset('resources/frontend/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
@include('./Frontend/layout/header')
@yield('content')
@include('./Frontend/layout/footer')
	================================================== --> 
	<script src="{{asset('resources/frontend/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
	<script src="{{asset('resources/frontend/assets/js/plugins.js')}}"></script>
	<script src="{{asset('resources/frontend/assets/js/main.js')}}"></script> <!-- main-js -->

</body>

<!-- Mirrored from htmlguru.net/house-rent/index07.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Sep 2022 19:08:59 GMT -->
</html>