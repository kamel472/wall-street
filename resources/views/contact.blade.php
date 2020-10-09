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

	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/4.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>Contact Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit mauris congue.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="hero-social-warp">
			<div class="hero-social">
			<a href="https://www.facebook.com/WallStreetGroupEgy/"><i class="fa fa-facebook"></i></a>
            <a href="https://instagram.com/wallstreet.group?igshid=16gzcxx4ixaqs"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
	</section>
	<!-- Page top section end -->

	<!-- Contact section-->
	<section class="contact-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 offset-lg-5">
					<div class="contact-info-box">
						<h5 class="contact-title">OFFICE</h5>
						<div class="contact-info">
							<div class="ci-item">
								<img src="img/icons/location.png" class="ci-icon" alt="">
								<p>4 Sayed Zakaria,Cairo Governorate,Egypt</p>
							</div>
							<div class="ci-item">
								<img src="img/icons/headphone.png" class="ci-icon" alt="">
								<p>+20-111-966-6662 <br><br></p>
							</div>
						</div>
						<h5 class="contact-title">Send to Us</h5>
						<form class="contact-form">
							<div class="form-field">
								<img src="img/icons/profile.png" alt="" >
								<input type="text" placeholder="Full Name">
							</div>
							<div class="form-field">
								<img src="img/icons/envelope.png" alt="" >
								<input type="text" placeholder="Email Address">
							</div>
							<div class="form-field">
								<img src="img/icons/chat.png" alt="" >
								<textarea placeholder="Message"></textarea>
							</div>
							<button class="site-btn">send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Map -->
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d693971.6621063045!2d-90.0912505103206!3d36.108831972894045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d6b1b4c412b29f%3A0x9b2d8c4447fe1c96!2sCedar+St%2C+Black+Rock%2C+AR+72415%2C+USA!5e0!3m2!1sen!2sbd!4v1565787762946!5m2!1sen!2sbd" style="border:0"></iframe>
		</div>
	</section>
	<!-- Contact section end-->
@endsection
