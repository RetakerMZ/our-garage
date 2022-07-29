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
    <div class="carousel-item">
      <img src="images/bbq1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-block">
        <h5>BBQ PACKAGE</h5>
        <p>We Provide Tools Rental With Affordable Price And Complete Service</p>
      </div>
    </div>
  </div>
</div>
<!--END CAROUSEL -->
<section class="ftco-section" id="items">
                <div class="container-fluid py-5">
                    <div class="container">
                    <div class="row justify-content-center mt-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <!-- <span class="subheading">Services</span> -->
                <h2 class="ftco-section">Our Items</h2>
            </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-car owl-carousel">
                        <div class="item text-center">
                                <div class="car-wrap rounded ftco-animate  mx-auto">
                                    <div class="img rounded d-flex align-items-center mx-auto" style="background-image: url('images/car-1.jpg'); ">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0 text__"><a href="#">Cars</a></h2>
                                        <div class="d-flex mb-3">
                                            <!-- <span>Lorem ipsum dolor sit amet</span> -->
                                        </div>
                                        <p class="d-flex mb-0 d-block"><a href="{{ route('car') }}" class="btn mx-auto btn-info py-2 ml-1">Details</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="car-wrap rounded ftco-animate  mx-auto">
                                    <div class="img rounded d-flex align-items-end mx-auto" style="background-image: url('data:image/jpeg;base64,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');">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">Motorcycle</a></h2>
                                        <div class="d-flex mb-3">
                                            <!-- <span>Lorem ipsum dolor sit amet</span> -->
                                        </div>
                                        <p class="d-flex mb-0 d-block"><a href="#" class="btn mx-auto btn-info py-2 ml-1">Details</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="car-wrap rounded ftco-animate  mx-auto">
                                    <div class="img rounded d-flex align-items-end mx-auto" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlFy3SG4Wvwvxf5gJenr6y-YhVzngJqknAWQ&usqp=CAU');">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">Camera</a></h2>
                                        <div class="d-flex mb-3">
                                            <!-- <span>Lorem ipsum dolor sit amet</span> -->
                                        </div>
                                        <p class="d-flex mb-0 d-block"><a href="#" class="btn mx-auto btn-info py-2 ml-1">Details</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="car-wrap rounded ftco-animate mx-auto">
                                    <div class="img rounded d-flex align-items-end" style="background-image: url('https://asset.kompas.com/crops/1dJtBHrqNFokppMAhYbzIVYlRDg=/0x1:1404x936/750x500/data/photo/2019/12/28/5e06e5e617700.jpg');">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">BBQ Package</a></h2>
                                        <div class="d-flex mb-3">
                                            <!-- <span>Lorem ipsum dolor sit amet</span> -->
                                        </div>
                                        <p class="d-flex mb-0 d-block"><a href="#" class="btn mx-auto btn-info py-2 ml-1">Details</a></p>
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
