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
          <a href="{{ route('admin.bike.index') }}" class="nav-link">
            <h1>Edit Data Bike </h1>
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
            <form action="{{ route('admin.bike.update', $bike->id )}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <div class="form-group">
                       <label for="exampleInputEmail1">Nama Camera</label>
                       <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Nama Camera" value="{{$bike->nama}}">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Harga</label>
                       <input type="text" name="harga" class="form-control" id="exampleInputEmail1" placeholder="100000"value="{{$bike->harga}}">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Pixel</label>
                       <input type="text" name="pixel" class="form-control" id="exampleInputEmail1" placeholder="Pixel"value="{{$bike->pixel}}">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Battery</label>
                       <input type="text" name="Battrey" class="form-control" id="exampleInputEmail1" placeholder="Battery"value="{{$bike->battrey}}">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Display</label>
                       <input type="text" name="display" class="form-control" id="exampleInputEmail1" placeholder="Display" value="{{$bike->display}}">
                     </div>

                 </div>
                 <!-- /.col -->
                 <div class="col-md-6">
                   <div class="form-group">
                       <label for="exampleInputEmail1">Optical Zoom</label>
                       <input type="text" name="optical_zoom" class="form-control" id="exampleInputEmail1" placeholder="Optical Zoom"value="{{$bike->optical_zoom}}">
                     </div>
                     <div class="form-group">
                       <label for="exampleInputEmail1">Memory</label>
                       <input type="text" name="memory" class="form-control" id="exampleInputEmail1" placeholder="Memory"value="{{$bike->memory}}">
                     </div>
                   <div class="form-group">
                       <label for="exampleInputEmail1">Keterangan</label>
                       <textarea name="keterangan" class="form-control" id="exampleInputEmail1" placeholder="Keterangan" rows="3">
                        {{ old('keterangan') }}</textarea>
                     </div>
                   <div class="form-group">
                       <label for="exampleInputFile">Gambar Camera</label>
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
                  <a class="btn btn-danger" href="{{ route('admin.camera.index') }}">cancel</a>
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
