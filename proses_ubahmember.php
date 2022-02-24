<?php

    if($_POST){
        $id_member=$_POST['id_member'];

        $nama=$_POST['nama'];

        $alamat=$_POST['alamat'];

        $jk=$_POST['jk'];

        $tlp=$_POST['tlp'];


        if(empty($nama)){

            echo "<script>alert('nama member tidak boleh kosong');location.href='tambah_member.php';</script>";


        } elseif(empty($alamat)){

            echo "<script>alert('alamat tidak boleh kosong');location.href='tambah_member.php';</script>";

        } elseif(empty($jk)){

            echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_member.php';</script>";

        } elseif(empty($tlp)){
            
            echo "<script>alert('No telepon tidak boleh kosong');location.href='tambah_member.php';</script>";

        } else {

            include "koneksi.php";

                $update=mysqli_query($conn,"update member set nama='".$nama."', alamat='".$alamat."', jenis_kelamin='".$jk."' ,tlp='".$tlp."' WHERE id_member='".$id_member."'") or die(mysqli_error($conn));

                if($update){

                    echo "<script>alert('Sukses update member');location.href='tampilmember.php';</script>";

                } else {

                    echo "<script>alert('Gagal update member');location.href='ubahmember.php?id_member=".$id_member."';</script>";

                }

            }

        }


    ?>
}

?>