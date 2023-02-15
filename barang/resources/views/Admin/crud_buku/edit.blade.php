@extends('Admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="text-dark">Tambah Data Buku</h3>
    </div>
    <div class="card-body">
        <form class="col-xl-6 mx-auto" action="/control-panel/crud/{{ $book->id }}/update" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                <input type="text" name="name" value="{{ $book->name }}" lass="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Penulis</label>
                <input type="text" name="penulis" value="{{ $book->penulis }}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun_terbit" value="{{ $book->tahun_terbit }}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kategori</label>
                <input type="text" name="category" value="{{ $book->category }}" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Deskripsi</label>
                <input class="form-control" value="{{ $book->desc }}" name="desc" id="" type="text"></input>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
