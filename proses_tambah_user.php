<?php

if($_POST){

    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username  tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($role)){
        echo "<script>alert('role tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";

        $insert=mysqli_query($conn,"insert into user (nama, username, password, role) value ('".$nama."','".$username."','".md5($password)."','".$role."')");

        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='tambah_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";
        }
    }
}

?>