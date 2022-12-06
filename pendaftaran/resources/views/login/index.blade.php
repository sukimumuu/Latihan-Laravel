@extends('layout.regislogin')
@section('content')
    <div class="box">
            <h1>Login</h1>
            <form action="{{ route('login.loading') }}" method="post">
                @csrf
                <div class="inputan">
                    <label for=""><i class="fa-solid fa-envelope"></i></label>
                    <input type="email" name="email" id="">
                </div>
                <div class="inputan">
                    <label for=""><i class="fa-solid fa-key"></i></label>
                    <input type="password" name="password" id="">
                </div>
                <input type="submit" value="Log in" id="signup">
            </form>
          </div>
@endsection
          