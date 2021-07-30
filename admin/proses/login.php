<?php 
session_start();

include "../../config/conn.php";
 
$username = $_POST['username'];
$password = md5($_POST['password']);
    
$login = mysqli_query($conn , "select * from users where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['login'] = true;
	header("location:../index.php");
}else{
	header("location:../login.php");	
}

?>
echo "<script>alert('Berhasil bro'); document.location.href = 'www.google.com';</script>";