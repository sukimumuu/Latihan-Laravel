@extends('layout.master')
@section('content')
    <div class="container-fluid">
        <div class="card-body">
            <h2>Add Category</h2>
            <button class="btn btn-success mb-3 d-block ml-auto"><a href="" class="text-white">Add +</a></button>
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
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                    </td>
                    <td>
                        Edit | Delete
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection