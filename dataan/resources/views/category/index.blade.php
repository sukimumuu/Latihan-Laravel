@extends('layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <h2>Add Category</h2>
            <button class="btn btn-success mb-3 d-block ml-auto"><a href="/add-category" class="text-white">Add +</a></button>
                    @php
                        $no=1;
                    @endphp
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">No.</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     @foreach ($category as $dd)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $dd->name }}</td>
                    <td>
                         <a href=""><i class="fas fa-trash text-danger"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection