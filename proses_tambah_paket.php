<?php

if($_POST){

    $jenis=$_POST['jenis'];
    $harga=$_POST['harga'];
    $waktu_kerja=$_POST['waktu_kerja'];

    if(empty($jenis)){
        echo "<script>alert('jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($harga)){
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } elseif(empty($waktu_kerja)){
        echo "<script>alert('waktu kerja tidak boleh kosong');location.href='tambah_paket.php';</script>";
    } else {
        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into paket (jenis, harga, waktu_kerja) value ('".$jenis."','".$harga."','".$waktu_kerja."')");

        if($insert){
            echo "<script>alert('Sukses menambahkan paket');location.href='tambah_paket.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan paket');location.href='tambah_paket.php';</script>";
        }
    }
}

?>