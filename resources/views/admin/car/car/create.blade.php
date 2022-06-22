@extends('admin.layouts.main')
@section('title')
@section('content')



  <!-- /.navbar -->
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <a href="{{ route('car.index') }}" class="nav-link">
            <h1>Tambah Data Mobil</h1>
</a>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">


            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <form action="../car/insert" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mobil</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Mobil">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="number" name="harga" class="form-control" id="exampleInputEmail1" placeholder="100000">
                  </div>
                <div class="form-group">
                  <label>Bahan Bakar</label>
                  <select name="fuel" class="form-control select2" style="width: 100%;">
                  <option selected>Choose Fuel</option>
                    <option value="Premium">Premium</option>
                    <option value="Pertalite">Pertalite</option>
                    <option value="Pertamax">Pertamax</option>
                    <option value="Pertamax Turbo">Pertamax Turbo</option>>
                  </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                  <label>Kursi</label>
                  <select name="seat" class="form-control select2" style="width: 100%;">
                  <option selected>Choose seat</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="tipe_mobil">Tipe Mobil</label>
                    <select class="form-control" id="tipe_mobil" name="tipe_mobil">
                        <option value="" selected disabled>Pilih Kategori</option>
                        @foreach ($car_type as $car_types)
                        <option>{{$car_types->tipe_mobil}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                  <label>Transmisi</label>
                  <select name="transmition" class="form-control select2" style="width: 100%;">
                  <option selected>Choose Transmition</option>
                    <option value="manual">manual</option>
                    <option value="automatic">automatic</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Gambar Mobil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="form-control" id="gambar"
                          accept="image/png,image/jpeg,image/jpg" value="{{old('gambar') }}">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="mx-auto">
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button type="btn" class="btn btn-danger">cancel</button>
            </div>
              </form>
            </div>
              <!-- /.col -->
            </div>

              <!-- /.card-body -->
            </div>

            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
