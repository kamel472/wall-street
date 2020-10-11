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
			<div class="row">
				
				<div class="col-lg-6 col-md-6">
					<form method="POST" action="{{route('properties.store')}}">
                        @csrf
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1">title</label>
                          <input type="text" name="title" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">location</label>
                            <input type="text" name="location" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1">area</label>
                            <input type="number" name="area" class="form-control" id="exampleInputPassword1">
                          </div><div class="form-group">
                            <label for="exampleInputPassword1">rooms</label>
                            <input type="text" name="rooms" class="form-control" id="exampleInputPassword1">
                          </div><div class="form-group">
                            <label for="exampleInputPassword1">Baths</label>
                            <input type="text" name="baths" class="form-control" id="exampleInputPassword1">
                          </div><div class="form-group">
                            <label for="exampleInputPassword1">price</label>
                            <input type="text" name="price" class="form-control" id="exampleInputPassword1">
                          </div><div class="form-group">
                            <label for="exampleInputPassword1">downpayment</label>
                            <input type="text" name="downpayment" class="form-control" id="exampleInputPassword1">
                          </div><div class="form-group">
                            <label for="exampleInputPassword1">installments</label>
                            <input type="text" name="installments" class="form-control" id="exampleInputPassword1">
                          </div>
                        
                        <button type="submit"   class="btn btn-primary">Submit</button>
                      </form>
                </div>

                <div class="col-lg-6 col-md-6">
                    <img src="{{URL::asset('img/developments/3.jpg')}}" alt="">
                <form>
                    <div class="form-group">
                      <label for="exampleFormControlFile1">Example file input</label>
                      <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                  </form>
                </div>

				
				<br>
				
				
			</div>
		</div>
	</section>
	<!-- Developments section end-->

@endsection
