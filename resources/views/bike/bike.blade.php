@extends('layout.main')
@section('title')
@section('content')
<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid jumbot__" style="background-image: url('images/motor.jpg');background-size: 100%;">
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
        @foreach ($bike as $bike)
        <div class="col-lg-4 col-6 align-item-center text-center">
          <div class="card ourcar__">
          <img src="{{asset('storage/images/cars/'.$bike->gambar)}}" class="card-img-top" alt="...">
          @if ($bike->rent == 'yes')
              <div
                  class="ourcar__ car-info card-img-overlay bg-text card-img-top d-flex align-items-center justify-content-center">
                  <h4  class="fw-bold bg-default-secondary text-white p-2  align-items-center justify-content-center">RENTED</h4>
              </div>
          @endif
            <div class="card-body ourcar-body">
            <h5 class="card-title">{{$bike->name}}</h5>
            <p class="card-text">{{$bike->transmition}}</p>
            <p class="card-text "><span>{{$bike->harga}}K</span> / day</p>
            <a href="https://api.whatsapp.com/send?phone=6285829261962&text=Halo,%20Kakak%20saya%20ingin%20menyewa%20{{ $bike->name }} seharga Rp.{{number_format($bike->harga,0,",",".")}}K per hari, saya menyewa selama ... hari" class="btn btn-primary btncar">Order now</a>
            <a href="{{ route('bike.detail', $bike->id) }}" class="btn btncar1">Details</a>
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
