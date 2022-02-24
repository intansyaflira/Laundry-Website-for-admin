<?php
    if($_POST){
        $role=$_POST['role'];
        $nama=$_POST['nama'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        if(empty($role)){
            echo "<script>alert('role tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($nama)){
            echo "<script>alert('nama tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($username)){
            echo "<script>alert('username tidak boleh kosong');location.href='register.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('password tidak boleh kosong');location.href='register.php';</script>";
        } else {

            include "koneksi.php";

            $insert=mysqli_query($conn,"insert into user (nama, username, password, role) value ('".$nama."','".$username."','".md5($password)."','".$role."')");

            if($insert){
                echo "<script>alert('Sukses membuat akun');location.href='login.php';</script>";
            } else {
                echo "<script>alert('Gagal membuat akun');location.href='login.php';</script>";
            }

        }

    }

?>