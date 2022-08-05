@extends('layout.main')
@section('title')
@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid jumbot__" style="background-image: url('images/camera1.jpg');background-size: 100%; margin-top: 50px;">
  <div class="container">
    <h1 class="display-4"><span>SEWA </span>CAMERA <span>BALI </span></h1>
    <p class="lead">We Provide Camera Rental With Affordable Price And Complete Service</p>
  </div>
</div>
<!-- End Jumbotron -->

<!-- OUR CAR -->
<div class="container-fluid bg-light py-5">
  <div class="container pb-5">
    <div class="row pt-3">
      <div class="col align-item-center text-center heading-section ftco-animate title">
        <h2 >OUR CAMERA'S</h2>
      </div>
    </div>
    <div class="row ftco-animate py-5">
        @foreach ($camera as $camera)
        <div class="col-lg-4 col-6 align-item-center text-center">
          <div class="card ourcar__">
          <!-- <img src="{{asset('storage/images/cameras/'.$camera->gambar)}}" class="card-img-top" alt="..."> -->
          @if ($camera->rent == 'yes')
              <div
                  class="ourcar__ car-info card-img-overlay bg-text card-img-top d-flex align-items-center justify-content-center">
                  <h4  class="fw-bold bg-default-secondary text-white p-2  align-items-center justify-content-center">RENTED</h4>
              </div>
          @endif
            <div class="card-body ourcar-body text-center">
            <h5 class="card-title">{{$camera->nama}}</h5>
            <p class="text-center">HY</p>
            <a href="https://api.whatsapp.com/send?phone=6285829261962&text=Halo,%20Kakak%20saya%20ingin%20menyewa%20kamera {{ $camera->nama }} Apakah item tersebut tersedia?" >
      <button type="button" class="btn btn-outline-primary">RENT NOW! <i class="fa-brands fa-whatsapp"></i></button>
      </a>
            <hr>
            </div>
          </div>
        </div>
        @endforeach
    </div>
    </div>
  </div>
  </div>
</div>
<!-- END OUR CAR -->

@endsection
