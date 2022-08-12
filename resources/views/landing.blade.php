@extends('layout.main')
@section('title')
@section('content')

<!-- Jumbotron -->
<!-- <div class="jumbotron jumbotron-fluid jumbot__" style="background-image: url('images/bg_1.jpg');">
  <div class="container">
    <h1 class="display-4"><span>Rent </span>Anything <span>You </span>Want</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div> -->
<!-- End Jumbotron -->
<!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/bg_3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-block">
        <h5 class="capt__">BEST <span>RENTAL</span> SERVICE <span>IN INDONESIA</span></h5>
        <p class="capt__2">One Stop Service For Amazing Holiday</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/bg_1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-block">
        <h5>MOBIL</h5>
        <p>We Provide Car Rental With Affordable Price And Complete Service</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/motor1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-block">
        <h5>Motor</h5>
        <p>We Provide Motorcycle Rental With Affordable Price And Complete Service</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/camera1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-block">
        <h5>Kamera</h5>
        <p>We Provide Camera Rental With Affordable Price And Complete Service</p>
      </div>
    </div>
    <!-- <div class="carousel-item">
      <img src="images/bbq1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-block">
        <h5>BBQ PACKAGE</h5>
        <p>We Provide Tools Rental With Affordable Price And Complete Service</p>
      </div>
    </div> -->
  </div>
</div>
<!--END CAROUSEL -->
<section class="ftco-section" id="items">
                <div class="container-fluid py-5">
                    <div class="container">
                    <div class="row justify-content-center mt-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="ftco-section">Our Items</h2>
            </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-car owl-carousel">
                        <div class="item text-center">
                                <div class=" rounded ftco-animate  mx-auto">
                                  <a href="{{ route('car') }}">
                                    <div  class="img rounded d-flex align-items-center mx-auto" style="cursor:pointer;">
                                      <div class="owl-text-overlay ">
                                      <h2 class="owl-title">CAR'S</h2>
                                    </div>
                                    <img style="border-radius: 10px;" src="/images/bg_1.jpg" alt="">
                                  </a>
                                    </div>    
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class=" rounded ftco-animate  mx-auto">
                                <a href="{{ route('bike.index') }}">
                                    <div  class="img rounded d-flex align-items-center mx-auto" style="cursor:pointer;">
                                      <div class="owl-text-overlay ">
                                      <h2 class="owl-title">BIKE'S</h2>
                                    </div>
                                    <img style="border-radius: 10px;" src="/images/motor1.jpg" alt="">
                                  </a>
                                    </div>    
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class=" rounded ftco-animate  mx-auto">
                                <a href="{{ route('camera') }}">
                                    <div  class="img rounded d-flex align-items-center mx-auto" style="cursor:pointer;">
                                      <div class="owl-text-overlay ">
                                      <h2 class="owl-title">CAMERA'S</h2>
                                    </div>
                                    <img style="border-radius: 10px;" src="/images/camera1.jpg" alt="">
                                  </a>
                                    </div>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- SERVICES -->
        <section class="ftco-section" id="service">
                <div class="container-fluid bg-light py-5">
                    <div class="container">
                    <div class="row justify-content-center mt-5">
            <div class="col-md-7 mb-3 text-center heading-section ftco-animate">
                <!-- <span class="subheading">Services</span> -->
                <h2 class="ftco-section">Services</h2>
            </div>
            </div>
                    <div class="row">
                        <div class="col-md-3 ">
                            <div class="services services-2 w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span><i class="fa-solid fa-sack-dollar"></i></span></div>
                                    <div class="text w-100">
                                    <h3 class="heading mb-2">Harga Bersahabat</h3>
                                    <p>Kami menawarkan harga rental mobil yang kompetitif, dengan kondisi kendaraan yang terawat dan pelayanan yang memuaskan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="services services-2 w-100 text-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span><i class="fa fa-motorcycle" aria-hidden="true"></i></span></div>
                                    <div class="text w-100">
                                    <h3 class="heading mb-2">Antar Jemput</h3>
                                    <p>Kami menyediakan pelayanan antar jemput sesuai dengan lokasi anda dan yang pasti bebas biaya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="services services-2 w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span ><i class="fa fa-volume-control-phone" aria-hidden="true"></i></span></div>
                                    <div class="text w-100">
                                    <h3 class="heading mb-2">Layanan 24 jam</h3>
                                    <p>Kami selalu siap memberikan pelayanan yang cepat dan informasi yang tepat kapanpun.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="services services-2 w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center"><span><i class="fa fa-thumbs-up" aria-hidden="true"></i></span></div>
                                    <div class="text w-100">
                                    <h3 class="heading mb-2">Terpercaya</h3>
                                    <p>Menjaga keamanan dan kenyamanan adalah prioritas kami</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        <!-- ENDSERVICES -->
<!-- TESTIMONI -->
<section class="ftco-section" id="testi">
<div class="container py-5">
        <div class="row justify-content-center">
        <div class="col align-item-center text-center heading-section ftco-animate title">
        <h2 class="ftco-section py-5">Testimonial's</h2>
          </div>
        </div>


            <div class="carousel-testimony owl-carousel ftco-owl">
              @foreach($testimonis as $testi)
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(images/profil.png)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">{{$testi->caption}}</p>
                    <p class="name">{{ $testi->nama }}</p>
                    <!-- <span class="position">MANAGER</span> -->
                  </div>
                </div>
              </div>
              @endforeach
            </div>

      </div>
      </section>
<!-- END TESTIMONI -->
        @endsection
