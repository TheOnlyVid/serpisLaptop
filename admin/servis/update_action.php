<?php
include '../../conn.php';

session_start();
if ($_SESSION['status'] != "status") {
    header("location:../login/login.php");
}


$id = $_POST['id'];
$status = $_POST['status'];



//query update
mysqli_query($mysqli, "update detail_service set status='$status' WHERE id='$id' ");

header("location:index.php");
