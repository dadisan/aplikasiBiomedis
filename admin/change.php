<?php
session_start();

if ($_SESSION['password'] == '') {
  header("location: login.php");
}
include '../config/koneksi.php';
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" a href="img/heart.png" type="image/gif" sizes="16x16">
  <title>Rekam Medis</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-clinic-medical"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Rekam Medis</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-home"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Data Klinik
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-diagnoses"></i>
          <span>Pendataan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pendataan Klinik:</h6>
            <a class="collapse-item" href="pasien.php">Data Pasien</a>
            <a class="collapse-item" href="tenaga_medis.php">Data Tenaga Medis</a>
            <a class="collapse-item" href="obat.php">Data Obat</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-list"></i>
          <span>Rekam Medis</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Hasil Rekam:</h6>
            <a class="collapse-item" href="rekam.php">Rekam Medis Pasien</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Heading -->
      <div class="sidebar-heading">
        Table Data
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-table"></i>
          <span>Table</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="tab_pasien.php">Table Pasien</a>
            <a class="collapse-item" href="tab_medis.php">Tabel Tenaga Medis</a>
            <a class="collapse-item" href="tab_obat.php">Table Obat</a>
            <a class="collapse-item" href="tab_rekam.php">Table Rekam Medis</a>
          </div>
        </div>
      </li>



      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>



          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <?php
            $sss = mysqli_query($conn, "select * from admin");
            $rrr = mysqli_fetch_array($sss);


            ?>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $rrr['nama']; ?></span>
                <img class="img-profile rounded-circle" src=" img/<?php echo $rrr['foto'] ?>" alt="profile">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="setting.php?id=<?php echo $rrr['id']; ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="change.php?id=<?php echo $rrr['id']; ?>">
                  <i class="fas fa-eraser fa-sm fa-fw mr-2 text-gray-400"></i>
                  Ganti Password
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <?php
          $id_brg = ($_GET['id']);
          $id_pesan = ($_GET['pesan']);
          $ggl = !$id_brg;
          $dgi = !$id_pesan;
          if ($ggl and $dgi) {

            echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5 mt-5'>";
            echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
            echo "<p><center>Maaf Data Ini Tidak Tersedia</center></p>";
            echo   "</div>";
            echo "</div>";
          } else {
            $sg = mysqli_query($conn, "select * from admin where id='$id_brg'");
            while ($sw = mysqli_fetch_array($sg)) {
          ?>

              <div class="card shadow  ml-4 mr-4">
                <div class="card-header py-3">
                  <h1 class="h3 mb-0 text-gray-800">Ubah Password</h1>
                </div>




                <form action="change_pass.php" method="post">
                  <div class="row ml-5 mb-2 mt-3">
                    <div class="col-md-6">

                      <input class="form-control" type="hidden" name='username' value="<?php echo $sw['username']; ?>" required>

                      <P><b>Password Lama</b></p>
                      <input class="form-control" type="password" name='pertama' placeholder="Password Lama..." required>

                      <P><b>Password Baru</b></p>
                      <input class="form-control" type="password" name='kedua' value="" placeholder="Password Baru..." required>

                      <P><b>Ulangi Password Baru</b></p>
                      <input class="form-control" type="password" name='ketiga' value="" placeholder="Password Baru..." required>

                    </div>

                  </div>
                  <div class="row ml-5 mb-4 mt-3">

                    <div class="col-md-5">
                      <button type="submit" class="btn btn-info" name='edit'>Update</button>&nbsp;<input type="reset" class="btn btn-danger" value="Reset">
                    </div>

                  </div>

                </form>

              </div>
          <?php }
          } ?>
          <?php

          if (isset($_GET['pesan'])) {
            $pesan = addslashes($_GET['pesan']);
            if ($pesan == "gagal") {
              echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
              echo "<div class='alert alert-danger mt-4 ml-5' role='alert'>";
              echo "<p><center>Gagal Mengganti Password</center></p>";
              echo   "</div>";
              echo "</div>";
            } else if ($pesan == "tdksama") {
              echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
              echo "<div class='alert alert-warning mt-4 ml-5' role='alert'>";
              echo "<p><center>Password Yang Anda Masukan Tidak Sama</center></p>";
              echo   "</div>";
              echo "</div>";
            } else if ($pesan == "oke") {


              echo "<div class='col-md-10 col-sm-12 col-xs-12 ml-5'>";
              echo "<div class='alert alert-primary mt-4 ml-5' role='alert'>";
              echo "<p><center>Mengganti Password Sukses</center></p>";
              echo   "</div>";
              echo "</div>";
            }
          } ?>



        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="https://github.com/dadisan" style="text-decoration: none;"><b>Sistem Biomedis</b></a></span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Mau Keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih Logout Jika Anda Ingin Keluar</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>