<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>H0Tels | Masuk</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>
<style>
    body{
        max-height: 100vh;
        background-image: linear-gradient(rgba(0,0,0,0.1), rgba(0,0,0,0.1)) , url(images/3.jpg);
        font-family: 'Poppins', sans-serif;
        
    }
    .login{
        width: 60%;
        height: 550px;
        display: flex;
        flex-wrap: wrap;
        border: 2px solid white;
        margin: auto;
        margin-top: 10%;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;    }
    .left{
        background-color: white;
        flex: 50%;
        display: block;
    }
    .left h2{
        text-align: center;
        font-weight: 400;
        letter-spacing: 1px;
    }
    .left span{
        margin-left: 26%; 
    }
    .right{
        flex: 50%;
    }
    .right h2{
        font-weight: 400;
        text-align: center;
        color: white;
    }
    .inputan{
        padding-top: 50px;
    }
    .inputan input{
        width: 80%;
        height: 50px;
        margin-left: 10%;
        outline: none;
        border: none;
        border-bottom: 1px solid black;
        font-size: 18px;
        padding-bottom: 0;
    }
    #masuk{
        width: 120px;
        height: 40px;
        color: white;
        background-color: rgb(50, 200, 24);
        font-size:18px;
        border: none;
        margin-left: 39%;
        cursor: pointer;
        margin-top: 15%;
        margin-bottom: 10%; 
        border-radius: 20px; 
    }
    #masuk:hover{
        background-color: rgb(45, 178, 21);
        color: rgb(210, 209, 209);
    }
</style>
<body>
        <div class="login">
             <div class="left">
                <h2>Masuk</h2>
                <form action="{{ route('login.creating') }}" method="post">
                    @csrf
                <div class="inputan">
                    <input type="email" name="email" id="email" placeholder="Email kamu...">
                </div>
                <div class="inputan">
                    <input type="password" name="password" id="password" placeholder="Password kamu...">
                </div>
                <input type="submit" value="Masuk" id="masuk">
            </form>
            <span>Belum punya akun?? <a href="{{ route('register') }}">Daftar disini</a></span>
             </div>
             <div class="right">
                <h2>H0TELS</h2>
             </div>
        </div>
</body>
</html>