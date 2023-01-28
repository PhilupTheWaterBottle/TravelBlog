<?php
    $mysqli = new mysqli('localhost', 'ps23', 'overcooked7198_dairymaid', 'ps23');

    if(mysqli_connect_errno())
    {
        echo 'connection failed:'.mysqli_connect_error();
        exit();
    }

    else{}
?>