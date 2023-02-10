<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <title> Halaman Register </title>
</head>
<form action="regis_aksi.php" method="POST">
    <div class="card col-md-4 offset-md-4 mt-5">
        <div class="card-header text-center fw-bold fs-2">Register</div>
        <div class="card-body">
            <input class="form-control mb-3" type="text" name="username" placeholder="Username" required>
            <input class="form-control mb-3" type="password" name="password" placeholder="Password" required>
            <select class="form-select mb-3" name="level" id="">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            <button type="submit" class="btn btn-success col-12">Simpan</button>
        </div>  
    </div>
</form>
    
</body>
</html>