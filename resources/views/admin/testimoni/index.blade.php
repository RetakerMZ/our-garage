@extends('admin.layouts.main')
@section('title')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Testimoni</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
      <div class="container-fluid">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div class="card">
              <div class="card-header">
                <a href="{{ route('testimoni.create') }}"><button type="submit" class="btn btn-primary">Tambah Data +</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Caption</th>
                      <th>Gambar</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($testimonis as $testimoni)
                            <tr>
                                <td>{{$testimoni->nama}}</td>
                                <td>{{$testimoni->caption}}</td>
                                <td><a href="{{asset('storage/images/testimonis/'.$testimoni->image)}}">{{$testimoni->image}}</a></td>
                                <td class="text-center">
                                    <form action="{{ route('testimoni.destroy', $testimoni->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Apakah anda yakin menghapus data ini?')">
                                        @csrf
                                        @method('delete')
                                        <a class="btn btn-sm btn-info"
                                            href="{{ route('testimoni.edit', $testimoni->id) }}"><i
                                                class="far fa-edit"></i> Edit</a>
                                        <button type="submit" class="btn btn-sm btn-outline-danger"><i
                                                class="far fa-trash-alt"></i> Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                  </tbody>
                  <!--  -->
                </table>
              </div>

      </div>
</div>

@endsection
