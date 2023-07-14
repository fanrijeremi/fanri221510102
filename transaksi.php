<?php
include_once("koneksi.php");
$result=mysqli_query($conn,"SELECT * FROM transaksi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<font color="black" size="4px" face="cooper black">
    <center>
        <h1>'<h1>
            <font color="black" size="6px" face="Agency FB">
                <center>
                <body style="background-image:url(putih.jpg); background-size:cover; background-attachment">
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
      <a class="nav-item nav-link" href="motor.php">Informasi Penduduk</a>
      <a class="nav-item nav-link" href="site.php">Penghasilan Utama</a>
      <a class="nav-item nav-link" href="logout.php">Logout</a>
    </div>
  </div>
</nav>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="salibkasihhhh.jpg" alt="BATAM PRIDE" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h1><p>1.SALIB KASIH</p><h1>
      <h2><p>Salib Kasih dibangun pada Oktober 1933 dengan tujuan untuk mengenang jasa missionaris Kristen yang berasal dari Jerman, yakni DR.Ingwer Ludwig Nommensen (DR.IL Nommensen). Di tempat itu pula, tepatnya tahun 1863, pertama kalinya, DR.IL Nommensen berdoa untuk memulai misinya. Momen bersejarah itu ditandai dengan adanya batu besar persis di belakang mimbar yang ada di sekitaran salib.</p>


</h2>

      <div class="item">
        <img src="kolamrenang.jpg" alt="Chicago" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h1><p>2.KOLAM RENANG SIPOHOLON<h1></p>
      <h2>Objek wisata alam yang terbentuk akibat letusan Gunung Martimbang ini mengandung belerang. Banyak pengunjung yang percaya jika kandungan tersebut dapat dimanfaatkan untuk menyembuhkan berbagai penyakit. Selain untuk berobat, pemandian ini juga sering menjadi spot foto bagi anak muda. Mereka sengaja datang jauh-jauh demi mendapatkan foto terbaik di tempat tercantik Tapanuli Utara. Nah, untuk berendam di pemandian ini, kamu hanya butuh uang sejumlah Rp5.000,- per orang.<h2>
</h2>
    
      <div class="item">
        <img src="airsoda.jpg" alt="New York" style="width:50%;">
        <div class="carousel-caption">
        </div>
      </div>
      <h1><p>3.AIR SODA<h1><p>
      <h2>
      Air dari pemandian ini mengeluarkan gelembung gelembung kecil seperti soda, tubuh kita akan serasa berbusa jika kita sedang berendam dalam kolam air soda tersebut namun unik nya air tersebut tidak lengket di kulit. Dan jika ingin berendam untuk waktu yang cukup lama sebaiknya menggunakan kaca mata renang karena akan sedikit perih jika terkena mata. Pemandian Air Soda ini cukup dalam sekitar 1,7 meter, tapi jangan khawatir bagi anda yang tidak bisa berenang karena telah disediakan pelampung, dan anda bisa untuk menyewa nya. Serta yang tidak kalah menarik, biaya masuk untuk ke pemandian ini GRATIS, pengunjung hanya diwajibkan untuk membeli minuman atau makanan di warung sang pemilik.
</h2>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <tbody>
  <?php
    while($nonim=mysqli_fetch_array($result)){
    ?>
    <tr>
      <td><?php echo $nonim['id_transaksi'] ?></td>  
      <td><?php echo $nonim['nomor_motor'] ?></td>
      <td><?php echo $nonim['nama_motor'] ?></td>
      <td><?php echo $nonim['harga_motor'] ?></td>
      <td><?php echo $nonim['bayar_motor'] ?></td>
      <td>
            <a href="hapustransaksi.php?id_transaksi=<?php echo $nonim['id_transaksi']; ?>" class="btn btn-danger" >HAPUS</a>
      </td>
    </tr>
        
    <?php
    }
    ?>
    
  </tbody>
</table>
</body>
</html>