@extends('layouts.main')

@section('body')
	
	<!-- Page top section -->
	@if(auth()->user())
	<section class="page-top-section set-bg" data-setbg= "{{URL::asset('img/page-top-bg/3.jpg')}}" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-top-text text-white">
						<h2>Admin Panel</h2>
						<p>Edit/Delete Property</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	@else
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
	@endif
	<!-- Page top section end -->

	<!-- Developments section-->
	<section class="developments-section spad">

	<div class="container">
			
	
		</div>

		<div class="container">
			<div class="row">
				@foreach ($properties as $property)
				<div class="col-lg-4 col-md-6">
					<div class="development-box">
						
						<img src="{{URL::asset('storage/img/'.$property->main_image)}}" alt="">
						<div class="dev-text">
							<h5>{{$property->description}} </h5>
							<h6><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;{{$property->location}}</h6>
							<br>
							<div class="dev-price">
								<span>Price</span>
								<h4>{{$property->price}} LE</h4>
							</div>
							
							<a class=" site-btn btn btn-primary" href="{{route('properties.show' , $property->id)}}" role="button">Details</a>
							<br><br><br>
							@if(auth()->user())
							<div class="container">
								<div class="row">
									<div class="col-sm-3">
									<a class="  btn btn-primary " href="{{route('properties.edit' , $property->id)}}" role="button">Edit</a>
									</div>
									<div class="col-sm-3">
									<form method="post" action="{{route('properties.destroy' , $property->id)}}">
										@csrf
										@method('delete')
										<button class="btn btn-danger"  onclick="return confirm('Do You want to delete?');"> Delete
										 </button>
									</form>
									</div>
								</div>
							</div>	
							@endif
							
							

							
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
