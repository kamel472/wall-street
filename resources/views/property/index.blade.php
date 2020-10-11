@extends('layouts.main')

@section('body')
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg= "{{URL::asset('img/page-top-bg/3.jpg')}}" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-top-text text-white">
						<h2>Our Proprties</h2>
						<p>With us .. You will own your dream house.</p>
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

	<!-- Developments section-->
	<section class="developments-section spad">

	<div class="container">
			
	<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropdown Example
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">HTML</a></li>
    <li><a href="#">CSS</a></li>
    <li><a href="#">JavaScript</a></li>
  </ul>
</div>
		</div>

		<div class="container">
			<div class="row">
				@foreach ($properties as $property)
				<div class="col-lg-4 col-md-6">
					<div class="development-box">
						
						<img src="{{URL::asset('img/developments/3.jpg')}}" alt="">
						<div class="dev-text">
							<h5>{{$property->description}} </h5>
							<h6><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;{{$property->location}}</h6>
							<br>
							<div class="dev-price">
								<span>Price</span>
								<h4>{{$property->price}} LE</h4>
							</div>
							<a class="site-btn  btn btn-primary btn-lg" href="{{route('properties.show' , $property->id)}}" role="button">Details</a>
							
						</div>
					</div>
				</div>
				@endforeach
				<br>
				
				
			</div>
		</div>
	</section>
	<!-- Developments section end-->

@endsection
