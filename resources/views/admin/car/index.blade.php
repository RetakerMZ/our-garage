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
              <button type="submit" class="btn btn-primary">Tambah Data +</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nama Mobil</th>
                      <th>Kategory</th>
                      <th>Harga</th>
                      <th>Fuel</th>
                      <th>Transmition</th>
                      <th>Seat</th>
                      <th>Gambar</th>
                      <th style="width: 10px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Agya</td>
                      <td>LCGC</td>
                      <td>50.000</td>
                      <td>Pertalite</td>
                      <td>Matic</td>
                      <td>4</td>
                      <td>IMG</td>
                      <td>
                        <div class="btn-aksi">
                         <button type="submit" class="btn btn-info mb-1">edit</button>
                         <button type="btn" class="btn btn-danger">delete</button>
                        </div>
                      </td>
                    </tr>
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