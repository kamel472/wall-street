@extends('layouts.main')

@section('body')
<!-- Hero section -->
<section class="hero-section">
  <div class="hero-social-warp">
    <div class="hero-social">
		<a href="https://www.facebook.com/WallStreetGroupEgy/"><i class="fa fa-facebook"></i></a>
		<a href="https://instagram.com/wallstreet.group?igshid=16gzcxx4ixaqs"><i class="fa fa-linkedin"></i></a>
    </div>
  </div>
  
		<div class="hero-slider owl-carousel owl-theme">
			<div class="hs-item set-bg" data-setbg="img/slider/1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<h2>We bring to you various opportunities in many real estate projects </h2>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider/2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<h2>Offers and easy installments systems on any unit you choose </h2>
						</div>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/slider/3.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7">
							<h2>We can help you to find your perfect destination </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Hero details slider -->
		<div class="hero-nav-slider-warp">
			<div class="container">
				<div class="hero-nav-slider owl-carousel">
					
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- features icons section -->
	<div class="features-icons-section">
		<div class="features-icon-item">
			<i class="flaticon-151-banker"></i>
			<p>Easy Buying</p>
		</div>
		<div class="features-icon-item">
			<i class="flaticon-151-closing"></i>
			<p>Ready to Move</p>
		</div>
		<div class="features-icon-item">
			<i class="flaticon-151-maps-and-flags-3"></i>
			<p>Great Location</p>
		</div>
		<div class="features-icon-item">
			<i class="flaticon-151-step-ladder"></i>
			<p>Comunity Pool</p>
		</div>
		<div class="features-icon-item">
				<i class="flaticon-151-trees"></i>
			<p>30% Park</p>
		</div>
		<div class="features-icon-item">
			<i class="flaticon-151-fader"></i>
			<p>Sunny Location</p>
		</div>
		<div class="features-icon-item">
			<i class="flaticon-151-indoor"></i>
			<p>Modern Design</p>
		</div>
		<div class="features-icon-item">
			<i class="flaticon-151-maps-and-flags-1"></i>
			<p>Parking Spaces</p>
		</div>
		<div class="features-icon-item">
			<i class="flaticon-151-transportation"></i>
			<p>Garage Included</p>
		</div>
	</div>
	<!-- features icons section end-->

	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			
			<h2><i class="fas fa-bookmark" style="color: blue;"></i>&nbsp;&nbsp;OUR HOUSES</h2>
			<BR><BR><BR>
			<div class="row">
				@foreach ($properties as $property)
				<div class="col-lg-8">
					<div class="intro-img-box">
						<h4>{{$property->title}}</h4>
						<img src="img/intro/1.jpg" alt="">
					</div>
				</div>
				<div class="col-lg-4 align-items-end d-flex">
					<div class="intro-text-box">
						<p> {{$property->description}}</p>
						<a href="{{route('properties.show' , $property->id)}}" class="site-btn btn btn-outline-primary">MORE INFO</a>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</section>
	<!-- Intro section end-->
	
	
	

	<!-- Features section -->
	<section class="features-section">
		<div class="container">
			
				<h2><i class="fas fa-bookmark" style="color: blue;"></i>&nbsp;&nbsp;FEATURES</h2>
			
		</div>
		<BR><BR>
		<div class="features-slider owl-carousel">
			<div class="feature-box">
				<i class="fas fa-hands-helping"></i>
				<h5>FRIENDLY ASSISTANCE </h5>
				<p>We assist our clients whatever it takes.
				If we saw not matching property we will tell him to wait for the fit one. </p>
			</div>		
			<div class="feature-box">
				<i class="fas fa-hand-holding-usd"></i>
				<h5>INSTALLMENTS</h5>
				<p> We offer an exclusive service which we can buy secondhand home by installments.
					You will just pick your perfect home, contact us and we will buy it for you</p>
			</div>		
			<div class="feature-box">
				<i class="fas fa-hotel"></i>
				<h5>LUXURIOUS</h5>
				<p> We bring for you the luxurious variety of homes, so you will be able to pick your better ones. </p>
			</div>		
				
		</div>
	</section>
	<!-- Features section end-->

	
  @endsection
	
	
