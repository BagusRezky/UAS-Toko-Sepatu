<?php
require 'functions.php';

// ambil data di url

$id = $_GET["id"];

// query data mahasiswa berdasarkan id

$produc = query ("SELECT * FROM product WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {
 
    // cek apakah data berhasil di diganti atau tidak
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diganti!');
                document.location.href = 'admin.php';
            </script>
        ";
    }else{
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
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
    <link rel="stylesheet" href="styleInsert.css">
    <!-- <script src="jquery-3.6.0.js"></script> -->
    <title>Edit </title>
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
                        <a class="nav-link active" href="admin.php">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="tambah.php">Tambah Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div>
    <div class="kotak">
      <form enctype="multipart/form-data" method="POST" action="">
      <input type="hidden" name="id" value="<?= $produc["id"]; ?>">
        <div class="container">
          <div class="container2">
            <H2><center>Edit Barang</center></H2>
            <div class="row">
              <div class="col-25">
                <label for="nama"><b>Nama Menu</b></label>
              </div>
              <div class="col-75">
                <input type="text" name="nama"  required  value="<?= $produc["nama"]; ?>"><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="harga"><b>Harga</b></label>
              </div>
              <div class="col-75">
                <input type="text" name="harga" required value="<?= $produc["harga"]; ?>"><br>
              </div>
            </div>
            <div class="row">
              <div class="col-25">
                <label for="gambar"><b>Foto</b></label>
              </div>
                <div class="col-75">
                <img src="img/<?= $produc['gambar'];?>" alt="">
                  <input type="file" name="gambar" id="gambar">
                </div>
            </div>
            <div class="row">
              <div class="group">
                <div class="back">
                  <a href="admin.php"><b>Back</b></a>
                </div>
                  <button type="submit" class="button" name="submit" id="submit"><b>Submit</b></button>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  <div class="modal-container" id="modal_container">
    <div class="modal">
      <h1>Data berhasil diupdate!</h1><br><br>
      <button class="btn-closed" id="close">
        Close me
      </button>
    </div>
  </div>
</body>
</html>