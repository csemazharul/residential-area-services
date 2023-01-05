<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.truelysell.com/template/index-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Nov 2022 18:15:52 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Resendial</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('resources/frontend/assets/img/favicon.png')}}">
	
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"> 
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/plugins/bootstrap/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/plugins/fontawesome/css/all.min.css')}}">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/plugins/owlcarousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/plugins/owlcarousel/owl.theme.default.min.css')}}">
	
	<!-- Aos CSS -->
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/plugins/aos/aos.css')}}">

	<!-- toast messsage -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css" rel="stylesheet">
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	

	<!-- toast messsage -->

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('resources/frontend/assets/css/style.css')}}">
	@stack('css')
</head>
<body class="body-three">
		<div class="body-img">
		<img src="assets/img/banner-three.png"  alt="">
	</div>
	<!-- /Body Backgound -->
	
<div class="main-wrapper">
@include('./Frontend/layout/header')
@yield('content')
@include('./Frontend/layout/footer')
</div>
<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

</div>
</body>
@yield('script')

<script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "108262515478668");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v15.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
	<!-- jQuery -->
	<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script><script src="{{asset('resources/frontend/assets/js/jquery-3.6.0.min.js')}}"></script>

	<!-- Bootstrap Core JS -->
	<script src="{{asset('resources/frontend/assets/js/popper.min.js')}}"></script>
	<script src="{{asset('resources/frontend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	  <!-- Sticky Sidebar JS -->

	<script src="{{asset('resources/frontend/assets/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>
	<script src="{{asset('resources/frontend/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>

	<!-- Owl JS -->
	<script src="{{asset('resources/frontend/assets/plugins/owlcarousel/owl.carousel.min.js')}}"></script>
	
	<!-- Aos -->
	<script src="{{asset('resources/frontend/assets/plugins/aos/aos.js')}}"></script>
<!-- // toast message -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	<!-- Custom JS -->
	<script src="{{asset('resources/frontend/assets/js/script.js')}}"></script>

</body>

<!-- Mirrored from htmlguru.net/house-rent/index07.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Sep 2022 19:08:59 GMT -->
</html>