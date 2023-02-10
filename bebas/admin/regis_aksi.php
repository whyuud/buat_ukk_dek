<?php
include('../koneksi.php');

$username = $_POST['username'];
$password = md5($_POST['password']);
$level = $_POST['level'];

mysqli_query($koneksi, "insert into t_bebas values('','$username','$password','$level')");
header('location:data.php');

?>