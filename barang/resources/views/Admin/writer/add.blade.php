@extends('Admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="text-dark">Tambah Data Penulis</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('writer.create') }}" method="POST" class="col-xl-4 mx-auto">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Name</label>
                    <input type="text" name="writer" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Tanggal Lahir Penulis</label>
                    <input type="date" name="born" class="form-control" name="" id="date">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
@endsection
