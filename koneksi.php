<?php
    $db_host = "localhost";
    $db_port = 3306;
    $db_user = "root";
    $db_pass = "";
    $db_name = "nwind";

    $koneksi = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);

    // if ($koneksi) {
    //     echo "koneksi berhasil";
    // }else{
    //     echo "koneksi gagal";
    // }
?>