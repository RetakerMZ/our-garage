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
                <a  href="{{ route('car.car.create') }}"><button type="submit" class="btn btn-primary">Tambah Data +</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Mobil</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Fuel</th>
                      <th style="width: 10px">Transmition</th>
                      <th style="width: 10px">Seat</th>
                      <th>Keterangan</th>
                      <th>Gambar</th>
                      <th>Rent</th>
                      <th>Created At</th>
                      <th>Updated At</th>
                      <th style="width: 10px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($car as $row)
                    <tr>
                      <td>{{$row->nama}}</td>
                      <td>{{$row->tipe_mobil}}</td>
                      <td>{{$row->harga}}</td>
                      <td>{{$row->fuel}}</td>
                      <td>{{$row->transmition}}</td>
                      <td>{{$row->seat}}</td>
                      <td>{{$row->remt}}</td>
                      <td>{{$row->gambar}}</td>
                      <td>{{$row->keterangan}}</td>
                      <td>{{$row->created_at}}</td>
                      <td>{{$row->updated_at}}</td>
                      <td>
                        <div class="btn-aksi">
                         <a  href="{{ route('car.car.edit', $row->id) }}" ><button type="submit" class="btn btn-info mb-1">edit</button></a>
                         <a  href="{{ route('car.car.delete', $row->id) }}" ><button type="btn" class="btn btn-danger">delete</button></a>
                        </div>
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
