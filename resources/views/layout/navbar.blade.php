<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a  class="navbar-brand" href="{{ route('landing') }}"> <img src="{{asset('images/logo_.png')}}" alt="..." width="50">OUR<span>GARAGE</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{ route('landing') }}"  class="nav-link">Home</a></li>
			  <li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" id="dropdownMenu2" role="button" data-toggle="dropdown" aria-expanded="false">
				Our Items
				</a>
				<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
				<a class="dropdown-item" href="{{ route('car') }}">Car</a>
				<a class="dropdown-item" href="#">Motorcycle</a>
				<a class="dropdown-item" href="#">Camera</a>
				<a class="dropdown-item" href="#">BBQ Package</a>
				</div>
			 </li>
	          <li class="nav-item"><a href="#service" class="nav-link">Services</a></li>
              <li class="nav-item"><a href="#terms" class="nav-link">Terms of service</a></li>
	          <li class="nav-item"><a href="#contact" class="nav-link">Contact Us</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>

