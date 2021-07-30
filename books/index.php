<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
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
          <a class="nav-link active" aria-current="page" href="../index.php">Home
          <span class="badge bg-secondary">10</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../writers/index.php">Penulis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../publisher/index.php">Penerbit</a>
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
<center>
<figure>
  <blockquote class="blockquote">
    <p><h1 class="display-6">Daftar Buku Toko Harapan</h1></p>
  </blockquote>
  <figcaption class="blockquote-footer">
     <cite title="Source Title"><h6>Mencetak Generasi Muda Dengan Membaca</h6></cite>
  </figcaption>
</figure>
</center>
        <div class="container">
            <div class="row">
            <?php
            include "../config/conn.php";  // Untuk memanggil koneksi mysql
               
            $no = 1;  // memulai data no baru
            $query = "SELECT * FROM books"; // Query untuk menampilkan data produk
            $data = mysqli_query($conn, $query); // mysqli_query -> untuk menjalankan query
            while($d = mysqli_fetch_array($data)){
            ?>
            <div class="card" style="width: 18rem; margin:10px">
              <img src="../admin/img/<?= $d['cover']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?= $d['title']; ?></h5>
                <p class="card-text"><?= $d['isbn']; ?></p>
                <a href="detail.php?id=<?=$d['id'];?>" class="btn btn-sm btn-info">Detail</a>
                <a href="#" class="btn btn-sm btn-success">Beli</a>
              </div>
            </div>
            <?php
                }
            ?>
            </div>
            <figcaption class="blockquote-footer">
              <cite title="Source Title"><h6>Copyright@2021</h6></cite>
            </figcaption>
          </div>
</body>
</html>