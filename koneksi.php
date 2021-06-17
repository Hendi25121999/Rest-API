<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "Biodata";

    $conn = mysqli_connect($server, $username, $password, $database);
    if (!$conn) {
        die("koneksi gagal!!!");
    } 

?>