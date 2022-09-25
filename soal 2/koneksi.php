<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "db_karyawan";

$connect = mysqli_connect($server, $username, $password, $db);
// script untuk cek koneksi   
if (!$connect) {
    die("Koneksi Tidak Berhasil" . mysqli_connect_error());
}