<?php 
    include "../../config/conn.php";

    $id = $_POST['id'];
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $synopsis = $_POST['editor1'];
    $cover = $_FILES['cover'];
    $foto = $_POST['foto'];

    if ($_FILES['cover']['name'] == '') {
        $queryBook = mysqli_query($conn, "UPDATE books SET title='$title', isbn='$isbn', synopsis='$synopsis', cover='$foto' WHERE id=$id");
    } else {
        $namaFile = $cover['name'];
        $namaSementara = $cover['tmp_name'];
        // tentukan lokasi file akan dipindahkan
        $dirUpload = "img/";
    
        // pindahkan file
        move_uploaded_file($namaSementara, $dirUpload.$namaFile);
        $queryBook = mysqli_query($conn, "UPDATE books SET title='$title', isbn='$isbn', synopsis='$synopsis', cover='$namaFile' WHERE id=$id");
    }

    if ($queryBook) {
        echo "<script>alert('Berhasil diperbarui');window.location.href='../books/index.php'</script>";
    } else {
        echo "<script>alert('Gagal diperbarui');window.location.href='../books/edit.php'</script>";
    }

?>