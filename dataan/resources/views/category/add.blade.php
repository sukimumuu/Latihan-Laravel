@extends('layout.master')
@section('content')
        <div class="container-fluid">
            <div class="card-body">
                <h2>Add New Category</h2>
                <form action="/add-category-process" method="post">
                    @csrf
                <table class="table col-xl-6">
                    <thead>
                        <tr>
                            <th>Category of game</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>
                                <input class="form-control mb-3" type="text" name="name" id="">
                                <button class="btn btn-success d-block ml-auto" type="submit"><a href="" class="text-white">Add</a></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                </form>
            </div>
        </div>
@endsection