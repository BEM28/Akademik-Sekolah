<?php
session_start();
include 'dbconn.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/9bab502e6f.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Smanpar Akademik</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/LOGO-SMAN.jpg.png" type="image/x-icon">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon ">
                  <img src="img/LOGO-SMAN.jpg.png" alt="" class="w-100">
                </div>
                <div class="sidebar-brand-text mx-3">SMANPAR AKADEMIK</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="mapel.php">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Mata Pelajaran</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="nilai.php">
                    <i class="fa-solid fa-chart-column"></i>
                    <span>Nilai</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="kartu.php">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Kartu Ujian</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="bayar.php">
                    <i class="fa-solid fa-wallet"></i>
                    <span>Bayaran</span></a>
            </li>
            <hr class="sidebar-divider">

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">   

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow position-relative">
                    <div class="container">
                        
                        <div class="nav-item "></div>
                        <div class="nav-item "></div>
                        <div class="nav-item ">
                            <?php
                                $ui = $_SESSION['id'];
                                $metode = mysqli_query($conn,"select * from login where userid='$ui'");
                                while($a=mysqli_fetch_array($metode)){
                                    $namaLengkap = $a['nama_lengkap'];
                                    $NIS = $a['NIS'];
                                }
                            ?>
                            <h4><?=$namaLengkap?></h4> 
                            <p><?=$NIS?> | <a href="index.php">Logout</a></p>
                        </div>
                        
                    </div>
                </nav>
                <!-- content -->

                <div class="container">
                    <table class="table table-bordered text-dark ">
                        <h3>Data Dirimu</h3>
                        <tr>
                            <td class="table-primary w-25">Nama Lengkap</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                        <tr>
                            <td class="table-primary">NIS</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                        <tr>
                            <td class="table-primary">Alamat</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                        <tr>
                            <td class="table-primary">No Telepon</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                        <tr>
                            <td class="table-primary">Nama Ibu</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                        <tr>
                            <td class="table-primary">Pekerjaan Ibu</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                        <tr>
                            <td class="table-primary">Nama Ayah</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                        <tr>
                            <td class="table-primary">Pekerjaan Ayah</td>
                            <td class="table-info">Contoh</td>
                        </tr>
                    </table>



                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Ubah Data Diri
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Diri</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="POST">
                            <table class="table table-bordered text-dark ">
                                    <tr>
                                        <td class="table-primary w-25">Nama Lengkap</td>
                                        <td class="table-info"> <input type="text" name="inputNL" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">NIS</td>
                                        <td class="table-info"><input type="text" name="inputNIS" class="form-control" disabled></td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Alamat</td>
                                        <td class="table-info"> <input type="text" name="inputAlmt" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">No Telepon</td>
                                        <td class="table-info"> <input type="text" name="inputNoTelp" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Nama Ibu</td>
                                        <td class="table-info"> <input type="text" name="inputNI" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Pekerjaan Ibu</td>
                                        <td class="table-info"> <input type="text" name="inputPI" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Nama Ayah</td>
                                        <td class="table-info"> <input type="text" name="inputNA" class="form-control"></td>
                                    </tr>
                                    <tr>
                                        <td class="table-primary">Pekerjaan Ayah</td>
                                        <td class="table-info"> <input type="text" name="inputPA" class="form-control"></td>
                                    </tr>
                                </table>
                            
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                  <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                                </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>


                
                

                <!-- end content -->

                
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy;SMANPAR AKADEMIK 2022</span> <br>
                        <span>Created by Bima Aprie Yudha</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- End of Page Wrapper -->
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    

</body>
</html>