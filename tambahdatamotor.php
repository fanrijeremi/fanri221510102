<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FANRI JEREMI SIANIPAR</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="black" size="5px" face="Agency FB">
    <center>
        <h1>'<h1>
          <b><font color="black" size="6px" face="Agency FB"></b>
                <center>
                <body style="background-image:url(penduduk.jpeg); background-size:cover; background-attachment">
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Halaman Utama</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="transaksi.php">Objek Wisata</a>
      <a class="nav-item nav-link" href="motor.php">Informasi Penduduk</a>
      <a class="nav-item nav-link" href="site.php">Penghasilan Utama</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<br>
<form action="" method="post">
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nomormotor" placeholder="KETIK NIK...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">NAMA PENDUDUK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namamotor" placeholder="KETIK NAMA PENDUDUK...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">ALAMAT</label> 
    <div class="col-sm-10">
      <input type="text" class="form-control" name="warnamotor" placeholder="KETIK ALAMAT...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jenismotor" placeholder="KETIK TANGGAL LAHIR...">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">GOL DARAH</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="hargamotor" placeholder="KETIK GOL DARAH...">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-2">
      <button type="submit" class="btn btn-primary" name="submit">TAMBAH DATA PENDUDUK</button>
    </div>
  </div>
</form>

</body>
</html>
<?php 
if(isset($_POST['submit'])){
    include "koneksi.php";
    $nomor = $_POST["nomormotor"];
    $nama = $_POST["namamotor"];
    $warna = $_POST['warnamotor'];
    $jenis = $_POST['jenismotor'];
    $harga = $_POST['hargamotor'];

    $insert = mysqli_query($conn, "insert into daftarmotor set nomormotor='$nomor', namamotor='$nama', warnamotor='$warna',jenismotor='$jenis',hargamotor='$harga'");
    header("location:motor.php?pesan=input");

}
?>