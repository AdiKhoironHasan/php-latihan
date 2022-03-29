<?php
include 'koneksi.php';

$dataUser = mysqli_query($conn, "SELECT * FROM users");

if(isset($_POST['tambah'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $result = mysqli_query($conn, "INSERT INTO users (nama,username,password) VALUES('$nama','$username','$password')");

    if($result){
        echo "<script>alert('Berhasil Tambah Data User !')</script>";
        header("refresh: 0; url=data_user.php");
    }else{
        echo "<script>alert('Gagal Tambah Data User !')</script>";
        header("refresh: 0; url=data_user.php");
    }
}