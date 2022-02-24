<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Clean&Clean Laundry</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

  <body>
    <?php 
      session_start(); 
      include('navbar.php');
      include('header.php');
      include ('footer.php'); 
      
    ?>
      <!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
      <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
          <a class="navbar-brand" href="javascript:void(0)">
            <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
          </a>
        </div>
        <div class="navbar-inner">
          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Nav items -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">
                  <i class="ni ni-tv-2 text-primary"></i>
                  <span class="nav-link-text">Dashboard</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="lokasi.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Lokasi</span>
                </a>
              </li>
              </li>
            <li class="nav-item">
            <ul class="navbar-nav  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                <i class="ni ni-single-02 text-orange"></i>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Registrasi Pelanggan</span>
                  </div>
                </div>
              </a>
            </li>
            <li class="nav-item">
            <ul class="navbar-nav  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                <i class="ni ni-single-02 text-orange"></i>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Transaksi</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Transaksi</h6>
                </div>
                <a href="tampiluser.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Daftar Transaksi</span>
                </a>
                <a href="tambah_transaksi2.php" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Tambah Transaksi</span>
                </a>
              </div>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">
                  <i class="ni ni-key-25 text-info"></i>
                  <span class="nav-link-text">Login</span>
                </a>
              </li>
              <li class="nav-item">
            <ul class="navbar-nav  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                <i class="ni ni-app text-blue"></i>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Paket</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Paket</h6>
                </div>
                <a href="tampilpaket.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Daftar Paket</span>
                </a>
                <a href="tambah_paket.php" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Tambah Paket</span>
                </a>
              </div>
            </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">
                  <i class="ni ni-circle-08 text-pink"></i>
                  <span class="nav-link-text">Register</span>
                </a>
              </li>
            <li class="nav-item">
            <ul class="navbar-nav  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                <i class="ni ni-single-02 text-orange"></i>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">Member</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Member</h6>
                </div>
                <a href="tampilmember.php" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>Daftar Member</span>
                </a>
                <a href="tambah_member.php" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Tambah Member</span>
                </a>
              </div>
            </li>
                <a class="nav-link" href="upgrade.html">
                  <i class="ni ni-send text-dark"></i>
                  <span class="nav-link-text">Upgrade</span>
                </a>
              </li>
            </ul>
             
        </div>
      </div>
    </div>
  </nav>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
