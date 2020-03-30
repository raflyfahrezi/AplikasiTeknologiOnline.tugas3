<?php
    date_default_timezone_set("Asia/Bangkok");

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "fahsy";

    $mysqli = new mysqli($host, $user, $pass, $db);
    if ($mysqli->connect_errno) {
        echo "Koneksi Gagal !". $mysqli->connect_errno;
    }
?>
