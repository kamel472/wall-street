@extends('layouts.main')

@section('body')

 

    <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/house3.jpg')">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 text-center">
              <h1>Own Your Dream House</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2>Property Details</h2>
         
        </div>
      </div>
        <div class="row">
          <div class="col-lg-6 mb-5" >
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col-2">Location</th>
                    <td scope="col">Cairo</td>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Level</th>
                    <td >3</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Price</th>
                    <td >800000</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Downpayment</th>
                    <td >20%</td>
                    
                  </tr>
                  <tr>
                    <th scope="row">Installments</th>
                    <td >6 Years</td>
                    
                  </tr>
                </tbody>
              </table>
              <br>
              <div class="d-flex action">
                <a href="contact.html" class="btn btn-primary">Buy Now</a>
              </div>
          </div>
          <div class="col-lg-6 ml-auto">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/sample1a.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/sample1b.jpeg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/sample1c.jpeg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
                
              </div>
              
          </div>
        </div>
      </div>
    </div>
@endsection