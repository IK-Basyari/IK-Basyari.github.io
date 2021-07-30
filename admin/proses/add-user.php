<?php
    include "../../config/conn.php";

    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $queryPublisher = "INSERT INTO users VALUES ('', '$username', '$password')";
    
    $query = mysqli_query($conn, $queryPublisher);
    if ($query) {
        echo "<script>alert('Berhasil disimpan');window.location.href='../users/index.php'</script>";
    } else {
        echo "<script>alert('Gagal disimpan');window.location.href='../users/add.php'</script>";
    }

?>