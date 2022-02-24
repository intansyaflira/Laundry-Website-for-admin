<?php

$conn=mysqli_connect('localhost','root','','ukl_laundry');

/* check connection */

if (mysqli_connect_errno()) {

    printf("Connect failed: %s\n", mysqli_connect_error());

    exit();

}

?>