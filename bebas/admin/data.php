<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
  <title>Data</title>
</head>
<body>

<?php
session_start();
    if ($_SESSION['status'] != 'login'){
      header("location:../index.php?pesan=belum_login");
    }

?>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
          <a onclick="return confirm('yakin logout ?')" href="logout.php" class="btn btn-warning">logout</a>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success " type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<br>
<div class="col-10 offset-1">
<table class="table bg-light shadow-lg p-3bg-body rounded table-striped table-hover">
  <h1 class="card-header text-center fw-bold fs-2 bg-light col-12 ">Data User</h1>
  
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th hidden scope="col">Password</th>
      <th scope="col">Level</th>
      <th scope="col" colspan="2">aksi</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    include "../koneksi.php";
    if (isset($_GET['cari'])) {
      $cari = $_GET['cari'];
      $data = mysqli_query($koneksi, "select * from t_bebas where username like '%" . $cari . "%' or level like '%" . $cari . "%' ");
    } else {
      $data = mysqli_query ($koneksi,"SELECT * from t_bebas");
    }
    $nomor = 1;
    while($d = mysqli_fetch_array($data)){
    ?>

    <tr>
      <td><?php echo $nomor++ ?></td>
      <td><?php echo $d['username']; ?></td>
      <td hidden><?php echo $d['password']; ?></td>
      <td><?php echo $d['level']; ?></td>
      <td><a class="btn btn-sm btn-primary" href="edit_aksi.php?id=<?php echo $d['id']; ?>"> <i class='bx bx-edit-alt'> EDIT</a></i>
      <a href="delet_aksi.php?id=<?php echo $d['id']; ?>" onclick="return confirm ('yakin di hapus?')" class="btn btn-sm btn-danger"> <i class='bx bx-trash'> DELETE</a></i>
      </td>
    </tr>
    <?php
  }
    ?>
  </tbody>
</table>
<a href="regis.php" class="btn btn btn-primary "><i class='bx bxs-user-plus' style="font-size:1rem;margin-right:5px;"> REGIS</i></a></div>
<p div class="welcomes mx-4">Hallo... <b><?php echo $_SESSION['username']; ?></b></p>
</body>
</html>