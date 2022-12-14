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
    .parent1{
        width: 40%;
        height: 500px;
        background-color: white;
        margin: auto;
        margin-top: 10%;
        border-radius: 10px; 
    }
    .parent2{
        width: 50%;
        margin: auto;
    }
    .title{
        margin: auto;
        padding-top: 10px;
        width: 10%;
    }
    .input{
        display: flex;
        flex-direction: column;
        width: 100%;
        margin: auto;
        padding: 10px
    }
    .input input,label{
        height: 25px;
        font-size: 18px;
        margin-top: 5px;
    }
    #masuk{
        float: right;
        margin-top: 15px;
        width: 100px;
        height: 30px;
        cursor: pointer;
        background-color: rgb(95, 95, 95);
        border-radius: 5px;
        color: white;
        font-size: 16px;
        border: none;  
    }
    .toregister{
        font-size: 14px;
        margin: 20px;
    }
</style>
<body>
       <div class="parent1">
           <div class="title"><h2>Masuk</h2></div>
           <div class="parent2">
            <form action="{{ route('login.creating') }}" method="POST">
                @csrf
            <div class="input">
                <label for="username">Email</label>
                <input type="email" name="email">
            </div>
            <div class="input">
                <label for="username">Password</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="Masuk" id="masuk">
            <div class="toregister"><a href="{{ route('register') }}">Belum punya akun ?, Daftar disini</a></div>
            </form>
           </div>
        </div> 
</body>
</html>