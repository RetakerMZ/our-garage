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
    <section class="ftco-section ftco-cart">
			<div class="container-fluid">
				<div class="row">
        @foreach ($camera as $camera)
    			<div class="col-md-12 ftco-animate">
    				<div class="">
	    				<table class="table card-body ourcar-body">
						    <tbody>
						      <tr>
						      	<td class="card ourcar__ text-start"><img src="{{asset('storage/images/cameras/'.$camera->gambar)}}" class="card-img-top" alt="...">

                    <p class="product-name text-center">{{$camera->nama}}</p>
                    <p class="card-text "><span>{{$camera->harga}}K</span> / day</p>
                    @if ($camera->rent == 'yes')
              <div
                  class="ourcar__ car-info mt-3 card-img-top d-flex align-items-center justify-content-center">
                  <h4  class="fw-bold bg-default-secondary text-white p-2  align-items-center justify-content-center">RENTED</h4>
              </div>
          @endif
                    </td>
						        
                    <td>
						        	<div>
							        	<h3>
							        		<span class="per">Pixel</span>
							        	</h3>
							        	<span class="subheading">{{$camera->pixel}}</span>
						        	</div>
						        </td>

                    <td>
						        	<div>
							        	<h3>
							        		<span class="per">Memory</span>
							        	</h3>
							        	<span class="subheading">{{$camera->memory}}</span>
						        	</div>
						        </td>

						        <td>
						        	<div>
							        	<h3>
							        		<span class="per">Battery</span>
							        	</h3>
							        	<span class="subheading">{{$camera->battrey}}</span>
						        	</div>
						        </td>

                    <td>
						        	<div>
							        	<h3>
							        		<span class="per">Optical Zoom</span>
							        	</h3>
							        	<span class="subheading">{{$camera->optical_zoom}}</span>
						        	</div>
						        </td>

                    <td>
						        	<div>
							        	<h3>
							        		<span class="per">Display</span>
							        	</h3>
							        	<span class="subheading">{{$camera->display}}</span>
						        	</div>
						        </td>

                    
						      </tr><!-- END TR-->
              @endforeach
                </tbody>
						  </table>
					  </div>
    			</div>

    		</div>
			</div>
		</section>

    </div>
  </div>
  </div>
</div>
<!-- END OUR CAR -->

@endsection