@extends('Admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="text-dark">Tambah Data Buku</h3>
    </div>
    <div class="card-body">
        <form class="col-xl-6 mx-auto" action="{{ route('crud-create') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Penulis</label>
                <input type="text" name="penulis" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kategori</label>
                <input type="text" name="category" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="desc" id="" cols="10" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
