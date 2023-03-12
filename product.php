<?php
require 'functions.php';

$product = query("SELECT * FROM product");
// tombol cari ditekan
if (isset($_POST["search"])) {
    $product = search($_POST["keyword"]);
}


?>
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
                        <a class="nav-link " href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="product.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Login</a>
                    </li>
                </ul>
                    <form class="d-flex" role="search" method="POST">
                        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="keyword" autocomplete="off">
                        <button class="btn btn-outline-success" type="submit" name="search" >Search</button>
                    </form>
            </div>
        </div>
    </nav>

    <!-- caraousel -->
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 400px;">
            <div class="carousel-item active">
                <img src="img/bg-sepatu3.jpg" class="d-block w-100" data-bs-interval="10000">
            </div>
            <div class="carousel-item">
                <img src="img/bg-sepatu5.jpg" class="d-block w-100 " data-bs-interval="2000">
            </div>
            <div class="carousel-item">
                <img src="img/bg-sepatu2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <!-- Product -->
    <div class="d-flex ms-4 mt-5">
        <div class="flex-grow-1">
            <h5>| Our Product</h5>
        </div>
        <a href="#" class="link-secondary me-4">view more</a>
    </div>

    <div class="container">
        <div class="d-flex flex-row mb-3 mt-4">
            <div class="d-flex justify-content-start">
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <?php $i = 1; ?>
                    <?php foreach ($product as $row) :?>
                        <div class="col">
                            <div class="card ">
                                <img src="/tubesSepatu/img/<?php echo $row["gambar"]; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $row["nama"] ?></h5>
                                    <p class="card-text"><?= $row["harga"] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>