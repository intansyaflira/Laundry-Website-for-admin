<?php

if($_POST){

    $nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $jk=$_POST['jk'];
    $tlp=$_POST['tlp'];

    if(empty($nama)){
        echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('alamat member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($tlp)){
        echo "<script>alert('Telp member tidak boleh kosong');location.href='tambah_member.php';</script>";
    } elseif(empty($jk)){
        echo "<script>alert('Jenis kelamin tidak boleh kosong');location.href='tambah_member.php';</script>";
    } else {
        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into member (nama, alamat, jenis_kelamin, tlp) value ('".$nama."','".$alamat."','".$jk."','".$tlp."')");

        if($insert){
            echo "<script>alert('Sukses menambahkan member');location.href='tambah_member.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_member.php';</script>";
        }
    }
}

?>