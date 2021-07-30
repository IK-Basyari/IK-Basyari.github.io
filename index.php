<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );e>
    </script>
    <title>TOKO BUKU HARAPAN</title>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">TOKO BUKU HARAPAN</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home
          <span class="badge bg-secondary">10</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="books/index.php">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="writers/index.php">Penulis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="publisher/index.php">Penerbit</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <a href="#" class="btn btn-danger" style="margin: 10px">Logout</a>
    </div>
  </div>
</nav>
<br>
<!-- <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/download.jpg" class="d-blok w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/tipografi.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>,
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
<center>
<figure>
  <blockquote class="blockquote">
    <p><h1 class="display-6">Toko Harapan</h1></p>
  </blockquote>
  <figcaption class="blockquote-footer">
     <cite title="Source Title"><h6>Mencetak Generasi Muda Dengan Membaca</h6></cite>
  </figcaption>
</figure>
</center>
<div class="container"> 
  <div class="row" style="margin:20px">
  <h3><b>Daftar Buku Rekomendasi Kami</b></h3>
    <?php
        include "config/conn.php";  // Untuk memanggil koneksi mysql     
        $query = "SELECT * FROM books Orders LIMIT 4"; // Query untuk menampilkan data produk
        $data = mysqli_query($conn, $query); // mysqli_query -> untuk menjalankan query
        while($d = mysqli_fetch_array($data)) :
    ?>
        <div class="card" style="width: 18rem; margin:10px">
            <a href="books/index.php">
               <img src="admin/img/<?= $d['cover']; ?>" class="card-img-top"  alt="...">
            </a>
            <div class="card-body">
                <h5 class="card-title"><?= $d['title']; ?></h5>
            </div>
        </div>
      <?php endwhile; ?>
<nav aria-label="...">
    <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
    <a href="books/index.php" class="btn btn-primary">Read More..</a>
  </ul>
</nav>
  </div>
</div>
<!-- container writers -->
<div class="container">
  <div class="row" style="margin:20px">
  <h3><b>Daftar Penulis Rekomendasi Kami</b></h3>
    <?php
        include "config/conn.php";  // Untuk memanggil koneksi mysql
        $query = "SELECT * FROM writers Orders LIMIT 4 "; // Query untuk menampilkan data produk
        $data = mysqli_query($conn, $query); // mysqli_query -> untuk menjalankan query
        while($d = mysqli_fetch_array($data)) :
    ?>
        <div class="card" style="width: 18rem; margin:10px">
            <a href="writers/index.php">
                <img src="admin/img/<?= $d['photo']; ?>" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <h5 class="card-title"><?= $d['name']; ?></h5>
           </div>
      </div>
    <?php endwhile; ?>
    <nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
    <a href="writers/index.php" class="btn btn-primary">Read More..</a>
  </ul>
</nav>
  </div>
</div>
<div class="container">
  <div class="row" style="margin-light:20px">
    <p><b><h3>Daftar Perusahaan Rekomendasi Kami</h3></b></p>
    <table class="table table-light table-hover" >
      <tr>
        <th>NO</th>
        <th>Nama Perusahaan</th>
        <th>Alamat</th>
        <th>No Tlpn</th>
      </tr>
<?php $i = 1; ?>
<?php
            include "config/conn.php";  // Untuk memanggil koneksi mysql -->
               
            $no = 1;  // memulai data no baru
            $query = "SELECT * FROM publisher Orders LIMIT 3"; // Query untuk menampilkan data produk
            $data = mysqli_query($conn, $query); // mysqli_query -> untuk menjalankan query
            while($d = mysqli_fetch_array($data)){
            ?>

      <tr>
        <td><?= $i; ?></td>
        <td> <?= $d["company_name"]; ?> </td>
        <td><?= $d["address"]; ?></td>
        <td><?= $d["phone"]; ?></td>
      </tr>
      <?php $i++; ?>
      <?php } ?>
    </table>
    <nav aria-label="...">
    <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active" aria-current="page">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
    <a href="publisher/index.php" class="btn btn-primary">Read More..</a>
  </ul>
</nav>
</div>
<figcaption class="blockquote-footer">
     <cite title="Source Title"><h6>Copyright@2021</h6></cite>
  </figcaption>
</body>
</html>