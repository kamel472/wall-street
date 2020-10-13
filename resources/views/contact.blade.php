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
	<section class="page-top-section set-bg" data-setbg="{{URL::asset('storage/img/page-top-bg/4.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="page-top-text text-white">
						<h2>Contact Us</h2>
						<p>We are here for your help.</p>
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
		@if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
			@endif
			<div class="row">
				<div class="col-10">
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
						<form class="contact-form" action="{{route('contact.store')}}" method="POST">
							@csrf
							<div class="form-field">
								<img src="img/icons/profile.png" alt="" >
								<input type="text" placeholder="Full Name" name="name" required>
							</div>
							<div class="form-field">
								<img src="img/icons/envelope.png" alt="" >
								<input type="email" placeholder="Email Address" name="email" required>
							</div>
							<div class="form-field">
								<img src="img/icons/chat.png" alt="" >
								<textarea placeholder="Message" name="message" required></textarea>
							</div>
							<button class="site-btn" name="send" type="submit">send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!-- Contact section end-->
@endsection
