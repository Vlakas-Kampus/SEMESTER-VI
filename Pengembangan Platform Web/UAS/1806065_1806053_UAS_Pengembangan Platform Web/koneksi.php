<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "sflix";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Koneksi Database Gagal" . mysqli_connect_error();
}
