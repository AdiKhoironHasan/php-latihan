<?php
// ini untuk konfigurasi database

$servername = "localhost";
$database = "latihan";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

//mengecek koneksi
if (!$conn) {
    // die untuk mematikan code
    die("koneksi gagal: " . mysqli_connect_error());
}
// echo "Koneksi berhasil";

// menutup koneksi ke database dengan cara manual
$dataUser = mysqli_query($conn, "SELECT * FROM users");

// mysqli_close($conn);