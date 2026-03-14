<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_ma_darul_fithrah";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
