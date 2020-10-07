<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Real Estate | HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate html template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/logo.jpg" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Sarabun:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

	<!-- Stylesheets -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/flaticon.css') }}" rel="stylesheet">
	<link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
  <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
  


	<!-- Main Stylesheets -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<!-- logo -->
		<a href="index.html" class="site-logo">
			<img src="img/logo.jpg" alt="">
		</a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="container">
			<ul class="main-menu">
				<li><a href="{{'/'}}">Home</a></li>
				<li><a href="{{'/about'}}">About Us</a></li>
				<li><a href="{{'/show'}}">Property</a></li>
				<li><a href="developments.html">Developments</a></li>
				<li><a href="{{'/contact'}}">Contact</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->
	
	

@yield('body')

<!-- Footer section -->
<footer class="footer-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-2 col-sm-12">
        <div class="footer-widget">
          <img src="img/log-color.png" alt="">
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="footer-widget">
          <h5>COMPANY</h5>
          <ul>
            <li><a href="">About Us</a></li>
            <li><a href="">Offices</a></li>
            <li><a href="">Contact Us</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="footer-widget">
          <h5>LEGAL</h5>
          <ul>
            <li><a href="">Documents</a></li>
            <li><a href="">How to buy a house</a></li>
            <li><a href="">Terms & Condition</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-4">
        <div class="footer-widget">
          <h5>SOCIAL</h5>
          <div class="footer-social">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-youtube-play"></i></a>
            <a href=""><i class="fa fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
  </div>
</footer>
<!-- Footer section end-->

<!--====== Javascripts & Jquery ======-->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/owl.carousel.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>

</body>
</html>