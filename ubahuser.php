
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Tambah</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="./assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="./assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
<?php 
   session_start();
    include('sidenav.php'); 
    include('navbar.php');
    include('header.php');
?>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          </div>
        </div>
        <div class="col-xl-12 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Ubah User</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="proses_ubahuser.php" method="POST" enctype= "multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Masukkan data</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  
                  <body>
            <div class="container">
            <?php 
            include "koneksi.php";
            $qry_get_user=mysqli_query($conn,"select * from user where id_user = '".$_GET['id_user']."'");

            $dt_user=mysqli_fetch_array($qry_get_user);
            ?>

            <form action="proses_ubahuser.php" method="post" enctype="multipart/form-data">

                <input type="hidden" name="id_user"  value= "<?=$dt_user['id_user']?>">

                Nama :
                <input type="text" name="nama" value= "<?=$dt_user['nama']?>" class="form-control">

                Username :
                <input type="text" name="username" value= "<?=$dt_user['username']?>" class="form-control">

                Role :
                <select name="role" class="form-control">

                    <option></option>

                    <option value="admin">Admin</option>

                    <option value="kasir">Kasir</option>

                </select>

                    <div class="col-0 text-right">
                        <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Ubah">
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
     <?php include("footer.php"); ?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>