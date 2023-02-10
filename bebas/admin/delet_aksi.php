<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "delete from t_bebas where id='$id'");

header("location:data.php");
