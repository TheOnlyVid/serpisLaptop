<?php

session_start();
if ($_SESSION['status'] != "status") {
    header("location:../login/login.php");
}

// koneksi database
include '../../conn.php';

// menginput data ke database
$name = $_POST['nama'];
$telp = $_POST['telp'];


$set = mysqli_query($mysqli, "INSERT INTO teknisi VALUES('', '$name', '$telp')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
