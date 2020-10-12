@extends('layouts.admin')

@section('body')
	
	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg= "{{URL::asset('img/page-top-bg/3.jpg')}}" >
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="page-top-text text-white">
						<h2>Admin Panel</h2>
						<p>Edit Property</p>
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
					<form method="POST" action="{{route('properties.store')}}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                          <label for="exampleInputPassword1" style="font-weight: bold;">title</label>
                          <input type="text" name="title" class="form-control" id="exampleInputPassword1" value="{{$property->title}}" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight: bold;" >description</label>
                            <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{$property->description}}" required>
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword1" style="font-weight: bold;" >location</label>
                            <input type="text" name="location" class="form-control" id="exampleInputPassword1" value="{{$property->location}}" required>
                          </div>


                         
                            <div class="row">
                              <div class="col-sm">
                                <div class="form-group">
                                  <label for="exampleInputPassword1" style="font-weight: bold;" >area</label>
                                  <input type="number" name="area" class="form-control" id="exampleInputPassword1" value="{{$property->area}}" required>
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label for="exampleInputPassword1" style="font-weight: bold;" >rooms</label>
                                  <input type="number" name="rooms" class="form-control" id="exampleInputPassword1" value="{{$property->rooms}}" required>
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label for="exampleInputPassword1" style="font-weight: bold;" >Baths</label>
                                  <input type="number" name="baths" class="form-control" id="exampleInputPassword1" value="{{$property->baths}}" required>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-sm">
                                <div class="form-group">
                                  <label for="exampleInputPassword1" style="font-weight: bold;" >Price</label>
                                  <input type="number" name="price" class="form-control" id="exampleInputPassword1" value="{{$property->price}}" required>
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label for="exampleInputPassword1" style="font-weight: bold;" >Downpayment</label>
                                  <input type="number" name="downpayment" class="form-control" id="exampleInputPassword1" value="{{$property->downpayment}}" required>
                                </div>
                              </div>
                              <div class="col-sm">
                                <div class="form-group">
                                  <label for="exampleInputPassword1" style="font-weight: bold;" >Installments</label>
                                  <input type="number" name="installments" class="form-control" id="exampleInputPassword1" value="{{$property->installments}}" required>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-lg-6 col-md-6">
                            
                        
                            <div class="form-group">
                              <label for="exampleFormControlFile1" style="font-weight: bold;" >Carousal images</label>
                              <br>
                              
                              <input type="file" name="files[]" multiple required>
                            </div>

                            <div class="form-group">
                              <label for="exampleFormControlFile1" style="font-weight: bold;" required>Main Image</label>
                              <br>
                              
                              <input type="file" name="file" required>
                            </div>

                        </div>
                        
                        <button type="submit"   class="btn btn-primary">Edit</button>
                      </form>
               

                

				
				<br>
				
				
			</div>
		</div>
	</section>
	<!-- Developments section end-->

@endsection
