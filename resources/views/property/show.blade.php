@extends('layouts.main')

@section('body')

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/carousal1.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>Property Page</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mauris congue.</p>
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

	<!-- Property details section -->
	<section class="property-details-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-7">
					<div class="property-details">
						<h2>{{$property->title}}</h2>
						<BR>
						<h4><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;{{$property->location}}</h4>
						<BR>
						<div class="property-info">
							<h6>AREA</h6>
							<div class="pi-icon">
								<i class="fas fa-vector-square"></i>
								<span>{{$property->area}} </span>
							</div>
						</div>
						<div class="property-info">
							<h6>Rooms</h6>
							<div class="pi-icon">
								<i class="fas fa-door-open"></i>
								<span>{{$property->rooms}}</span>
							</div>
						</div>
						<div class="property-info">
							<h6>Baths</h6>
							<div class="pi-icon">
								<i class="fa fa-bath" aria-hidden="true"></i>
								<span>{{$property->baths}}</span>
							</div>
						</div>
						
					</div>
					
				</div>
				<div class="col-xl-6 col-lg-5 text-lg-right text-left">
					<div class="property-price">
						<h2>{{$property->price}} LE</h2>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Property details section end -->

	<!-- Property features slider -->
	<div class="property-features-slider owl-carousel">
		<a href="img/property-gallery/1.jpg" class="img-popup-gallery">
			<img src="img/property-gallery/carousal1.jpg" alt="">
			<i class="flaticon-151-reading-glasses"></i>
		</a>
		<a href="img/property-gallery/2.jpg" class="img-popup-gallery">
			<img src="img/property-gallery/carousal1.jpg" alt="">
			<i class="flaticon-151-reading-glasses"></i>
		</a>
		<a href="img/property-gallery/3.jpg" class="img-popup-gallery">
			<img src="img/carousal1.jpg" alt="">
			<i class="flaticon-151-reading-glasses"></i>
		</a>
		<a href="img/property-gallery/2.jpg" class="img-popup-gallery">
			<img src="img/property-gallery/2.jpg" alt="">
			<i class="flaticon-151-reading-glasses"></i>
		</a>
	</div>
	<!-- Property features slider end -->

	<!-- Property overview section-->
	<section class="property-overview-section spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="property-overview-text">
						<h4>DESCRIPTION</h4>
						<p>{{$property->description}}</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="property-overview-text">
						<h4>FINANCIAL INFORMATION</h4>
						<ul>
							<li>PRICE: {{$property->price}} LE</li>
							<li>DOWNPAYMENT: {{$property->downpayment}}%</li>
							<li>INSTALLMENTS: {{$property->installments}} YEARS</li>
							
						</ul>
					</div>
				</div>
				<a href="" class="site-btn">CONTACT US</a>
				
			</div>
		</div>
		<BR><BR><BR>
		<!--
		<div class="container-fluid pt-5">
			<div class="row">
				<div class="col-lg-6 p-0">
					<img src="img/property-features/1.jpg" alt="">
				</div>
				<div class="col-lg-6 p-0 d-flex align-items-center justify-content-center">
					<div class="property-text-warp">
						<div class="property-overview-text">
							<h4>GENERAL OVERVIEW</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem. Curabitur sollicitudin enim vel lacus vehicula, vitae sodales ipsum porta.</p>
							<a href="" class="site-btn">MORE INFO</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 p-0 d-flex align-items-center justify-content-center order-2 order-lg-1">
					<div class="property-text-warp">
						<div class="property-overview-text">
							<h4>GENERAL OVERVIEW</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem. Curabitur sollicitudin enim vel lacus vehicula, vitae sodales ipsum porta.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 p-0 order-1 order-lg-2">
					<img src="img/property-features/2.jpg" alt="">
				</div>
			</div>
		</div>
		-->
	</section>
	<!-- Property overview section end-->

	<!-- Call to action section -->
	<section class="call-to-action-section set-bg" data-setbg="img/cta-bg.jpg">
		<div class="container text-white text-center">
			<h2>Ask our top consultants for an personalized offer today. </h2>
			<button class="site-btn sb-light sb-big">CALL 800-1-5141</button>
		</div>
	</section>
	<!-- Call to action section end-->
@endsection