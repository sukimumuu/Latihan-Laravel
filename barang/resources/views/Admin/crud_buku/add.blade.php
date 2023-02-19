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
                <label for="writer" class="form-label" style="font-size: 16px">Penulis</label><br>
                <select name="writer" id="writer" style="width: 20%; text-align:center; height:40px; font-size: 16px; border-radius:10px; outline:none;">
                        <option value="">Choose</option>
                    @foreach ($writer as $for)
                        <option value="{{ $for->id }}">{{ $for->writer }}</option>
                    @endforeach
                </select>
                </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tahun Terbit</label>
                <input type="date" name="years" class="form-control" id="exampleInputPassword1">
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
