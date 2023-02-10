<?php
session_start();

$username=$_POST['username'];
$password=md5($_POST['password']);

include 'koneksi.php';
$data= mysqli_query($koneksi,"select * from t_bebas where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);
if ($cek >0){ 
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:./admin/data.php");
    
}else{ 
    header("location:index.php?pesan=gagal"); 
}
?>