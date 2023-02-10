<?php
   session_start();
   if ($_SESSION == 'login'){
     header("location:tampildata.php");
   }else{
    session_unset();
   }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./style.css">
    <title>Halaman Login</title>

</head>
<body style="background-color:white ;">
<form action="login.php" method="POST">
    <div class="card col-md-4 offset-md-4 mt-5 shadow-lg">
        <div class="card-header text-center fw-bold fs-2">Login</div>
        <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "belum_login") {
                            echo "<div class='alert alert-danger m-2 text-center'>Silahkan Login 
                            </div>";
                        } else if ($_GET['pesan'] == "logout") {
                            echo "<div class='alert alert-info m-2 text-center'>Berhasil Logout 
                        </div>";
                        } else {
                        echo "<div class='alert alert-danger m-2 text-center'>Login Gagal
                        </div>";
                        }

                    }
                    ?>
        <div class="card-body">
            <input class="form-control mb-3" type="text" name="username" placeholder="Username" >
            <input class="form-control mb-3" type="password" name="password" placeholder="Password" >
            <button type="submit" class="login-button col-12">LOGIN</button>
        </div>  
    </div>
</form>
    
</body>
</html>