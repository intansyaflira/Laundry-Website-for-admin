
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
?>
<div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Member</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tambah Member</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="tampilmember.php" class="btn btn-sm btn-neutral">Daftar Member</a>
            </div>
          </div>
        </div>
      </div>
    </div>
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
                  <h3 class="mb-0">Tambah Member</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="proses_tambah_member.php" method="POST" enctype= "multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Masukkan data</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-nama">Nama</label>
                        <input type="text" id="input-nama" class="form-control" placeholder="Nama" name="nama" value="">
                      </div>
                    </div><br>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-alamat">Alamat</label>
                        <input type="text" id="input-alamat" class="form-control" placeholder="Alamat" name="alamat" value="">
                      </div>
                    </div><br>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-no-telepon">No.Telepon</label>
                        <input type="number" id="input-no-telepon" class="form-control" placeholder="No.Telepon" value="" name="tlp">
                      </div><br>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-jenis-kelamin">Jenis Kelamin</label>
                        <select name="jk" class="form-control">

                            <option></option>

                            <option value="L">Laki-Laki</option>

                            <option value="P">Perempuan</option>

                        </select>
                      </div>
                    </div>
                    <div class="col-0 text-right">
                        <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Tambah">
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
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.2.0"></script>
</body>

</html>