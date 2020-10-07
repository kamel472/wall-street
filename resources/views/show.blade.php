@extends('layouts.main')

@section('body')

<!-- Hero section -->
<section class="hero-section">
  <div class="hero-social-warp">
    <div class="hero-social">
      <a href=""><i class="fa fa-facebook"></i></a>
      <a href=""><i class="fa fa-linkedin"></i></a>
      <a href=""><i class="fa fa-twitter"></i></a>
      <a href=""><i class="fa fa-youtube-play"></i></a>
      <a href=""><i class="fa fa-instagram"></i></a>
    </div>
  </div>
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/2.jpg">
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
						<h2>MODERN VILLA 1</h2>
						<div class="property-info">
							<h6>Lot Size</h6>
							<div class="pi-icon">
								<i class="flaticon-151-plans"></i>
								<span>2561 sqft </span>
							</div>
						</div>
						<div class="property-info">
							<h6>Beds</h6>
							<div class="pi-icon">
								<i class="flaticon-151-beds"></i>
								<span>3</span>
							</div>
						</div>
						<div class="property-info">
							<h6>Baths</h6>
							<div class="pi-icon">
								<i class="flaticon-151-relax"></i>
								<span>2</span>
							</div>
						</div>
						<div class="property-info">
							<h6>Garage</h6>
							<div class="pi-icon">
								<i class="flaticon-151-transportation"></i>
								<span>1 </span>
							</div>
						</div>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem. Curabitur sollicitudin enim vel lacus vehicula, vitae so-dales ipsum porta.</p>
				</div>
				<div class="col-xl-6 col-lg-5 text-lg-right text-left">
					<div class="property-price">
						<h2>$445,000</h2>
						<p>(taxes excluded)</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Property details section end -->

	<!-- Property features slider -->
	<div class="property-features-slider owl-carousel">
		<a href="img/property-gallery/1.jpg" class="img-popup-gallery">
			<img src="img/property-gallery/1.jpg" alt="">
			<i class="flaticon-151-reading-glasses"></i>
		</a>
		<a href="img/property-gallery/2.jpg" class="img-popup-gallery">
			<img src="img/property-gallery/2.jpg" alt="">
			<i class="flaticon-151-reading-glasses"></i>
		</a>
		<a href="img/property-gallery/3.jpg" class="img-popup-gallery">
			<img src="img/property-gallery/3.jpg" alt="">
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
						<h4>GENERAL OVERVIEW</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed sollicitudin sem. Curabitur sollicitudin enim vel lacus vehicula, vitae sodales ipsum porta.</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="property-overview-text">
						<h4>GENERAL OVERVIEW</h4>
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
							<li>Praesent tincidunt diam in ante faucibus tristique.</li>
							<li>Vivamus id nisl sed mi varius lobortis.</li>
							<li>Suspendisse sit amet erat placerat, molestie neque id</li>
							<li>Fusce pretium libero sit amet ipsum posuere pretium.</li>
							<li>Praesent tincidunt diam in ante faucibus tristique.</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
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