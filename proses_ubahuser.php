<?php

    if($_POST){
        $id_user=$_POST['id_user'];

        $nama=$_POST['nama'];

        $username=$_POST['username'];

        $role=$_POST['role'];


        if(empty($nama)){

            echo "<script>alert('nama tidak boleh kosong');location.href='tambah_user.php';</script>";


        } elseif(empty($username)){

            echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";

        } elseif(empty($role)){

            echo "<script>alert('role tidak boleh kosong');location.href='tambah_user.php';</script>";

        } else {

            include "koneksi.php";

                $update=mysqli_query($conn,"update user set nama='".$nama."', username='".$username."', role='".$role."' WHERE id_user='".$id_user."'") or die(mysqli_error($conn));

                if($update){

                    echo "<script>alert('Sukses update user');location.href='tampiluser.php';</script>";

                } else {

                    echo "<script>alert('Gagal update user');location.href='ubahuser.php?id_user=".$id_user."';</script>";

                }

            }

        }


    ?>
}

?>