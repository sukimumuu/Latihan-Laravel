@extends('layout.master')

@section('content')
<div class="container col-lg-8 mx-auto border bg-white">
    <form action="">
    <table class="table table-stripped">
        <thead>
            <tr><h2 class="p-3">Account Settings</h2></tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td>
                    {{ Auth::user()->name }}
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    {{ Auth::user()->email }}
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
        <button class="btn btn-primary d-block ml-auto"><a href="/profil-edit" class="text-white">Edit</a></button>
    </div>
    </form>
</div>

@endsection