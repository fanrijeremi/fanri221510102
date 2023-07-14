<?php
include "koneksi.php";
$nomor = $_GET['nomormotor'];
$hasil = mysqli_query($conn, "select * from daftarmotor where nomormotor='$nomor'");
$tampil = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diana Gabriela</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">View</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="transaksi.php">Objek Wisata</a>
      <a class="nav-item nav-link" href="motor.php">informasi Penduduk</a>
      <a class="nav-item nav-link" href="site.php">Penghasilan Utama</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<br>
<form action="" method="post">
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">Nik</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nomormotor" value="<?php echo $tampil['nomormotor']?>">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">NAMA PENDUDUK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="namamotor" value="<?php echo $tampil['namamotor']?>">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">ALAMAT</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="warnamotor" value="<?php echo $tampil['warnamotor']?>">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">TANGGAL LAHIR</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="jenismotor" value="<?php echo $tampil['jenismotor']?>">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">GOL DARAH </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="hargamotor" value="<?php echo $tampil['hargamotor']?>">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10 offset-2">
      <button type="submit" class="btn btn-primary" name="submit">EDIT DATA</button>
      <a href="motor.php" type="button" class="btn btn-danger">BACK</a>
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

    $insert = mysqli_query($conn, "update daftarmotor set namamotor='$nama', warnamotor='$warna',jenismotor='$jenis',hargamotor='$harga' where nomormotor = '$nomor'");
    header("location:motor.php?pesan=input");

}
?>