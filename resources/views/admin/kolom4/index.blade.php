@extends('layout/admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-4">
      @if (session('status'))
        <div class="alert alert-success alert-dismissible my-4">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>{{ session('status') }} <i class="fa fa-check-circle"></i>
        </div>
      @endif
      <h6 class="m-0 font-weight-bold text-primary">Table Gallery KOLOM-4</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <a href="{{('/kolom4/create')}}" class="btn btn-sm btn-primary active mb-4" role="button" aria-pressed="true">
        <i class="fas fa-plus-circle"></i> Add Photo</a>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Foto</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kolom4 as $kolom4)
            <tr>
              <th scope="row">{{$loop->iteration}}</th>
              <td>
                <img src="{{asset('asset/img/gallery/'.$kolom4->foto)}}" width="20%" height="20%"> 
              </td>
              <td>
                <form action="kolom4/{{$kolom4->id}}/delete" method="get">
                  @csrf
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Ingin Menghapus Data Ini?')"><i class="fas fa-trash"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->
@endsection