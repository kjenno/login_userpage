<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "database2";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("connection failed".$conn->connect_error);
    }
    echo"";
?>