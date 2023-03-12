
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    <link rel="stylesheet" href="HomeStyle.css">
    <!-- <script src="jquery-3.6.0.js"></script> -->
    <title>AdaSepatu</title>
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">AdaSepatu</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">logout</a>
                    </li>
                </ul>
                    <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form> -->
            </div>
        </div>
    </nav>
    <!-- slide image  -->
    <div class="container carousel-contain py-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/tubesSepatu/img/bg-sneaker.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/tubesSepatu/img/bg sepatu.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/tubesSepatu/img/fikri-rasyid-OG-UiZB9xMg-unsplash.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <!-- pengenalan product -->
<div class="bg">
    <div class="d-flex justify-content-around">
        <div class="row">
            <div class="card mb-3 " style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4 mt-3">
                        <img src="/tubesSepatu/img/airjordan1.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Nike Air Jordan 1</h4>
                            <p class="card-text">Sepatu ini adalah sepatu yang paling laris selama minggu ini.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mb-3 " style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4 mt-3">
                        <img src="/tubesSepatu/img/product 1.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Nike Air Jordan 3</h4>
                            <p class="card-text">Sepatu ini adalah sepatu yang paling laris selama minggu ini.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card mb-3 " style="max-width: 400px;">
                <div class="row g-0">
                    <div class="col-md-4 mt-3">
                        <img src="/tubesSepatu/img/new-product.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">New Balance</h4>
                            <p class="card-text">Sepatu ini adalah sepatu yang paling laris selama minggu ini.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- brand shoes -->
<div class="d-flex ms-4 mt-5">
    <div class="flex-grow-1">
        <h5>| Brand Product</h5>
    </div>
    <a href="#" class="link-secondary me-4">view more</a>
</div>

<div class="d-flex flex-row mb-3 mt-4 ms-5">
    <div class="d-flex justify-content-start">
        <div class="col pt-3">
            <img src="/tubesSepatu/img/converse-logo-1.svg" class="img-thumbnail" width="80%">
        </div>
        <div class="col">
            <img src="/tubesSepatu/img/adidas-4-logo-svgrepo-com.svg" class="img-thumbnail" width="70%">
        </div>
        <div class="col">
            <img src="/tubesSepatu/img/nike-4.svg" class="img-thumbnail" width="70%">
        </div>
        <div class="col">
            <img src="/tubesSepatu/img/vans-3.svg" class="img-thumbnail" width="70%">
        </div>
        <div class="col">
            <img src="/tubesSepatu/img/puma-3.svg" class="img-thumbnail" width="70%">
        </div>
        <div class="col">
            <img src="/tubesSepatu/img/new-balance-2.svg" class="img-thumbnail" width="70%">
        </div>
        <div class="col pt-4">
            <img src="/tubesSepatu/img/reebok-2019-logo.svg" class="img-thumbnail" width="80%">
        </div>
    </div>
</div>

<!-- product -->
<div class="d-flex ms-4 mt-5">
    <div class="flex-grow-1">
        <h5>| Best Seller</h5>
    </div>
    <a href="#" class="link-secondary me-4">view more</a>
</div>

<div class="container">
    <div class="d-flex flex-row mb-3 mt-4">
        <div class="d-flex justify-content-start">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col ">
                    <div class="card ">
                        <img src="/tubesSepatu/img/vans-product.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Vans Old School</h5>
                            <p class="card-text">$ 1,25</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/tubesSepatu/img/product 1.jpg" class="card-img-top ">
                        <div class="card-body">
                            <h5 class="card-title">Nike Air Jordan 3</h5>
                            <p class="card-text">$ 4,75</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/tubesSepatu/img/airjordan1.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nike Air Jordan 1</h5>
                            <p class="card-text">1,35.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/tubesSepatu/img/puma-product.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Puma Suede Clasic</h5>
                            <p class="card-text">3,75</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/tubesSepatu/img/new-product.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">New Balance Fresh Foam</h5>
                            <p class="card-text">$ 4,35</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/tubesSepatu/img/adidas-product 2.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Adidas Ultraboost</h5>
                            <p class="card-text">$ 5,75</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/tubesSepatu/img/adidas-product.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ultraboost DNA x LEGO</h5>
                            <p class="card-text">$ 8,30</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="/tubesSepatu/img/adidas-product.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ultraboost DNA x LEGO</h5>
                            <p class="card-text">$ 8,30</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>