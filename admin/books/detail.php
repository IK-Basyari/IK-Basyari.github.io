<?php 
session_start();
if(!isset ($_SESSION["login"]) ) {
  header("location:../index.php");
  exit;
}
?>

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
<body">
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
        <li class="nav-item">
          <a class="nav-link active" href="../users/index.php">Users</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <a href="../proses/logout.php" class="btn btn-danger" style="margin: 10px">Logout</a>
    </div>
  </div>
</nav>
<br>
  <?php
	  include '../../config/conn.php';
    // $no = 1;
    $id = $_GET['id'];
    $data = mysqli_query($conn,"SELECT * FROM books where id='$id'");
    while($d = mysqli_fetch_array($data)){
	?>

    <div class="container">        
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/<?= $d["cover"]; ?>" style="width:300px" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title"><b> Judul : </b><?= $d['title']; ?></h5>
                    <p class="card-text"><b> ISBN : </b><?= $d['isbn']; ?></p>
                    <p class="card-text"><b> Sinopsis : </b><?= $d['synopsis']; ?></p>   
                </div>
              </div> 
            </div>
          </div>
          <div class="card mb-3">
            <div class="card-body">
          <p class="card-text"><b> Sinopsis : </b><?= $d['synopsis']; ?></p>   
        </div>
      </div>
      <a href="index.php" class="btn btn-sm btn-warning">Kembali</a>
    <?php } ?>
    <figcaption class="blockquote-footer">
     <cite title="Source Title"><h6>Copyright@2021</h6></cite>
  </figcaption>
</body>
</html>