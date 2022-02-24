<?php 
    include 'koneksi.php';

    $member = $_POST['id_member'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    // $tgl_bayar = $_POST['tgl_bayar'];
    // $status = $_POST['status'];
    // $dibayar = $_POST['dibayar'];
    $user = $_POST['id_user'];
    $qty = $_POST["qty"];
    $type = $_POST["id_paket"];

    //query
    $query = "INSERT INTO `transaksi`
    VALUES (NULL, '$member', '$tgl', '$batas_waktu', NULL, 'Baru', 'Belum_dibayar', '$user')";
    $add = mysqli_query($conn, $query);

    //cek
    if($add){
        $tr_id = mysqli_insert_id($conn);
        $queryDetail = "INSERT INTO `detail_transaksi`
        VALUES (NULL, '$tr_id', '$type', '$qty')";

        $tr_detail_add = mysqli_query($conn, $queryDetail);

        if($tr_detail_add){
            echo"
            <script>
                alert('Succes add data');
                document.location.href = 'tampiltransaksi.php';
            </script>
            ";
            // printf(mysqli_error($conn));
        } else{
            // echo"
            // <script>
            //     alert('Failed add data');
            //     document.location.href = 'tampiltransaksi.php';
            // </script>
            // ";
            printf(mysqli_error($conn));
        }
    }else{
        // echo "
        // <script>
        //     alert('Failed to add data');
        //     document.location.href = 'tambahtransaksi.php';
        // </script>
        // ";
        printf(mysqli_error($conn));
    }


// $result = mysqli_query($conn, $sql);
// if($result){
//     echo "<script>alert('Success add transaction');location.href='tambahtransaksi.php';</script>";
// }else{
//     // echo "<script>alert('Failed add transaction');location.href='tambahtransaksi.php';</script>";
//     printf(mysqli_error($conn));
// }
// ?>