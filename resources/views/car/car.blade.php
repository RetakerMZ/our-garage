@extends('layout.main')
@section('title')
@section('content')

<!-- Jumbotron -->
<div class="jumbotron jumbotron-fluid jumbot__" style="background-image: url('images/bg_1.jpg'); background-size: 100%; margin-top: 50px;">
  <div class="container">
    <h1 class="display-4"><span>SEWA </span>MOBIL <span>BALI </span></h1>
    <p class="lead">We Provide Car Rental With Affordable Price And Complete Service</p>
  </div>
</div>
<!-- End Jumbotron -->

<!-- CAR TYPE -->
<div class="container-fluid">
  <div class="container pb-5">
  <div class="row pt-3">
    <div class="col align-item-center text-center heading-section ftco-animate title">
        <h2 class="ftco-section">FIND YOUR CAR</h2>
        <p>By Type</p>
        <div class="row ">
        @foreach ($types as $tipe)
          <div class="col-lg-2 col-md-4 col-4 car__">
            <div class="category-car">
              <div class="categoryimg">
                <img src="{{asset('storage/images/tipe_mobils/'.$tipe->gambar)}}" alt="">
                <p>{{$tipe->tipe_mobil}}</p>
              </div>
            </div>

          </div>
          @endforeach
    </div>
  </div>
  </div>
</div>
<!-- END CAR TYPE -->

<!-- OUR CAR -->
<section class="ftco-section">
                <div class="container-fluid py-5">
                    <div class="container">
                    <div class="row justify-content-center mt-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <!-- <span class="subheading">Services</span> -->
                <h2 class="ftco-section">Favourite Car</h2>
            </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="carousel-car owl-carousel">
                        <div class="item text-center">
                                <div class="car-wrap rounded ftco-animate mx-auto ">
                                    <div class="img rounded d-flex align-items-center mx-auto" style="background-image: url('images/agya.jpg'); height: 100%; ">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0 text__"><a href="#">Toyota Agya</a></h2>
                                        <div class="d-flex mb-3">
                                            <!-- <span>Lorem ipsum dolor sit amet</span> -->
                                        </div>
                                        <div class="mx-auto">
                                        <a href="#" class="btn btn-primary btncar">Order now</a>
                                        <a href="#" class="btn btn-success">Details</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="car-wrap rounded ftco-animate  mx-auto">
                                <div class="img rounded d-flex align-items-center mx-auto" style="background-image: url('images/hrv.jpg'); height: 200px; ">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">Honda Hrv</a></h2>
                                        <div class="d-flex mb-3">
                                            <!-- <span>Lorem ipsum dolor sit amet</span> -->
                                        </div>
                                        <div class="mx-auto">
                                        <a href="#" class="btn btn-primary btncar">Order now</a>
                                        <a href="#" class="btn btn-success">Details</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item text-center">
                                <div class="car-wrap rounded ftco-animate  mx-auto">
                                <div class="img rounded d-flex align-items-center mx-auto" style="background-image: url('images/jazz.jpg'); height: 200px; ">
                                    </div>
                                    <div class="text">
                                        <h2 class="mb-0"><a href="#">Honda Jazz</a></h2>
                                        <div class="d-flex mb-3">
                                            <!-- <span>Lorem ipsum dolor sit amet</span> -->
                                        </div>
                                        <div class="mx-auto">
                                        <a href="#" class="btn btn-primary btncar">Order now</a>
                                        <a href="#" class="btn btn-success">Details</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </section>      
      <div class="d-grid gap-2 d-md-flex justify-content-center ftco-animate mx-auto">
      <a href="{{ route('allcar') }}"> <button type="button" class="btn btn-outline-primary">See More</button></a>
    </div>
    </div>
  </div>
  </div>
</div>
<!-- END OUR CAR -->

