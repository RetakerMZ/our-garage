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
          <a href="{{ route('testimoni.index') }}" class="nav-link">
            <h1>Edit Data Testimoni</h1>
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
            <form action="{{ route('testimoni.update', $testimoni->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama"
                    value="{{ $testimoni->nama }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Caption</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Caption"
                    value="{{ $testimoni->caption }}">
                </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputFile">Gambar Testimoni</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="gambar" class="form-control" id="gambar"
                          accept="image/png,image/jpeg,image/jpg" value="{{ $testimoni->gambar }}">
                      </div>
                    </div>
                  </div>
              </div>
              <div class="mx-auto">
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <a class="btn btn-danger" href="{{ route('testimoni.index') }}">cancel</a>
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
