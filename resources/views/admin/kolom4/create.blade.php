@extends('layout/admin')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">FORM TAMBAH FOTO KOLOM 4</h6>
        </div>
        <div class="card-body">
          <form method="POST" action="/kolom4/create/store" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama">
            </div>

            <div class="form-group">
              <label for="foto">Pilih foto Untuk kolom4</label>
              <input type="file" class="form-control-file" name="foto" id="foto">
            </div>

            <button type="submit" class="btn-sm btn-primary"><i class="fas fa-plus-circle"></i> Add Photo</a></button>

            <a href="/kolom4" class="btn btn-sm btn-warning" role="button"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
          </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection