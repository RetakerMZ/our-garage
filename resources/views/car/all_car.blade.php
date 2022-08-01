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
        <img src="{{asset('storage/images/cars/'.$allcar->gambar)}}" class="card-img-top" alt="...">
        @if ($allcar->rent == 'yes')
            <div
                class="car-info card-img-overlay bg-text card-img-top d-flex align-items-center justify-content-center">
                <h4 class="fw-bold bg-default-secondary text-white p-2">RENTED</h4>
            </div>
        @endif
          <div class="card-body ourcar-body">
          <h5 class="card-title">{{$allcar->nama}}</h5>
          <p class="card-text">{{$allcar->transmition}}</p>
          <p class="card-text "><span>{{$allcar->harga}}K</span> / day</p>
          <a href="https://api.whatsapp.com/send?phone=6285829261962&text=Halo,%20Kakak%20saya%20ingin%20menyewa%20{{ $allcar->nama }} seharga Rp.{{number_format($allcar->harga,0,",",".")}}K per hari, saya menyewa selama ... hari" class="btn btn-primary btncar">Order now</a>
          <a href="{{ route('detailcar', $allcar->id) }}" class="btn btncar1">Details</a>
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
