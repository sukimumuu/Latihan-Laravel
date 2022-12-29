<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ussbrary</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-light">
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
                <a class="nav-link" href="#">Bookshelf</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More...
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-shop me-2"></i>Shop</a></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-person-workspace me-2"></i>Customer service</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#"><i class="bi bi-info-circle-fill me-2"></i>About</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container-fluid" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/pickawood.jpg') }}); height:100vh;">
          <div class="row col-xl-5 position-absolute top-50 start-50 translate-middle text-white mt-5">
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
      <div class="container-fluid">
        <div class="text-center h1 mt-5 mb-5">Category</div>
        <div class="row col-xl-12 justify-content-center">
            <div class="card col-xl-3 m-3" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/jason.jpg') }}) no-repeat; height: 60vh">
              <div class="card-title text-center display-5 p-5"> <a href="#" class="nav-link text-white mt-5">Novel</a> </div>
              <div class="card-body"></div>
            </div>
            <div class="card col-xl-3 m-3" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/edu.jpg') }}) no-repeat; height: 60vh">
              <div class="card-title text-center display-5 p-5"> <a href="#" class="nav-link text-white mt-5">Education</a> </div>
              <div class="card-body text-center text-white fs-5"></div>
            </div>
            <div class="card col-xl-3 m-3" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('assets/img/comic.jpg') }}) no-repeat; background-size: cover; height: 60vh">
              <div class="card-title text-center display-5 p-5"> <a href="#" class="nav-link text-white mt-5">Comic</a> </div>
              <div class="card-body text-center text-white"></div>
            </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>