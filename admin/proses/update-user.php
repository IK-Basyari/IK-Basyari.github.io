<?php 
    include "../../config/conn.php";

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $queryPublisher = mysqli_query($conn, "UPDATE users SET 
        username = '$username', 
        password = '$password' 
        WHERE id=$id");

    if ($queryPublisher) {
        echo "<script>alert('Berhasil diperbarui');window.location.href='../users/index.php'</script>";
    } else {
        echo "<script>alert('Gagal diperbarui');window.location.href='../users/edit.php'</script>";
    }

?>