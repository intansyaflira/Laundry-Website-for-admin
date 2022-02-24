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
            $tr_id = $_GET["id_transaksi"];
            $query = mysqli_query($conn, "SELECT *
                            FROM detail_transaksi 
                            JOIN paket ON paket.id_paket = detail_transaksi.id_paket
                            WHERE detail_transaksi.id_transaksi = '$tr_id'");
            // $result = mysqli_fetch_assoc($query);
            // var_dump($result); die();
            ?>
  <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Detail Transaksi</h6>
              
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
              <h3 class="mb-0">Detail Transaksi</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">No</th>
                    <th scope="col" class="sort" data-sort="budget">ID Transaksi</th>
                    <th scope="col" class="sort" data-sort="status">Paket</th>
                    <th scope="col" class="sort" data-sort="completion">Harga</th>
                    <th scope="col" class="sort" data-sort="completion">Quantity</th>
                    <th scope="col" class="sort" data-sort="name">Sub Total</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                
                <tbody>

                <?php  while($data=mysqli_fetch_assoc($query)){?>  
                    
                    <tr>
                    <td><?=$data['id_detail_transaksi'];?></td>
                    <td><?=$data['id_transaksi'];?></td>
                    <td>Rp.<?=$data['harga'];?>,-</td>
                    <td><?=$data['jenis']?></td>
                    <td><?=$data['qty']?></td>
                    <td><?=$data['qty']*$data['harga']?></td>
                    </tr>
                                            <?php 
                                            } 
                                            
?>
                


</tbody>
              </table>
            </div>
        
          </div>
        </div>
      </div>