<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ussbrary</title>
    <link rel="stylesheet" href="{{ asset('assets/css/usshi.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/icon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-light">


    {{--  NAVBAR  --}}
    <nav class="navbar navbar-expand-lg bg-white border-bottom p-4 sticky-top">
        <div class="container">
          <a class="navbar-brand fs-2" href="#"><i class="bi bi-book-half me-2"></i>Ussbrary</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0  me-2">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Shop</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('user.logout') }}"><i class="bi bi-box-arrow-in-left me-2"></i>Logout</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person-workspace me-2"></i>Customer service</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle-fill me-2"></i>About</a></li>
                </ul>
              </li>
              @if(Auth::user()->level === 'admin')
              <li class="nav-item">
                <a class="nav-link" href="{{ route('cp.index') }}">Control Panel</a>
              </li>
              @endif
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>
    {{--  END NAVBAR  --}}

    {{--  1ST  --}}
    <div class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/pickawood.jpg') }}); height:100vh;">
        <div class="row col-xl-5 col-12 position-absolute top-50 start-50 translate-middle text-white mt-5 mx-auto">
            <figure class="text-center">
            <blockquote class="blockquote h1">
                <p>“Books are the legacies that a great genius leaves to mankind, which are delivered down from generation to generation as presents to the posterity of those who are yet unborn.”</p>
            </blockquote>
            <figcaption class="blockquote-footer text-white h6 mt-2 ">
                Joseph Addison
            </figcaption>
            </figure>
        </div>
    </div>
    {{--  END 1ST  --}}

    {{--  2ND  --}}
    <div class="container-fluid">
        <div class="text-center h1 mt-5 mb-5">Category</div>
        <div class="row col-xl-12 justify-content-center">
            <div class="card col-xl-3 m-3" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/jason.jpg') }}) no-repeat; height: 60vh">
                <div class="card-title text-center display-5 p-5"> <a href="#" class="nav-link text-white mt-5">Novel</a>
                <a href="#" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-5">Read more...</a></div>
                <div class="card-body"></div>
            </div>
            <div class="card col-xl-3 m-3" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/edu.jpg') }}) no-repeat; height: 60vh">
                <div class="card-title text-center display-5 p-5"> <a href="#" class="nav-link text-white mt-5">Education</a>
                <a href="#" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-5">Read more...</a></div>
                <div class="card-body text-center text-white fs-5"></div>
            </div>
            <div class="card col-xl-3 m-3" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/comic.jpg') }}) no-repeat; background-size: cover; height: 60vh">
                <div class="card-title text-center display-5 p-5"> <a href="#" class="nav-link text-white mt-5">Comic</a>
                <a href="#" class="btn btn-primary position-absolute bottom-0 start-50 translate-middle-x mb-5">Read more...</a></div>
                <div class="card-body text-center text-white"></div>
            </div>
        </div>
    </div>
    {{--  END 2ND  --}}

    {{-- 3RD --}}
    <div class="container-fluid mx-auto mt-4 mb-5 row col-12 col-xl-12 justify-content-center">
        <div class="display-6 border-bottom-bl p-1 col-12 col-xl-12">Novel Trending</div>
        <div class="col-xl-9">
        <div class="card">
        <div class="row g-0">
            <div class="col-md-3">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Novel title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
        <div class="row g-0">
            <div class="col-md-3">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Novel title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
        <div class="row g-0">
            <div class="col-md-3">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Novel title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
        <div class="row g-0">
            <div class="col-md-3">
            <img src="..." class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Novel title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
        </div>
        </div>
        <div class="card">
            <div class="row g-0">
                <div class="col-md-3">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">Novel title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="  col-xl-3">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Trending today
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Top this month
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
            </div>
            </div>
            <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Top this year
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
            </div>
            </div>
        </div>
        </div>
    </div>
    {{--  END 3RD  --}}

    {{--  FOOTER  --}}
      <footer class="container-fluid bg-dark">
        <div class="w-75 p-3 mx-auto row col-xl-12 justify-content-center">
            <div class="col-xl-3 text-white">
              <a class="navbar-brand fs-1" href="#"><i class="bi bi-book-half me-2"></i>Ussbrary</a>
            </div>
            <div class="col-xl-3 p-2 text-white">
              <span class="d-block fs-5" style="cursor: pointer">PT. Usshibook Indonesia</span>
              <span class="d-block fs-5" style="cursor: pointer">Jl. Kejalanan pinggir No.19</span>
              <span class="d-block fs-5" style="cursor: pointer">Kebun Kotak</span>
              <div class="d-flex gap-4 mb-4 mt-4">
                <i class="bi bi-facebook fs-3" style="cursor: pointer"></i>
                <i class="bi bi-github fs-3" style="cursor: pointer"></i>
                <i class="bi bi-instagram fs-3" style="cursor: pointer"></i>
                <i class="bi bi-twitter fs-3" style="cursor: pointer"></i>
              </div>
              <span class="d-block fs-5" style="cursor: pointer">Mobile : 088-781-998</span>
              <span class="d-block fs-5" style="cursor: pointer">Email : ussbrary@br.com</span>
            </div>
           <div class="col-xl-3 text-white">
            <div class="">
              <span class="fs-4 d-block" style="letter-spacing: 5px; cursor:default">ABOUT US</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Employee</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Blog</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Media kit</span>
            </div>
           </div>
           <div class="col-xl-3 text-white">
            <div class="">
              <span class="fs-4 d-block" style="letter-spacing: 5px; cursor:default">PARTNER</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Mediaquery Indonesia</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Pinpinbook Asia</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Metadata Universe</span>
            </div>
            <div class="">
              <span class="fs-4 d-block mt-2" style="letter-spacing: 5px; cursor:default">SUPPORT</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Buku Indonesia</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Generasi Baca</span>
              <span class="fs-6 d-block m-2" style="cursor: pointer">Dunia Bukuku</span>
            </div>
           </div>
        </div>
        <div class="col-xl-12 text-center text-white p-3">
          <span style="cursor: pointer">&copy; Ussbrabry 2023</span>
        </div>
      </footer>
    {{--  END FOOTER  --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
