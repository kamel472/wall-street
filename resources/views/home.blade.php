
@extends('layouts.main')

@section('body')

<div class="ftco-blocks-cover-1">
  <div class="ftco-cover-1 overlay innerpage" style="background-image: url('images/house.jpg')">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-6 text-center">
          <h1>Own Your Dream House</h1>
        </div>
      </div>
    </div>
  </div>
</div>
        <!--
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
            
              <div class="feature-car-rent-box-1">
              
                <h3>Lorem ipsum dolor</h3>
                <ul class="list-unstyled">
                  <li>
                    <span>Location</span>
                    <span class="spec"></span>
                  </li>
                  <li>
                    <span>Downpayment</span>
                    <span class="spec"></span>
                  </li>
                  <li>
                    <span>Installments</span>
                    <span class="spec"></span>
                  </li>
                </ul>
                <div class="d-flex align-items-center bg-light p-3">
                  <span>$150/day</span>
                  <a href="contact.html" class="ml-auto btn btn-primary">Search</a>
                  
                </div>
                
              </div>
              
            </div>
          </div>
        </div>
      -->
      </div>
    </div>
<!--
    <div class="site-section pt-0 pb-0 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-12">
            
              <form class="trip-form">
                <div class="row align-items-center mb-4">
                  <div class="col-md-6">
                    <h3 class="m-0">Begin your trip here</h3>
                  </div>
                  <div class="col-md-6 text-md-right">
                    <span class="text-primary">32</span> <span>cars available</span></span>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label for="cf-1">Where you from</label>
                    <input type="text" id="cf-1" placeholder="Your pickup address" class="form-control">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="cf-2">Where you go</label>
                    <input type="text" id="cf-2" placeholder="Your drop-off address" class="form-control">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="cf-3">Journey date</label>
                    <input type="text" id="cf-3" placeholder="Your pickup address" class="form-control datepicker px-3">
                  </div>
                  <div class="form-group col-md-3">
                    <label for="cf-4">Return date</label>
                    <input type="text" id="cf-4" placeholder="Your pickup address" class="form-control datepicker px-3">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </div>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
-->
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h3>Our Offer</h3>
            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
            <p>
              <a href="#" class="btn btn-primary custom-prev">Previous</a>
              <span class="mx-2">/</span>
              <a href="#" class="btn btn-primary custom-next">Next</a>
            </p>
          </div>
          <div class="col-lg-9">

            <div class="nonloop-block-13 owl-carousel">
              <div class="item-1">
                <a href="#"><img src="images/carousal1.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  
                  <div class="rent-price"><span>700000 LE</span></div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Location</span>
                      <span class="spec">Cairo</span>
                    </li>
                    <li>
                      <span>Level</span>
                      <span class="spec">3</span>
                    </li>
                    <li>
                      <span>Downpayment</span>
                      <span class="spec">30%</span>
                    </li>
                    <li>
                      <span>Installment</span>
                      <span class="spec">6 years</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="{{'/show'}}" class="btn btn-primary">Show</a>
                  </div>
                </div>
              </div>


              <div class="item-1">
                <a href="#"><img src="images/carousal2.jpg" alt="Image" class="img-fluid"></a>
                <div class="item-1-contents">
                  <div class="text-center">
                  <div class="rent-price"><span>800000 LE/</span></div>
                  </div>
                  <ul class="specs">
                    <li>
                      <span>Location</span>
                      <span class="spec">Cairo</span>
                    </li>
                    <li>
                      <span>Level</span>
                      <span class="spec">3</span>
                    </li>
                    <li>
                      <span>Downpayment</span>
                      <span class="spec">30%</span>
                    </li>
                    <li>
                      <span>Installment</span>
                      <span class="spec">6 years</span>
                    </li>
                  </ul>
                  <div class="d-flex action">
                    <a href="{{'/show'}}" class="btn btn-primary">Show</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    

    <div class="site-section section-3" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-white">Our services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-car-1"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-traffic"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="service-1">
              <span class="service-1-icon">
                <span class="flaticon-valet"></span>
              </span>
              <div class="service-1-contents">
                <h3>Lorem ipsum </h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2>Customer Testimony</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                <span>Mike Fisher</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                <span>Jean Stanley</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2">
              <blockquote class="mb-4">
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              <div class="d-flex v-card align-items-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                <span>Katie Rose</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection

    

   

