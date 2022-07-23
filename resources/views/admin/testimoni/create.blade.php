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
          <a href="#" class="nav-link">
            <h1>Tambah Testimoni</h1>
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
          <form action="{{ route('testimoni.insert') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
              <div class="col-md-6">
              <div class="form-group col-md-6">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                placeholder="Masukkan Nama" value="{{old('nama') }}">
                        </div>
                  <div class="form-group col-md-6">
                            <label for="name">Caption</label>
                            <input type="text" class="form-control" name="caption" id="caption"
                                placeholder="Masukkan Caption" value="{{old('caption') }}">
                        </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">Gambar</label>
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
                  <a class="btn btn-danger" href="#">cancel</a>
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
