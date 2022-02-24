<!DOCTYPE html>

<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title></title>

</head>

<body>
<div class="container">
    <h3>Tambah Transaksi</h3>

    <form action="proses_tambah_transaksi.php" method="post">

        Nama Member :

        <select name="id_member" class="form-control">

            <option></option>

            <?php 

            include "koneksi.php";

            $qry_member=mysqli_query($conn,"select * from member");

            while($data_member=mysqli_fetch_array($qry_member)){

                echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama'].'</option>';   

            }

            ?>

        </select>

        Pilih Paket :

        <select name="id_paket" class="form-control">

            <option></option>

            <?php 

            include "koneksi.php";

            $qry_paket=mysqli_query($conn,"select * from paket");

            while($data_paket=mysqli_fetch_array($qry_paket)){

                echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['jenis'].'</option>';   

            }

            ?>

        </select>

        Berat :

        <input type="number" name="qty" value="kg" class="form-control"> 


        Nama User :

        <select name="id_user" class="form-control">

            <option></option>

            <?php 

            include "koneksi.php";

            $qry_user=mysqli_query($conn,"select * from user");

            while($data_user=mysqli_fetch_array($qry_user)){

                echo '<option value="'.$data_user['id_user'].'">'.$data_user['nama'].'</option>';   

            }

            ?>

        </select>

        Tanggal Transaksi :

        <input type="date" name="tgl" value="" class="form-control"> 

        Batas Waktu :
        <input type="date" name="batas_waktu" value="" class="form-control">

        
        <input type="submit" name="simpan" value="Tambah Transaksi" class="btn btn-primary">

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</div>
</body>

</html>