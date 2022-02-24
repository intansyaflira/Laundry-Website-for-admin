<?php 

    session_start();
    
    if($_POST){
        include "koneksi.php";
        $username=$_POST['username'];
        $password=$_POST['password'];

        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        }else{
            

            $query =  "select * from user where username = '" . $username . "' and password = '" . md5($password) . "'";
            $sql_user=mysqli_query($conn, $query);
            if(mysqli_num_rows($sql_user)>0){
                $dt_login=mysqli_fetch_assoc($sql_user);
                   
                $_SESSION['username']=$dt_login['username'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['role'] = $dt_login['role'];
                if($dt_login['role']=="admin"){
                    echo "<script>alert('Success login to your admin account');location.href='index.php';</script>";
                }elseif($dt_login['role']=="kasir"){
                    echo "<script>alert('Success login to your cashier account');location.href='halaman_kasir.php';</script>";
                }else{
                    echo "<script>alert('Success login to your admin account');location.href='login.php';</script>";
                }
                

            }else{
                echo "<script>alert('Username dan Password tidak benar');location.href='login.php';</script>";
                 //printf(mysqli_error($conn));
            }
        }
    }
    
?>