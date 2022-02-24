<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Clean&Clean Laundry</title>
  <!-- Favicon -->
  <link rel="icon" href="./assets/img/brand/favicon.png" type="image/png">
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
              <h6 class="h2 text-white d-inline-block mb-0">Paket</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Daftar Paket</a></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="tambah_paket.php" class="btn btn-sm btn-neutral">Tambah Paket</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Main content -->
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Paket</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">ID Paket</th>
                    <th scope="col" class="sort" data-sort="status">Jenis</th>
                    <th scope="col" class="sort" data-sort="completion">Harga</th>
                    <th scope="col" class="sort" data-sort="completion">Waktu Pengerjaan</th>
                    <th scope="col" class="sort" data-sort="completion">Aksi</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                
                <tbody>

<?php 

include "koneksi.php";

$qry_paket=mysqli_query($conn,"select * from paket ");

$no=0;

while($data_paket=mysqli_fetch_array($qry_paket)){

$no++;?>

<tr>
<td><?=$no?></td>
<td><?=$data_paket['id_paket']?></td> 
<td><?=$data_paket['jenis']?></td> 
<td><?=$data_paket['harga']?></td>
<td><?=$data_paket['waktu_kerja']?></td>
<td><a href="ubahpaket.php?id_paket=<?=$data_paket['id_paket']?>" class="btn btn-success">Ubah</a> | <a href="hapuspaket.php?id_paket=<?=$data_paket['id_paket']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a></td>


</tr>

<?php 

}

?>

</tbody>
              </table>
            </div>
            <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="./assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="./assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.2.0"></script>
          </div>
        </div>
      </div>