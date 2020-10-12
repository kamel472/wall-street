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
			<img src=""  alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="container">
			<ul class="main-menu">
				<li><a href="{{'/'}}">Home</a></li>
				<li><a href="{{route('properties.create')}}">Create Property</a></li>
				<li><a href="{{route('properties.index')}}">Edit/Delete Property</a></li>
				
				<li><a  href="{{ route('logout') }}"
					onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
					{{ __('Logout') }}
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
					@csrf
				</form></li>
                                
			</ul>
		</div>
	</header>
    <!-- Header section end -->

    @yield('body')


<!--====== Javascripts & Jquery ======-->


</body>
</html>


    
