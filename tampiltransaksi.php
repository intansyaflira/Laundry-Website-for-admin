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

<?php
            include 'koneksi.php';
            $sql = 'select transaksi.*,
                    member.nama as nama_member, 
                    user.nama as nama_user  
                    from transaksi JOIN user ON user.id_user = transaksi.id_user 
                    JOIN member ON member.id_member = transaksi.id_member
                    order by id_transaksi';
            $result = mysqli_query($conn, $sql);
            ?>
  <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Transaksi</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Daftar Transaksi</a></li>
                </ol>
              </nav>
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
              <h3 class="mb-0">Transaksi</h3>
            </div>
            
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">Member</th>
                    <th scope="col" class="sort" data-sort="status">Tanggal</th>
                    <th scope="col" class="sort" data-sort="completion">Batas Waktu</th>
                    <th scope="col" class="sort" data-sort="completion">Tanggal Pembayaran</th>
                    <th scope="col" class="sort" data-sort="name">Status</th>
                    <th scope="col" class="sort" data-sort="budget">Pembayaran</th>
                    <th scope="col" class="sort" data-sort="status">User</th>
                    <th scope="col" class="sort" data-sort="completion">Aksi</th>
                    <th scope="col" class="sort" data-sort="completion">Detail</th>
                   
                    <th scope="col"></th>
                  </tr>
                </thead>
                
                <tbody>

                <?php  while($data=mysqli_fetch_array($result)){?>
                                            <tr>
                                                <td><?=$data['id_transaksi']?></td>
                                                <td><?=$data['nama_member']?></td>
                                                <td><?=$data['tgl']?></td>
                                                <td><?=$data['batas_waktu']?></td>
                                                <td><?=$data['tgl_bayar']?></td>
                                                <td><?=$data['status']?></td>
                                                <td><?=$data['dibayar']?></td>
                                                <td><?=$data['nama_user']?></td>
                                                
                                                <td>
                                                <a href="ubahtransaksi.php?id_transaksi=<?php echo $data['id_transaksi']?>"><button class="btn btn-primary px-2">Edit</button></a>
                                                <!-- <a class="btn btn-danger px-2" href="hapus_transaksi.php?id_transaksi=<?php echo $data['id_transaksi']?>" onclick="return confirm('Are you sure to delete the data from transaksi <?php echo $data['id_transaksi'] . '?'?>')">Delete</a> -->
                                                <td><a href="tampil_detailtransaksi.php?id_transaksi=<?php echo $data['id_transaksi']?>"><button class="btn btn-primary px-2">Detail</button></a></td>
                                               
                                                

                                                </td>
                                            </tr>
                                            <?php } ?>
                

                                        
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
</tbody>
              </table>
            </div>
        
          </div>
        </div>
      </div>