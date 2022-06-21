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
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputEmail1">Nama Mobil</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                <div class="form-group">
                  <label>Bahan Bakar</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option value="" disabled selected hidden>Choose Fuel</option>
                    <option>Premium</option>
                    <option>Pertalite</option>
                    <option>Pertamax</option>
                    <option>Pertamax Turbo</option>>
                  </select>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
              <div class="form-group">
                  <label>Kursi</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option value="" disabled selected hidden>Choose seat</option>
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Transmisi</label>
                  <select class="form-control select2" style="width: 100%;">
                  <option value="" disabled selected hidden>Choose Transmition</option>
                    <option>manual</option>
                    <option>automatic</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Gambar Mobil</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="form-control" name="gambar" id="gambar"
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