<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Montrnk</title>
    <link rel="stylesheet" href="/css/landingpage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                $('ul').toggleClass('show');
                $('#body').toggleClass('show2');
            });
        });
    </script>
</head>
<body>
         <section id="header">
                 <nav>
                    <div class="brand">
                       <h2 class="animate__headShake">MONTRNK</h2> 
                    </div>
                    <ul>
                        <li> <a href="#">Home</a> </li>
                        <li> <a href="#">Shop</a> </li>
                        <li> <a href="#">About</a> </li>
                        <li> <a href="#"><button>Login</button></a> </li>
                    </ul>
                    <label id="icon">
                        <i class="bi bi-list"></i>
                    </label>
                 </nav>
         </section>
         <section id="body">
            <div class="left">
                <div class="title">
                    <h2 class="">MONTRNK</h2>
                    <p>survival, play with friends, against monsters, or other players. survive by building a basecamp, let's what are you waiting for enter the <span>Montrnk</span>  world now</p>
                    <a href=""><button>Download<i class="bi bi-chevron-bar-down"></i></button></a>
                </div>
            </div>
            <div class="right">b</div>
         </section>
</body>
</html>