<!-- TERMS OF SERVICE -->
<section class="ftco-section" id="terms">
            <div class="container-fluid py-5">
                <div class="container">
                    <div class="row justify-content-center mt-5 ftco-animate">
                        <div class="col-md-7 text-center heading-section ftco-animate">
                        <!-- <span class="subheading">Services</span> -->
                        <h2 class="ftco-section">Terms of service</h2>
                        </div>
                        <div class="terms_">
                        <p class="mb-5 terms__"><i class="fa-solid fa-1"></i>_Penyewa bersedia mematuhi, menyetujui & menandatangani syarat & Ketentuan Surat Perjanjian Sewa dengan keadaan tidak dalam paksaan<p>
                        <p class="mb-5 terms1__ "><i class="fa-solid fa-2"></i>_Penyewa harus memberikan data SIM, KTP, no kamar (hotel), no hp dan tiket PP serta menginformasikan media sosial yg dimiliki (contoh: ig,fb).
                        Kami tidak akan menggunakan data-data itu untuk hal-hal yang melanggar hukum.<p>
                        <p class="mb-5 terms__"><i class="fa-solid fa-3"></i>_Jika terjadi kerusakan baik sengaja ataupun tidak sengaja merupakan tanggung jawab penyewa mobil/kamera sehingga wajib menanggung biaya perbaikan dan menanggung biaya sewa selama waktu pengerjaan perbaikan dengan biaya minimal Rp.700.000. (Tergantung kerusakan)
                       <br> <span>•</span>  kerusakan ringan yg mengakibatkan mobil lecet dikenakan biaya claim ansuransi minor 500.000 + biaya sewa selama pengerjaan perbaikan
                       <br> <span>•</span>  kerusakan fatal yg mengakibatkan mobil berlubang, ganti sparepart, tidak bisa jalan, kaca pecah, terbakar akan dikenakan biaya claim ansuransi major  3.000.000 + biaya sewa selama pengerjaan perbaikan<p>
                        <p class="mb-5 terms1__ "><i class="fa-solid fa-4"></i>_Jika penyewa menggunakan mobil/kamera melebihi batas waktu, maka akan dikenakan biaya overtime 30K/jam untuk unit dengan harga dibawah 300k dan 10%/ jam untuk unit dgn harga diatas 300k . Untuk kelebihan lebih dari 5 Jam, akan dihitung satu hari.<p>
                        <p class="mb-5 terms__"><i class="fa-solid fa-5"></i>_Untuk sewa mobil tanpa supir/kamera hanya diperbolehkan untuk wilayah pulau Bali saja dan harus menyerahkan identitas penyewa seperti KTP/PASPOR.<p>
                        <p class="mb-5 terms1__ "><i class="fa-solid fa-6"></i>_Jika penyewa membatalkan penyewaan yang sudah di booked dengan alasan apapun juga penyewa berkewajiban membayar biaya kerugian sebesar 50% (cancelation fee) dari harga sewa. Pembatalan sewa mobil/kamera DP tidak dapat diminta kembali.<p>
                        <p class="mb-5 terms1__ "><i class="fa-solid fa-7"></i>_Sistem pembayaran sewa mobil yaitu dengan uang muka minimal Rp. 200.000 (booked) dan sisanya dibayar pada saat kendaraan diterima di hotel atau di Airport dengan full payment.
                        Sewa kamera/motor dengan uang muka utk booking Rp. 50.000<p>
                        <p class="mb-5 terms1__ "><i class="fa-solid fa-8"></i>_Jika anda mengirim melalui Bank BCA, cukup info kepada kami via SMS, email, telephone, kami akan check di internet.<p>
                        <p class="mb-5 terms1__ "><i class="fa-solid fa-9"></i>_Kami melayani dengan free antar jemput dibandara dengan catatan biaya karcis parkir bandara ditanggung Penyewa. Adapun batas jam kerja pukul 22.00 jika lewat akan ada biaya lembur karyawan Rp. 50.000<p>
                        <p class="mb-5 terms1__ "><i class="fa-solid fa-1"></i><i class="fa-solid fa-0"></i>_Kami berhak menolak atau tidak memberikan izin untuk penyewaan mobil/kamera di tempat kami dengan pertimbangan atau alasan tertentu seperti data pribadi penyewa tidak lengkap, dll.<p>

                    </div>
                    </div>
                </div>
            </div>
        </section>
<!-- END TERMS OF SERVICE -->
        @endsection
