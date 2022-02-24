
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
<?php
            include 'koneksi.php';
            $sql = 'select * from transaksi where id_transaksi = '.$_GET['id_transaksi'];
            $result = mysqli_query($conn, $sql);
            $data = mysqli_fetch_array($result);
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
                  <h3 class="mb-0">Ubah Transaksi</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
            <form action="proses_ubahtransaksi.php" method="POST" enctype= "multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Masukkan data</h6>
                <div class="pl-lg-4">
                  <div class="row">
                  
                  <body>
    <div class="container">

    <form action="proses_ubahtransaksi.php" method="post" enctype="multipart/form-data">

        <input type="hidden" name="id_transaksi"  value= "<?=$data['id_transaksi']?>">

        Nama Member :
        <select name="nama" value= "<?=$data['nama']?>" class="form-control">
        <?php $arr_status=array('Baru'=>'Baru','Proses'=>'Proses','Selesai'=>'Selesai','Diambil'=>'Diambil');?>

                                                    <option></option>
                                                    <?php
                                                include "koneksi.php";  // Using database connection file here
                                                $records = mysqli_query($conn, "SELECT * FROM member");  // Use select query here 
                                                    
                                                while($member = mysqli_fetch_array($records))
                                                {
                                                    $selected = "";
                                                if($member['id_member'] == $data['id_member']){
                                                    $selected = 'selected';
                                                }
                                                    echo "<option value='". $member['id_member'] ."' ".$selected.">" .$member['nama'] ."</option>";  // displaying data in option menu
                                                }	?>
                                                </select>
                                            <br>

        Tanggal :
        <input type="text" name="tgl" class="form-control" rows="4"value="<?=$data['tgl']?>"> 

        Batas Waktu :
        <input type="text" name="batas_waktu" class="form-control" rows="4" value="<?=$data['batas_waktu']?>">

        Tanggal Pembayaran:
        <input type="date" name="tgl_bayar" class="form-control" rows="4" value="<?=$data['tgl_bayar']?>">

        Status :
        <select name="status" value= "<?=$data['status']?>" class="form-control">
        <?php $arr_status=array('Baru'=>'Baru','Proses'=>'Proses','Selesai'=>'Selesai','Diambil'=>'Diambil');?>

                                                    <option></option>
                                                        <?php foreach ($arr_status as $key_status => $val_status):
                                                            if($key_status==$data['status']){
                                                                $selek="selected";
                                                            } else {
                                                                $selek="";
                                                            }
                                                        ?>
                                                        <option value="<?=$key_status?>" <?=$selek?>><?=$val_status?></option>
                                                        <?php endforeach ?>
                                                    </select>
          

        Pembayaran:
        <select name="dibayar" value= "<?=$data['dibayar']?>" class="form-control">
        <?php $arr_dibayar=array('Dibayar'=>'Dibayar','Belum_dibayar'=>'Belum_dibayar');?>

                                                    
                                                    <option></option>
                                            <?php foreach ($arr_dibayar as $key_dibayar => $val_dibayar):
                                            if($key_dibayar==$data['dibayar']){
                                                $selek="selected";
                                            } else {
                                                $selek="";
                                            }
                                            ?>
                                            <option value="<?=$key_dibayar?>" <?=$selek?>><?=$val_dibayar?></option>
                                            <?php endforeach ?>
                                                    </select>
        User :
        <select name="user" class="form-control">
                                        <option></option>
                                            <?php
                                                include "koneksi.php";  // Using database connection file here
                                                $records = mysqli_query($conn, "SELECT * FROM user");  // Use select query here 
                                                    
                                                while($user = mysqli_fetch_array($records))
                                                {
                                                    $selected = "";
                                                if($user['id_user'] == $data['id_user']){
                                                    $selected = 'selected';
                                                }
                                                    echo "<option value='". $user['id_user'] ."' ".$selected.">" .$user['nama'] ."</option>";  // displaying data in option menu
                                                }	?>
                                                </select>
                                    </div>
                                </div>
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