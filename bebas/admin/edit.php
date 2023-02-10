<?php
    include '../koneksi.php';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title>Halaman Edit</title>
</head>
<body style="background-color:brown ;">'
<form action="edit_aksi.php" method="POST">
<?php
            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "select * from t_bebas where id='$id'");
            while ($d = mysqli_fetch_array($data)){
            ?>  
    <div class="card col-md-4 offset-md-4 mt-5">
        <div class="card-header text-center fw-bold fs-2">Edit</div>
        <div class="card-body">
            <input type="text" class="form-control" id="username" name="id" value="<?php echo $d['id'] ?>" hidden>
            <input class="form-control mb-3" type="text" name="username" placeholder="Username" value="<?php echo $d['username'] ?>" required>
            <input class="form-control mb-3" type="password" name="password" placeholder="Password"  required>
            <select class="form-select" aria-label="Default select example" name="level" value="<?php echo $d['level'] ?>" required >
                                <option value="admin">admin</option>
                                <option value="user">user</option>
                            </select>
                            <br>
            <button type="submit" class="btn btn-outline-success">Update</button>
        </div>  
    </div>
</form>
<?php
}
?>
    
</body>
</html>