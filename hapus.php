<?php
include "koneksi.php";
$nomor = $_GET['nomormotor'];

mysqli_query($conn,"DELETE FROM daftarmotor WHERE nomormotor = '$nomor'");
header("location:motor.php?pesan=input");
?>