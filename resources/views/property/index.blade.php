@extends('layouts.main')

@section('body')
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-top-text text-white">
						<h2>Our Proprties</h2>
						<p>With us .. You will own your dream.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-social-warp">
			<div class="hero-social">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-youtube-play"></i></a>
				<a href=""><i class="fa fa-instagram"></i></a>
			</div>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Developments section-->
	<section class="developments-section spad">
		<div class="container">
			<div class="row">
				@foreach ($properties as $property)
				<div class="col-lg-4 col-md-6">
					<div class="development-box">
						<img src="img/developments/3.jpg" alt="">
						<div class="dev-text">
							<h5 style="color: blue;">{{$property->description}} </h5>
							<h6><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;{{$property->location}}</h6>
							<br>
							<div class="dev-price">
								<span>Price</span>
								<h4>{{$property->price}} LE</h4>
							</div>
							<button class="site-btn sb-solid" style="background-color:blue" >Details</button>
						</div>
					</div>
				</div>
				@endforeach
				<br>
				
				
			</div>
		</div>
	</section>
	<!-- Developments section end-->

	<!-- Subscribe section -->
	<section class="subscribe-section spad">
		<div class="container">
			<div class="subscribe-text text-center">
				<h2>Exciting New Opportunities Coming Soon</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum enim ut auctor elemen-tum. Praesent et nulla eu massa egestas faucibus sed in leo. </p>
			</div>
			<form class="subscribe-form">
				<input type="email" placeholder="Leave us your email address">
				<button class="site-btn">SUBSCRIBE NOW</button>
			</form>
		</div>
	</section>
	<!-- Subscribe section end-->
@endsection
