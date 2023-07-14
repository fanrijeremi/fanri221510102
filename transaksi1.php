<?php
include "koneksi.php";
$nomormotor = $_GET['nomormotor'];
$hasil = mysqli_query($conn, "select * from daftarmotor where nomormotor ='$nomormotor'");
$tampil = mysqli_fetch_array($hasil);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="black" size="4px" face="Gabriola">
    <center>
        <h1>'<h1>
            <font color="purple" size="6px" face="Gabriola">
                <center>
                <body style="background-image:url(pxfuel.jpg); background-size:cover; background-attachment">
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">View</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="transaksi.php">Transaksi</a>
      <a class="nav-item nav-link" href="motor.php">Motor</a>
      <a class="nav-item nav-link" href="site.php">My Site</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<br>
<form action="" method="post">
<div class="form-group row">
    <label  class="col-sm-2 col-form-label">ID TRANSAKSI</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="id_transaksi" placeholder = "MASUKAN ID TRANSAKSI...">
    </div>
  </div>  
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">NIK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nomor_motor" value="<?php echo $tampil['nomormotor']?>">
    </div>
  </div>
  <div class="form-group row">
    <label  class="col-sm-2 col-form-label">NAMA PENDUDUK</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama_motor" value="<?php echo $tampil['namamotor']?>">
    </div>
  </div>
  <div class="form-group row">
      <label  class="col-sm-2 col-form-label"></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="harga_motor" value="<?php echo $tampil['hargamotor']?>">
    </div>
  </div>
  
<div class="form-group row">
      <label  class="col-sm-2 col-form-label">BAYAR MOTOR</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="bayar_motor" placeholder = "MASUKAN BIAYA...">
    </div>
</div>
  <div class="form-group row">
    <div class="col-sm-10 offset-2">
      <button type="submit" class="btn btn-primary" name="submit">BAYAR</button>
      <a href="datasiswa.php" type="button" class="btn btn-danger">BACK</a>
    </div>
  </div>
</form>

</body>
</html>
<?php 
if(isset($_POST['submit'])){
    include "koneksi.php";
    $id_transaksi = $_POST['id_transaksi'];
    $nomor_motor = $_POST['nomor_motor'];
    $nama_motor = $_POST['nama_motor'];
    $harga_motor = $_POST['harga_motor'];
    $bayar_motor = $_POST['bayar_motor'];
    
   
    $insert = mysqli_query($conn, "INSERT into transaksi set id_transaksi ='$id_transaksi' ,nomor_motor ='$nomor_motor', nama_motor='$nama_motor',harga_motor='$harga_motor',bayar_motor='$bayar_motor'");
    header("location:transaksi.php?pesan=input");


}
?>