<?php
$server = "localhost";
$user = "username_database";
$pass = "password_database";
$database = "nama_database";
$conn = mysqli_connect($server, $user, $database);
if (!$coon) {
    die("koneksi ke database gagal: " . mysqli_connect_error());
}
?>