<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shopiya - Selpiya Setiawati</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="{{ asset('admin') }}\css\bootstrap.min.css">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Selpiya Setiawati</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-light  m-2" style="border-radius: 10px;" >
            <div class="container px-4 px-lg-5 my-5 ">
                <div class="row">
                    <div class="col-6">
                        <h1 class="display-4 fw-bolder"><img src="\storage\{{$produk -> foto}}" width="75%" alt=""></h1>
                        <p class="lead fw-normal text-white-50 mb-0"></p>
                    </div>
                    <div class="col-6">
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <p>SKU:BST-{{$produk -> kdproduk}}</p>
                        <h1>{{$produk -> nmproduk}}</h1>
                        {{-- <span class="text-muted text-decoration-line-through">$20.00</span> --}}
                        <p>Tersedia Ukuran : {{$produk -> ukproduk}}</p> 
                        Rp {{$produk -> hargaproduk}},-
                        <p class="mt-5">{{$produk -> deskripsi}}</p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuentity" type="num" value="1" style="max-width: 3rem">
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                <a href="https://api.whatsapp.com/send?phone=6281211865997&text=%22hallo%22">Add To Cart</a>
                                
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; form selpiyasetiawati 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
