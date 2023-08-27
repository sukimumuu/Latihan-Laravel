@extends('layout.master')

@section('content')
<div class="container col-lg-8 mx-auto border bg-white">
    <form method="POST" action="/profil-update">
        @method('patch')
        @csrf
    <table class="table table-stripped">
        <thead>
            <tr><h2 class="p-3">Edit Account</h2></tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" class="form-control" name="name" id="" value="{{ old('name', $user->name) }}">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" class="form-control" name="email" id="" value="{{ old('email', $user->email) }}">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    {{ Auth::user()->password }}
                </td>
            </tr>   
        </tbody>
    </table>
    <div class=" col-xl-12 p-2">
        <button class="btn btn-primary d-block ml-auto">Edit</button>
    </div>
    </form>
</div>

@endsection