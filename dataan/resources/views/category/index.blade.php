@extends('layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <h2>Add Category</h2>
            <button class="btn btn-success mb-3 d-block ml-auto"><a href="/add-category" class="text-white">Add +</a></button>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">No.</th>
                    <th>Category</th>
                    <th>Total Game</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @php
                        $no=1
                    @endphp
                    @foreach ($category as $dd)
                        <td>{{ $no++ }}</td>
                    <td>{{ $dd->name }}</td>
                    <td>
                   0
                    </td>
                    <td>
                        Edit | Delete
                    </td>
                    @endforeach
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection