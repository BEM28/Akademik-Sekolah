<?php
session_start();

include 'dbconn.php';


if(isset($_POST['login'])) {
    $NIS= $_POST['NIS'];
    $password = $_POST['password'];
     
    // menyeleksi data admin dengan username dan password yang sesuai
    $query = mysqli_query($conn,"select * from login where NIS='$NIS' and password='$password'");
     
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($query);
     
    if($cek > 0){
        $_SESSION['NIS'] = $NIS;
        header("dashboard.php");
    }
    else {
        echo '<script>alert("Login Gagal")</script>';
        header("index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="img/LOGO-SMAN.jpg.png" type="image/x-icon">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-md-5">

                <div class="card border shadow-lg my-5">
                            <div class="col-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/LOGO-SMAN.jpg.png" alt="" class="w-50 mb-3"> <br>
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <form class="user" method="POST" action="login.php"> 
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="NIS"
                                                placeholder="NIS">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password"
                                             placeholder="Password">
                                        </div>
                                        <button type="submit" name="login"  class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="">Forgot Password?</a>
                                    </div>
                                </div>
                            </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>