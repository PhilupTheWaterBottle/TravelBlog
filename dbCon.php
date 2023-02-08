<?php
    $mysqli = new mysqli('mysql.csh.rit.edu', 'ps23', 'overcooked7198_dairymaid', 'ps23');

    if(mysqli_connect_errno())
    {
        echo 'connection failed:'.mysqli_connect_error();
        exit();
    }

    else{}
?>