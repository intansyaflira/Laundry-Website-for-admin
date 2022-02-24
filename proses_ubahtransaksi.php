<?php 
    include 'koneksi.php';

    $id_transaksi = $_POST['id_transaksi'];
    
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $batas_waktu = $_POST['batas_waktu'];
    $tgl_bayar = $_POST['tgl_bayar'];
    $status = $_POST['status'];
    $dibayar = $_POST['dibayar'];
    $user = $_POST['user'];

    $sql = "
        update transaksi set id_member = '" . $nama . "', tgl = '" . $tgl . "', batas_waktu = '" . $batas_waktu . "'
        , tgl_bayar = '" . $tgl_bayar . "', status = '" . $status . "', dibayar = '" . $dibayar . "', id_user = '" . $user . "'
        where id_transaksi = '" . $id_transaksi . "';
    ";

$result = mysqli_query($conn, $sql);
if($result){
    echo "<script>alert('Success edit transaction');location.href='tampiltransaksi.php';</script>";
    // printf(mysqli_error($conn));
}else{
    echo "<script>alert('Failed add transaction');location.href='tampiltransaksi.php';</script>";
    // printf(mysqli_error($conn));
}
?>