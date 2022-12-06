@extends('layout.regislogin')
@section('content')
    <div class="box">
            <h1>Register</h1>
            <form action="{{ route('register.loading') }}" method="post">
                @csrf
                <div class="inputan">
                    <label for=""><i class="fa-solid fa-user"></i></label>
                    <input type="text" name="name" id="">
                </div>
                <div class="inputan">
                    <label for=""><i class="fa-solid fa-envelope"></i></label>
                    <input type="email" name="email" id="">
                </div>
                <div class="inputan">
                    <label for=""><i class="fa-solid fa-key"></i></label>
                    <input type="password" name="password" id="">
                </div>
                <div class="inputan">
                    <label for=""><i class="fa-solid fa-calendar"></i></label>
                    <input type="date" name="date" id="">
                </div>
                <input type="submit" value="Sign up" id="signup">
            </form>
            <div class="login"><a href="/login">Login</a></div>
            
          </div>
@endsection
          