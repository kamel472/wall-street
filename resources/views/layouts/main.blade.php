<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Real Estate | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate html template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
	<script src="{{ asset('js/main.js') }}" defer></script>
	<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

	<!-- Favicon -->
	<link href="img/logo.jpg" rel="shortcut icon"/>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Sarabun:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Fontawsome --> 
    <script src="https://kit.fontawesome.com/e2b5f74269.js" crossorigin="anonymous"></script>

	
	<!-- Stylesheets -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  


	<!-- Main Stylesheets -->
	
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/fontawesome.min.css" rel="stylesheet">

		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<!-- logo -->
		<a href="{{'/home'}}" class="site-logo">
			<img src="{{URL::asset('img/logo.jpg')}}"  alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="container">
			<ul class="main-menu">
				<li><a href="{{'/'}}">Home</a></li>
				<li><a href="{{'/about'}}">About Us</a></li>
				<li><a href="{{route('properties.index')}}">Properties</a></li>
				<li><a href="{{'/contact'}}">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->
	
	

@yield('body')

<!-- Call to action section -->
<section class="call-to-action-section set-bg" data-setbg="{{URL::asset('img/background.jpg')}}">
		<div class="container text-white text-center">
			<h1>Ask About Our Offers Today. </h1>
			<br>
			<button class="site-btn sb-light sb-big">CALL +20-111-966-6662</button>
		</div>
	</section>
  <!-- Call to action section end-->

<!-- Footer section -->
<footer class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-2 col-sm-12">
        <div class="footer-widget">
        
          <img src="{{URL::asset('img/logo.jpg')}}" alt="">
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="footer-widget">
		  <h5>COMPANY</h5>
          <ul>
            <li><a href="{{'/about'}}">About Us</a></li>
            <li><a href="{{'/contact'}}">Contact Us</a></li>
          </ul>
        </div>
      </div>
     
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="footer-widget">
          <h5>SOCIAL</h5>
          <div class="footer-social">
            <a href="https://www.facebook.com/WallStreetGroupEgy/"><i class="fa fa-facebook"></i></a>
            <a href="https://instagram.com/wallstreet.group?igshid=16gzcxx4ixaqs"><i class="fa fa-linkedin"></i></a>
            
          </div>
        </div>
      </div>
    </div>
    <div class="copyright">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved to Wallstreet
</div>
  </div>
</footer>
<!-- Footer section end-->

<!--====== Javascripts & Jquery ======-->


</body>
</html>