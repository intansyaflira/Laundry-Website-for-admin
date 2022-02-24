<?php

    if($_POST){
        $id_paket=$_POST['id_paket'];

        $jenis=$_POST['jenis'];

        $harga=$_POST['harga'];

        $waktu_kerja=$_POST['waktu_kerja'];

        if(empty($jenis)){

            echo "<script>alert('jenis tidak boleh kosong');location.href='tambah_paket.php';</script>";


        } elseif(empty($harga)){

            echo "<script>alert('harga tidak boleh kosong');location.href='tambah_paket.php';</script>";

        } elseif(empty($waktu_kerja)){

            echo "<script>alert('waktu kerja tidak boleh kosong');location.href='tambah_paket.php';</script>";

        }
         else {

            include "koneksi.php";

                $update=mysqli_query($conn,"update paket set jenis='".$jenis."', harga='".$harga."' WHERE id_paket='".$id_paket."'") or die(mysqli_error($conn));

                if($update){

                    echo "<script>alert('Sukses update paket');location.href='tampilpaket.php';</script>";

                } else {

                    echo "<script>alert('Gagal update paket');location.href='ubahpaket.php?id_paket=".$id_paket."';</script>";

                }

            }

        }


    ?>
}

?>