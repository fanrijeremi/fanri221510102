<?php
include "koneksi.php";
$id = $_GET['id_transaksi'];

mysqli_query($conn,"DELETE FROM transaksi WHERE id_transaksi = '$id'");
header("location:transaksi.php?pesan=input");
?>