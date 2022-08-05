@extends('admin.layouts.main')
@section('title')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mobil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="container-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <a  href="{{ route('admin.camera.create') }}"><button type="submit" class="btn btn-primary">Tambah Data +</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Camera</th>
                      <th>Pixel</th>
                      <th>Battrey</th>
                      <th>Display</th>
                      <th>Optical Zoom</th>
                      <th>Memory</th>
                      <th>Keterangan</th>
                      <th>Gambar</th>
                      <th>Rent</th>
                      <th>Aksi</th>
                      <th>Available</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; ?>
                    
                    @foreach ($camera as $row)
                    <?php  $i++; ?>
                    <?php $bg=($i%2==0?'#E1E5EA':'white'); ?>
                    <tr style="background-color: <?php echo $bg; ?>; border-style: solid; border-width: 1px;">
                      <td>{{$row->nama}}</td>
                      <td>{{$row->pixel}}</td>
                      <td>{{$row->battrey}}</td>
                      <td>{{$row->display}}</td>
                      <td>{{$row->optical_zoom}}</td>
                      <td>{{$row->memory}}</td>
                      <td>{{$row->keterangan}}</td>
                      <td>{{$row->gambar}}</td>
                      <td>{{$row->rent}}</td>

                      <td>
                        <form action="{{ route('admin.camera.delete', $row->id) }}"
                            method="POST"
                            onsubmit="return confirm('Apakah anda yakin menghapus data ini?')">
                            @csrf
                            @method('delete')
                            <a class="btn btn-sm btn-info"
                                href="{{ route('admin.camera.edit', $row->id) }}"><i
                                    class="far fa-edit"></i> Edit</a>
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i
                                    class="far fa-trash-alt"></i> Hapus</button>
                        </form>
                      </td>
                      <td>
                        <?php if ($row->rent == 'no') : ?>
                            <a id="btn-{{$row->id}}" class="btn btn-warning" href="{{route ('admin.camera.rented', $row->id)}}">Available</a>
                        <?php else : ?>
                            <a id="btn-{{$row->id}}" class="btn btn-danger" href="{{route ('admin.camera.available', $row->id)}}">Rented</a>
                        <?php endif; ?>
                      </td>
                    </tr>
                    @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
      </div>
</div>

@endsection
