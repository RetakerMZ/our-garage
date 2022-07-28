@extends('layout.main')
@section('title')
@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid jumbot__" style="background-image: url('images/motor.jpg');background-size: 100%; margin-top: 50px;">
  <div class="container">
    <h1 class="display-4"><span>SEWA </span>MOTOR <span>BALI </span></h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
<!-- End Jumbotron -->
<!-- CAR TYPE -->
<div class="container-fluid">
  <div class="container pb-5">
    <div class="row pt-3">
        <div class="col align-item-center text-center heading-section ftco-animate title">
        <h2 class="ftco-section">FIND YOUR BIKE</h2>
        <!-- <p>By Type</p> -->
        <div class="row ">
          <div class="col-lg-2 col-md-4 col-4 car__">
            <div class="category-car">
              <div class="categoryimg">
                <img src="images/honda.png" alt="">
              </div>
            </div>
          </div>
        </div>      
    </div>
  </div>
  </div>
</div>
<!-- END CAR TYPE -->
<!-- OUR CAR -->
<div class="container-fluid bg-light py-5">
  <div class="container pb-5">
    <div class="row pt-3">
      <div class="col align-item-center text-center heading-section ftco-animate title">
        <h2>OUR BIKE</h2>
      </div>
    </div>
    <div class="row ftco-animate">
    
      <div class="col-lg-4 col-6 align-item-center text-center">
        <div class="card ourcar__">
        <img src="images/motor.jpg" class="card-img-top" alt="...">
          <div class="card-body ourcar-body">
          <h5 class="card-title">Nama</h5>
          <p class="card-text"><span>100k</span> / day</p>
          <a href="#" class="btn btncar1">Details </a>
          <a href="#" class="btn btn-primary btncar">Order now <i class="fa-brands fa-whatsapp"></i></a>
          <hr>
          </div>
        </div>
      </div>
      
      <div class="d-grid gap-2 d-md-flex justify-content-md-end ftco-animate">
      <!-- <button type="button" class="btn btn-outline-primary">See More</button> -->
    </div>
    </div>
  </div>
  </div>
</div>
<!-- END OUR CAR -->

@endsection