@extends('layout.main')
@section('title')
@section('content')
<!-- OUR CAR -->
<div class="container-fluid bg-light allcars py-5">
  <div class="container pb-5">
    <div class="row pt-3">
      <div class="col align-item-center text-center heading-section ftco-animate title">
        <h2>OUR CAR COLLECTION'S</h2>
      </div>
    </div>
    <div class="row">
      @foreach ($allcars as $allcar)
      <div class="col-lg-4 col-6 align-item-center text-center">
        <div class="card ourcar__">
        <img src="{{asset('storage/images/cars/'.$allcar->image)}}" class="card-img-top" alt="...">
          <div class="card-body ourcar-body">
          <h5 class="card-title">{{$allcar->nama}}</h5>
          <p class="card-text">{{$allcar->transmition}}</p>
          <p class="card-text "><span>{{$allcar->harga}}K</span> / day</p>
          <a href="#" class="btn btn-primary btncar">Order now</a>
          <a href="#" class="btn btncar1">Details</a>
          <hr>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
<!-- END OUR CAR -->
@endsection
